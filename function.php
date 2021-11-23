<?php


function t1()
{
    // Определяем пустой файл с которым будем работать.
    $imgPath = __DIR__ . '/images/blank.png';

    //Путь к шрифту
    $fontPath = __DIR__ . '/9605.ttf';

    // Создаём новое изображение
    $img = imagecreatefrompng($imgPath);

    //цвет для шрифта
    $colorRed = imagecolorallocate($img, 244, 55, 53);

    //строка текста
    $text = date("Y - m - d");

    //размещение текста2 на изображении
    imagettftext($img, 40, 0, 215, 144, $colorRed, $fontPath, $text);

    //результирующий файл
    imagepng($img, __DIR__ . '/images/task_1.png');

    //уничтожение изображения
    imagedestroy($img);

    // echo "<img src = '/images/task_1.png' alt = '' style='border: solid 1px black;'>";
}

function t2()
{
    // Определяем пустой файл с которым будем работать.
    $imgPath = __DIR__ . '/images/blank.png';

    // Создаём новое изображение
    $img2 = imagecreatefrompng($imgPath);

    //создаю новое изображение
    $imgFlash = imagecreatefrompng(__DIR__ . '/images/flash.png');

    // размещаю
    imagecopy($img2, $imgFlash, 512, 0, 0, 0, 256, 256);


    //результирующий файл
    imagepng($img2, __DIR__ . '/images/task_2.png');


    //уничтожение изображения
    imagedestroy($img2);

    // echo "<img src = '/images/task_2.png' alt = '' style='border: solid 1px black;'>";
}

function t3()
{
    // Определяем пустой файл с которым будем работать.
    $imgPath = __DIR__ . '/images/blank.png';

    // Создаём новое изображение
    $img3 = imagecreatefrompng($imgPath);

    //создаю изображение flash.png
    $imgFlash = imagecreatefrompng(__DIR__ . '/images/flash.png');

    //создаю изображение spider.png
    $imgSpider = imagecreatefrompng(__DIR__ . '/images/spider.png');

    //создаю изображение thor.png
    $imgThor = imagecreatefrompng(__DIR__ . '/images/thor.png');

    // размещаю flash.png
    imagecopy($img3, $imgFlash, 0, 0, 0, 0, 256, 256);

    // размещаю spider.png
    imagecopy($img3, $imgSpider, 256, 0, 0, 0, 256, 256);

    // размещаю thor.png
    imagecopy($img3, $imgThor, 512, 0, 0, 0, 256, 256);

    //результирующий файл
    imagepng($img3, __DIR__ . '/images/task_3.png');

    //уничтожение изображения
    imagedestroy($img3);

    // echo "<img src = '/images/task_3.png' alt = '' style='border: solid 1px black;'>";
}

function t4()
{
    // Определяем пустой файл с которым будем работать.
    $imgPath = __DIR__ . '/images/blank.png';

    //Путь к шрифту
    $fontPath = __DIR__ . '/9605.ttf';

    // Создаём новое изображение
    $img4 = imagecreatefrompng($imgPath);

    //цвет для шрифта
    $black = imagecolorallocate($img4, 0, 0, 0);

    //строка текста
    $text = 'hello';

    //размещение текста на изображении
    imagettftext($img4, 36, 45, 215, 160, $black, $fontPath, $text);

    //!! Картика  thor.png в результате получалась чернобелой.
    // Решил помещением ее в промежуточное изображение $colorFix, созданное с помощью imagecreatetruecolor()
    $colorFix = imagecreatetruecolor(256, 256);
    $bgc = imagecolorallocate($colorFix, 255, 255, 255);
    imagefilledrectangle($colorFix, 0, 0, 256, 256, $bgc);

    //создаю изображение thor.png
    $imgThor = imagecreatefrompng(__DIR__ . '/images/thor.png');

    // размещаю thor.png в $img4
    imagecopy($colorFix, $imgThor, 0, 0, 0, 0, 256, 256);

    // размещаю $colorFix в
    imagecopy($img4, $colorFix, 512, 0, 0, 0, 256, 256);

    //результирующий файл
    imagepng($img4, __DIR__ . '/images/task_4.png');

    //уничтожение изображения
    imagedestroy($img4);

    // echo "<img src = '/images/task_4.png' alt = '' style='border: solid 1px black;'>";
}

function t5()
{
    // Создаём новое изображение
    $img5 = imagecreatetruecolor(300, 300);

    //цвет для фона
    $bgc = imagecolorallocate($img5, 255, 255, 255);

    //заливаю фон
    imagefilledrectangle($img5, 0, 0, 300, 300, $bgc);

    //создаю изображение flash.png
    $imgFlash = imagecreatefrompng(__DIR__ . '/images/flash.png');

    // размещаю flash.png
    imagecopy($img5, $imgFlash, 22, 22, 0, 0, 256, 256);

    //результирующий файл
    imagepng($img5, __DIR__ . '/images/task_5.png');

    //уничтожение изображения
    imagedestroy($img5);

    // echo "<img src = '/images/task_5.png' alt = '' style='border: solid 1px black;'>";
}

function t6()

{
    $img6 = imagecreatetruecolor(512, 256);

    //Путь к шрифту
    $fontPath = __DIR__ . '/9605.ttf';

    //цвет для шрифта
    $black = imagecolorallocate($img6, 0, 0, 0);

    //цвет для фона
    $bgc = imagecolorallocate($img6, 255, 255, 255);

    //заливаю фон
    imagefilledrectangle($img6, 0, 0, 512, 256, $bgc);

    //строка текста
    $text = 'hello jpeg';

    //размещение текста на изображении
    imagettftext($img6, 50, 0, 120, 145, $black, $fontPath, $text);

    //результирующий файл
    imagepng($img6, __DIR__ . '/images/task_6.jpg');

    //уничтожение изображения
    imagedestroy($img6);

    // echo "<img src = '/images/task_6.jpg' alt = '' style='border: solid 1px black;'>";
}
