<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/NetBugs/pages/Lendibg.css">
    <title>NetBugs</title>
</head>

<body background="/NetBugs/pages/Media/Фон-для-ютуба-2048-х-1152-красивый-скачать-1.jpg">
<div id="wrapper">

    <div id="header">
        <div><a href="?page=Lending" id="name">Net Bugs</a></div>
        <div id="menu">
            <div><a href="?page=Propositions" id="work">Послуги</a></div>

            <div><a href="?page=Contacts" id="contacts">Контакти</a></div>

            <div><a id="phone">тел. 0668460569</a></div>
        </div>
    </div>



    <div id="Info">

        <div id="Logo">
            <div><img id="log" src="/NetBugs/pages/Media/download.png" alt="альтернативный текст"></div>
            <div><a id="name1">Net Bugs</a></div>
            <div><a id="slog">creating</a></div>
        </div>

        <div id="information">
            <div><a id="prop">Зателефонуйте нам</a></div>
            <div><a id="tel2">0668460569</a></div>
            <div><a id="info1">Сайти є невідємною частиною життя кожного iнтернет користувача. Саме тому нобхіно, щоб їх створювали спеціалісти. Ми маємо досвід у створенні найрізноманітніших сайтів і саме ми зможемо реалізувати усі задумки наших клієнтів.</a></div>
        </div>

        <div><img id="pic1" src="/NetBugs/pages/Media/rozrobka-saytiv-v-kievi.gif" alt="альтернативный текст"></div>
        <a href="?page=Propositions" class="but1">Створити заявку</a>

    </div>

    <div><a id="p1">Основні послуги:</a></div>


    <div id="cont1">
        <a id="tit1">WEB РОЗРОБКА</a>
        <a id="pri1">від 4500 UAH</a>
        <ul id="oble1">
            <li><i class="fa fa-check"></i>Наповнення сайту</li>
            <li><i class="fa fa-check"></i>Безкоштовний хостінг</li>
            <li><i class="fa fa-check"></i>ТСертифікація безпеки</li>
            <li><i class="fa fa-check"></i>Гарантія на сайт</li>
        </ul>
        <img  id="pic2" src="/NetBugs/pages/Media/rozrobka-saytiv-kovel.jpg"  alt="альтернативный текст">
    </div>

    <div id="cont2">
        <a id="tit2">WEB БРЕНДІНГ</a>
        <a id="pri2">від 1500 UAH</a>
        <ul id="oble2">
            <li><i class="fa fa-check"></i>Дизайн логотипів</li>
            <li><i class="fa fa-check"></i>Дизайн візитки</li>
            <li><i class="fa fa-check"></i>Створення у векторі</li>
            <li><i class="fa fa-check"></i>Підготовка для друку</li>
        </ul>
        <div><img id="pic3" src="/NetBugs/pages/Media/business-people-in-office_23-2148017142.png"  alt="альтернативный текст"></div>
    </div>

    <div><a href="?page=Propositions" id="dobut1">Доклідніше</a></div>

    <div id="wha">
        <a id="tex1">Чому</a>
        <a id="tex2">Net Bugs</a>
        <a id="tex3">creating</a>
    </div>

    <div id="wha2">
        <div id="num1">1</div>
        <a id="ris1">Надійність</a>
        <div id="num2">2</div>
        <a id="ris2">Багаторічний досвід</a>
        <div id="num3">3</div>
        <a id="ris3">Безкоштовна косультація</a>
        <div id="num4">4</div>
        <a id="ris4">Оптимальна ціна</a>
        <div id="num5">5</div>
        <a id="ris5">Індивідуальний підхід</a>
        <div id="num6">6</div>
        <a id="ris6">Команда спеціалістів</a>
    </div>

    <div id="wha3">
        <div id="sap1">

            <a id="hva1">200</a>
            <a id="hva11">Успішно реалізованих проектів</a>

        </div>
        <div id="lay1"></div>

        <a id="hva2">+135</a>
        <a id="hva22">Задоволених<br>клієнтів</a>

        <div id="lay2"></div>
        <div id="sap2">

            <a id="hva3">12</a>
            <a id="hva33">Постійних працівників</a>

        </div>
    </div>


    <div id="prorp">
        <a id="ask1">З ВАМИ</a>
        <a id="ask2">ЗВ’ЯЖЕТЬСЯ</a>
        <a id="ask3">НАШ ТЕХНІЧНИЙ ДИРЕКТОР</a>
        <a id="ask4">0668460569</a>
        <a id="ask5">info@netbug.com.ua</a>
        <a id="ask6">Україна, м. Київ</a>


        <div id="Blanc">
            <form action="" method="post">
            <div id="Form">

                <a id="option1">Ваше ім’я та прізвище</a>
                <label for="field1"></label><input type="text" name="name" id="field1" />
                <a id="option2">Телефон</a>
                <label for="field2"></label><input type="text" name="phone" id="field2" />
                <a id="option3">Email</a>
                <label for="field3"></label><input type="text" name="email" id="field3" />
                <a id="option4">Повідомлення</a>
                <label for="field4"></label><input type="text" name="massage" id="field4" />
            </div>
            <div><input type="submit" name="submit" id="Verify" value="Створити заявку"></div>
            </form>

            <?php
            if(isset($_POST['submit']))
            {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $massage = $_POST['massage'];
                $info = "$name, $phone, $email \n $massage \n";
                $file = fopen("mes.txt","a+");
                fwrite($file,$info);
                fclose($file);
                print_r(error_get_last());
            }
            ?>

        </div>



    </div>

</div>
</body>
</html>

