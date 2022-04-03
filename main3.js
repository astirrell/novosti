
let popupBg1 = document.querySelector('.popup__bg1'); // Фон попап окна
let popup1 = document.querySelector('.popup1'); // Само окно
let openPopupButtons1 = document.querySelectorAll('.open-popup1'); // Кнопки для показа окна
let closePopupButton1 = document.querySelector('.close-popup1'); // Кнопка для скрытия окна




openPopupButtons1.forEach((button) => { // Перебираем все кнопки
    button.addEventListener('click', (e) => { // Для каждой вешаем обработчик событий на клик
        e.preventDefault(); // Предотвращаем дефолтное поведение браузера
        popupBg1.classList.add('active'); // Добавляем класс 'active' для фона
        popup1.classList.add('active'); // И для самого окна
    })
});



closePopupButton1.addEventListener('click',() => { // Вешаем обработчик на крестик
    popupBg1.classList.remove('active'); // Убираем активный класс с фона
    popup1.classList.remove('active'); // И с окна
});



document.addEventListener('click', (e) => { // Вешаем обработчик на весь документ
    if(e.target === popupBg1) { // Если цель клика - фот, то:
        popupBg1.classList.remove('active'); // Убираем активный класс с фона
        popup1.classList.remove('active'); // И с окна
    }
});




let popupBg2 = document.querySelector('.popup__bg2'); // Фон попап окна
let popup2 = document.querySelector('.popup2'); // Само окно
let openPopupButtons2 = document.querySelectorAll('.open-popup2'); // Кнопки для показа окна
let closePopupButton2 = document.querySelector('.close-popup2'); // Кнопка для скрытия окна




openPopupButtons2.forEach((button) => { // Перебираем все кнопки
    button.addEventListener('click', (e) => { // Для каждой вешаем обработчик событий на клик
        e.preventDefault(); // Предотвращаем дефолтное поведение браузера
        popupBg2.classList.add('active'); // Добавляем класс 'active' для фона
        popup2.classList.add('active'); // И для самого окна
    })
});



closePopupButton2.addEventListener('click',() => { // Вешаем обработчик на крестик
    popupBg2.classList.remove('active'); // Убираем активный класс с фона
    popup2.classList.remove('active'); // И с окна
});



document.addEventListener('click', (e) => { // Вешаем обработчик на весь документ
    if(e.target === popupBg2) { // Если цель клика - фот, то:
        popupBg2.classList.remove('active'); // Убираем активный класс с фона
        popup2.classList.remove('active'); // И с окна
    }
});




let popupBg3 = document.querySelector('.popup__bg3'); // Фон попап окна
let popup3 = document.querySelector('.popup3'); // Само окно
let openPopupButtons3 = document.querySelectorAll('.open-popup3'); // Кнопки для показа окна
let closePopupButton3 = document.querySelector('.close-popup3'); // Кнопка для скрытия окна




openPopupButtons3.forEach((button) => { // Перебираем все кнопки
    button.addEventListener('click', (e) => { // Для каждой вешаем обработчик событий на клик
        e.preventDefault(); // Предотвращаем дефолтное поведение браузера
        popupBg3.classList.add('active'); // Добавляем класс 'active' для фона
        popup3.classList.add('active'); // И для самого окна
    })
});



closePopupButton3.addEventListener('click',() => { // Вешаем обработчик на крестик
    popupBg3.classList.remove('active'); // Убираем активный класс с фона
    popup3.classList.remove('active'); // И с окна
});



document.addEventListener('click', (e) => { // Вешаем обработчик на весь документ
    if(e.target === popupBg3) { // Если цель клика - фот, то:
        popupBg3.classList.remove('active'); // Убираем активный класс с фона
        popup3.classList.remove('active'); // И с окна
    }
});










let popupBg4 = document.querySelector('.popup__bg4'); // Фон попап окна
let popup4 = document.querySelector('.popup4'); // Само окно
let openPopupButtons4 = document.querySelectorAll('.open-popup4'); // Кнопки для показа окна
let closePopupButton4 = document.querySelector('.close-popup4'); // Кнопка для скрытия окна




openPopupButtons4.forEach((button) => { // Перебираем все кнопки
    button.addEventListener('click', (e) => { // Для каждой вешаем обработчик событий на клик
        e.preventDefault(); // Предотвращаем дефолтное поведение браузера
        popupBg4.classList.add('active'); // Добавляем класс 'active' для фона
        popup4.classList.add('active'); // И для самого окна
    })
});



closePopupButton4.addEventListener('click',() => { // Вешаем обработчик на крестик
    popupBg4.classList.remove('active'); // Убираем активный класс с фона
    popup4.classList.remove('active'); // И с окна
});



document.addEventListener('click', (e) => { // Вешаем обработчик на весь документ
    if(e.target === popupBg4) { // Если цель клика - фот, то:
        popupBg4.classList.remove('active'); // Убираем активный класс с фона
        popup4.classList.remove('active'); // И с окна
    }
});