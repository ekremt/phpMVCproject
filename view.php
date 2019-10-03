<?php 
function page_view($src,$title)//Sayfaları göstermek için kullanılan fonksiyon.
{
         include "header.php";
         include $src;
         include "footer.php";
}
?>