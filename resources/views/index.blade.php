<!--<> -->
@extends('layout')

@section('index')


<section class="buysell-section">
         <div class="background-3"></div>
         <div class="background-4"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12 no-padding d-flex justify-content-center align-items-*-center">
                  <div class="section-container-left">
                     <h1>Trouvez votre logement de rêve</h1>
                     <p>Nous mettons à votre disposition de nombreux types de logements, disponible partout au Cameroun. Faites votre choix.</p>
                     <a href="/Lodgings" class="btn btn-lg btn-theme">Recherchez </a>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 no-padding d-flex justify-content-center align-items-*-center">
                  <div class="section-container-right">
                     <h1>Envie de louer une voiture ?</h1>
                     <p>Nous vous offrons une large gamme de véhicules disponible partout sur le territoire camerounais. Faites votre choix.</p>
                     <a href="/vehicules" class="btn btn-lg btn-primary">Découvrez </a>
                  </div>
               </div>
            </div>
         </div>
      </section>



      <!-- =-=-=-=-=-=-= Home Banner 2 End =-=-=-=-=-=-= -->


      
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Featured  Ads =-=-=-=-=-=-= -->
         <section class="custom-padding gray over-hidden">
         
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1 id="new">Nos Dernières <span class="heading-color"> Nouveautés</span></h1>
                        <!-- Short Description -->
                        <p class="heading-text">Découvrez nos nouveaux logements et véhicules</p>
                     </div>
                     
                  </div>
                  <!-- Middle Content Box -->
                  
                  
                  <div class="col-md-12 col-xs-12 col-sm-12">  
                  
                     <div class="row">
                        
                     
                        <div class="featured-slider container owl-carousel owl-theme">
                        @foreach($vehicules as $vehicule)
                           <div class="item">
                              
                           
                              <div class="col-md-12 col-xs-12 col-sm-12">
                                 <!-- Ad Box -->
                                 
                                 <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                 <div class="white category-grid-box-1 ">
                                    <div class="featured-ribbon">
                                       <span>Featured</span>
                                    </div>
                                    
                                    <!-- Image Box -->
                                    <div class="image"> 
                                       @foreach($vehicule->images as $image)
                                       <img alt="{{ $image->image }}" src="{{ Storage::url($image->path) }}" class="img-responsive">
                                       @endforeach
                                    </div>
                                    <!-- Short Description -->
                                    <div class="short-description-1 ">
                                       <!-- Category Title -->
                                       <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3>
                                          <a title="" href="/vehicules/show/{{$vehicule->id}}">{{$vehicule->modele }}  </a>
                                       </h3>
                                       <!-- Location -->
                                       <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                       <!-- Price -->
                                       <span class="ad-price">{{$vehicule->prix }}</span> 
                                    </div>
                                    <!-- Ad Meta Stats -->
                                    <div class="ad-info-1">
                                       <ul>
                                          <li><i class="fas fa-gas-pump"></i>{{$vehicule -> energie }}</li>
                                          <li><i class="fas fa-tachometer-alt"></i>{{$vehicule -> kilometrage }}</li>
                                          <li><i class="flaticon-engine-2"></i> {{$vehicule -> boite_vitesse }}</li>
                                       </ul>
                                    </div>
                                      
                                 </div>
                                
                                 </div>
                                 <!-- Ad Box End -->
                                    
                           </div>
                           
                        </div>
                        @endforeach  
                     </div>
                     
                  </div>
                  <!-- Middle Content Box End -->
                  
               </div>
               <!-- Row End -->
               
            </div>
            <!-- Main Container End -->
             
         </section>
         <!-- =-=-=-=-=-=-= Featured Ads End =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Buy Or Sale =-=-=-=-=-=-= -->
         <section class="sell-box padding-top-70">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                     <div >
                        <div class="short-info">
                           <a href="#">Are you looking for a car?</a>
                           <p>Search your car in our Inventory and request a quote on the vehicle of your choosing. </p>
                        </div>
                        <div class="text-center">
                           <img class="img-responsive wow slideInLeft center-block " data-wow-delay="0ms" data-wow-duration="2000ms" src="images/appartement.jpg" alt="">
                           <button>............</button>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                     <div>
                        <div class="short-info">
                           <a href="#">Do you want to sell your car?</a>
                           <p>Request search your car in our Inventory and a quote on the vehicle of your choosing. </p>
                        </div>
                        <div class="text-center">
                           <img class="img-responsive wow slideInRight center-block" data-wow-delay="0ms" data-wow-duration="2000ms" src="images/voiture.png" alt="">
                           <button>............</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- =-=-=-=-=-=-= Blog Section =-=-=-=-=-=-= -->
         <!-- =-=-=-=-=-=-= Trending Ads =-=-=-=-=-=-= -->
         <section class="custom-padding white">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1>Latest <span class="heading-color"> Trending</span> Ads</h1>
                        <!-- Short Description -->
                        <p class="heading-text">Eu delicata rationibus usu. Vix te putant utroque, ludus fabellas duo eu, his dico ut debet consectetuer.</p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <!-- Nav tabs -->







                  <div class="recent-tab">
                     <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#newcars" role="tab" data-toggle="tab" aria-expanded="true">Véhicules</a></li>
                        <li role="presentation" class=""><a href="#usedcars" role="tab" data-toggle="tab" aria-expanded="false">Logements</a></li>
                     </ul>
                  </div>
                  <!-- Recently Listed New Cars -->
                  
                  <div class="tab-content">
                     <div role="tabpanel" class="tab-pane active" id="newcars">
                        <!-- Middle Content Box -->
                        <!-- Listing Ad Grid -->
                        @foreach ($vehicules as $vehicule)
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12  ">
                           <div class="category-grid-box-1 ">
                              <!-- Image Box -->
                              <div class="image"> 
                                 @foreach($vehicule->images as $image)
                                 <img alt="{{ $image->image }}" src="{{ Storage::url($image->path) }}" class="img-responsive">
                                 @endforeach
                              </div>
                             
                              <!-- Short Description -->
                              <div class="short-description-1 ">
                                 <!-- Category Title -->
                                 <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                 <!-- Ad Title -->
                                 <h3>
                                    <a title="" href="single-page-listing.html">{{$vehicule->modele }}</a>
                                 </h3>
                                 <!-- Location -->
                                 <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                 <!-- Price -->
                                 <span class="ad-price">{{$vehicule->prix }}$</span> 
                              </div>
                              <!-- Ad Meta Stats -->
                              <div class="ad-info-1">
                                 <ul>
                                    <li><i class="fas fa-gas-pump"></i>{{$vehicule -> energie }}</li>
                                    <li><i class="fas fa-tachometer-alt"></i>{{$vehicule -> kilometrage }} km</li>
                                    <li><i class="flaticon-engine-2"></i> {{$vehicule -> boite_vitesse }} cc</li>
                                 </ul>
                              </div>
                           </div>
                           
                        </div>
                        @endforeach
                        
                        <!-- Listing Ad Grid -->
                        
                        <!-- Listing Ad Grid -->
                        <div class="clearfix"></div>
                        <div class="text-center">
                           <div class="load-more-btn">
                              <a class="btn btn-lg  btn-theme" href="listing-6.html"> View All <i class="fa fa-refresh"></i> </a>
                           </div>
                        </div>











                        <!-- Middle Content Box End -->
                     </div>
                     <!-- Recently Listed Used Cars -->
                     <div role="tabpanel" class="tab-pane" id="usedcars">
                        <!-- Middle Content Box -->
                        <!-- Listing Ad Grid -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12  ">
                           <div class="white category-grid-box-1 ">
                                    <div class="featured-ribbon">
                                       <span>Featured</span>
                                    </div>
                                    <!-- Image Box -->
                                    <div class="image"> <img alt="Carspot" src="images/posting/voitures/14.jpg" class="img-responsive">
                                    </div>
                                    <!-- Short Description -->
                                    <div class="short-description-1 ">
                                       <!-- Category Title -->
                                       <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3>
                                          <a title="" href="single-page-listing.html">2017 Audi A4 quattro Premium</a>
                                       </h3>
                                       <!-- Location -->
                                       <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                       <!-- Price -->
                                       <span class="ad-price">$210</span> 
                                    </div>
                                    <!-- Ad Meta Stats -->
                                    <div class="ad-info-1">
                                       <ul>
                                          <li><i class="flaticon-fuel-1"></i>Diesel</li>
                                          <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                          <li><i class="flaticon-engine-2"></i> 1800 cc</li>
                                       </ul>
                                    </div>
                                 </div>
                        </div>
                        <!-- Listing Ad Grid -->
                        <!-- Listing Ad Grid -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12  ">
                           <div class="white category-grid-box-1 ">
                                    <div class="featured-ribbon">
                                       <span>Featured</span>
                                    </div>
                                    <!-- Image Box -->
                                    <div class="image"> <img alt="Carspot" src="images/posting/voitures/11.jpg" class="img-responsive">
                                    </div>
                                    <!-- Short Description -->
                                    <div class="short-description-1 ">
                                       <!-- Category Title -->
                                       <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3>
                                          <a title="" href="single-page-listing.html">Porsche 911 Carrera 2017 </a>
                                       </h3>
                                       <!-- Location -->
                                       <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                       <!-- Price -->
                                       <span class="ad-price">$120</span> 
                                    </div>
                                    <!-- Ad Meta Stats -->
                                    <div class="ad-info-1">
                                       <ul>
                                          <li><i class="flaticon-fuel-1"></i>Diesel</li>
                                          <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                          <li><i class="flaticon-engine-2"></i> 1800 cc</li>
                                       </ul>
                                    </div>
                                 </div>
                        </div>
                        <!-- Listing Ad Grid -->
                        <!-- Listing Ad Grid -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12  ">
                           <div class="white category-grid-box-1 ">
                                    <div class="featured-ribbon">
                                       <span>Featured</span>
                                    </div>
                                    <!-- Image Box -->
                                    <div class="image"> <img alt="Carspot" src="images/posting/voitures/15.jpg" class="img-responsive">
                                    </div>
                                    <!-- Short Description -->
                                    <div class="short-description-1 ">
                                       <!-- Category Title -->
                                       <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3>
                                          <a title="" href="single-page-listing.html">2014 Ford Shelby GT500 Coupe</a>
                                       </h3>
                                       <!-- Location -->
                                       <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                       <!-- Price -->
                                       <span class="ad-price">$420</span> 
                                    </div>
                                    <!-- Ad Meta Stats -->
                                    <div class="ad-info-1">
                                       <ul>
                                          <li><i class="flaticon-fuel-1"></i>Diesel</li>
                                          <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                          <li><i class="flaticon-engine-2"></i> 1800 cc</li>
                                       </ul>
                                    </div>
                                 </div>
                        </div>
                        <!-- Listing Ad Grid -->
                        <!-- Listing Ad Grid -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12  ">
                           <div class="white category-grid-box-1 ">
                                    <div class="featured-ribbon">
                                       <span>Featured</span>
                                    </div>
                                    <!-- Image Box -->
                                    <div class="image"> <img alt="Carspot" src="images/posting/voitures/5.jpg" class="img-responsive">
                                    </div>
                                    <!-- Short Description -->
                                    <div class="short-description-1 ">
                                       <!-- Category Title -->
                                       <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3>
                                          <a title="" href="single-page-listing.html">Honda Civic 2017 Sports Edition</a>
                                       </h3>
                                       <!-- Location -->
                                       <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                       <!-- Price -->
                                       <span class="ad-price">$370</span> 
                                    </div>
                                    <!-- Ad Meta Stats -->
                                    <div class="ad-info-1">
                                       <ul>
                                          <li><i class="flaticon-fuel-1"></i>Diesel</li>
                                          <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                          <li><i class="flaticon-engine-2"></i> 1800 cc</li>
                                       </ul>
                                    </div>
                                 </div>
                        </div>
                        <!-- Listing Ad Grid -->
                        <!-- Listing Ad Grid -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12  ">
                           <div class="white category-grid-box-1 ">
                                    <div class="featured-ribbon">
                                       <span>Featured</span>
                                    </div>
                                    <!-- Image Box -->
                                    <div class="image"> <img alt="Carspot" src="images/posting/voitures/6.jpg" class="img-responsive">
                                    </div>
                                    <!-- Short Description -->
                                    <div class="short-description-1 ">
                                       <!-- Category Title -->
                                       <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3>
                                          <a title="" href="single-page-listing.html">McLaren F1 Sports Car</a>
                                       </h3>
                                       <!-- Location -->
                                       <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                       <!-- Price -->
                                       <span class="ad-price">$990</span> 
                                    </div>
                                    <!-- Ad Meta Stats -->
                                    <div class="ad-info-1">
                                       <ul>
                                          <li><i class="flaticon-fuel-1"></i>Diesel</li>
                                          <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                          <li><i class="flaticon-engine-2"></i> 1800 cc</li>
                                       </ul>
                                    </div>
                                 </div>
                        </div>
                        <!-- Listing Ad Grid -->
                        <!-- Listing Ad Grid -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12  ">
                           <div class="white category-grid-box-1 ">
                                    <div class="featured-ribbon">
                                       <span>Featured</span>
                                    </div>
                                    <!-- Image Box -->
                                    <div class="image"> <img alt="Carspot" src="images/posting/voitures/7.jpg" class="img-responsive">
                                    </div>
                                    <!-- Short Description -->
                                    <div class="short-description-1 ">
                                       <!-- Category Title -->
                                       <div class="category-title"> <span><a href="#">Car & Bikes</a></span> </div>
                                       <!-- Ad Title -->
                                       <h3>
                                          <a title="" href="single-page-listing.html">2015 Lamborghini Huracan</a>
                                       </h3>
                                       <!-- Location -->
                                       <p class="location"><i class="fa fa-map-marker"></i> Model Town Link Road London</p>
                                       <!-- Price -->
                                       <span class="ad-price">$450</span> 
                                    </div>
                                    <!-- Ad Meta Stats -->
                                    <div class="ad-info-1">
                                       <ul>
                                          <li><i class="flaticon-fuel-1"></i>Diesel</li>
                                          <li><i class="flaticon-dashboard"></i>35,000 km</li>
                                          <li><i class="flaticon-engine-2"></i> 1800 cc</li>
                                       </ul>
                                    </div>
                                 </div>
                        </div>
                        <!-- Listing Ad Grid -->
                        <div class="clearfix"></div>
                        <div class="text-center">
                           <div class="load-more-btn">
                              <button class="btn btn-lg btn-theme"> View All <i class="fa fa-refresh"></i> </button>
                           </div>
                        </div>
                        <!-- Middle Content Box End -->
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Trending Ads End =-=-=-=-=-=-= -->
   
         <section class="client-section gray">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-sm-12 col-xs-12">
                     <div class="margin-top-30">
                        <h3>Why Choose Us</h3>
                        <h2>Our premium Clients</h2>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-12 col-xs-12">
                     <div class="brand-logo-area clients-bg">
                        <div class="clients-list">
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/16.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/2.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/11.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/4.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/5.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/6.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/7.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/8.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/9.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                           <div class="client-logo">
                              <a href="#"><img src="images/brands/17.png" class="img-responsive" alt="Brand Image" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
          <!-- =-=-=-=-=-=-= Car Inspection =-=-=-=-=-=-= -->
        
         <!-- =-=-=-=-=-=-= Car Inspection End =-=-=-=-=-=-= -->
         <!-- Ajouter un script pour initialiser le carrousel -->


@endsection