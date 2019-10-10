
<div class="text-center" ><h1 class="mt-5">Blog</h1><hr>
<p>This is Blog</p>
<?php 
    foreach($values as $blogs)
    {
        ?>
          <h1 class="mt-4 col-6 offset-3 " ><a class="nav-link" href="#"><?php  echo $blogs["subject"]; ?></a></h1>
            <p class="lead col-6 offset-3 text-justify">
                <?php  echo $blogs["content"]; ?>
            </p>
          <hr>

     
        <p><?php echo date("d.m.Y",strtotime($blogs["date"])); ?></p>

        <hr>

       

        
       
<?php    }
    
    
    ?>
</div>