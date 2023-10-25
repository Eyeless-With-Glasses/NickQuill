<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    @vite('resources/js/copy.js')
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="generate_nick_online">
        Сгенерировать ник онлайн
    </div>
    <form method="get" action="">
        <div class="buttons">
            <div class="your_nick">
                <div class="your_nick__ready" id="copyText">{{$nickname}}
                    <a href="" class="icon">
                        <svg class="svg" width="10" height="10" viewBox="0 0 10 10" fill="none"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="10" height="10" fill="url(#pattern0)"/>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_3_2" transform="scale(0.0104167)"/>
                                </pattern>
                                <image id="image0_3_2" width="96" height="96"
                                       xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAAACXBIWXMAAAsTAAALEwEAmpwYAAABrklEQVR4nO3cQUoDURBF0T/SxRiXalCJuhl1E+pCNBl2eNLQg4yMYMt7VN0zV3/1Da3wscYAAAAAgDMkXUu6k/Qu6aDiRgpJl5IeJR3VyAh6+K9qaCSQ9KSmRsg7v9Vr51RCgPkXblvDTdKHGhtukvZqbLjFH7A6ApgRwIwAZgQwI4AZAcwIUCxAwfuEwzLLraRNbIAm9wlHSQ+SLqICNLxPeFktwrmf9Mvv0fE+YRcRoPF9wiTpKiFA5/uEbUKAzvcJbwkBOt8nfCUE+NPXp/v3+QjwMwKYEcCMAGYEMCOAGQHMCGBGADMCmBHAjABmBDAjgBkBzAhgRgAzApgRwIwAZgQwI4AZAcwIYEYAMwKYEcCMAGYEMCOAGQHMCGBGADMCmBHAjABmBDAjgBkBzOL/DTf+gNXniz9g9fniD1h9vvgDVp8v/oDV54s/YPX54g9Yfb74A1afr/nCpk/382dlmduyUbarm4QAm2WFYzfTKmsr17Cs8+3mfqSY1/gu63y7eF51f/SKEXbFX0fT/MmPe/in5vfivFF2XmqqGn+i7pdZtjHvfAAAAAAj2TdVwxoZuUKhkQAAAABJRU5ErkJggg=="/>
                            </defs>
                        </svg>
                    </a>
                </div>
                <a href="{{route('nick.copy', $nickname)}}" class="copy" id="copyButton"
                   data-clipboard-target="#copyText">Скопировать</a>
            </div>
            <input type="submit" value="Сгенерировать ник" class="generate_nick">
        </div>

        <div class="check_box">
            <label class="checkbox-ios">
                <span class="gender-label">Женский</span>
                <input type="checkbox" name="sex"
                       value="male" <?php if (isset($_GET['sex']) && $_GET['sex'] == 'male') echo 'checked'; ?>>
                <span class="checkbox-ios-switch"></span>
                <span class="gender-label">Мужской</span>
                <input type="checkbox" name="sex"
                       value="female" <?php if (isset($_GET['sex']) && $_GET['sex'] == 'female') echo 'checked'; ?>>
            </label>

            <label class="checkbox-ios">
                <span class="gender-label">Английский</span>
                <input type="checkbox" name="lang"
                       value="ru" <?php if (isset($_GET['lang']) && $_GET['lang'] == 'ru') echo 'checked'; ?>>
                <span class="checkbox-ios-switch"></span>
                <span class="gender-label">Русский</span>
                <input type="checkbox" name="lang"
                       value="en" <?php if (isset($_GET['lang']) && $_GET['lang'] == 'en') echo 'checked'; ?>>
            </label>

            <label class="checkbox-ios">
                <span class="gender-label">Gen</span>
                <input type="checkbox" name="gpt_or_gen"
                       value="gen" <?php if (isset($_GET['gpt_or_gen']) && $_GET['gpt_or_gen'] == 'gen') echo 'checked'; ?>>
                <span class="checkbox-ios-switch"></span>
                <span class="gender-label">Gpt</span>
                <input type="checkbox" name="gpt_or_gen"
                       value="gpt" <?php if (isset($_GET['gpt_or_gen']) && $_GET['gpt_or_gen'] == 'gpt') echo 'checked'; ?>>
            </label>
        </div>
    </form>
</div>
</body>
</html>
