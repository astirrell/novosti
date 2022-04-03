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
    <link rel="stylesheet" href="glavnaya.css" type="text/css">
    <link rel="stylesheet" href="burger.css" type="text/css">
    <title>Сайт новостей</title>
</head>
<body>
  
    <header>
        <div class="block9">
        <div class="menu">
            <div class="logo"><a href="index.php" class="link">Novosti</a></div>
            <ul class="knopki">
                
                <li>
                    <?php
        session_start();
        if(!isset($_SESSION['Login'])) {?>
        <a href="login.php" class="link">Личный кабинет</a>
            <?php } else {?>
                <li><a href="korona.php" class="link">Коронавирус</a></li>
                <li><a href="politika.php" class="link">Политика</a></li>
                <li><a href="health.php" class="link">Здоровье</a></li>
                <a href="profile.php" class="link">Личный кабинет</a>   
                <a href="exit.php" class="link">Выход</a>
                <div class="block8">
            
        <nav class="mobile-menu">
          <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
          <label for="checkbox" class="mobile-menu__btn"><div class="mobile-menu__icon"></div></label>
          <div class="mobile-menu__container">
          <ul class="mobile-menu__list">
              <li class="mobile-menu__item"><a href="index.php" class="mobile-menu__link">Novosti</a></li>
              
              <li class="mobile-menu__item"><?php
        
        if(!isset($_SESSION['Login'])) {?>
        <a href="login.php" class="mobile-menu__link">Личный кабинет</a>
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
        <div class="block1">
            <img src="img/glavnaya1.jpg" height="140px" width="135px" class="block1img">
            <h3>В Омске уже начали готовиться к проведению «Флоры-2022»
            <p>Традиционная цветочная выставка откроется 5 августа и продлится пять дней. К ее проведению уже начали подготавливать эскизы композиций.</p></h3>
            </div>

            <!-- <div class="v1"></div> -->

            <div class="block2">
                <img src="img/glavnaya2.jpg" height="140px" width="135px" class="block2img">
            <h3>Четыре раза по пять: «Металлург» вышел вперед в полуфинальной серии с «Авангардом»
            <p>Полуфинальные серии Восточной конференции получились намного интереснее и напряженнее, чем у Западной. Доказательство тому — серия «Авангарда» и магнитогорского «Металлурга», в которой всё перевернулось с ног на голову. После двух матчей в Магнитогорске омичи уверенно лидировали в серии, но игры в Балашихе вернули «Магнитку» к жизни. Пятая встреча в Магнитогорске проходит при равном счете в серии — 2:2, и для обоих клубов всё началось сначала.</p></h3>
            </div>

            <div class="block3">
                <img src="img/glavnaya3.jpg" height="140px" width="135px" class="block3img">
            <h3>Столетний дом у Телецентра хотели отремонтировать за 26 миллионов. Но за него никто не взялся
            <p>На портале госзакупок подвели итоги аукциона на капитальный ремонт трехэтажного дома в переулке Горный, 2. Дом на 12 квартир, построенный в 1915 году для Омского сельскохозяйственного училища, был признан памятником архитектуры в 1993 году. Проект капитального ремонта одобрила Главгосэкспертиза России — согласно смете, в доме нужно будет восстановить перегородки в подвалах, заменить чердачные перекрытия, отремонтировать кровлю и заменить изношенные трубопроводы отопления, канализации, горячей и холодной воды. Кроме того, здесь должны поменять двери и окна в подъездах, а также провести отделочные работы.</p></h3>
            </div>

            <div class="block4">
                <img src="img/glavnaya4.jpg" height="140px" width="135px" class="block4img">
            <h3>Самый молодой директор сельской школы под Омском после увольнения устроился в «Ростелеком»
            <p>24-летний экс-директор Любовской школы Нововоршавского района Александр Шорин переехал в Омск и устроился специалистом в компанию интернет-провайдера «Ростелеком». Сейчас моя зарплата немногим выше, чем была в школе, зато меньше ответственности. Я — исполнитель и отвечаю только за себя. У меня нормированный рабочий день. Коллектив и руководство лояльны — хорошо относятся как к действующим сотрудникам, так и к новичкам, — поделился Александр Шорин.</p></h3>
            </div>




</main>
            <?php }
        session_write_close();
    ?>
    </li>
            </ul>
        </div>
    </div>


    

    <footer class="footer">
        <div class="menu">
            <div class="logo"><a>©Copyright.Все права защищены. Novosti 2022-2022</a></div>
            <ul class="knopki">
                <li><a href="https://vk.com/" class="link_2">Вконтакте</a></li>
                <li><a href="https://www.youtube.com/" class="link_2">Ютуб</a></li>
                <li><a href="https://www.reddit.com/" class="link_2">Реддит</a></li>
                <li><?php 
$file = file("prosmotr.txt");
$count = implode("", $file);
$count++;
$myfile = fopen("prosmotr.txt","w");
fputs($myfile,$count);
fclose($myfile);
?>
<span>Просмотров: <?=$count ?></span>
</li>
            </ul>
        </div>
    </footer>





<!-- <div class="popup__bg"> 
    <form class="popup">
        <img src="img/close.png" class="close-popup">
        <label>
            <input type="text" name="name">
            <div class="label__text">
                Ваше имя
            </div>
        </label>
        <label>
            <input type="tel" name="tel">
            <div class="label__text">
                Ваш email
            </div>
        </label>
        <label>
            <textarea name="message"></textarea>
            <div class="label__text">
                Ваш пароль
            </div>
        </label>
        <button type="submit">Отправить</button>
    </form>
</div>  -->





<script  type="text/javascript" src="main.js"></script>
</body>
</html>