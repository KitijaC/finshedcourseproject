<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exciting webpage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
      
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.css" /> -->
      
        <link href="css/main.css" rel="stylesheet"> 

</head>
<body>
                                                                <!-- Icon -->
    <header class="shadow">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 mainLogo">
                    <a href="/">
                        <image src="http://queenelizabeththeatre.ca/wp-content/uploads/2018/02/catandnatlogo.png">
                        </a>
                </div>
                                                                <!-- Main menu -->
                <div class="col-xs-9">
                    <ul class="main-menu">
                        <li class="main-menu-item   <?php $page == 'index' ? 'active' : ''; ?>">
                            <a href="/">Home</a>
                        </li>

                        <li class="main-menu-item <?php $page == 'articles' ? 'active' : ''; ?>">
                            <a href="/articles">Articles</a>
                        </li>

                        <li class="main-menu-item <?php $page == 'chat' ? 'active' : ''; ?>">
                            <a href="/chat">Chat</a>
                        </li>

                        <li class="main-menu-item  <?php $page == 'register' ? 'active' : ''; ?>">
                           <a href="/register">Register</a>
                         </li>

                        <li class="main-menu-item  <?php $page == 'about' ? 'active' : ''; ?>">
                            <a href="/about">About us</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        

    </header>


    @yield('content')


                                                                     <!-- Social media -->
                                                                     <div class="allMedia">
        <ul>
            <li><a href="https://www.facebook.com/" target="blank"><img src="img/facebook.png" class="mediaIcon"  alt="Social media Facebook" ></a></li>
            <li><a href="https://www.instagram.com/" target="blank"><img src="img/instagram.png" class="mediaIcon"  alt="Social media Instagram" ></a></li>
            <li><a href="https://www.twitter.com/" target="blank"><img src="img/twitter.png" class="mediaIcon " alt="Social media Twitter" ></a></li>
        </ul>
    </div>

    <footer>
                                                                        <!-- Copyright -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-5 ">
                    <small><p>&copy; Kitija Cepule <?php echo date("Y"); ?>  </p></small>
                </div>       
                                                                        <!-- Footer menu -->
                <div class="col-xs-7">
                    <ul class="main-menu-footer">
                            <li class="main-menu-item-footer">
                                <a href="/" class="footerNav">Home</a>
                            </li>

                            <li class="main-menu-item-footer">
                                <a href="/articles" class="footerNav">Articles</a>
                            </li>

                            <li class="main-menu-item-footer">
                                <a href="/chat" class="footerNav">Chat</a>
                            </li>

                            <li class="main-menu-item-footer">
                                <a href="/register"class="footerNav">Register</a>
                                </li>

                            <li class="main-menu-item-footer">
                                <a href="/about"class="footerNav">About us</a>
                            </li>
                    </ul>
                </div>
            </div>       
        </div>
    </footer>

                <!-- Tabs JS -->
                <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
              
                <!-- Vue JS -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    
                <!-- Fancybox -->

    <!-- <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.0/jquery.fancybox.min.js"></script> -->
                
                                <!-- Pasrakstitais JS -->
    <script type="text/javascript" src="js/main.js"></script>

                <!-- Maps -->

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3ZlFT0DFE_oODXfmPGfzOzNegq6mnEo4&callback=initMap">
    </script>
    
</body>
</html>