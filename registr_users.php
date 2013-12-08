<?php
if (isset($_POST['name1'])) {$name = $_POST['name1']; if ($name == '') { unset($name);} } 
if (isset($_POST['surname'])) { $lastname=$_POST['surname']; if ($lastname =='') { unset($lastname);} }
if (isset($_POST['Day'])) { $Day=$_POST['Day']; if ($Day =='') { unset($Day);} }
if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
if (isset($_POST['passw'])) { $password=$_POST['passw']; if ($password =='') { unset($password);} }
$passw2=$_POST['passw2'];
if($password!=$passw2)
{
exit("Пароли не совпадают,попробуйте еще раз");
}
if (empty($name) or empty($lastname) or empty($email) or empty($password))
{
exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля");

}
$passLen=strlen($password);
$prov=true;
if($passLen<8) die('Пароль должен состоять из 8 и более символов!');
if(!ereg('^[0-9]+[a-z]', $password) &&!ereg('^[a-z]+[0-9]', $password))
{
$prov=false;
}
if($prov)
echo "Sin".$email;
else {
exit("Пароль должен состоять из набора цифр и букв, пожалуйста вернитесь и введите другой пароль");
}

$email = stripslashes($email);
    $email = htmlspecialchars($email);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email= trim($email);
    $password = trim($password);
	$name = trim($name);
    $lastname = trim($lastname);
	include ("bd.php");
	$result = mysql_query("SELECT id FROM users WHERE email='$email'",$db);
    $myrow = mysql_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
$result2 = mysql_query("INSERT INTO users (name,lastname,Day,month,Year,email,password)
VALUES('$name','$lastname','$Day','$month','$Year','$email','$password')");
if ($result2=='TRUE')
{
echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index2.html'>Главная страница</a>";
}
else {
echo "Ошибка! Вы не зарегистрированы.";
}

?>
