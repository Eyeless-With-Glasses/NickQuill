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
        $lang = $request->input('lang') ? 'ru' : 'en';
        $sex = $request->input('sex') ? 'male' : 'female';
        $gptOrGen = $request->input('gpt_or_gen') ? 'gpt' : 'gen';
        $nickname = $service->store($lang, $sex, $gptOrGen);
        return view('index', compact('nickname', 'sex', 'lang', 'gptOrGen'));
    }
    public function copy(string $nickname, NickService $service): \Illuminate\Http\RedirectResponse
    {
        $copy = $service->copy($nickname);
        return redirect()->route('nick.index');
    }
}
