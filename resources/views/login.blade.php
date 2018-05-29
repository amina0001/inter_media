<!DOCTYPE html>
<html>
<head>

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width" />
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">

<!-- font-awesome icons -->
      <link href="/css/font-awesome.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <link href="/css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
      <!-- easy-responsive-tabs -->
      <link href="/css/prettyPhoto.css" rel="stylesheet" type="text/css" />
      <!--stylesheets-->
      <link href="/css/style.css" rel='stylesheet' type='text/css' media="all">
       <link href="/css/msg.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
     
      
      <script src="/js/jquery-1.11.1.min.js"></script>
      
  <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
        {{--  --}}
     
      
</head>
<body style="background: #F7F7F7">
	  <div class="header-outs_page">
         <div class="w3-agile-logo">
            <div class=" head-wl">
               <div class="col-md-4 col-sm-4 col-xs-4 buttom-social-grids">
                  <ul>
                     <li><a href="https://www.facebook.com/InterMediaInformatique"><span class="fa fa-facebook"></span></a></li>
                     <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                     <li><a href="#"><span class="fa fa-rss"></span></a></li>
                     <li><a href="#"><span class="fa fa-vk"></span></a></li>
                  </ul>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 headder-w3">
                  <h1><a href="{{ url('/') }}"><span class="first-clr">I</span>nter <span class="first-clr">M</span>edia</a></h1>
                  <h2><a href="{{ url('/') }}"><span class="first-clr">M</span>onastir</a></h2>
               </div>
               <div class="col-md-4 col-sm-4 col-xs-4 w3-header-top-right-text">
                  <p><span class="fa fa-phone" aria-hidden="true"></span> (+216)73 448 601</p>
               </div>
               <div class="clearfix"> </div>
            </div>
         </div>
         <div class="top-nav">
            <nav class="navbar navbar-default navbar-fixed-top">
               <div class="container">
                  <!-- //header -->
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                        aria-controls="navbar">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav ">
                        <li><a href="{{ url('/') }}" class="scroll">Acceuil</a></li>
                        <li><a href="{{ url('/') }}#about " class="scroll">À propos</a></li>
                        <li><a href="{{ url('/') }}#services" class="scroll">Services</a></li>
                         <li><a href="{{ url('/') }}" ><img src="/images/log2.png" style="width: 50%;height: 50%;margin-top:-10%"></a></li>
                        <li><a href="{{ url('/') }}#gallery" class="scroll">Promotions</a></li>
                        <li><a href="{{ url('/') }}#testimonials" class="scroll">Témoignages</a></li>
                        <li><a href="{{ url('/') }}#contact" class="scroll">Contactez nous</a></li>
                        <!-- <li>
                            <a href="#" class="log" data-toggle="modal" data-target="#myModal">Login</a>
                        </li>
 -->                     </ul>
                  </div>
               </div>
            </nav>
         </div>  
      </div>

<div style="margin-top: 3%">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               Se connecter & S'inscrire
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                 
            </div>
            <section>
               <div class="modal-body">
                  <div class="w3_login_module">
                     <div class="module form-module">
                       <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                        <div class="tooltip">S'inscrire</div>
                       </div>
                       <div class="form">
                        <h3>Vous avez un compte?</h3>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input type="text" name="email" placeholder="Email" required>
                            <input type="password" placeholder="Mot de passe" name="password" required>
                            <input type="submit" value="Se Connecter">
                        </form>
                       </div>
                       <div class="form">
                        <h3>Create an account</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="text" name="last_name" placeholder="Nom" required="">
                            <input type="text" name="first_name" placeholder="Prénom" required="">
                            <input type="email" name="email" placeholder="Addresse Email" required="">
                            <input type="text" name="phone" placeholder="Telephone" required="">
                            <input type="password" name="Password" placeholder="Password" required="">
                            <input type="password" name="password_confirmation" placeholder="Confirmer" required="">
                            <input type="submit" value="S'inscrire">
                        </form>
                       </div>
                       <div class="cta"><a href="#">Mot de passe oublié?</a></div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
   <script>
      $('.toggle').click(function(){
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms  
        $('.form').animate({
         height: "toggle",
         'padding-top': 'toggle',
         'padding-bottom': 'toggle',
         opacity: "toggle"
        }, "slow");
      });
   </script>
</body>
</html>