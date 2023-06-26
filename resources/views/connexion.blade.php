<!--<> -->
@extends('layout')

@section('connexion')

<div class="page-header-area-2 gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                     <div class=" breadcrumb-link">
                        <ul>
                           <li><a href="/home">Page d'accueil</a></li>
                           <li><a class="active" href="#">Connexion</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <div class="row">
                           <div class="col-12">
                              <h1 class="text-center">Connexion </h1>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding no-top gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row <>-->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                     <!--  Form -->
                     <div class="form-grid">
                        <form method="POST" action="{{ route('login') }}">
                           @csrf
                          <!-- <a class="btn btn-lg btn-block btn-social btn-facebook">
            					<span class="fa fa-facebook"></span> Sign in with Facebook
          				  </a>
                          
                          <a class="btn btn-lg btn-block btn-social btn-google">
            					<span class="fa fa-google"></span> Sign in with Google
          				  </a>
                          
                          <h2 class="no-span"><b>(OR)</b></h2> -->
                        
                           <div class="form-group">
                              <label for="email">Email</label>
                              <input placeholder="Votre Email" class="form-control" type="email" id="email" name="email"  required autofocus>
                           </div>

                           <div class="form-group">
                              <label for="password">Password</label></span><input placeholder="Votre mot de passe" class="form-control " type="password" id="password" name="password" required autocomplete="current-password">
                              @if (Route::has('password.request'))
                              <a href="{{ route('password.request') }}" style="float:right;font-size:12px;"> Mot de passe oublié? </a>
                              @endif
                           </div>
                           <div class="form-group">
                              <div class="row">
                                 <div class="col-xs-12">
                                    <div class="skin-minimal">
                                       <ul class="list">
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-1">
                                             <label for="minimal-checkbox-1">Se souvenir de moi</label>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-theme btn-lg btn-block">Connexion</button>
                           <br>
                           <div class="text-center pt-4 text-muted">Vous n'avez pas de compte? <a href="register">Inscrivez vous</a> </div>
                        </form>
                     </div>
                     <!-- Form -->
                     <!--<h2 class="no-span" style="opacity:0.5;">ou connectez vous avec</h2>
                     <div class="widget socail-icons">
                        <ul class="text-center">
                           <li><a class="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a class="Google" href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                     </div>-->
                     
      
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->



@endsection