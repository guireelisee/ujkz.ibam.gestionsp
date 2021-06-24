@extends('layouts.master')

@section('titre','Personnel')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('personnel.index') }}">Edition du personnel n°{{$personnel->idP}} </a></li>
@endsection

@section('main')
<!-- [ Main Content ] start -->
<div class="row">

    <!-- [ form-element ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Informations à modifier</h5>
                <hr>
                <form class="needs-validation" action="{{ route('personnel.update', $personnel->idP) }}" method="post" novalidate>
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input name="nomP" type="text" class="form-control" placeholder="Entrez un nom" required value="{{$personnel->nomP}}">
                                <div class="invalid-feedback">
                                    Renseignez un nom.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Prénom(s)</label>
                                <input name="prenomP" type="text" class="form-control" placeholder="Entrez un prenom" required value="{{$personnel->prenomP}}">
                                <div class="invalid-feedback">
                                    Renseignez un prénom.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input name="emailP" type="email" class="form-control" placeholder="Entrez une adresse mail" required value="{{$personnel->emailP}}">
                                <div class="invalid-feedback">
                                    Renseignez une adresse mail.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Numéro de téléphone</label>
                                <input name="telephoneP" type="number" class="form-control" placeholder="Entrez un numéro de téléphone" required value="{{$personnel->telephoneP}}">
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
                                    @if ($civilite->idCivilite === $personnel->idCivilite)
                                    <option value="{{$civilite->idCivilite}}" selected>{{$civilite->intituleCivilite}}</option>
                                    @else
                                    <option value="{{$civilite->idCivilite}}">{{$civilite->intituleCivilite}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Renseignez un signataire.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Titre</label>
                                <select class="form-control" name="idTitreP" id="" required>
                                    <option disabled>Sélectionnez un titre</option>
                                    @foreach ($titres as $titre)
                                    @if ($titre->idTitreP === $personnel->idTitreP)
                                    <option value="{{$titre->idTitreP}}" selected>{{$titre->intituleTitreP}}</option>
                                    @else
                                    <option value="{{$titre->idTitreP}}">{{$titre->intituleTitreP}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Renseignez un signataire.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fonction</label>
                                <select class="form-control" name="idFP" required>
                                    <option disabled>Sélectionnez une fonction</option>
                                    @foreach ($fonctions as $fonction)
                                    @if ($fonction->idFonctionP === $personnel->idFP)
                                    <option value="{{$fonction->idFonctionP}}" selected>{{$fonction->intituleFonctionP}}</option>
                                    @else
                                    <option value="{{$fonction->idFonctionP}}">{{$fonction->intituleFonctionP}}</option>
                                    @endif
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Renseignez un signataire.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Service</label>
                                <input name="serviceP" type="text" class="form-control" placeholder="Entrez un service" required value="{{$personnel->serviceP}}">
                                <div class="invalid-feedback">
                                    Renseignez un service.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Motif de prise de service</label>
                                <input name="motifPServ" type="text" class="form-control" placeholder="Entrez un motif" required value="{{$personnel->motifPServ}}">
                                <div class="invalid-feedback">
                                    Renseignez un motif.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Date de naissance</label>
                                <input name="dateNaissanceP" type="text" class="form-control" placeholder="Entrez une date" required value="{{$personnel->dateNaissanceP}}" readonly>
                                <div class="invalid-feedback">
                                    Renseignez une date.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Date de retraite</label>
                                <input name="dateRetraiteP" type="text" class="form-control" placeholder="Entrez une date" required value="{{$personnel->dateRetraiteP}}" readonly>
                                <div class="invalid-feedback">
                                    Renseignez une date.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col-10">
                            <a name="" id="" class="btn btn-primary" href="{{ route('personnel.index') }}" role="button">Retour</a>
                        </div>
                        <div class="col-0">
                            <button type="submit" class="btn btn-success">Modifier</button>
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

