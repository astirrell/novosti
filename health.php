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
    <link rel="stylesheet" href="health.css" type="text/css">
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
        
<div class="">
<a href="" class="open-popup1"><div class="health1">
    <img src="img/health1.jpg">
    <h2><span>«Врачи отправляли на аборт»: как омичка на инвалидной коляске не побоялась рожать ребенка</span></h2>
</div></a>


<a href="" class="open-popup2"><div class="health2">
    <img src="img/health2.jpg">
    <h2><span>«Она много жрет, зашейте ей рот»: как омичка похудела в два раза, сбросив 58 килограммов</span></h2>
</div></a>


<a href="" class="open-popup3"><div class="health3">
    <img src="img/health3.JPG">
    <h2><span>Священникам разрешили посещать пациентов в омских больницах не чаще раза в сутки</span></h2>
</div></a>


<a href="" class="open-popup4"><div class="health4">
    <img src="img/health4.JPG">
    <h2><span>«Люди покупают по 10 упаковок»: что происходит в Омске с препаратами для щитовидной железы</span></h2>
</div></a>


</div>



</main>


            <?php }
        session_write_close();
    ?>
    </li>
            </ul>
        </div>
    </div>




    <div class="popup__bg1"> 
    <form class="popup1">
        <img src="img/close.png" class="close-popup1">
        <label>
            <img src="img/health1.jpg" class="health1img" align="left" width="400px" height="400px">
            На инвалидную коляску Марина Филь попала, будучи 14-летней школьницей. Тогда ее семья жила в Алтайском крае. Поход в лес за грибами обернулся для нее трагедией. Семиклассницу укусил энцефалитный клещ, а через две недели после этого она потеряла сознание и находилась в коме на протяжении двух месяцев.

— Мое тело было полностью парализовано. Меня отправили в клинику в Барнауле. Благодаря врачам, руки практически восстановились. Сейчас мелкая моторика нарушена немножко, но я справляюсь с жизнью. Самое для меня тяжелое и было, и сейчас есть — пришивать пуговицы. В больнице предложили перебирать крупу, перекатывать мячики, а мама решила, что это занятие полезнее для хозяйства, — несмотря на грустную историю, Марина улыбается и добавляет. — Я научилась говорить: делала артикуляционную гимнастику, работала с логопедом. Ноги я чувствую, но не могу ими управлять, они парализованы.
        </label>
        <label>
            
        </label>
        
    </form>
</div> 



<div class="popup__bg2"> 
    <form class="popup2">
        <img src="img/close.png" class="close-popup2">
        <label>
            <img src="img/health2.jpg" class="health2img" align="left" width="400px" height="400px">
            Александра Чернова с раннего детства была полнее своих ровесников — и в детском саду, и в школе. В чем причина, она искренне не понимала, поскольку ее рацион был обычным: она не увлекалась перееданиями и не уплетала булочки на ночь. В подростковом возрасте омичка мечтала о такой же фигуре, как у ее младшей сестры — девочка модельной внешности весила чуть более 40 кило, Александра — в два раза больше. Изнурительные диеты привели к расстройству пищевого поведения. Объемы тела росли, а вместе с ними и аппетит. Из-за лишнего веса она попала на операционный стол с грыжей позвоночника. К 22 годам цифры на весах достигли отметки в 120 килограммов. Тогда Александра решилась на бариатрическую операцию и похудела до 62 килограммов. О том, как трудно признаться себе, что ты болен, «бабкиных» вещах огромного размера и животе, который заменял столик в самолете
        </label>
        <label>
            
        </label>
        
    </form>
</div> 






<div class="popup__bg3"> 
    <form class="popup3">
        <img src="img/close.png" class="close-popup3">
        <label>
            <img src="img/health3.jpg" class="health3img" align="left" width="400px" height="400px">
            Министерство здравоохранения Омской области разработало порядок посещения священнослужителями пациентов в стационарах. Как говорится в документе, опубликованном на официальном интернет-портале правовой информации, их должны пускать ко всем больным, включая тех, которые лежат в паллиативном отделении или реанимации.

На ковидные отделения и стационары этот порядок, судя по всему, не распространяется.
        </label>
        <label>
            
        </label>
        
    </form>
</div> 




<div class="popup__bg4"> 
    <form class="popup4">
        <img src="img/close.png" class="close-popup4">
        <label>
            <img src="img/health4.jpg" class="health4img" align="left" width="400px" height="400px">
            
            На днях министр здравоохранения Омской области Александр Мураховский доложил главе региона Александру Буркову, что ведомство ведет ежедневный мониторинг ассортимента препаратов, а также контролирует их стоимость в аптеках.

— Мы ведем мониторинг всех основных и в первую очередь жизненно важных медикаментов в ежедневном режиме. Роста цен на жизненно важные лекарства практически нет, он колеблется на уровне 1,5–3% в рамках допустимых пределов. Если говорить о перечне, то все основные группы лечебных препаратов есть. Если пропадают препараты импортного производства, то в любом случае им есть замена, — заявил Александр Мураховский.

При этом препараты для щитовидной железы «L-Тироксин» и «Эутирокс» сейчас найти не так-то просто. Медикаменты продолжают поставлять в омские аптеки, однако, чтобы их купить, людям приходится прилагать немало усилий
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









<script  type="text/javascript" src="main3.js"></script>
</body>
</html>