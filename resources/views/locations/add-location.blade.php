<!--<> -->
@extends('layout')

@section('add-location')

 <!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
 <div class="page-header-area-2 gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                     <div class="breadcrumb-link">
                        <ul>
                           <li><a href="/home">Page d'acceuil</a></li>
                           <li><a class="active" href="#">Location</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1>Demande de Location</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
           <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
           <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding no-top gray ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row <> -->
               <div class="row">
                  <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                     <!-- end post-padding -->
                     <div class="post-ad-form postdetails">
                        <form  class="submit-form" action="/locations" method="POST">
                           @csrf
                           <legend><label class="control-label"><h3 class="text-center">INFORMATIONS DE LOCATION</h3> </label> </legend>
                           <br>
                           <h2>Détails de location</h2>
                           <!-- end row -->
                           <div class="row">
                              <!-- Debut location  -->
                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                 <label class="control-label">Date début location </label>
                                 <input class="form-control" placeholder="" type="date" name="date_debut" id="date_debut">
                              </div>
                              <!-- Fin location-->
                              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                 <label class="control-label">Date fin location </label>
                                 <input class="form-control" placeholder=" " type="date" name="date_fin" id="date_fin">
                              </div>
                           </div>
                           <!-- Ad Type  -->
                           <br><br>
                           
                           <!-- end row -->
                           <div id="champs-conducteur" >
                              <h2>Informations sur le conducteur principal</h2>
                          
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">Nom</label>
                                    <input class="form-control" placeholder="eg: Kouomo" type="text" name="nom" id="nom">
                                 </div>
                                 <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">Prénom</label> 
                                    <input class="form-control" placeholder="eg: Maéva" type="text" name="prenom" id="prenom">
                                 </div>
                              </div>
                                 <!-- end row -->
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">Email</label>
                                    <input class="form-control" placeholder="maevak@gmail.com" type="email" name="email" id="email">
                                 </div>
                              
                                 <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">Numéro de téléphone<small>numéro de conformation</small></label>
                                    <input class="form-control" placeholder="eg: 6 93 49 05 53" type="number" name="contact" id="contact">
                                 </div>

                              </div>
                                 <!-- end row -->
                              <div class="row">
                                 <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">Adresse</label>
                                    <input class="form-control" placeholder="eg: Douala, Bonamoussadi" type="text" name="adresse" id="adresse">
                                 </div>
                                 <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                    <label class="control-label">Numéro de permis de conduire</label>
                                    <input class="form-control" placeholder="eg: LT-309460-15 " type="text" name="num_permis" id="num_permis">
                                 </div>
                              </div>
                           </div>
                           <button type="submit" class="btn btn-theme pull-right">Continuer Location</button>
                        </form>
                     </div>
                     <!-- end post-ad-form-->
                     </div>
                  <!-- end col -->
                  <!-- Right Sidebar -->
                  <div class="col-md-4 col-xs-12 col-sm-12">
                     <!-- Sidebar Widgets -->
                     <div class="blog-sidebar">
                        <!-- Categories --> 
                        <div class="widget">
                           <div class="widget-heading">
                              <h4 class="panel-title"><a>Détails du véhicule </a></h4>
                           </div>
                           <div class="widget-content">
                              <div class="col-md-4">
                                 <!-- Afficher l'image du véhicule dans un petit carré -->
                                 @foreach($vehicule->images as $image)
                                    <div style="position: relative; height: 0; padding-bottom: 100%;">
                                          <img src="{{ Storage::url($image->path) }}" alt="{{ $image->image }}" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0; width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                 @endforeach
                              </div>
                              <ol>
                                 <li>Modèle : {{ $vehicule->modele }}</li>
                                 <li><i class="fas fa-car-side"></i>  Marque : {{ $vehicule->marque }}.</li>
                                 <li>Categorie : {{ $vehicule->categorie }}</li>
                                 <li><i class="fas fa-money-bill-wave"></i> Prix : {{ $vehicule->prix }}</li>
                                 <li><i class="fas fa-chair"></i>  Nombre de place : {{ $vehicule->nbre_place }}</li>
                                 <li><i class="fas fa-door-open"></i> Nombre de porte : {{ $vehicule->nbre_porte }}</li>
                                 <li><i class="fas fa-gas-pump"></i>  Energie : {{ $vehicule->energie }}</li>
                                 <li><i class="fas fa-grip-horizontal"></i> Boite de vitesse : {{ $vehicule->boite_vitesse}}</li>
                                 <li><i class="fas fa-tachometer-alt"></i> Kilométrage : {{ $vehicule->kilometrage }}</li>
                              </ol>
                              
                           </div>
                           </div>
                        </div>
                        <!-- Latest News --> 
                     </div>
                     <!-- Sidebar Widgets End -->
                  </div>
                  <!-- Middle Content Area  End --><!-- end col -->
               </div>
               <!-- Row End -->
                  </div>
            <!-- Main Container End -->
         </section>

       
        

@endsection