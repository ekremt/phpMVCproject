<?php 
include "model/model.php";
function homeController()
{
         $title="Home";//Sayfanın sekmmesindeki başlıkların ayırt edilmesini sağlayan değişken.
         $message="This is a home message.";
         privateView('home.php',$title,array('message'=>$message , 'subject'=>'a home subject'));//home.php adındaki sayfanın görüntüsünü göstermek için kullanılan fonksiyon,title:Sayfa başlığı
}
function blogController()
{
         $blogs = checkAllBlogs();
         $title="Blog";//Sayfanın sekmmesindeki başlıkların ayırt edilmesini sağlayan değişken.
         $message="This is a blog message.";
         privateView('blog.php',$title,$blogs);//blog.php adındaki sayfanın görüntüsünü göstermek için kullanılan fonksiyon,title:Sayfa başlığı
}
function blogNewController()
{
         $title="New Blog";
         $message="This is a new blog message.";
         privateView('blogNew.php',$title,array('message'=>$message , 'subject'=>'a new blog subject'));
}
?>