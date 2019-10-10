<?php 
$db= new mysqli("localhost","root","","phpmvcproje" );/*Nesne yönelimli veri tabanı bağlantısı */
$db->set_charset("UTF8");/* Utf 8 karakter seti*/


function checkAllBlogs()/* Blogların veri tabanından çekilmesi işlemi */
{
    global $db;/*üst content'teki global değişkeni kullanabilmek için*/
    $raw=$db->query("select * from blog order by id");/*Ham verinin olduğu kullanamayacağımız kısım*/
    $blogs=$raw->fetch_all(1);
    return $blogs;
}

?>