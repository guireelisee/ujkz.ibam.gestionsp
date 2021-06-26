@extends('layouts.master')

@section('titre','Prise de service')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('personnel.index') }}">Enregistrement d'un personnel et impression</a></li>
@endsection

@section('main')
<!-- [ Main Content ] start -->
<div class="row">

    <!-- [ form-element ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Informations à renseigner</h5>
                <hr>
                <form class="needs-validation" action="{{ route('personnel.store') }}" method="post" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input name="nomP" type="text" class="form-control" placeholder="Entrez un nom" required>
                                <div class="invalid-feedback">
                                    Renseignez un nom.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Prénom(s)</label>
                                <input name="prenomP" type="text" class="form-control" placeholder="Entrez un prenom" required>
                                <div class="invalid-feedback">
                                    Renseignez un prénom.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Matricule</label>
                                <input name="matriculeP" type="text" class="form-control" placeholder="Entrez un matricule" required>
                                <div class="invalid-feedback">
                                    Renseignez un matricule.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input name="emailP" type="email" class="form-control" placeholder="Entrez une adresse mail" required>
                                <div class="invalid-feedback">
                                    Renseignez une adresse mail.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Numéro de téléphone</label>
                                <input name="telephoneP" type="number" class="form-control" placeholder="Entrez un numéro de téléphone" required>
                                <div class="invalid-feedback">
                                    Renseignez un numéro de téléphone.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Civilité</label>
                                <select class="form-control" name="idCivilite" id="" required>
                                    <option disabled>Sélectionnez une civilité</option>
                                    @foreach ($civilites as $civilite)
                                    <option value="{{$civilite->idCivilite}}">{{$civilite->intituleCivilite}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Renseignez une civilité.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Titre</label>
                                <select class="form-control" name="idTitreP" id="" required>
                                    <option disabled>Sélectionnez un titre</option>
                                    @foreach ($titres as $titre)
                                    <option value="{{$titre->idTitreP}}">{{$titre->intituleTitreP}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Renseignez un titre.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fonction</label>
                                <select class="form-control" name="idFP" required>
                                    <option disabled>Sélectionnez une fonction</option>
                                    @foreach ($fonctions as $fonction)
                                    <option value="{{$fonction->idFonctionP}}">{{$fonction->intituleFonctionP}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Renseignez une fonction.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Type de personnel</label>
                                <select class="form-control" name="idTP" required>
                                    <option disabled>Sélectionnez un type</option>
                                    @foreach ($types as $type)
                                    <option value="{{$type->idTP}}">{{$type->intituleTP}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Renseignez un service.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Service</label>
                                <input name="serviceP" type="text" class="form-control" placeholder="Entrez un service">
                                <div class="invalid-feedback">
                                    Renseignez un service.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Motif de prise de service</label>
                                <input name="motifPServ" type="text" class="form-control" placeholder="Entrez un motif" required>
                                <div class="invalid-feedback">
                                    Renseignez un motif.
                                </div>
                            </div>
                        </div>

                        @php
                        date_default_timezone_set("Africa/Abidjan");
                        $date = date("Y-m-d", time());
                        @endphp

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Date de naissance</label>
                                <input name="dateNaissanceP" type="date" class="form-control" placeholder="Entrez une date" required max="{{$date}}">
                                <div class="invalid-feedback">
                                    Renseignez une date.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Date de prise de service</label>
                                <input name="datePServ" type="date" class="form-control" placeholder="Entrez une date" required value="{{$date}}">
                                <div class="invalid-feedback">
                                    Renseignez une date.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Date de retraite</label>
                                <input name="dateRetraiteP" type="date" class="form-control" placeholder="Entrez une date" required min="{{$date}}">
                                <div class="invalid-feedback">
                                    Renseignez une date.
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="form-control" type="text" name="statut" value="1" hidden>
                    <div class="row text-right">
                        <div class="col-10">
                            <a name="" id="" class="btn btn-primary" href="{{ route('personnel.index') }}" role="button">Retour</a>
                        </div>
                        <div class="col-0">
                            <button type="submit" class="btn btn-success">Imprimer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @endsection

    @section('js')

    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    @endsection

