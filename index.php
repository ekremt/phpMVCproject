<?php 
include "view.php";
if(!empty($_GET['url']))//url verisinin içeriğinin dolu olduğunda çalışan if
{
    $url=$_GET['url'];//url verisi $url değişkenine atılıyor.
 switch($url)//url içeriğine göre case yapısı içindeki kodların çalışması sağlanıyor.
 {
     case "Anasayfa":
         $title="Anasayfa";//Sayfanın sekmmesindeki başlıkların ayırt edilmesini sağlayan değişken.
         page_view('home.php',$title);//home.php adındaki sayfanın görüntüsünü göstermek için kullanılan fonksiyon,title:Sayfa başlığı
         break;
     case "Blog":
         $title="Blog";//Sayfanın sekmmesindeki başlıkların ayırt edilmesini sağlayan değişken.
         page_view('blog.php',$title);//blog.php adındaki sayfanın görüntüsünü göstermek için kullanılan fonksiyon,title:Sayfa başlığı
         break;
         default :
         $title="404 Not Found Page";
         page_view('404.php',$title); 
         break;
 }
}
else
{
    $title="404 Not Found Page";
     page_view('404.php',$title); 
}

?>
        
        