<!doctype html>
        <html lang="ar" dir="rtl">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel = "stylesheet" href="css/style.css">
            <title>مدونتي</title>
            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript">
            $(window).on('scroll', function(){
            if ($(window).scrollTop()){
            $('nav').addClass('black');
            }else{
            $('nav').removeClass('black');
            }
            });

          </script>
            
          </head>
          <body>
    
            <!-- Start navbar -->
            <div>
        <nav class="navbar navbar-expand-sm navbar-light bg-white">
          <a class="navbar-brand" href="index.php"> مدونتي </a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="menu">
             <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                   <a class="nav-link" href="aboutblog.php"> عن المدونة  </a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="categories.php" target="_blank"> لوحة التحكم  </a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="communicate.php">التواصل</a>
                </li>
             </ul>
          </div>
        </nav>
        </div>
        <!-- End navbar -->