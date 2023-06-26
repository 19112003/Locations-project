<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from templates.scriptsbundle.com/carspot/demos/post-ad-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Feb 2018 05:16:57 GMT -->
<head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>StayRide | Car Dealership - Lodging Marketplace And Car Services</title>
      <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
      <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
      <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
      <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
       <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> 
      <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
      <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" type="text/css">
      <!-- =-=-=-=-=-=-= Flat Icon =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css" />
      <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('css/et-line-fonts.css') }}" type="text/css">
      <!-- =-=-=-=-=-=-= Menu Drop Down =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('css/carspot-menu.css') }}" type="text/css">
      <!-- =-=-=-=-=-=-= Animation =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" type="text/css">
      <!-- =-=-=-=-=-=-= Select Options =-=-=-=-=-=-= -->
      <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
      <!-- =-=-=-=-=-=-= noUiSlider =-=-=-=-=-=-= -->
      <link href="{{ asset('css/nouislider.min.css') }}" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Listing Slider =-=-=-=-=-=-= -->
      <link href="{{ asset('css/slider.css') }}" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.css') }}">
      <!-- =-=-=-=-=-=-= Check boxes =-=-=-=-=-=-= -->
      <link href="{{ asset('skins/minimal/minimal.css') }}" rel="stylesheet">
      <!-- =-=-=-=-=-=-= PrettyPhoto =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" type="text/css" media="screen"/>
      <!-- =-=-=-=-=-=-= Responsive Media =-=-=-=-=-=-= -->
      <link href="{{ asset('css/responsive-media.css') }}" rel="stylesheet">
      <!-- =-=-=-=-=-=-= Template Color =-=-=-=-=-=-= -->
      <link rel="stylesheet" id="color" href="{{ asset('css/colors/defualt.css') }}">
      <!-- =-=-=-=-=-=-= For This Page Only =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
      <link href="{{ asset('css/jquery.tagsinput.min.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CSource+Sans+Pro:400,400i,600" rel="stylesheet">
      <!-- =-=-=-=-=-=-= CSS popup =-=-=-=-=-=-= -->
      <link rel="stylesheet" href="{{ asset('css/popup.css') }}">
      <!-- JavaScripts -->
      <script src="{{ asset('js/modernizr.js') }}"></script>
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <style>
         .btn-logout {
               font-family: Arial, sans-serif;
               font-size: 14px;
               font-weight: bold;
            }
      </style>
   </head>

   <body>
    <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
    <div class="preloader"></div>
      <!-- =-=-=-=-=-=-= Color Switcher =-=-=-=-=-=-= -->
     
         <div class="clearfix"> </div>
      </div>
      <!-- =-=-=-=-=-=-= Main Header =-=-=-=-=-=-= -->
      <div class="colored-header">
         <!-- Top Bar -->
         <div class="header-top dark">
            <div class="container">
               <div class="row">
                  <!-- Header Top Left -->
                  <div class="header-top-left col-md-6 col-sm-6 col-xs-12 hidden-xs">
                     <ul class="listnone">
                        <li><a href="about.html"><i class="far fa-heart" aria-hidden="true"></i> A propos</a></li>
                        <li><a href="faqs.html"><i class="far fa-folder-open" aria-hidden="true"></i> FAQS</a></li>
                       
                     </ul>
                  </div>
                  <!-- Header Top Right Social -->
                  <div class="header-right col-md-6 col-sm-6 col-xs-12 ">
                     <div class="pull-right">
                        <ul class="listnone">
                           <li><a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Connexion</a></li>
                           <li class="hidden-xs hidden-sm"><a href="{{ route('register') }}"><i class="fa fa-unlock" aria-hidden="true"></i> Inscription</a></li>
                           @auth
                           <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle resize" alt="" src="{{ asset('images/users/3.jpg') }}"> <span class="myname hidden-xs"> {{ Auth::user()->name }} </span> <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="/user">Profil utilisateur</a></li>
                                 <li><a href="/Parkings">Parkings</a></li>
                                 <li><a href="/vehicules">Véhicules</a></li>
                                 <li><a href="#">Immeubles</a></li>
                                 <li><a href="/Lodgings">Logements</a></li>
                                 <li><a href="#">Locations</a></li>
                                 <li><a href="#">Réservations</a></li>
                                 <li>
                                 <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn-logout"><strong>Déconnexion</strong></button>
                                 </form>
                                 </li>
                                 
                              </ul>
                           </li>
                           
                          
                           <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="myname hidden-xs"> Enregistrement </span> <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="/createLodging">Logement</a></li>
                                 <li><a href="/createVehicule">Véhicule</a></li>
                              </ul>
                           </li>
                           @endauth
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Top Bar End -->
         <!-- Navigation Menu -->
         <div class="clearfix"></div>
         <!-- menu start -->
         <nav id="menu-1" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <!-- menu logo -->
                        <ul class="menu-logo">
                           <li>
                              <a href="index.html"><img src="{{ asset('images/test.png') }}" alt="logo"> </a>
                           </li>
                        </ul>
                        <!-- menu links -->
                        <ul class="menu-links">
                           <!-- active class -->
                           <li>
                              <a href="/home">Acceuil </a>
                           </li>
                           <li>
                              <a href="/vehicules"> Nos véhicules </a>
                           </li>
                           <li>
                              <a href="/Lodgings">Nos logements </a>
                           </li>
                           <li>
                              <a href="/home#new">Nouveautés </a>
                           </li>
                           <li>
                              <a href="/contact">Contact</a>
                           </li>
                           
                           
                        </ul>
                        <ul class="menu-search-bar">
                           <li>
                              <a>
                                 <div class="contact-in-header clearfix">
                                    <i class="flaticon-customer-service"></i>
                                    <span>
                                    Contactez nous 
                                    <br>
                                    <strong>+237 6 93 49 05 53</strong>
                                    </span>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </section>
         </nav>
         <!-- menu end -->
      </div>

   @yield('content')
   @yield('add-lodging')
   @yield('all-lodging')
   @yield('index')
   @yield('profiluser')
   @yield('connexion')
   @yield('inscription')
   @yield('contact')
   @yield('add-parking')
   @yield('show-vehicule')
   @yield('add-location')


     <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
     <footer class="footer-bg">
            <!-- Footer Content -->
            <div class="footer-top">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3  col-sm-6 col-xs-12">
                        <!-- Info Widget -->
                        <div class="widget">
                           <div class="logo"> <img alt="" src="{{ asset('images/test.png') }}"> </div>
                           <p>Nous mettons à votre disposition diverses variétés de logements et véhicules dans tout le Cameroun.</p>
                           <ul class="apps-donwloads">
                              <li><img src="{{ asset('images/googleplay.png') }}" alt=""></li>
                              <li><img src="{{ asset('images/appstore.png') }}" alt=""></li>
                           </ul>
                        </div>
                                                 
                        <!-- Info Widget Exit -->
                     </div>
                     <div class="col-md-2 col-sm-6 col-xs-12">
                        <!-- Follow Us -->
                        <div class="widget socail-icons">
                           <h5>Suivez nous</h5>
                           <ul>
                              <li><a class="Facebook" href="#"><i class="fa fa-facebook"></i></a><span>Facebook</span></li>
                              <li><a class="Twitter" href="#"><i class="fa fa-twitter"></i></a><span>Twitter</span></li>
                              <li><a class="Linkedin" href="#"><i class="fa fa-linkedin"></i></a><span>Linkedin</span></li>
                              <li><a class="Google" href="#"><i class="fa fa-google-plus"></i></a><span>Google+</span></li>
                           </ul>
                        </div>
                        <!-- Follow Us End -->
                     </div>
                     <div class="col-md-2  col-sm-6 col-xs-12">
                        <!-- Follow Us -->
                        <div class="widget my-quicklinks">
                           <h5>Liens Rapides</h5>
                           <ul >
                              <li><a href="#">A propos</a></li>
                             <li><a href="#">Faqs</a></li>
                             <li><a href="/home#new">Nouveautés</a></li>
                             <li><a href="/contact">Contactez nous</a></li>
                           </ul>
                        </div>
                        <!-- Follow Us End -->
                     </div>
                     <div class="col-md-5  col-sm-6 col-xs-12">
                        <!-- Newslatter -->
                        <div class="widget widget-newsletter">
                           <h5>Souscrivez à notre Newsletter</h5>
                           <div class="fieldset">
                              <p>Nous vous enverrons des informations concernant des évènements, des webinars, ainsi que nos produits et services.</p>
                              <form>
                                 <input class="" value="Enter your email address" type="text">
                                 <input class="submit-btn" name="submit" value="Submit" type="submit"> 
                              </form>
                           </div>
                        </div>
                        <div class="copyright">
                           <p>© 2023 StayRide All rights reserved. Design by <a href="#" target="_blank">Scorpio</a> </p>
                        </div>   
                        <!-- Newslatter -->
                     </div>
                  </div>
               </div>
            </div>
           
         </footer>
         <!-- =-=-=-=-=-=-= FOOTER END =-=-=-=-=-=-= -->
      </div>



  <!-- Main Content Area End --> 
      <script src="{{ asset('js/popup.js') }}"></script>
      <!-- Back To Top -->
      <a href="#0" class="cd-top">Top</a>
      <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <!-- Bootstrap Core Css  -->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- Jquery Easing -->
      <script src="{{ asset('js/easing.js') }}"></script>
      <!-- Menu Hover  -->
      <script src="{{ asset('js/carspot-menu.js') }}"></script>
      <!-- Jquery Appear Plugin -->
      <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
      <!-- Numbers Animation   -->
      <script src="{{ asset('js/jquery.countTo.js') }}"></script>
      <!-- Jquery Select Options  -->
      <script src="{{ asset('js/select2.min.js') }}"></script>
      <!-- noUiSlider -->
      <script src="{{ asset('js/nouislider.all.min.js') }}"></script>
      <!-- Carousel Slider  -->
      <script src="{{ asset('js/carousel.min.js') }}"></script>
      <script src="{{ asset('js/slide.js') }}"></script>
      <!-- Image Loaded  -->
      <script src="{{ asset('js/imagesloaded.js') }}"></script>
      <script src="{{ asset('js/isotope.min.js') }}"></script>
      <!-- CheckBoxes  -->
      <script src="{{ asset('js/icheck.min.js') }}"></script>
      <!-- Jquery Migration  -->
      <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>

      <!-- Style Switcher -->
      <script src="{{ asset('js/color-switcher.js') }}"></script>
      <!-- PrettyPhoto -->
      <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
      <!-- Wow Animation -->
      <script src="{{ asset('js/wow.js') }}"></script>
      <!-- Template Core JS -->
      <script src="{{ asset('js/custom.js') }}"></script>
      <!-- For this Page Only -->
      <!-- Ckeditor  -->
      <script src="{{ asset('js/ckeditor/ckeditor.js') }}" ></script>
      <!-- Ad Tags  -->
      <script src="{{ asset('js/jquery.tagsinput.min.js') }}"></script>
      <!-- DROPZONE JS  -->
      <script src="{{ asset('js/dropzone.js') }}" ></script>
      <script src="{{ asset('js/form-dropzone.js') }}" ></script>
      <script type="text/javascript">
         "use strict";
         
         /*--------- Textarea Ck Editor --------*/
           CKEDITOR.replace( 'editor1' );
         
         /*--------- Ad Tags --------*/ 
         $('#tags').tagsInput({
         		'width':'100%'
         });
         
              /*--------- create remove function in dropzone --------*/
              Dropzone.autoDiscover = false;
              var acceptedFileTypes = "image/*"; //dropzone requires this param be a comma separated list
              var fileList = new Array;
              var i = 0;
              $("#dropzone").dropzone({
                addRemoveLinks: true,
                maxFiles: 5, //change limit as per your requirements
              acceptedFiles: '.jpeg,.jpg,.png,.gif',
                dictMaxFilesExceeded: "Maximum upload limit reached",
                acceptedFiles: acceptedFileTypes,
              url: "uploads",
                dictInvalidFileType: "upload only JPG/PNG",
                init: function () {
                    // Hack: Add the dropzone class to the element
                    $(this.element).addClass("dropzone");
                }
              });
         (jQuery);
          
      </script>

      <script src="{{ asset('js/app.js') }}" type="text/js"></script> 
      <!-- JS -->

      <!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->



</body>

</html>