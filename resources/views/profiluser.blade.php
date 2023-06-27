<!--<> -->
@extends('layout')

@section('profiluser')

<?php 

$statutAdmin = auth()->user()->statutAdmin;
$user = auth()->user();

?>

<div class="page-header-area-2 gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                     <div class=" breadcrumb-link">
                        <ul>
                           <li><a href="/home">Page d'accueil</a></li>
                           <li><a class="active" href="#">Profil</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1>User Dashboard</h1>
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
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <section class="search-result-item">
                        <a class="image-link" href="#"><img class="image center-block" alt="" src="images/users/1.jpg"> </a>
                        <div class="search-result-item-body">
                           <div class="row">
                              <div class="col-md-5 col-sm-12 col-xs-12">
                                 <h4 class="search-result-item-heading"><a href="#">{{ Auth::user()->name }}</a></h4>
                                 <p class="info">
                                    <span><a href="profile.html"><i class="fa fa-user "></i>Profil </a></span>
                                    <span><a href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Profile </a></span>
                                 </p>
                                 <p class="description">You last logged in at:
                                    @if(Auth::user()->last_login_at)
                                       {{ Auth::user()->last_login_at->format('Y-m-d H:i:s') }}
                                    @else
                                       Never
                                    @endif</p>
                                 <span class="label label-warning">Paid Package</span>
                                 <span class="label label-success">Dealer</span>
                                 @if ($statutAdmin == 1)
                                 <a href="/createLodging"><span class="label label-warning">+ Logement</span></a>
                                 <a href="/createVehicule"><span class="label label-success">+ Véhicule</span></a>
                                 
                              </div>
                              <div class="col-md-7 col-sm-12 col-xs-12">
                                 <div class="row ad-history">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="user-stats">
                                          <h2>374</h2>
                                          <small>Ad Sold</small>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="user-stats">
                                          <h2>980</h2>
                                          <small>Total Listings</small>
                                       </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                       <div class="user-stats">
                                          <h2>413</h2>
                                          <small>Favourites Ads</small>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              @endif
                           </div>
                        </div>
                     </section>
                     <div class="dashboard-menu-container">
                     @if ($statutAdmin == 1)
                        <ul>
                           <li class="active">
                              <a href="/user">
                                 <div class="menu-name"> Profile </div>
                              </a>
                           </li>
                           <li>
                              <a href="/Parkings">
                                 <div class="menu-name">Parkings</div>
                              </a>
                           </li>
                           <li>
                              <a href="/vehicules">
                                 <div class="menu-name">Véhicules</div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="menu-name">Immeubles</div>
                              </a>
                           </li>
                           <li>
                              <a href="/Lodgings">
                                 <div class="menu-name">Logements</div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="menu-name">Locations</div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="menu-name">Réservations</div>
                              </a>
                           </li>
                        </ul>
                     </div>

                        <div class="dashboard-menu-container">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="menu-name">Paiements</div>
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                       @csrf
                                       <button type="submit" class="btn-logout"><strong>Déconnexion</strong></button>
                                    </form>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="menu-name"> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                  </div>
                     @else
                     <ul>
                           <li class="active">
                              <a href="/user">
                                 <div class="menu-name"> Profile </div>
                              </a>
                           </li>
                           
                           <li>
                              <a href="#">
                                 <div class="menu-name">Locations</div>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <div class="menu-name">Réservations</div>
                              </a>
                           </li>
                        
                     
                                <li>
                                    <a href="#">
                                        <div class="menu-name">Paiements</div>
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                       @csrf
                                       <button type="submit" class="btn-logout"><strong>Déconnexion</strong></button>
                                    </form>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="menu-name"> </div>
                                    </a>
                                </li>
                            </ul>
                            </div>
                  </div>
                     @endif
                        
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
               <div class="row margin-top-40">
                  <!-- Middle Content Area -->
                  <div class="col-md-12 col-xs-12 col-sm-12">
                     <!-- Row -->
                     <div class="profile-section margin-bottom-20">
                        <div class="profile-tabs">
                           <ul class="nav nav-justified nav-tabs">
                              <li class="active"><a href="#profile" data-toggle="tab">Profil</a></li>
                              <li><a href="#edit" data-toggle="tab">Editer Profil</a></li>
                              
                           </ul>
                           <div class="tab-content">
                              <div class="profile-edit tab-pane fade in active" id="profile">
                                 <h2 class="heading-md">Gérez votre nom, votre identifiant et vos adresses électroniques.</h2>
                                 <p>Vous trouverez ci-dessous le nom et l'adresse électronique de votre compte.</p>
                                 <dl class="dl-horizontal">
                                    <dt><strong>Votre nom </strong></dt>
                                    <dd>
                                       {{ $user->name }}
                                    </dd>
                                    <dt><strong>Adresse Email </strong></dt>
                                    <dd>
                                       {{ $user->email }}
                                    </dd>
                                    <dt><strong>Numero de téléphone </strong></dt>
                                    <dd>
                                       +237 6 93 49 05 53
                                    </dd>
                                    <dt><strong>Pays </strong></dt>
                                    <dd>
                                       Cameroun
                                    </dd>
                                    <dt><strong>City </strong></dt>
                                    <dd>
                                       Douala
                                    </dd>
                                    <dt><strong>Vous êtes </strong></dt>
                                    <dd>
                                    @if ($statutAdmin == 1)
                                       Administrateur
                                    @else
                                       Client
                                    @endif
                                    </dd>
                                    <dt><strong>Address </strong></dt>
                                    <dd>
                                       Lahore, PK
                                    </dd>
                                 </dl>
                              </div>
                              <div class="profile-edit tab-pane fade" id="edit">
                                 <h2 class="heading-md">Gérer vos paramètres de sécurité</h2>
                                 <p>Gérer votre compte</p>
                                 <div class="clearfix"></div>
                                 <form>
                                    <div class="row">
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Votre nom </label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                       <div class="col-md-6 col-sm-6 col-xs-12">
                                          <label>Adresse Email <span class="color-red">*</span></label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                       <div class="col-md-12 col-sm-12 col-xs-12">  
                                          <label>Numéro de téléphone <span class="color-red">*</span></label>
                                          <input type="text" class="form-control margin-bottom-20">
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                          <label>Pays <span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">Cameroun</option>
                                             <option value="1">Gabon</option>
                                             <option value="2">Cote d'Ivoire</option>
                                             <option value="3">Guinée</option>
                                             <option value="4">Congo</option>
                                             <option value="5">Tchad</option>
                                          </select>
                                       </div>
                                       <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                          <label>Ville <span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">Douala</option>
                                             <option value="1">Edinburgh</option>
                                             <option value="2">Wales</option>
                                             <option value="3">Cardiff</option>
                                             <option value="4">Bradford</option>
                                             <option value="5">Cambridge</option>
                                          </select>
                                       </div>
                                       <div class="col-md-12 col-sm-12 col-xs-12">
                                          <label>Address <span class="color-red">*</span></label>
                                          <textarea class = "form-control margin-bottom-20" rows = "3"></textarea>
                                       </div>
                                    </div>
                                    <div class="row margin-bottom-20">
                                       <div class="form-group">
                                          <div class="col-md-9">
                                             <div class="input-group">
                                                <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                Browse… <input type="file" id="imgInp">
                                                </span>
                                                </span>
                                                <input type="text" class="form-control" readonly>
                                             </div>
                                          </div>
                                          
                                       </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="row">
                                       <div class="col-md-8 col-sm-8 col-xs-12">
                                          <div class="form-group">
                                             <div class="skin-minimal">
                                                <ul class="list">
                                                   <li>
                                                      <input  type="checkbox" id="minimal-checkbox-7">
                                                      <label for="minimal-checkbox-7">i agree <a href="#">Terms of Services</a></label>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                          <button type="submit" class="btn btn-theme btn-sm">Update mes infos</button>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                              <div class="profile-edit tab-pane fade" id="payment">
                                 <h2 class="heading-md">Manage your Package Settings</h2>
                                 <p>Below are the payment options for your account.</p>
                                 <br>
                                 <form action="#" id="sky-form" class="sky-form" novalidate>
                                    <!--Checkout-Form-->
                                    <dl class="dl-horizontal">
                                       <dt><strong>Current Plan</strong></dt>
                                       <dd>
                                          Premium
                                       </dd>
                                       <dt><strong>Expiration Date </strong></dt>
                                       <dd>
                                          2nd January 2017
                                       </dd>
                                    </dl>
                                    <div class="row">
                                       <div class="col-sm-12 col-md-6 margin-bottom-20">
                                          <label>Select Plan You Want To Change<span class="color-red">*</span></label>
                                          <select class="form-control">
                                             <option value="0">Free</option>
                                             <option value="1">Premium</option>
                                             <option value="2">Advanced</option>
                                          </select>
                                       </div>
                                    </div>
                                    <button class="btn btn-sm btn-default" type="button">Cancel</button>
                                    <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                                    <!--End Checkout-Form-->
                                 </form>
                              </div>
                              <div class="profile-edit tab-pane fade" id="settings">
                                 <h2 class="heading-md">Manage your Notifications.</h2>
                                 <p>Below are the notifications you may manage.</p>
                                 <br>
                                 <form>
                                    <div class="skin-minimal">
                                       <ul class="list">
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-1">
                                             <label for="minimal-checkbox-1">Send me email notification when Ad is processed</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-2">
                                             <label for="minimal-checkbox-2">Send me email notification when user comment</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-3">
                                             <label for="minimal-checkbox-3">Send me email notification for the latest update</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-4">
                                             <label for="minimal-checkbox-4"> Receive our monthly newsletter</label>
                                          </li>
                                          <li>
                                             <input  type="checkbox" id="minimal-checkbox-5">
                                             <label for="minimal-checkbox-5">Email notification</label>
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="button-group margin-top-20">
                                       <button class="btn btn-sm btn-default" type="button">Reset</button>
                                       <button type="submit" class="btn btn-sm btn-theme">Save Changes</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Row End -->
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->








@endsection
