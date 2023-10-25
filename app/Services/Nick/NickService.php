<?php

namespace App\Services\Nick;

use App\Models\GptNickname;
use App\Models\CopiedNickname;
use App\Services\Nick\GenerateService;

class NickService
{

    private $generateService;

    public function __construct(GenerateService $generateService)
    {
        $this->generateService = $generateService;
    }


    public function store(string $lang, string $sex, string $gptOrGen)
    {

        if ($gptOrGen == 'gpt' && $lang == 'ru' && $sex == 'female') {
            $nickname = GptNickname::query()->where([
                ['lang', '=', 'ru'],
                ['sex', '=', 'female'],
            ])->inRandomOrder()->first();
            return $nickname->value;
        }
        if ($gptOrGen == 'gpt' && $lang == 'ru' && $sex == 'male') {
            $nickname = GptNickname::query()->where([
                ['lang', '=', 'ru'],
                ['sex', '=', 'male'],
            ])->inRandomOrder()->first();
            return $nickname->value;
        }


        if ($gptOrGen == 'gpt' && $lang == 'en' && $sex == 'female') {
            $nickname = GptNickname::query()->where([
                ['lang', '=', 'en'],
                ['sex', '=', 'female'],
            ])->inRandomOrder()->first();
            return $nickname->value;
        }
        if ($gptOrGen == 'gpt' && $lang == 'en' && $sex == 'male') {
            $nickname = GptNickname::query()->where([
                ['lang', '=', 'en'],
                ['sex', '=', 'male'],
            ])->inRandomOrder()->first();
            return $nickname->value;
        }


        $run = $this->generateService->run($lang, $sex);
        return $run;

    }
}
