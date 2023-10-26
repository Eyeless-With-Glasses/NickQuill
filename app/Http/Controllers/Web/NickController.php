<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Nick\NickRequest;
use App\Models\CopiedNickname;
use App\Services\Nick\NickService;

class NickController extends Controller
{


    public function index(NickRequest $request, NickService $service)
    {
        $lang = $request['lang'] ? 'ru' : 'en';
        $sex = $request['sex'] ? 'male' : 'female';
        $gptOrGen = $request['gpt_or_gen'] ? 'gpt' : 'gen';
        $nickname = $service->store($lang, $sex, $gptOrGen);
        return view('index', compact('nickname', 'sex', 'lang', 'gptOrGen'));
    }
    public function copy(string $nickname): \Illuminate\Http\RedirectResponse
    {

        CopiedNickname::create([
            'value' => $nickname
        ]);
        return redirect()->route('nick.index');
    }

}
