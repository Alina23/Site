<?php
session_start();
?>
<html>
<head>
<title> Ирина Матягина, фотограф </title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body link="red" bgcolor="#AFAFD8"  vlink="#336699" alink="green">
<div class="menu">
    <ul> 
        <li><a class="hide" href="">Немного обо мне</a>
 
 
            <ul>
                <li><a href="" title="">1</a></li>
                <li><a href="" title="">2</a></li>
                <li><a href="" title="">3</a></li>
            </ul>
 
 
        </li>
 
        <li><a class="hide" href="">Мои работы</a>
 
    
 
            <ul>
                <li><a href="" title="">Портреты</a></li>
                <li><a href="" title="">Love Story</a></li>
                <li><a href="" title="">Уличные фотоссесии</a></li>
                <li><a href="" title="">Семейная съемка</a></li>
                
            </ul>
 
        
 
        </li>
    </ul> 
</div >
<?php

    if (empty($_SESSION['email']) or empty($_SESSION['id']))
    {

    echo "Вы вошли на сайт, как гость<br><a href='#'>Эта ссылка  доступна только зарегистрированным пользователям</a>";
    }
    else
    {

    echo "Вы вошли на сайт, как ".$_SESSION['email']."<br><a href='http://vk.com/imphotogroup'>Эта ссылка доступна только зарегистрированным пользователям</a>";
    }
?>

<div>
<tr>
<td colspan=5>
<h1>Ирина Матягина.
Фотограф  
</h1>
</td>
</tr>
</div>
<td colspan=4 align=right widht=90%  height=84%>

</td> 
</tr>


<tr>
<td  height=4%  width=20%>1</td>
<td height=4%  width=25%>2</td>
<td height=4% width=25%>3</td>
<td height=4% width=30%>4</td>
</tr>


</body>
</html>