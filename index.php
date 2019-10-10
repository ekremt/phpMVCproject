<?php 
include "view/view.php";
include "controller/controller.php";
if(!empty($_GET['url']))//url verisinin içeriğinin dolu olduğunda çalışan if
{
    $url=$_GET['url'];//url verisi $url değişkenine atılıyor.
 switch($url)//url içeriğine göre case yapısı içindeki kodların çalışması sağlanıyor.
 {
     case "home":
         homeController();
         break;
    
     case "blog":
        blogController();
         break;
     
     case "blog/new":
         blogNewController();
          break;
    
     case "blog/show":
          break;
     
     default :
         $title="404 Not Found Page";
         errorMessaging($title);
         break;
 }
}
else
{
    $title="404 Not Found Page & Page Empty";
    errorMessaging($title);
}

?>
        
        