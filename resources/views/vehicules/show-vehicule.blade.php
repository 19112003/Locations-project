<!--<> -->
@extends('layout')

@section('show-vehicule')

<?php
use Carbon\Carbon;

$date = Carbon::now();
$dateDuJour = $date->toDateString();

?>

 <!-- =-=-=-=-=-=-= Main Header End  =-=-=-=-=-=-= --> 
      <!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area-2 no-bottom gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 no-padding  col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <div class=" breadcrumb-link">
                        <ul>
                           <li><a href="/vehicules">Nos véhicules</a></li>
                           <li><a class="active" href="#">Détails du véhicule</a></li>
                        </ul>
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
         <section class="section-padding no-top gray ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
               <div class="pricing-area">
                        <div class="col-md-9 col-xs-12 col-sm-8">
                            <div class="heading-zone">
                                <h1>{{$vehicule->modele }}</h1>
                                <div class="short-history">
                                    <ul>
                                        <li><b><?php echo $dateDuJour  ?></b></li>
                                        <li>Categorie: <b><a href="#">{{$vehicule->categorie }} </a></b></li>
                                        <li>Vues: <b>666</b></li>
                                        <li><a href="#">Editer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 detail_price col-xs-12">
                            <div class="singleprice-tag">{{$vehicule->prix }} FCFA<span>(Fixe)</span></div>
                        </div>
                   </div>
                   <div class="col-md-8 col-xs-12 col-sm-12">
                     <!-- Single Ad -->
                     <div class="singlepage-detail ">
                        <!-- Listing Slider  --> 
                        <div class="feuture-posts clearfix">
                           <div class="row">
                              <!-- Slider Start -->
                              <div class="col-sm-12 col-md-12 col-xs-12 big-section">
                              @foreach($vehicule->images as $image)
                                <img class="img-responsive"  alt="{{ $image->image }}" src="{{ Storage::url($image->path) }}">
                              @endforeach
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                          
                        <div class="content-box-grid margin-top-20">
                           <!-- Heading Area -->
                           <div class="heading-panel">
                              <h3 class="main-title text-left">
                              Caractéristiques principales
                              </h3>
                           </div>
                           <div class="key-features">
                              <div class="boxicon">
                                 <i class="fas fa-gas-pump"></i>
                                 <p>{{$vehicule->energie }}</p>
                              </div>
                              <div class="boxicon">
                                 <i class="fas fa-tachometer-alt"></i>
                                 <p>{{$vehicule->kilometrage }} km</p>
                              </div>
                              <div class="boxicon">
                                 <i class="fas fa-tachometer-alt"></i>
                                 <p>3600 cc</p>
                              </div>
                              <div class="boxicon">
                                 <i class="far fa-calendar-alt"></i>
                                 <p>{{$vehicule->annee }}</p>
                              </div>
                              <div class="boxicon">
                                 <i class="fas fa-grip-horizontal"></i>
                                 <p>{{$vehicule->boite_vitesse}}</p>
                              </div>
                              <div class="boxicon">
                                 <i class="fas fa-car-side"></i>
                                 <p>{{$vehicule->categorie}}</p>
                              </div>
                              <div class="boxicon">
                                 <i class="fas fa-cog" style="color: #ff0000;"></i>
                                 <p>Black</p>
                              </div>
                           </div>
                           <!-- Ad Specifications --> 
                           <div class="specification">
                              <!-- Heading Area -->
                              <div class="heading-panel">
                                 <h3 class="main-title text-left">
                                    Specifications 
                                 </h3>
                              </div>
                              <p>
                                 Samsung galaxy note 2 état neuf avec kit mains libres et chargeur vente urgente. avec book pouch original 4g lte. 16 gb état 10/10 andriod kitkat4.4.2
                              </p>
                              <p>
                              Leasing bancaire 5 ans 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well Maintained Insurance + tracker etc included Options : Toit ouvrant
                              </p>
                              <p>
                              Climatisation réfrigérée Vitres électriques Direction assistée Système de freinage ABS ETC 15000 km conduite avec soin Pas de SMS / Email , Les acheteurs sérieux sont priés d'appeler .
                              </p>
                              <p>
                              Climatisation réfrigérée Vitres électriques Direction assistée Système de freinage ABS ETC 15000 km conduite avec soin Pas de SMS / Email , Les acheteurs sérieux sont priés d'appeler .
                              </p>
                              <p>
                              Leasing bancaire 5 ans 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well Maintained Insurance + tracker etc included Options : Toit ouvrant
                              </p>
                           </div>
                           <!-- Related Image  --> 
                           <div class="ad-related-img">
                              <img src="{{ asset('images/car-img1.png') }}" alt="" class="img-responsive center-block">
                           </div>
                           <div class="short-features">
                              <!-- Heading Area -->
                              <div class="heading-panel">
                                 <h3 class="main-title text-left">
                                 Caractéristiques de la voiture
                                    </h3>
                              </div>
                              <!-- Car Key Features  --> 
                              <ul class="car-feature-list ">
                                    @foreach(explode(',', $vehicule->supplement) as $supplement)
                                    <li>{{ trim($supplement) }}</li>
                                    @endforeach
                              </ul>
                           </div>
                           <!-- Short Features  --> 
                           <div class="clearfix"></div>
                        </div>
                        <!-- Share Ad  --> 
                        <div class="container mb-4">
                            <div class="row">
                                <a href="/locations/create/{{$vehicule->id}}" class="btn btn-lg btn-theme">Location </a>
                                <a href="#" class="btn btn-lg btn-primary">Réservation </a>
                           </div>
                        </div>
                        <div class="clearfix"></div>
                     </div>
                     <!-- Single Ad End --> 
                     </div>
                     
                     
                  <!-- Right Sidebar -->
                  <div class="col-md-4 col-xs-12 col-sm-12">
                     <!-- Sidebar Widgets -->
                     <div class="sidebar">
                        <!-- Contact info -->
                        <div class="category-list-icon">
                              <i class="fas fa-envelope" style="color: green;"></i>
                              <div class="category-list-title">
                                 <h5><a href="/contact" >Contacter le vendeur via Email</a></h5>
                              </div>
                           </div>
                            <div class="category-list-icon">
                              <i class="fas fa-mobile-alt" style="color: purple;"></i>
                              <div class="category-list-title">
                                 <h5><a href="javascript:void(0)" class="number" data-last="111111X">+237<span>XXXXXXX</span></a></h5>
                              </div>
                           </div>
                        <!-- User Info -->
                        <div class="white-bg user-contact-info">
                           <div class="user-info-card">
                              <div class="user-photo col-md-4 col-sm-3  col-xs-4">
                                 <img src="{{ asset('images/users/1.jpg') }}" alt="">
                              </div>
                              <div class="user-information col-md-8 col-sm-9 col-xs-8">
                                 <span class="user-name"><a class="hover-color" href="profile.html">Maéva</a></span>
                                 <div class="item-date">
                                    <span class="ad-pub">Publié on: 10 Juin 2023</span><br>
                                    <a href="#" class="link">Plus</a>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                           <div class="ad-listing-meta">
                              <ul>
                                 <li>Ad Id: <span class="color">4143</span></li>
                                 <li>Categories: <span class="color">{{$vehicule->etat}}</span></li>
                                 <li>Visits: <span class="color">9</span></li>
                                 <li>Location: <span class="color">Douala, Cameroun</span></li>
                              </ul>
                           </div>
                           <div id="itemMap"></div>
                        </div>
                        <!-- Recent Ads --> 
                        <div class="widget">
                           <div class="widget-heading">
                              <h4 class="panel-title"><a>Ajouts recents</a></h4>
                           </div>
                           <div class="widget-content recent-ads">
                              <!-- Ads -->
                              <div class="recent-ads-list">
                                 <div class="recent-ads-container">
                                    <div class="recent-ads-list-image">
                                       <a href="#" class="recent-ads-list-image-inner">
                                       <img src="{{ asset('images/posting/voitures/thumb-1.jpg') }}" alt="">
                                       </a><!-- /.recent-ads-list-image-inner -->
                                    </div>
                                    <!-- /.recent-ads-list-image -->
                                    <div class="recent-ads-list-content">
                                       <h3 class="recent-ads-list-title">
                                          <a href="#">2010 Audi A5 Auto Premium quattro MY10</a>
                                       </h3>
                                       <ul class="recent-ads-list-location">
                                          <li><a href="#">Douala</a>,</li>
                                          <li><a href="#">Bonapriso</a></li>
                                       </ul>
                                       <div class="recent-ads-list-price">
                                        1000000 FCFA
                                       </div>
                                       <!-- /.recent-ads-list-price -->
                                    </div>
                                    <!-- /.recent-ads-list-content -->
                                 </div>
                                 <!-- /.recent-ads-container -->
                              </div>
                              <!-- Ads -->
                              <div class="recent-ads-list">
                                 <div class="recent-ads-container">
                                    <div class="recent-ads-list-image">
                                       <a href="#" class="recent-ads-list-image-inner">
                                       <img src="{{ asset('images/posting/voitures/thumb-2.jpg') }}" alt="">
                                       </a><!-- /.recent-ads-list-image-inner -->
                                    </div>
                                    <!-- /.recent-ads-list-image -->
                                    <div class="recent-ads-list-content">
                                       <h3 class="recent-ads-list-title">
                                          <a href="#">Honda Civic 2017 Sports Edition With Turbo</a>
                                       </h3>
                                       <ul class="recent-ads-list-location">
                                          <li><a href="#">Yaounde</a>,</li>
                                          <li><a href="#">Ngousso</a></li>
                                       </ul>
                                       <div class="recent-ads-list-price">
                                          900000 FCFA
                                       </div>
                                       <!-- /.recent-ads-list-price -->
                                    </div>
                                    <!-- /.recent-ads-list-content -->
                                 </div>
                                 <!-- /.recent-ads-container -->
                              </div>
                              <!-- Ads -->
                              <div class="recent-ads-list">
                                 <div class="recent-ads-container">
                                    <div class="recent-ads-list-image">
                                       <a href="#" class="recent-ads-list-image-inner">
                                       <img src="{{ asset('images/posting/voitures/thumb-3.jpg') }}" alt="">
                                       </a><!-- /.recent-ads-list-image-inner -->
                                    </div>
                                    <!-- /.recent-ads-list-image -->
                                    <div class="recent-ads-list-content">
                                       <h3 class="recent-ads-list-title">
                                          <a href="#">Ford Mustang EcoBoost Premium Convertible</a>
                                       </h3>
                                       <ul class="recent-ads-list-location">
                                          <li><a href="#">Bafoussam</a>,</li>
                                          <li><a href="#">Ekonko</a></li>
                                       </ul>
                                       <div class="recent-ads-list-price">
                                        920000 FCFA
                                       </div>
                                       <!-- /.recent-ads-list-price -->
                                    </div>
                                    <!-- /.recent-ads-list-content -->
                                 </div>
                                 <!-- /.recent-ads-container -->
                              </div>
                             
                           </div>
                        </div>
                        <!--  Financing calculator  --> 
                        
                        <!-- Saftey Tips  --> 
                        
                     </div>
                     <!-- Sidebar Widgets End -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
                           </section>









@endsection