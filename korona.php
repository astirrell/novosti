<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="korona.css" type="text/css">
    <link rel="stylesheet" href="burger.css" type="text/css">
    <title>Document</title>
</head>
<body>
        <header>
            <div class="block9">
            <div class="menu">
                <div class="logo"><a href="index.php" class="link">Novosti</a></div>
                <ul class="knopki">
                    
                    <li><?php
        session_start();
        if(!isset($_SESSION['Login'])) {?>
        <a href="login.php" class="link">Личный кабинет</a>
            <?php } else {?>
                <li><a href="korona.php" class="link">Коронавирус</a></li>
                    <li><a href="politika.php" class="link">Политика</a></li>
                    <li><a href="health.php" class="link">Здоровье</a></li>
                <a href="profile.php" class="link">Личный кабинет</a>   
                <a href="exit.php" class="link">Выход</a>
            <?php }
        session_write_close();
    ?></li>
                </ul>
            </div>
        </div>
    
    
        <div class="block8">
                
            <nav class="mobile-menu">
              <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
              <label for="checkbox" class="mobile-menu__btn"><div class="mobile-menu__icon"></div></label>
              <div class="mobile-menu__container">
              <ul class="mobile-menu__list">
                  <li class="mobile-menu__item"><a href="index.php" class="mobile-menu__link">Novosti</a></li>
                  
                  <li class="mobile-menu__item">
                  <?php
        
        if(!isset($_SESSION['Login'])) {?>
        <a href= "login.php" class="mobile-menu__link">Личный кабинет</a>
            <?php } else {?>
                <li class="mobile-menu__item"><a href="korona.php" class="mobile-menu__link">Коронавирус</a></li>
                  <li class="mobile-menu__item"><a href="politika.php" class="mobile-menu__link">Политика</a></li>
                  <li class="mobile-menu__item"><a href="health.php" class="mobile-menu__link">Здоровье</a></li>
                <a href="profile.php">Личный кабинет</a>   
                <a href="exit.php">Выход</a>
            <?php }
        session_write_close();
    ?></li>
              </ul>
              </div>
          </nav>
      </div>
        </header>

<main class="main">
<div class="koronavirus">
<a href="" class="open-popup1"><div class="koron1">
    <img src="img/korona1.jpg">
    <h2><span>Омские врачи спасли пенсионера с 
        тяжелой формой ковида после двух инфарктов</span></h2>
</div></a>


<a href="" class="open-popup2"><div class="koron2">
    <img src="img/korona2.jpg">
    <h2><span>Можно выйти: Роспотребнадзор снял самые 
        строгие ковидные запреты в школах</span></h2>
</div></a>


<a href="" class="open-popup3"><div class="koron3">
    <img src="img/korona3.JPG">
    <h2><span>В Министерстве образования назвали причину 
        переноса ВПР на осень</span></h2>
</div></a>


<a href="" class="open-popup4"><div class="koron4">
    <img src="img/korona4.JPG">
    <h2><span>В Министерстве образования назвали причину 
        переноса ВПР на осень</span></h2>
</div></a>


</div>
</main>

<div class="popup__bg1"> 
    <form class="popup1">
        <img src="img/close.png" class="close-popup1">
        <label>
            <img src="img/korona1.jpg" class="korona1img" align="left" width="400px" height="400px">
            Заседание оперштаба по борьбе с коронавирусом в Омской области перенесли на 28 марта. Хотя еще два дня назад облправительство неожиданно объявило, что оно должно состояться сегодня, 17 марта. Причины изменений в расписании не уточняются.

            Отметим, что на повестке дня сегодня были вопросы текущей эпидемиологической ситуации и ограничительных мер. Вероятно, власти планировали обсудить отмену масочного режима в регионе вслед за Москвой, Чечней, Крымом и другими субъектами РФ. Актуальный перечень регионов, где маски больше не нужны, можно найти на обновляемой карте.
        </label>
        <label>
            
        </label>
        
    </form>
</div> 



<div class="popup__bg2"> 
    <form class="popup2">
        <img src="img/close.png" class="close-popup2">
        <label>
            <img src="img/korona2.jpg" class="korona2img" align="left" width="400px" height="400px">
            Роспотребнадзор снял часть коронавирусных ограничений в учебных заведениях и других учреждениях для детей и молодежи. В ведомстве объясняют это снижением заболеваемости COVID-19 в стране.

Теперь каждый школьный класс не будет закреплен за конкретным кабинетом, школы, садики и секции могут посещать и те, кто в них не занимается, на итоговых аттестациях отменяется социальная дистанция в 1,5 метра. Также больше не нужна справка о здоровье, если учащийся контактировал с больным COVID-19, и отменено требование начинать уроки и перемены для разных классов в разное время.
        </label>
        <label>
            
        </label>
        
    </form>
</div> 






<div class="popup__bg3"> 
    <form class="popup3">
        <img src="img/close.png" class="close-popup3">
        <label>
            <img src="img/korona3.jpg" class="korona3img" align="left" width="400px" height="400px">
            Федеральное министерство образования назвало официальную причину переноса всероссийских проверочных работ на осень, то есть на следующий учебный год. В ведомстве сообщили, что решение было принято Рособрнадзором по согласованию с федеральным правительством в связи с желанием снизить риски распространения коронавируса. Также в ведомстве ссылаются на российский Минздрав, который допускает новую волну COVID-19 в марте и апреле 2022 года.

— Всероссийские проверочные работы — мероприятие, в котором принимает участие очень большое число людей: школьников и учителей. Для предотвращения очередного увеличения числа заболевших, особенно среди детей и подростков, нами было принято решение о переносе этой процедуры. Отмечу, что те школы, что уже провели ВПР, не будут писать их повторно. Достаточно будет корректно внести их результаты в соответствующую систему, — пояснил глава Рособрнадзора Анзор Музаев.
        </label>
        <label>
            
        </label>
        
    </form>
</div> 




<div class="popup__bg4"> 
    <form class="popup4">
        <img src="img/close.png" class="close-popup4">
        <label>
            <img src="img/korona4.jpg" class="korona4img" align="left" width="400px" height="400px">
            Директор Научно-исследовательского института природно-очаговых инфекций Николай Рудаков рассказал в эфире «Вести-Омск» о возможной вспышке коронавируса в Омской области.

По словам специалиста, новый всплеск заболеваемости следует ожидать к осени. Сейчас в регионе действует штамм «стел-омикрон», однако могут появится новые формы заболевания. В зоне риска по-прежнему находятся пожилые люди, а с недавних пор – дети.

Напомним, что за прошедшие сутки коронавирусом заболели 172 человека.
        </label>
        <label>
            
        </label>
        
    </form>
</div> 





    <footer class="footer">
        <div class="menu">
            <div class="logo"><a>©Copyright.Все права защищены. Novosti 2022-2022</a></div>
            <ul class="knopki">
                <li><a href="https://vk.com/" class="link_2">Вконтакте</a></li>
                <li><a href="https://www.youtube.com/" class="link_2">Ютуб</a></li>
                
                <li><a href="https://www.reddit.com/" class="link_2">Реддит</a></li>
            </ul>
        </div>
    </footer>




<script  type="text/javascript" src="main1.js"></script>
</body>
</html>