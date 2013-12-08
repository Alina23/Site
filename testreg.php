<?php
session_start();
if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } 
if (isset($_POST['passw'])) { $password=$_POST['passw']; if ($password =='') { unset($password);} }
if (empty($email) or empty($password)) {
exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
	$email = stripslashes($email);
    $email = htmlspecialchars($email);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email = trim($email);
    $password = trim($password);


include ("bd.php"); 

$result = mysql_query("SELECT * FROM users WHERE email='$email'",$db); 
    $myrow = mysql_fetch_array($result);
    if (empty($myrow['password']))
    {

    exit ("Извините, введённый вами login или пароль неверный.");
    }
    else {

    if ($myrow['password']==$password) {

    $_SESSION['email']=$myrow['email']; 
    $_SESSION['id']=$myrow['id'];

echo "Вы успешно вошли на сайт! <a href='index2.php'>Главная страница</a>";
    }
else {

    exit ("Извините, введённый вами login или пароль неверный.");
    }
    }
?>

