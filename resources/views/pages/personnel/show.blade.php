@extends('layouts.master')

@section('titre','Personnel')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('personnel.index') }}">Profil du personnel n°{{$personnel->idP}} </a></li>
@endsection

@section('main')
<!-- [ Main Content ] start -->
<div class="row">

    <!-- [ form-element ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h5>Informations</h5>
                <hr>
                <form class="needs-validation" action="{{ route('personnel.update', $personnel->idP) }}" method="post" novalidate>
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Nom</label>
                                <input name="nomP" type="text" class="form-control" placeholder="Entrez un nom" required value="{{$personnel->nomP}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Prénom(s)</label>
                                <input name="prenomP" type="text" class="form-control" placeholder="Entrez un prenom" required value="{{$personnel->prenomP}}" readonly>
                                <div class="invalid-feedback">
                                    Renseignez un prénom.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input name="emailP" type="email" class="form-control" placeholder="Entrez une adresse mail" required value="{{$personnel->emailP}}" readonly>
                                <div class="invalid-feedback">
                                    Renseignez une adresse mail.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Numéro de téléphone</label>
                                <input name="telephoneP" type="number" class="form-control" placeholder="Entrez un numéro de téléphone" required value="{{$personnel->telephoneP}}" readonly>
                                <div class="invalid-feedback">
                                    Renseignez un numéro de téléphone.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Civilité</label>
                                    @foreach ($civilites as $civilite)
                                    @if ($civilite->idCivilite === $personnel->idCivilite)
                                        <input name="telephoneP" type="text" class="form-control" placeholder="" required value="{{$civilite->intituleCivilite}}" readonly>
                                    @endif
                                    @endforeach
                                <div class="invalid-feedback">
                                    Renseignez un signataire.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Titre</label>
                                    @foreach ($titres as $titre)
                                    @if ($titre->idTitreP === $personnel->idTitreP)
                                        <input name="telephoneP" type="text" class="form-control" placeholder="" required value="{{$titre->intituleTitreP}}" readonly>
                                    @endif
                                    @endforeach
                                <div class="invalid-feedback">
                                    Renseignez un signataire.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Fonction</label>
                                    @foreach ($fonctions as $fonction)
                                        @if ($fonction->idFonctionP === $personnel->idFP)
                                            <input class="form-control" type="text" name="" value="{{$fonction->intituleFonctionP}}" readonly>
                                        @endif
                                    @endforeach
                                <div class="invalid-feedback">
                                    Renseignez un signataire.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Service</label>
                                <input name="serviceP" type="text" class="form-control" placeholder="Entrez un service" required value="{{$personnel->serviceP}}" readonly>
                                <div class="invalid-feedback">
                                    Renseignez un service.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Motif de prise de service</label>
                                <input name="motifPServ" type="text" class="form-control" placeholder="Entrez un motif" required value="{{$personnel->motifPServ}}" readonly>
                                <div class="invalid-feedback">
                                    Renseignez un service.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Date de naissance</label>
                                <input name="dateNaissanceP" type="text" class="form-control" placeholder="Entrez une date" required value="{{date('d M Y', strtotime($personnel->dateNaissanceP))}}" readonly>
                                <div class="invalid-feedback">
                                    Renseignez une date.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Date de retraite</label>
                                <input name="dateRetraiteP" type="text" class="form-control" placeholder="Entrez une date" required value="{{date('d M Y', strtotime($personnel->dateRetraiteP))}}" readonly>
                                <div class="invalid-feedback">
                                    Renseignez une date.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col-12">
                            <a name="" id="" class="btn btn-primary" href="{{ route('personnel.index') }}" role="button">Retour</a>
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

