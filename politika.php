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
    <link rel="stylesheet" href="politika.css" type="text/css">
    <title>Сайт новостей</title>
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
    ?>
                <!-- <a href="#" class="link open-popup">Регистрация/Вход</a> -->
                </li>  
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

<div class="politika">
<a href="" class="open-popup1"><div class="politika1">
    <img src="img/politika1.jpg">
    <h2><span>У прокурора Омской области появился новый заместитель</span></h2>
</div></a>


<a href="" class="open-popup2"><div class="politika2">
    <img src="img/politika2.jpg">
    <h2><span>Мэрия Омска предложила упразднить департамент соцполитики</span></h2>
</div></a>


<a href="" class="open-popup3"><div class="politika3">
    <img src="img/politika3.JPG">
    <h2><span>Избирательную комиссию в Омске решили расформировать</span></h2>
</div></a>

</div>
</main>

<div class="popup__bg1"> 
    <form class="popup1">
        <img src="img/close.png" class="close-popup1">
        <label>
            <img src="img/politika1.jpg" class="politika1img" align="left" width="400px" height="400px">
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
            <img src="img/politika2.jpg" class="politika2img" align="left" width="400px" height="400px">
            Комитет омского городского совета по вопросам местного самоуправления сегодня, 15 марта, одобрил ликвидацию департамента общественных отношений в администрации. Его функции перейдут к новому управлению общественных отношений и социальных вопросов. К этому управлению также присоединят отдел по обеспечению деятельности муниципальных комиссий по делам несовершеннолетних и защите их прав. А подчиняться оно будет заместителю главы города Анастасии Терпуговой.

Новую структуру администрации Омска горсовет согласовал 2 февраля 2022 года. Основные изменения заключаются в перераспределении полномочий между шестью заместителями мэра. Но также в мэрии появится новый департамент — контроля и управления — финансового контроля (оно отпочковалось от департамента финансов). Оба ведомства будет курировать глава города Сергей Шелест.
        </label>
        <label>
            
        </label>
        
    </form>
</div> 




<div class="popup__bg3"> 
    <form class="popup3">
        <img src="img/close.png" class="close-popup3">
        <label>
            <img src="img/politika3.jpg" class="politika3img" align="left" width="400px" height="400px">
            В пятницу, 1 марта, Госдума приняла в третьем чтении закон о дистанционном электронном голосовании на выборах разных уровней. В пресс-службе нижней палаты российского парламента сообщили, что избиратели смогут голосовать через интернет или с помощью специального мобильного приложения.

Поправками также изменена структура избирательных комиссий. Теперь члены комиссий с правом совещательного голоса останутся только на уровне ЦИК и комиссий региона, а в окружных, территориальных и участковых избирательных комиссиях их может не быть.

Пока не известно, будет ли использоваться дистанционное голосование на выборах в омский городской совет 11 сентября 2022 года. Но то, что для городской избирательной комиссии эти выборы станут последними — факт. Хотя ее полномочия и истекают только 31 декабря 2025 года.
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


    
    


<script  type="text/javascript" src="main2.js"></script>
</body>
</html>
