<!--<> -->
@extends('layout')

@section('content')

        <div class="page-header-area-2 gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="small-breadcrumb">
                            <div class="breadcrumb-link">
                                <ul>
                                    <li><a href="index.html">Home Page</a></li>
                                    <li><a class="active" href="#">Enregistrement de véhicule</a></li>
                                </ul>
                            </div>
                            <div class="header-page">
                                <h1>Enregistrement de véhicule</h1>
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
                    <!-- Row <> -->
                    <div class="row">
                        <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
                            <!-- end post-padding -->
                            <div class="post-ad-form postdetails">
                                <form class="submit-form" enctype="multipart/form-data" action="/addVehicule" method="POST">
                                    @csrf
                                    <!-- Marque  -->
                                    <div class="row">
                                        <h2>Informations du véhicule</h2>
                                        <br>
                                        <h4>Caractéristiques principales</h4>
                                        <br>
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                            <label class="control-label">Modèle du véhicule</label>
                                            <input class="form-control" name="modele" id="modele"
                                                placeholder="Brand new honda civic 2017 for sale" type="text" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- Concessionnaire  -->
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label class="control-label">Marque</label>
                                            <input class="form-control" name="marque" id="marque"
                                                placeholder="e.g: TOYOTA" type="text" required>
                                        </div>

                                        <!-- Catégorie  -->
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label class="control-label">Catégorie</label>
                                            <select name="categorie" id="categorie" class="form-control make" required>
                                                <option label="Any Make"></option>
                                                <option value="Berline">Berline</option>
                                                <option value="SUV">SUV </option>
                                                <option value="Cabriolet">Cabriolet </option>
                                                <option value="Pick up">Pick-up </option>
                                                <option value="Hatchback">Hatchback </option>
                                                <option value="Break">Break</option>
                                                <option value="Monospace">Monospace </option>
                                                <option value="Voiture de sport">Voiture de sport </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!-- Prix  -->
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label class="control-label">Prix</label>
                                            <input class="form-control" name="prix" id="prix"
                                                placeholder="e.g: 1000000" type="number" required>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label for="parking_id">Parking :</label>
                                            <select id="parking_id" name="parking_id">
                                                @foreach($parkings as $parking)
                                                    <option label="Any Make"></option>
                                                    <option value="{{ $parking->id }}">{{ $parking->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <br>
                                    <h4>Détails</h4>

                                    <div class="row">
                                        <!-- Nbre places  -->
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label class="control-label">Nombre de places </label>
                                            <input class="form-control" name="nbre_place" id="nbre_place"
                                                placeholder="eg: 5" type="number" max="100" required>
                                        </div>
                                        <!-- Nbre portes -->
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label class="control-label">Nombre de portes </label>
                                            <input name="nbre_porte" id="nbre_porte" class="form-control"
                                                placeholder="eg: 4" type="number" max="10" required>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row">
                                        <!-- Energie  -->
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label class="control-label">Energie</label>
                                            <select name="energie" id="energie" class=" form-control make" required>
                                                <option label="Any Make"></option>
                                                <option value="Essence">Essence</option>
                                                <option value="Diesel">Diesel</option>
                                                <option value="Electricite">Electricité </option>
                                                <option value="Hybride">Hybride </option>
                                                <option value="Hydrogene">Hydrogène </option>
                                            </select>
                                        </div>
                                        <!-- Boite de vitesse  -->
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label class="control-label">Boite de vitesse</label>
                                            <select name="boite_vitesse" id="boite_vitesse" class=" form-control make"
                                                required>
                                                <option label="Any Make"></option>
                                                <option value="Manuelle">Manuelle</option>
                                                <option value="Automatic">Automatique </option>
                                                <option value="A_double_embrayage">A double embrayage </option>
                                                <option value="Robotisee">Robotisée </option>
                                                <option value="CVT">CVT </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <div class="row">
                                        <!-- Kilométrage  -->
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label class="control-label">Kilométrage </label>
                                            <input name="kilometrage" id="kilometrage" class="form-control"
                                                placeholder="eg: 20 000 km " type="number" required>
                                        </div>
                                        <!-- Année -->
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label class="control-label">Année </label>
                                            <input name="annee" id="annee" class="form-control"
                                                placeholder="eg: 2010 " type="number" min="1900" max="2022"
                                                required>
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
                                                        <input type="checkbox" name="supplement[]" value="Air Conditionee"
                                                            id="minimal-checkbox-1">
                                                        <label for="minimal-checkbox-1">Air conditionnée</label>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6 col-xs-12">
                                                        <input type="checkbox" name="supplement[]" value="ABS"
                                                            id="minimal-checkbox-2">
                                                        <label for="minimal-checkbox-2">ABS </label>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6 col-xs-12">
                                                        <input type="checkbox" name="supplement[]" value="Air Bags"
                                                            id="minimal-checkbox-3">
                                                        <label for="minimal-checkbox-3">Air Bags </label>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6 col-xs-12">
                                                        <input type="checkbox" name="supplement[]"
                                                            value="Direction Assiste" id="minimal-checkbox-4">
                                                        <label for="minimal-checkbox-4">Direction assistée</label>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6 col-xs-12">
                                                        <input type="checkbox" name="supplement[]" value="ESP"
                                                            id="minimal-checkbox-5">
                                                        <label for="minimal-checkbox-5">ESP</label>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6 col-xs-12">
                                                        <input type="checkbox" name="supplement[]" value="GPS"
                                                            id="minimal-checkbox-6">
                                                        <label for="minimal-checkbox-6">GPS</label>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6 col-xs-12">
                                                        <input type="checkbox" name="supplement[]" value="AM/FM Radio"
                                                            id="minimal-checkbox-7">
                                                        <label for="minimal-checkbox-7">AM/FM Radio</label>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6 col-xs-12">
                                                        <input type="checkbox" name="supplement[]" value="Coffre De Toit"
                                                            id="minimal-checkbox-8">
                                                        <label for="minimal-checkbox-8">Coffre de toit</label>
                                                    </li>
                                                    <li class="col-md-4 col-sm-6 col-xs-12">
                                                        <input type="checkbox" name="supplement[]" value="Siege Enfant"
                                                            id="minimal-checkbox-9">
                                                        <label for="minimal-checkbox-9">Siège enfant</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Brands List End -->
                                        </div>
                                    </div>
                                    <!-- end row -->


                                    <!-- Ad Type  -->
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label class="control-label">Etat véhicule avant location</label>
                                            <div class="skin-minimal">
                                                <ul class="list">
                                                    <li>
                                                        <input tabindex="7" type="radio" id="minimal-radio-1"
                                                            name="etat" value="Neuf"> Neuf
                                                    </li>
                                                    <li>
                                                        <input tabindex="8" type="radio" id="minimal-radio-2"
                                                            name="etat" value="Utilise"> Utilisé
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    
                                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                                            <label class="control-label">Disponible</label>
                                            <div class="skin-minimal">
                                                <ul class="list">
                                                    <li>
                                                        <input tabindex="7" type="radio" id="minimal-radio-1"
                                                            name="disponible" value="1"> Oui
                                                    </li>
                                                    <li>
                                                        <input tabindex="8" type="radio" id="minimal-radio-2"
                                                            name="disponible" value="0"> Non
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>

                                     <!-- Image Upload  -->
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                            <label class="control-label">Photos du véhicule <small>Ajoutez des images de votre véhicule. (350x450)</small></label>
                                            <input type="file" id="dropzone" class="dropzone" name="image[]" multiple> 
                                        </div>
                                    </div>
                                    <!-- end row -->
                                    <button type="submit" class="btn btn-theme pull-right">Soumettre</button>

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </form>

                            </div>
                        

                    
        </div>
        <!-- end row -->

        <!-- Ad Type  -->

        <!-- end row -->

        <!-- end post-ad-form-->
        
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
                        <p class="lead">Posting an ad on <a href="#">StayRide</a> is free! However, all ads must
                            follow our rules:</p>
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
        <!-- Middle Content Area  End -->
        <!-- end col -->
        </div>
        <!-- Row End -->
        </div>
        <!-- Main Container End -->
        </section>
        <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
        @endsection
