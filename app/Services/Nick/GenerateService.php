<?php

namespace App\Services\Nick;

use App\Models\CopiedNickname;

class GenerateService
{
    private array $letters;
    private array $consonants;
    private array $vowels;
    private array $vowelsWoman;

    public function languageSelection(string $lang, string $sex): string
    {
        if ($lang === 'ru') {
            $this->dictionaryRu();

        }
        if ($lang === 'en') {
            $this->dictionaryEn();
        }

        return $this->generate($lang, $sex);
    }

    public function dictionaryRu(): void
    {
        $this->letters = ['а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р',
            'с', 'т', 'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ы', 'э', 'ю', 'я'];
        $this->consonants = ['б', 'в', 'г', 'д', 'ж', 'з', 'й', 'к', 'л', 'м', 'н', 'п', 'р', 'с', 'т', 'ф', 'х', 'ц', 'ч', 'ш', 'щ'];
        $this->vowels = ['а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я'];
        $this->vowelsWoman = ['а', 'я'];
    }

    public function dictionaryEn(): void
    {
        $this->letters = [
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r',
            's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
        ];
        $this->consonants = ['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'];
        $this->vowels = ['a', 'e', 'i', 'o', 'u'];
    }

    public function generate(string $lang, string $sex): string
    {
        $nickname = '';
        $numberOfLetters = random_int(5, 8);
        $consecutiveConsonants = 0;
        $consecutiveVowels = 0;

        for ($i = 0; $i < $numberOfLetters; $i++) {
            $k = array_rand($this->letters);
            $v = $this->letters[$k];

            if ($i === 0 && in_array($v, ['ы', 'э', 'ё', 'у'])) {
                $v = $this->vowels[array_rand($this->vowels)];
            }

            if (in_array($v, $this->vowels) && $consecutiveVowels >= 2) {
                $v = $this->consonants[array_rand($this->consonants)];
                $consecutiveVowels = 0;
            } else {
                $consecutiveVowels++;
            }

            $nickname .= $v;

            if (in_array($v, $this->consonants)) {
                $consecutiveConsonants++;
                if ($consecutiveConsonants >= 2) {
                    $nickname = mb_substr($nickname, 0, -1) . $this->vowels[array_rand($this->vowels)];
                    $consecutiveConsonants = 0;
                }
            }
        }

        if ($lang === 'ru' && $sex === 'female') {
            $nickname = mb_substr($nickname, 0, -1) . $this->vowelsWoman[array_rand($this->vowelsWoman)];
        }
        if ($lang === 'en' && $sex === 'female') {
            $nickname = mb_substr($nickname, 0, -1) . $this->vowels[array_rand($this->vowels)];
        }
        return $nickname;
    }
}
