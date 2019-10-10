<html>
<head>
    <title><?php echo $title; ?></title><!-- Sayfa başlığını view.php üzerinde yazdırma-->
    
    <link type="text/css" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><!-- Bootsrap Kütüphanesinin online olarak import edilmesi işlemi -->
    
    <link type="text/css" rel="stylesheet" href="../css/main.css"/>
    <script type="text/javascript"src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
       
            <nav class="navbar navbar-expand-lg navbar-light btn-outline-info">
                      <a class="navbar-brand" href="#">My Blog</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="?url=home">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="?url=blog">Blog</a>
                          </li>
                          <li class="nav-item active">
                            <a class="nav-link" href="?url=blog/new">New Blog</a>
                          </li>
                        </ul>
                      </div>
            </nav>
        </header> 