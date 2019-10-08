<?php 
function page_view($src,$title,$values)//Sayfaları göstermek için kullanılan fonksiyon.
{
         include "header.php";
         include $src;
         include "footer.php";
}
function errorMessaging($messages)
{
    page_view("404.php","Error",$messages);
}
?>