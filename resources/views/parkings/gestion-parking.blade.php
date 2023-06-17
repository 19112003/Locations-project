<!--<> -->
@extends('layout')

@section('add-parking')

<div class="page-header-area-2 gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                     <div class=" breadcrumb-link">
                        <ul>
                           <li><a href="/home">Page d'accueil</a></li>
                           <li><a class="active" href="#">Parking</a></li>
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
                        <a class="image-link" href="#"><img class="image center-block" alt="" src="images/users/9.jpg"> </a>
                        <div class="search-result-item-body">
                           <div class="row">
                              <div class="col-md-5 col-sm-12 col-xs-12">
                                 <h4 class="search-result-item-heading"><a href="#">Umair</a></h4>
                                 <p class="info">
                                    <span><a href="profile.html"><i class="fa fa-user "></i>Profil </a></span>
                                    <span><a href="javascript:void(0)"><i class="fa fa-edit"></i>Edit Profile </a></span>
                                 </p>
                                 <p class="description">You last logged in at: 14-01-2017 6:40 AM [ USA time (GMT + 6:00hrs)</p>
                                 <span class="label label-warning">Paid Package</span>
                                 <span class="label label-success">Dealer</span>
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
                           </div>
                        </div>
                     </section>
                     <div class="dashboard-menu-container">
                        <ul>
                           <li >
                              <a href="/user">
                                 <div class="menu-name"> Profile </div>
                              </a>
                           </li>
                           <li class="active">
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
                                    <a href="#">
                                        <div class="menu-name">Déconnexion</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="menu-name"> </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                  </div>
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

                        <!------------- Tous les Parkings ------------------------>
                              <li class="active"><a href="#allparkings" data-toggle="tab">Tous Les Parkings</a></li>
                              <li><a href="#add" data-toggle="tab">Ajouter Parking</a></li>

                           </ul>
                           <div class="tab-content">
                              <div class="profile-edit tab-pane fade in active" id="allparkings">
                                 <h2 class="heading-md">Parkings</h2>
                                 <p>Managez les différents parkings existants</p>
                                 <table class="table">
                                    <thead>
                                       <tr>
                                             <th>Nom</th>
                                             <th>Capacité</th>
                                             <th>Région</th>
                                             <th>Ville</th>
                                             <th>Quartier</th>
                                             <th>  </th>
                                             <th>  </th>
                                             <th>  </th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                          @foreach($parkings as $parking)
                                             <tr>
                                                <td>{{ $parking->name }}</td>
                                                <td>{{ $parking->capacity}}</td>
                                                <td>{{ $parking->region }}</td>
                                                <td>{{ $parking->city }}</td>
                                                <td>{{ $parking->district}}</td>
                                                <td><a href="/Parkings/show/{{$parking->id}}"><i class="far fa-eye"></i></a></td>
                                                <td><button id="modifier-btn"><i class="fas fa-marker"></i></button></td>
                                                <td><a href="/Parkings/delete/{{$parking->id}}"><i class="far fa-trash-alt"></i></a></td>
                                             </tr>
                                       @endforeach
                                    
                                                   
                                    </tbody>
                                 </table>
                              </div>


                              <!------------- Ajouter Parking ------------------------>
                              <div class="profile-edit tab-pane fade" id="add">
                                 <h2 class="heading-md">Ajouter un parking</h2>
                                 <p>Entrez les informations nécessaires</p>
                                 <div class="clearfix"></div>
                                 <form method="POST" action="/addParking">
                                    @csrf

                                    <div class="row">
                                       <div class="row">
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                             <label>Nom du Parking <span class="color-red">*</span> </label>
                                             <input name="name" id="name" type="text" class="form-control margin-bottom-20" required>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                             <label>Sa Capacité <span class="color-red">*</span></label>
                                             <input name="capacity" id="capacity" type="number" class="form-control margin-bottom-20" placeholder="e.g: 20" required>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">  
                                             <label>Région <span class="color-red">*</span></label>
                                             <select name="region" id="region" class="form-control" required>
                                                <option label="Any Make"></option>
                                                <option value="Adamoua">Adamaoua</option>
                                                <option value="Centre">Centre</option>
                                                <option value="Est">Est</option>
                                                <option value="Extrême-Nord">Extrême-Nord</option>
                                                <option value="Littoral">Littoral</option>
                                                <option value="Nord">Nord</option>
                                                <option value="Nord-Ouest">Nord-Ouest</option>
                                                <option value="Ouest">Ouest</option>
                                                <option value="Sud">Sud</option>
                                                <option value="Sud-Ouest">Sud-Ouest</option>
                                             </select>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                             <label>Ville <span class="color-red">*</span></label>
                                             <input name="city" id="city" type="text" class="form-control margin-bottom-20" placeholder="e.g: Douala" required>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20">
                                             <label>Quartier <span class="color-red">*</span></label>
                                             <input name="district" id="district" type="text" class="form-control margin-bottom-20" placeholder="e.g: Bonamoussadi" required>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                             <button type="submit" class="btn btn-theme btn-sm">Enregistrer</button>
                                          </div>
                                       </div>
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
          <!------------- Modifier Parking -------------->
          
         <div class="popup">
            <div class="close-btn">&times;</div>
            <div class="form">
            <form method="POST" action="/addParking">
               <h2>Modifier {{ $parking->name }}</h2>
                     <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <label>Nom du Parking <span class="color-red">*</span> </label>
                           <input name="name" id="name" type="text" class="form-control margin-bottom-20" required> 
                        </div>
                     </div>
                  
                                       <div class="row">
                                          <div class="col-md-6 col-sm-6 col-xs-12">
                                             <label>Sa Capacité <span class="color-red">*</span></label>
                                             <input name="capacity" id="capacity" type="number" class="form-control margin-bottom-20" placeholder="e.g: 20" required>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12">  
                                             <label>Région <span class="color-red">*</span></label>
                                             <select name="region" id="region" class="form-control" required>
                                                <option label="Any Make"></option>
                                                <option value="Adamoua">Adamaoua</option>
                                                <option value="Centre">Centre</option>
                                                <option value="Est">Est</option>
                                                <option value="Extrême-Nord">Extrême-Nord</option>
                                                <option value="Littoral">Littoral</option>
                                                <option value="Nord">Nord</option>
                                                <option value="Nord-Ouest">Nord-Ouest</option>
                                                <option value="Ouest">Ouest</option>
                                                <option value="Sud">Sud</option>
                                                <option value="Sud-Ouest">Sud-Ouest</option>
                                             </select>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-6 col-sm-12 col-xs-12 margin-bottom-20">
                                             <label>Ville <span class="color-red">*</span></label>
                                             <input name="city" id="city" type="text" class="form-control margin-bottom-20" placeholder="e.g: Douala" required>
                                          </div>
                                          <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20">
                                             <label>Quartier <span class="color-red">*</span></label>
                                             <input name="district" id="district" type="text" class="form-control margin-bottom-20" placeholder="e.g: Bonamoussadi" required>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="col-md-4 col-sm-4 col-xs-12 text-right">
                                             <button type="submit" class="btn btn-theme btn-sm">Modifier</button>
                                          </div>
                                       </div>
                        
            </form>
            </div>
         </div>
         <script src="{{ asset('js/popup.js') }}"></script>

@endsection