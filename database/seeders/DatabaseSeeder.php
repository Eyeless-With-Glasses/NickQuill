<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\GptNickname;
use App\Models\CopiedNickname;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $enMaleNames = ["Zyndor", "Xyvorn", "Quylar", "Wryxon", "Drystan", "Nyxor", "Cylron", "Vexlon", "Jyssor", "Sylron",
            "Mrydor", "Zyphron", "Vylron", "Phyrlo", "Kryllor", "Gyxon", "Trisar", "Zaphron", "Lyvorn", "Bryxon",
            "Hyvorn", "Fylron", "Dyrithan", "Xyndar", "Rylsor", "Tyrrell", "Zyllar", "Nyssor", "Jyrdan", "Vyndor",
            "Zyrron", "Vyxan", "Qyndor", "Wrythor", "Slyxor", "Zylleron", "Xyvorn", "Lyrithan", "Myndor", "Cyndor",
            "Zyrlo", "Hylyor", "Vypor", "Qyndron", "Fyrro", "Zyrello", "Xylyor", "Wyssor", "Gyrix", "Zephyr"];
        foreach ($enMaleNames as $nickname) {
            GptNickname::create([
                'value' => $nickname,
                'lang' => 'en',
                'sex' => 'male',
            ]);
        }
        $enFemaleNames = ["Zylra", "Xyvana", "Quellia", "Wrythia", "Drysta", "Nyvira", "Cyloria", "Vexlyn", "Jyssara", "Sylena",
            "Mryxia", "Zyphara", "Vyllia", "Phyrna", "Kryllia", "Gyxina", "Trisella", "Zaphira", "Lyvoria", "Brythia",
            "Hyvira", "Fylina", "Dyritha", "Xyandra", "Rylsia", "Tyrella", "Zyllara", "Nyssara", "Jyrella", "Vyndra",
            "Zyrra", "Vyxia", "Qyndra", "Wrythria", "Slyxira", "Zylleria", "Xyvanna", "Lyrithia", "Myndra", "Cyndra",
            "Zyrilla", "Hylyna", "Vyphira", "Qyndella", "Fyrellia", "Zyxella", "Xylyra", "Wyssia", "Gyritha", "Zephyra"];
        foreach ($enFemaleNames as $nickname) {
            GptNickname::create([
                'value' => $nickname,
                'lang' => 'en',
                'sex' => 'female',
            ]);
        }

        $ruFemaleNames = ["Зьюяль", "Шуринька", "Фялетта", "Гэрда", "Пэльвира",
            "Цырыльда", "Йэрнесса", "Бэрилда", "Джюльметта", "Щэльса",
            "Хюльга", "Мэльсия", "Тьянна", "Рэльза", "Нюльдия",
            "Чюльсанда", "Вэлариса", "Жюльмара", "Кюльнесса", "Лэльда",
            "Зюльвия", "Шюльгарда", "Гюльсетта", "Пэльмира", "Цюльгана",
            "Йэльзета", "Бюльгера", "Дзюльсия", "Фэльзана", "Мюльсетта",
            "Вэльмария", "Чюльсетта", "Хюльгета", "Яльванда", "Тьяннесса",
            "Нюльсида", "Лэльмира", "Кюльсиета", "Жюльпетта", "Щюльсара",
            "Рюльсетта", "Сэльганда", "Пэльсета", "Чюльсия", "Йэльсетта",
            "Бэльметта", "Джюльпара", "Гюльфира", "Зюльфиета", "Фюльсанда"];
        foreach ($ruFemaleNames as $nickname) {
            GptNickname::create([
                'value' => $nickname,
                'lang' => 'ru',
                'sex' => 'female',
            ]);
        }

        $ruMaleNames = ["Шюгрим", "Дьялко", "Цыпран", "Жэльник", "Пьюлсен",
            "Флэркс", "Чурман", "Вэльдор", "Мюрлак", "Яльбран",
            "Йэрланд", "Крюльсон", "Зырнак", "Гэрнольд", "Щурван",
            "Хэльман", "Сырнор", "Рьюлдан", "Пэрсик", "Цюрков",
            "Лэрмун", "Мялькор", "Бырнок", "Тэрсан", "Журфин",
            "Джырлан", "Шмельк", "Вьюрсен", "Фюрган", "Нэршак",
            "Гюрман", "Йэрпан", "Рюрфал", "Цыржак", "Крюлсан",
            "Шюркан", "Харнак", "Зэрман", "Пюрлан", "Чюрсан",
            "Сэрнак", "Мельран", "Лярнак", "Жюрган", "Фрэлкан",
            "Дзюлькан", "Щэркан", "Лэрмак", "Вырнак", "Цюрфак"];
        foreach ($ruMaleNames as $nickname) {
            GptNickname::create([
                'value' => $nickname,
                'lang' => 'ru',
                'sex' => 'male',
            ]);
        }
    }
}
