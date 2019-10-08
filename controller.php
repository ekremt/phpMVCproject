<?php 
function homeController()
{
         $title="Home";//Sayfanın sekmmesindeki başlıkların ayırt edilmesini sağlayan değişken.
         $message="This is a home message.";
         page_view('home.php',$title,array('message'=>$message , 'subject'=>'a home subject'));//home.php adındaki sayfanın görüntüsünü göstermek için kullanılan fonksiyon,title:Sayfa başlığı
}
function blogController()
{
         $title="Blog";//Sayfanın sekmmesindeki başlıkların ayırt edilmesini sağlayan değişken.
         $message="This is a blog message.";
         page_view('blog.php',$title,array('message'=>$message , 'subject'=>'a blog subject'));//blog.php adındaki sayfanın görüntüsünü göstermek için kullanılan fonksiyon,title:Sayfa başlığı
}
function blogNewController()
{
    $title="New Blog";
    $message="This is a new blog message.";
    page_view('blogNew.php',$title,array('message'=>$message , 'subject'=>'a new blog subject'));
}
?>