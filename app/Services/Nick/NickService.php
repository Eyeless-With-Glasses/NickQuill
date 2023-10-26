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
        if ($gptOrGen == 'gpt') {
            $nickname = GptNickname::query()->where([
                ['lang', '=', $lang],
                ['sex', '=', $sex],
            ])->inRandomOrder()->first();
            return $nickname->value;
        }

        $languageSelection = $this->generateService->languageSelection($lang, $sex);
        return $languageSelection;
    }

    public function copy(string $nickname)
    {
        return CopiedNickname::create([
            'value' => $nickname
        ]);
    }
}
