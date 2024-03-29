<!DOCTYPE HTML>
<html>
<head>
<title>Inter-Media</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<!-- Bootstrap Core CSS -->
<link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/css/style-admin.css" rel='stylesheet' type='text/css' />
<link href="/css/changes.css" rel='stylesheet' type='text/css' />

<!-- Graph CSS -->
<link href="/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="/css/icon-font.min.css" type='text/css' />	
<!-- //lined-icons -->
<script src="/js/jquery-1.10.2.min.js"></script>
<script src="/js/jquery.nicescroll.js"></script>
<script src="/js/moment-2.2.1.js"></script>
<script src="/js/bootstrap-datetimepicker.min.js"></script>


</head>
<body style="background: #F7F7F7">
<div class="page-container">
    <!--/content-inner-->
    <div class="left-content">
    <div class="inner-content">
    <!-- header-starts -->
        <div class="header-section">
        <!-- top_bg -->
            <div class="top_bg">
                
                <div class="header_top">
                    <img src="/images/log2.png" class="top_right" style="width: 10%;height: 10%">
                    <div class="col-md-4 col-sm-4 col-xs-4 headder-w3 head-wl  headder-w3">
                        <h1><a href="{{ route('welcome') }}"><span class="first-clr">I</span>nter <span class="first-clr">M</span>edia</a></h1>
                        <h2><a href="{{ route('welcome') }}"><span class="first-clr">M</span>onastir</a></h2>
                    </div>
                    <div class="dropdown pull-right dropdown-admin" >
                        <button class="dropdown-toggle" type="button" data-toggle="dropdown" >
                            <img style="border-radius: 50%; height: 40px;width: 40px;" src="/storage/uploads/users/{{ Auth::user()->image }}">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('welcome') }}">
                                            Acceuil
                                        </a></li>
                            <li><a class="dropdown-item" href="{{ route('admin') }}">
                                            Site Admin
                                        </a></li>
                            <li> <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                         
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                      
                </div>
        
            </div>
            <div class="clearfix"></div>
        <!-- /top_bg -->
        </div>
			<!--`content-inner-->
        @yield('content')
    </div>
</div>
		
<!--/sidebar-menu-->
<div class="sidebar-menu">
    <header class="logo1">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
    </header>
    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
        <div class="menu">
            <ul id="menu" >
                <li>
                    <a href="{{ route('admin') }}"><i class="fa fa-home"></i> <span>Acceuil</span></a>
                </li>										
                <li id="menu-academico" >
                    <a href="{{ route('admin.technicians') }}"><i class="fa fa-cogs"></i> <span>Techniciens</span></a>
                </li>
                <li id="menu-academico" >
                    <a href="{{ route('admin.clients') }}"><i class="fa fa-users"></i> <span>Clients</span></a>
                </li>
                <li id="menu-academico" >
                    <a href="{{ route('admin.orders') }}"><i class="fa fa-dropbox"></i> <span>Commandes</span></a>
                </li>
                <li id="menu-academico" >
                    <a href="{{ route('admin.promotions') }}"><i class="fa fa-file-text-o"></i> <span>Promotions</span></a>
                </li>								
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>		
</div>

<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
    if (toggle){
		$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
		$("#menu span").css({"position":"absolute"});
    }
    else{
    	$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    	setTimeout(function() {
        	$("#menu span").css({"position":"relative"});
    	}, 400);
    }
                
	toggle = !toggle;
});
</script>
      <script src="/js/bootstrap.js"></script>
      <!--// bootstrap-->
      <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>
</html>