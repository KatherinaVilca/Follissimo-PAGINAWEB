<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>FolissimoTiendaOnline</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                  
                </div>
                <div class="col-md-4">
                   
                <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                           @auth
                                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                           @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                   <div class="logo">
                    <a href="#"><h2>LOGO FOLLISIMO</h2></a>
                    <img src="/img/logoFolissimo.jpg">
                   </div>
                </div>
                <div class="col-md-7">
                    <ul class="nav navbar-nav">
                      <li class="active"><a href="#">HOME</a></li>
                      <li><a href="#">Plantas Interior</a></li>
                      <li><a href="#">Plantas Exterior</a></li>
                      <li><a href="#">Flores</a></li>
                      <li><a href="#">Deco</a></li>
                      <li><a href="#">Insumos</a></li>
                      <li>
                        <a href="#">Ver todo</a>
                        <div class="products">
                        @include('productView.products')
                </div>
                      </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <div class="cart">
                        <p><i class="fa fa-cart-arrow-down"></i><sup>0</sup> &#36;&nbsp;&nbsp;0.00</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                   <div class="header-part">
                    <p>HOME &nbsp;&nbsp;&nbsp;<span><i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;ABOUT US</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<section class="slider">
    <img src="img/slider-about.jpg" alt="Slider">
    <h3>ABOUT US</h3>
</section>
<section class="our_skill">
    <div class="container">

    </div>
</section>
 
<section class="team">
   <div class="clear"></div>
    <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h2> Los mas destacados </h2>
           </div>
       </div>
        <div class="row">
            <div class="col-md-3">
               <div class="teams">
                    <img src=" .. ">
           
                <div class="overlay"></div>
            </div>
                <h3>Nombre producto</h3>
                <p>precio</p>
            </div>

            <div class="col-md-3">
               <div class="teams">
                    <img src="img/tema2.jpg">
             
                <div class="overlay"></div>
            </div>
                <h3>Nombre producto</h3>
                <p>precio</p>
            </div>

            <div class="col-md-3">
               <div class="teams">
                    <img src="img/tema3.jpg">
               
                <div class="overlay"></div>
            </div>
                <h3>Nombre producto</h3>
                <p>precio</p>
            </div>

            <div class="col-md-3">
               <div class="teams">
                    <img src="img/tema4.jpg">
               
                <div class="overlay"></div>
            </div>
                <h3>Nombre producto</h3>
                <p>precio</p>
            </div>

        </div>
    </div>
</section>
<footer>
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>INFORMATION</h2>
                    <a href="#"><p><i class="fa fa-circle" aria-hidden="true"></i> No se que poner</p></a>
                    
                </div>
              
                <div class="col-md-4">
                    <div class="footer-contact">
                        <h2>CONTACTANOS</h2>
                        <a href="#"><p><i class="fa fa-map-marker" aria-hidden="true"></i>Bahia Blanca , Argentina</p></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
       <div class="footer_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="copy_txt">
                        <p>Copyright © 2014  Designed by <span>Katherina vilca</span></p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="footer_logo">
                        <img src="img/master-card.png">
                        <img src="img/paypal.png">
                        <img src="img/visa.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>  
<script src="js/bootstrap.min.js"></script>  
<script src="js/active.js"></script>  
</body>
</html>