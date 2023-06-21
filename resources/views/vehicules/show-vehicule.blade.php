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
                                        <li>Category: <b><a href="#">{{$vehicule->categorie }} </a></b></li>
                                        <li>Views: <b>666</b></li>
                                        <li><a href="#">Edit</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 detail_price col-xs-12">
                            <div class="singleprice-tag">{{$vehicule->prix }} FCFA<span>(Fixed)</span></div>
                        </div>
                   </div>
               <div class="featured-slider-single container owl-carousel owl-theme">
                           <div class="item">
                                 <!-- Ad Box -->
                                 <div class="white category-grid-box-1 ">
                                    @foreach($vehicule->images as $image)
                                    <div class="image"> <a href="{{ $image->image }}" data-fancybox="group"><img alt="{{$vehicule->modele }}" src="{{ Storage::url($image->path) }}" class="img-responsive"></a>
                                    @endforeach
                                    </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                                 <!-- Ad Box -->
                                 <div class="white category-grid-box-1 ">
                                    <div class="image"> <a href="images/single-page/2.jpg" data-fancybox="group"><img alt="Carspot" src="images/single-page/2.jpg" class="img-responsive"></a>
                                    </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                                 <!-- Ad Box -->
                                 <div class="white category-grid-box-1 ">
                                    <div class="image"> <a href="images/single-page/3.jpg" data-fancybox="group"><img alt="Carspot" src="images/single-page/3.jpg" class="img-responsive"></a>
                                    </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                                 <!-- Ad Box -->
                                 <div class="white category-grid-box-1 ">
                                    <div class="image"> <a href="images/single-page/4.jpg" data-fancybox="group"><img alt="Carspot" src="images/single-page/4.jpg" class="img-responsive"></a>
                                    </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                           <div class="item">
                                 <!-- Ad Box -->
                                 <div class="white category-grid-box-1 ">
                                    <div class="image"> <a href="images/single-page/5.jpg" data-fancybox="group"><img alt="Carspot" src="images/single-page/5.jpg" class="img-responsive"></a>
                                    </div>
                                 <!-- Ad Box End -->
                              </div>
                           </div>
                        </div>    
                  <!-- Middle Content Area -->
                  <div class="col-md-8 col-xs-12 col-sm-12">
                     <!-- Single Ad -->
                     <div class="singlepage-detail ">
                        <!-- Listing Slider  --> 
                        
                        <div class="content-box-grid">
                           <div class="short-features">
                              <!-- Heading Area -->
                              <div class="heading-panel">
                                 <h3 class="main-title text-left">
                                    Description 
                                 </h3>
                              </div>
                              <p>
                                 Bank Leased 5 Year plan 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well Maintained Insurance + tracker etc included Options: Sunroof 
                              </p>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Condition</strong> :</span> {{$vehicule->etat }}
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Brand</strong> :</span> {{$vehicule->marque }}
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Model</strong> :</span> Lumia 625
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Product Type</strong>:</span> Mobile
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Date</strong> :</span> 2014-10-06
                              </div>
                              <div class="col-sm-4 col-md-4 col-xs-12 no-padding">
                                 <span><strong>Price</strong> :</span> {{$vehicule->prix }} FCFA
                              </div>
                           </div>
                           <!-- Short Features  --> 
                           <div class="desc-points">
                              <ul>
                                 <li>
                                    Looking to sell the car urgently.
                                 </li>
                                 <li>
                                    Engine is good condition.
                                 </li>
                                 <li>
                                    Complete service history available.
                                 </li>
                                 <li>
                                    Original return file is available.
                                 </li>
                                 <li>
                                    After Market Alloy rims.
                                 </li>
                                 <li>
                                    As good as a brand new car.
                                 </li>
                                 <li>
                                    Lady Driven Car in Immaculate Condition.
                                 </li>
                                 <li>
                                    No Work Required in Car.
                                 </li>
                                 <li>
                                    Excellent Mileage , Local Average = 14 km , Long Average = 16 km .
                                 </li>
                              </ul>
                           </div>
                           <!-- Related Image  --> 
                           <div class="ad-related-img">
                              <img src="images/car-img1.png" alt="" class="img-responsive center-block">
                           </div>
                           <!-- Heading Area -->
                           <div class="heading-panel">
                              <h3 class="main-title text-left">
                                 Key Features
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
                                 samsung galaxy note 2 new condition with handsfree and charger urgent sale. with book pouch original 4g lte. 16 gb condition 10/10 andriod kitkat4.4.2
                              </p>
                              <p>
                                 Bank Leased 5 Year plan 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well Maintained Insurance + tracker etc included Options: Sunroof 
                              </p>
                              <p>
                                 Chilled AC Power Windows Power Steering ABS braking system ETC 15000 km carefully driven No SMS / Email , Serious Buyers Requested To Call .
                              </p>
                              <p>
                                 Chilled AC Power Windows Power Steering ABS braking system ETC 15000 km carefully driven No SMS / Email , Serious Buyers Requested To Call .
                              </p>
                              <p>
                                 Bank Leased 5 Year plan 2013 Honda Civic 1.8 Vti Oriel Prosmatec Automatic ( New Shape ) Attractive Silver Color 1 year installments paid Lahore Reg number Well Maintained Insurance + tracker etc included Options: Sunroof 
                              </p>
                           </div>
                           <!-- Related Image  --> 
                           <div class="ad-related-img">
                              <img src="images/car-img1.png" alt="" class="img-responsive center-block">
                           </div>
                           <div class="short-features">
                              <!-- Heading Area -->
                              <div class="heading-panel">
                                 <h3 class="main-title text-left">
                                    Car Features
                                 </h3>
                              </div>
                              <!-- Car Key Features  --> 
                              <ul class="car-feature-list ">
                                 <li><i class="flaticon-antenna"></i> AM/FM Radio</li>
                                 <li><i class="flaticon-air-conditioner-1"></i> Air Conditioning</li>
                                 <li><i class="flaticon-cd"></i> Cassette Player</li>
                                 <li><i class="flaticon-light-bulb"></i> Power Locks</li>
                                 <li><i class="flaticon-rearview-mirror"></i> Power Mirrors</li>
                                 <li><i class="flaticon-car-steering-wheel"></i> Power Steering</li>
                                 <li><i class="flaticon-car-door"></i> Power Windows</li>
                                 <li><i class="flaticon-disc-brake"></i> Anti-lock Braking</li>
                                 <li><i class="flaticon-rim"></i> 19 Inch Alloy Wheels</li>
                                 <li><i class="flaticon-message"></i> Cruise Control</li>
                                 <li><i class="flaticon-airbag"></i> Front Airbag Package</li>
                                 <li><i class="flaticon-photo-camera-1"></i> Reversing Camera</li>
                              </ul>
                           </div>
                           <!-- Short Features  --> 
                           <div class="clearfix"></div>
                        </div>
                        <!-- Share Ad  --> 
                        <div class="ad-share text-center">
                           <div data-toggle="modal" data-target=".share-ad" class="content-box-grid col-md-4 col-sm-4 col-xs-12">
                              <i class="fa fa-share-alt"></i> <span class="hidetext">Share</span>
                           </div>
                           <a class="content-box-grid col-md-4 col-sm-4 col-xs-12" href="#"><i class="fa fa-star active"></i> <span class="hidetext">Add to watchlist</span></a>
                           <div data-target=".report-quote" data-toggle="modal" class="content-box-grid col-md-4 col-sm-4 col-xs-12">
                              <i class="fa fa-warning"></i> <span class="hidetext">Report</span>
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
                     <!-- User Info -->
                        <div class="white-bg user-contact-info">
                           <div class="user-info-card">
                              <div class="user-photo col-md-4 col-sm-3  col-xs-4">
                                 <img class="img-circle" src="images/users/3.jpg" alt="">
                              </div>
                              <div class="user-information  col-md-8 col-sm-9 col-xs-8">
                                 <span class="user-name"><a class="hover-color" href="profile.html">Sonu Monu</a></span>
                                 <div class="item-date">
                                    <span class="ad-pub">Published on: 10 Dec 2017</span><br>
                                    <a href="#" class="link">More Ads</a>
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                           </div>
                        </div>
                        <div id="itemMap"></div>
                        <!-- Price info block -->  
                        <div class="category-list-icon">
                              <i class="green flaticon-mail-1"></i>
                              <div class="category-list-title">
                                 <h5><a href="#" data-toggle="modal" data-target=".price-quote">Contact Seller Via Email</a></h5>
                              </div>
                           </div>
                            <div class="category-list-icon">
                              <i class="purple flaticon-smartphone"></i>
                              <div class="category-list-title">
                                 <h5><a href="javascript:void(0)" class="number" data-last="111111X">0320<span>XXXXXXX</span></a></h5>
                              </div>
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
                                       <img src="{{ asset('images/posting/thumb-1.jpg') }}" alt="">
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
                                       <img src="{{ asset('images/posting/thumb-2.jpg') }}" alt="">
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
                                       <img src="images/posting/thumb-3.jpg" alt="">
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