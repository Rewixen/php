<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
// УРОК 5 ======================================
  $number = 45;
  $float = -3.25;
  $string = "Hello world!";
  $bool = true;
  
  echo "Переменная number = $number";
  echo "<br />";
  echo "Переменная float = $float";
  echo "<br />";
  echo "Переменная string = $string";
  echo "<br />";
  echo "Переменная bool = $bool";
  echo "<br />";
  $number = 12;
  echo "Переменная number = $number";  
// УРОК 6 ======================================
  echo "<br />";
  $versionPHP = PHP_VERSION;
  echo "Version PHP = $versionPHP";
  
  define("PI", 3.14); // КОНСТАНТА СО СТАТИЧНЫМ ЗНАЧЕНИЕМ
  echo "<br />";
  echo PI;
  echo "<br />";
  echo defined("PI"); // ФУНКЦИЯ ПОИСКА КОНСТАТЫ true = 1 | flase = 0
  echo "<br />";
// УРОК 7 ======================================
$x = 32;
$y = 22.13;
$summ = $x +$y; // Сумма переменных
$diff = $x - $y; // Разность
$mult = $x * $y; // Умножение
$dil = $x / $y; // деление
$ostatok = $x % $y;
echo "Сумма из $x и $y = $summ <br / >";
echo "Разность из $x и $y = $diff <br / >";
echo "Умножение из $x и $y = $mult <br / >";
echo "Деление из $x и $y = $dil <br / >";

$z = 12;

$ostatok = $x % $z;

echo "Остаток от деления $x и $z = $ostatok<br />";

$q = 400;
$q = $q + 10;
echo $q;
// или
$q = 400;
$q += 10;
echo "<br / >$q";
// прибавлние 1 кратко
$q = 300;
$q++;
echo "<br / >$q<br / >";

// УРОК 8 ====================================== 
$str_1 = "<b>Первая строка</b> <br /> <input type=\"text\" /> <br />";
$str_2 = "<i>Вторая строка</i><br />";

echo $str_1." ".$str_2." \" \\"; // Обратный слэш отключает функцию символа

echo ' \' '; // Обратный слэш отключает функцию символа
// УРОК 9 ======================================

$x = 12;
$y = 34;
$z = 4.25;

$bool_1 = $x != $z;
$bool_2 = $x >= $y;

echo "<br />$bool_1"."<br />".$bool_2;

$bool_3 = !($x != $y); // воскл знак переворачивает значение

$bool_4 = $x == $y || $z < $y; // возвращает операцию если одна из них тру
$bool_5 = $z != $y && $x < $y; // возвращает тру если обе операции возвращают тру
$bool_6 = $z != $x ^ $y < $z; // возвращает тру если только операции разные 

echo "<br />".$bool_3."<br />".$bool_4."<br />".$bool_5."<br />".$bool_6;

$bool_7 = !($x != $y && $z < $x) || $x != $y;
echo "<br />".$bool_7;
// УРОК 10 ======================================

$string = "Example";
$num = 0;

$bool_11 = $string == true;
echo "<br />$bool_11 = $string == true;";

$bool_22 = $num == "";
echo "<br />$bool_22 = $num == \"\";<hr />"; // значение ноль и пустая строчка ранвы

$bool_33 = $string === true;
echo "<br />$bool_33 = $string === true;";

$bool_44 = $num === "";
echo "<br />$bool_44 = $num === \"\";"; 

// УРОК 11 ======================================
$x = 10;
$y = 5;
if ($x == $y && $x != 12 && $y == 5 && ($x +5) == 15) {
    echo "<br />Ура";}
    else if ($x == 15 || $y != 7) {
        $num = 5;
        echo "<br />Число $num";
    }
else {
    echo "<br />Все сработало";
}

if ($x == $y && $x != 12 && $y == 5 && ($x +5) == 15)
    echo "<br />Ура";
    
    $x == $y ? $string = "Да" : $string = "Нет"; // ? если это верно (True) : если не верна (False)
    echo "<br />".$string;
// УРОК 12 ======================================    
$x = 13;

switch ($x) {
    case "Hello" : echo "<br />Эта строковая переменная"; break;
    case 5 : echo "<br />Эта переменная равна 5 "; break;
    case 7 : echo "<br />Эта переменная равна 7 "; break;
    case 12 : echo "<br />Эта переменная равна 12 "; break;
    default : echo "<br />Эта переменная нам не известна (Default)";
}
// УРОК 13 ====================================== 
 for ($i = 0; $i <= 10; $i++) {
     echo "Цикл под номером $i<br />";
     
 }
 
 for ($a = 100; $a >= 80; $a -= 2) {
      if($a % 5 == 0) continue;
      if($a <= 87) break;
     echo "Цикл под номером $a<br />";
     
 }
  
  $x = 0;
    
 while ($x < 10) {
     if($x == 7)
       for ($y = 0; $y < 5; $y += 3)
        echo "<br />Еще одна итерация - $y";
     echo "<br />Итерация под номеров $x ";
     $x+= 1;
     
     
 }
 
 $z = 10;
 
 do {
     echo"<br />Операция выполнилась только один раз";
     $z++;
 } while ($z < 12);
 
// УРОК 14 ====================================== 
function printWords ($word, $x, $y) {
    $word = math ($x, $y);
    echo "<br />$word";
    
}

function Math ($first, $second) {
    $summa = $first + $second;
    return $summa;
}

$x = 12;
$y = 35;

printWords ("<br />".$sum, $x, $y);

// УРОК 15 ====================================== 
$array = array (12, -3.25, "String", true);  // true и false это пустота либо 1
echo "<br />";
echo $array[1];
$array[1] = "String";
$array[2] = 4.25;
echo "<br />".$array[1]."<br />".$array[2];
$array[] = "New Element";  // Добавление элемента в массив (считают с 0)
echo "<br />".$array[4]."<hr />";


for ($i = 0; $i <= count($array); $i++) {
    echo "Элемент массива с индексом $i = ".$array[$i]."<br />";
    
}

$list = array ("age" => 12, "name" => "Alex", "schoolBoy" => true);
$list ["age"] = 10;

$summa = 0;

echo "<hr />".getAverage (array ("first" => 12, "sec" => 45, "third" => 23,
"forth" => 55 ));

function getAverage ($array) {
    foreach ($array as $key => $value) {
        $summa += $value;
        echo $key."<br />";
    }
    return $summa / count ($array);
}
// УРОК 18 ====================================== 
$title = "Заголовок страницы";
require "header.php";
echo "<br /> Тело документа";
require "footer.php";

// УРОК ?? ======================================


echo M_PI."<br />".M_E."<br />";
$x = -15;
echo abs ($x). "<br />";
$y = 49.99999999;
echo round ($y,3). "<br />";
echo ceil ($y). "<br />";
echo floor ($y)."<br />";

echo mt_rand (1,20)."<br />";
echo min (12,23,-2,-5,19,-4,0)."<br />";
echo max (12,23,-2,-5,19,-4,0)."<br />";

$z =1;

echo atan($z)."<br />";

$string = "This is example!";

echo strlen ($string)."<br />";
echo strops ($string, "T")."<br />";

if(strpos ($string, "T") === false) echo "T не найдено";
else echo "Т найдено";

echo "<br />". substr($string,3,-2)."<br />";
echo str_replace(array("is","ple"), array("abc","123"), $string)."<br />";

$str = "<b>ХАХА, жирный шрифт </b>";

echo htmlspecialchars ($str);

echo "<br />".strtolower($string)."<br />".strtolower($string)."<br />";

echo md5("123")."<br />";

echo trim("string sdsd");

$array = array (12, 17, 5, 23, 56);

echo count($array)."<br />";
sort ($array);
print_r ($array);
echo "<br />";
rsort ($array);
print_r ($array);
echo "<br />";
asort ($array);
print_r ($array);
echo "<br />";
$alist = array("a" =>23, "b" =>45, "c" =>32);
arsort ($alist);
print_r ($alist);
echo "<br />";
ksort ($alist);
print_r ($alist);
echo "<br />";
shuffle ($array);
print_r ($array);
echo "<br />";
echo in_array(12,$array);
echo "<br />";



$arr_1 = array(10,2);
$arr_2 = array(4,5,7);
$array_3 = array_merge($arr_1, $arr_2);
print_r ($array_3);
echo "<br />";

$arrDone = array(1,2,3,4,5,6,7);

$arrDone = array_slice ($arrDone, 1,-2);
print_r ($arrDone);

$start = microtime (true);
echo time ()."<br />";

echo microtime (true). "<br />";

echo "Время работы скрипта: ".(microtime(true) - $start)."секунд<br />";

$time = mktime (12,35,23,12,7,2007);

echo date ("Y-m-d H:i:s", $time)."<br />";

$array = getdate($time);
print_r ($array);

echo "<br />".checkdate (2,28,2012);

/*
$file = fopen ("a.txt","a+t");
fwrite($file, "Example\nText\nNext");
fclose ($file);
*/
$file = fopen ("a.txt", "r+t");
while (!feof($file)) {
echo fread ($file,1)."<br />";
}

fseek ($file,0);
echo fread ($file, 1)."<br />";

fclose($file);

echo "____________________ <br />";
file_put_contents("c.txt","TEST test Test");
echo file_get_contents ("c.txt")."<br />";
echo file_exists ("a.txt"). "br />";
echo filesize ("c.txt")."<br />";

rename ("c.txt", "b.txt");
unlink ("b.txt");

echo __FILE__;
echo "<br />";
echo fileperms(__FILE__);
chmod(__FILE__,0777);

echo $_SERVER ["REMOTE_ADDR"];
phpinfo();

?>




