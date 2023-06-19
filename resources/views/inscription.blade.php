<!--<> -->
@extends('layout')

@section('inscription')

 <div class="page-header-area-2 gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                     <div class=" breadcrumb-link">
                        <ul>
                           <li><a href="/home">Page d'accueil</a></li>
                           <li><a class="active" href="#">Inscription</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1 class="text-center">Inscription</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->
      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Registration Form =-=-=-=-=-=-= -->
         
         <section class="section-padding no-top gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                     <!--  Form -->
                     <div class="form-grid">

                           
                        <form method="POST" action="{{ route('register') }}">
                           @csrf
                          <!--<a class="btn btn-lg btn-block btn-social btn-facebook">
            					<span class="fa fa-facebook"></span> Sign up with Facebook
          				  </a>
                          
                          <a class="btn btn-lg btn-block btn-social btn-google">
            					<span class="fa fa-google"></span> Sign up with Facebook
          				  </a>
                          
                          <h2 class="no-span"><b>(OR)</b></h2> -->

                          <!-- Name -->
                          <div class="form-group">
                              <label for="name">Nom</label>
                              <input placeholder="Entrez votre nom" class="form-control" type="text" id="name" name="name" required autofocus>
                           </div>
                           
                           <!-- Email Address -->
                           <div class="form-group">
                              <label for="email">Email</label>
                              <input placeholder="Entrez votre Email" class="form-control" type="email" name="email" required>
                           </div>

                           <!-- Password -->
                           <div class="form-group">
                              <label for="password">Mot de passe</label>
                              <input placeholder="Entrez votre mot de passe" class="form-control" type="password" id="password" name="password" required autocomplete="new-password">
                           </div>

                           <!-- Confirm Password -->
                           <div class="form-group">
                              <label for="password_confirmation">Confirmez votre mot de passe</label>
                              <input placeholder="Confirmez votre mot de passe" class="form-control" type="password" id="password" name="password_confirmation" required>
                           </div>

                           <div class="form-group">
                              <div class="row">
                                 <div class="col-xs-12 col-sm-7">
                                    <div class="skin-minimal">
                                       <ul class="list">
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-1">
                                             <label for="minimal-checkbox-1">J'accepte <a href="#">Termes et conditions</a></label>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="col-xs-12 col-sm-5 text-right">
                                    <p class="help-block"><a data-target="#myModal" data-toggle="modal">Mot de passe oublié?</a>
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-theme btn-lg btn-block">Inscription</button>
                           <br>
                           <div class="text-center pt-4 text-muted">Vous avez déjà un compte? <a href="#">Connexion</a> </div>
                        </form>
                     </div>
                     <!-- Form -->
                     <!--<h2 class="no-span" style="opacity:0.5;">ou inscrivez vous avec</h2>
                     <div class="widget socail-icons">
                        <ul class="text-center">
                           <li><a class="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a class="Google" href="#"><i class="fa fa-google"></i></a></li>
                        </ul>
                     </div> -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
          <!-- =-=-=-=-=-=-= Registration Form End =-=-=-=-=-=-= -->


@endsection