<?php
$url="data.txt";
$name=strip_tags(stripslashes(substr($_POST['data']['0'],0,20)));
$mail=strip_tags(stripslashes(substr($_POST['data']['1'],0,30)));
$text=strip_tags(stripslashes(substr($_POST['data']['2'],0,300)));

if($_POST['add'] != '') {
    if($name != '') {
        if($mail !='') {
            if($text != '') {
			if(!file_exists($url)) {

$data = implode("::",$_POST['data']);
$handle = fopen($url,"a");
fwrite($handle,$data."\n");
fclose($handle);
 echo "<a href=\"book.php\">посмотреть комментарий</a>";
}
else {
 //Если файл существует, то работаем с ним
$data = implode("::",$_POST['data']);
$handle = fopen($url,"a");
fwrite($handle,$data."\n");
fclose($handle);
 echo "<a href=\"book.php\">посмотреть комментарий</a>";
 }
 }
 else {echo "Введите комментарий";}
 }
 else {echo "Введите e-mail";}
 }
 else { echo "Введите имя"; }
 }
 else {echo "<a href=\"book.php\">назад</a>";  };
?>

