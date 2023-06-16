<!--<> -->
@extends('layout')

@section('add-lodging')

<!-- =-=-=-=-=-=-= Main Header End  =-=-=-=-=-=-= --> 
      <!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
      <div class="page-header-area-2 gray">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="small-breadcrumb">
                     <div class="breadcrumb-link">
                        <ul>
                           <li><a href="/home">Page d'acceuil</a></li>
                           <li><a class="active" href="#">Ad Posting</a></li>
                        </ul>
                     </div>
                     <div class="header-page">
                        <h1>Enregistrement de logement</h1>
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
                  <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                     <!-- end post-padding -->
                     <div class="post-ad-form postdetails">
                        <form  class="submit-form" enctype="multipart/form-data" action="/addLodging" method="POST">
                            @csrf
                           <!-- Title  -->
                           <fieldset>
                              <legend><label class="control-label"><h3 class="text-center">Informations du logement</h3> </label> </legend>
                              <div class="form-group">
                                 <div class="row">
                                    <div class="row">
                                       <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                          <label class="control-label">Titre du logement</label>
                                          <input name="title" id="title" class="form-control" placeholder="" type="text" required>
                                       </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                          <label class="control-label">Ville</label>
                                          <input name="city" id="city" class="form-control" placeholder="" type="text" required>
                                       </div>

                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                          <label class="control-label">Quartier</label>
                                          <input name="district" id="district" class="form-control" placeholder="" type="text" required>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <!-- Category  -->
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                       <label class="control-label">Taille de la propriété</label>
                                       <input name="size" id="size" class="form-control" placeholder="e.g:30 m2" type="number" required>
                                    </div> 
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                       <label class="control-label">Standing</label>
                                       <select name="standing" id="standing" class=" form-control make" required  >
                                          <option label="Any Make"></option>
                                          <option value="Moyen">Moyen</option>
                                          <option value="Haut">Haut</option>
                                       </select>
                                    </div>
                                    
                                 </div>
                                 <!-- end row -->
                                 <div class="row">
                                    <!-- Category  -->
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                       <label class="control-label">Nombre de salles de bain</label>
                                         <input name="nbr_bathroom" id="nbr_bathroom" class="form-control" type="number" placeholder="e.g: 4">
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                       <label class="control-label">Nombre de chambres</label>
                                         <input name="nbr_bedroom" id="nbr_bedroom" class="form-control" type="number" placeholder="e.g: 5">
                                    </div>
                                 </div>
                                 <!-- end row -->
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12"><br>
                                       <label class="control-label">Nombre de salons </label>
                                       <input  name="nbr_livingroom" id="nbr_livingroom" class="form-control" type="number" placeholder="e.g: 2">
                                    </div>

                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12"><br>
                                       <label class="control-label">Nombre de cuisines </label>
                                       <input name="nbr_kitchen" id="nbr_kitchen" class="form-control" type="number" placeholder="e.g: 2">
                                    </div>
                                 </div>
                                    <!-- end row -->
                                 
                                    <div class="row">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12"><br>
                                          <label class="control-label">Type de logement</label>
                                          <select name="type" id="type" class=" form-control make" required >
                                             <option label="Any Make"></option>
                                             <option value="Maison">Maison</option>
                                             <option value="Appartement">Appartement</option>
                                             <option value="Studio">Studio</option>
                                             <option value="Chambre">Chambre</option>
                                             <option value="Colocation">Colocation</option>
                                             <option value="Résidence universitaire">Résidence universitaire</option>
                                          </select>
                                       </div>
                                    
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                          <label class="control-label">Meublé</label>
                                          <div class="skin-minimal">
                                              <ul class="list">
                                                  <li>
                                                      <input tabindex="7" type="radio" id="minimal-radio-1"
                                                          name="furnished" value="1"> Oui
                                                  </li>
                                                  <li>
                                                      <input tabindex="8" type="radio" id="minimal-radio-2"
                                                          name="furnished" value="0"> Non
                                                  </li>
                                              </ul>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                       <br>
                                       <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                           <label class="control-label">Equipements supplémentaires</label>
                                           <!-- Brands List -->
                                           <div class="skin-minimal">
                                               <ul class="list">
                                                   <li class="col-md-4 col-sm-6 col-xs-12">
                                                       <input type="checkbox" name="equipment[]" value="Eau"
                                                           id="minimal-checkbox-1">
                                                       <label for="minimal-checkbox-1">Eau</label>
                                                   </li>
                                                   <li class="col-md-4 col-sm-6 col-xs-12">
                                                       <input type="checkbox" name="equipment[]" value="Electricité"
                                                           id="minimal-checkbox-2">
                                                       <label for="minimal-checkbox-2">Electricité </label>
                                                   </li>
                                                   <li class="col-md-4 col-sm-6 col-xs-12">
                                                       <input type="checkbox" name="equipment[]" value="Gardiennage"
                                                           id="minimal-checkbox-3">
                                                       <label for="minimal-checkbox-3">Gardiennage </label>
                                                   </li>
                                                   <li class="col-md-4 col-sm-6 col-xs-12">
                                                       <input type="checkbox" name="equipment[]"
                                                           value="Gaz" id="minimal-checkbox-4">
                                                       <label for="minimal-checkbox-4">Gaz</label>
                                                   </li>
                                                   <li class="col-md-4 col-sm-6 col-xs-12">
                                                       <input type="checkbox" name="equipment[]" value="Parking"
                                                           id="minimal-checkbox-5">
                                                       <label for="minimal-checkbox-5">Parking</label>
                                                   </li>
                                                   <li class="col-md-4 col-sm-6 col-xs-12">
                                                       <input type="checkbox" name="equipment[]" value="Lits"
                                                           id="minimal-checkbox-6">
                                                       <label for="minimal-checkbox-6">Lits</label>
                                                   </li>
                                                   <li class="col-md-4 col-sm-6 col-xs-12">
                                                       <input type="checkbox" name="equipment[]" value="Armoires"
                                                           id="minimal-checkbox-7">
                                                       <label for="minimal-checkbox-7">Armoires</label>
                                                   </li>
                                                   <li class="col-md-4 col-sm-6 col-xs-12">
                                                       <input type="checkbox" name="equipment[]" value="Maintenance"
                                                           id="minimal-checkbox-8">
                                                       <label for="minimal-checkbox-8">Maintenance</label>
                                                   </li>
                                                   <li class="col-md-4 col-sm-6 col-xs-12">
                                                       <input type="checkbox" name="equipment[]" value="Equipements de cuisine"
                                                           id="minimal-checkbox-9">
                                                       <label for="minimal-checkbox-9">Equipements de cuisine</label>
                                                   </li>
                                               </ul>
                                           </div>
                                           <!-- Brands List End -->
                                       </div>
                                   </div>
                                   <!-- end row -->
                                    
                                    
                                    
                                 <!-- Image Upload  -->
                                 
                                 <!-- end row -->
                                 <!-- Image Upload  -->
                                 <div class="row">
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                       <label class="control-label">Photos du logement <small> Veuillez ajouter des images du logement. (350x450)</small></label>
                                       <div id="dropzone" class="dropzone"></div>
                                    </div>
                                 </div>
                                 <!-- end row -->
                                 
                                 <br>
                                 <h4>Détails de location</h4>
                                 <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                       <label class="control-label">Prix par jour</label>
                                       <input name="price_day" class="form-control" placeholder="e.g:10 000 FCFA " type="number">
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                          <label class="control-label">Prix par mois</label><br>
                                          <div>
                                             <input name="price_month" class="form-control" placeholder="e.g:75 000 FCFA " type="number">
                                          </div>
                                    </div>
                                 </div>
                                       
                                    <button type="submit" class="btn btn-theme pull-right">Enregistrer</button>
                              </div>
                           </fieldset>
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
                              <h4 class="panel-title"><a>Saftey Tips </a></h4>
                           </div>
                           <div class="widget-content">
                              <p class="lead">Posting an ad on <a href="#">Carspot</a> is free! However, all ads must follow our rules:</p>
                              <ol>
                                 <li>Make sure you post in the correct category.</li>
                                 <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                                 <li>Do not upload pictures with watermarks.</li>
                                 <li>Do not post ads containing multiple items unless it's a package deal.</li>
                                 <li>Do not put your email or phone numbers in the title or description.</li>
                                 <li>Make sure you post in the correct category.</li>
                                 <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                                 <li>Do not upload pictures with watermarks.</li>
                                 <li>Do not post ads containing multiple items unless it's a package deal.</li>
                              </ol>
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