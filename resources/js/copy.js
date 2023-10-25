var clipboard = new ClipboardJS('[data-clipboard-target]');

// Подписываемся на событие успеха копирования
clipboard.on('success', function (e) {
    console.log("Текст скопирован в буфер обмена");
});

// Подписываемся на событие ошибки копирования
clipboard.on('error', function (e) {
    console.error("Не удалось скопировать текст: ", e.trigger);
});


// Находим ссылку по ID
const myLink = document.getElementById('copyButton');

// Добавляем обработчик события click



