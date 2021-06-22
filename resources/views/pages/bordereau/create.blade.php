@extends('layouts.master')

@section('titre','Bordereau')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('bordereau.index') }}">Impression</a></li>
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
                <form class="needs-validation" action="{{ route('bordereau.store') }}" method="post" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nature des pièces</label>
                                <input name="naturePieceB" type="text" class="form-control" placeholder="Entrez une nature" required>
                                <div class="invalid-feedback">
                                    Renseignez une nature.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Nombre de pièces</label>
                                <input name="nombrePieceB" type="number" class="form-control" placeholder="Entrez un nombre" min="1" value="1">
                            </div>
                            <div class="invalid-feedback">
                                Renseignez un nombre.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Observation</label>
                                <input name="observationB" type="text" class="form-control" placeholder="Entrez une observation" required>
                                <div class="invalid-feedback">
                                    Renseignez une observation.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Destinataire</label>
                                <input name="destinataireB" type="text" class="form-control" placeholder="Entrez un destinataire" required>
                                <div class="invalid-feedback">
                                    Renseignez un destinataire.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Signataire</label>
                                <select class="form-control" name="idP" id="" required>
                                    <option disabled selected>Sélectionnez un signataire</option>
                                    @foreach ($personnels as $personnel)
                                        <option value="{{$personnel->idP}}">{{$personnel->nomP .' '. $personnel->prenomP}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Renseignez un signataire.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col-10">
                            <a name="" id="" class="btn btn-primary" href="{{ route('bordereau.index') }}" role="button">Retour</a>
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

