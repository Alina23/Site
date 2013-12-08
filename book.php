<html>
<head>
<title>Гостевая книга</title>
<link rel="stylesheet" type="text/css" href="style2.css" />
</head>
<body class="menu2">
<?php include("read.php"); ?>
<br/>
<form name="data" action="add.php" method="post">
<table>
<tr> <td> Ваше имя:</td>
<td> <input name="data[0]" type="text" value=""></td>
</tr>
<tr><td>Введите e-mail:</td>
<td> <input name="data[1]" type="text" value=""> </td>
</tr>
<tr><td> Текст Вашего сообщения:</td>
<td> <textarea name="data[2]" rows=5 cols=20 wrap="off"></textarea> </td> </tr>
</table>
<br/><br>
<input type="submit" name="add" value="Добавить комментарий"> <br/>
</form>
</body>
</html>
