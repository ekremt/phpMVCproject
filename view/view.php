<?php 
function page_view($src,$title=false,$values=false)//Sayfaları göstermek için kullanılan fonksiyon.
{
         include "view/publicPages/header.php";
         include $src;
         include "view/publicPages/footer.php";
}
function publicView($src,$title=false,$values=false) 
{
    page_view("view/publicPages/".$src,$title,$values);
}
function privateView($src,$title=false,$values=false)
{
     page_view("view/privatePages/".$src,$title,$values);
}
function errorMessaging($messages)
{
    
    publicView("404.php","Error",$messages);
}
?>