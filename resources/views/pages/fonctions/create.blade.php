@extends('layouts.master')

@section('titre','Fonctions')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('fonctions.store') }}">Enregistrement</a></li>
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
                <form class="needs-validation" action="{{ route('fonctions.store') }}" method="post" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Intitulé</label>
                                <input name="fonction" type="text" class="form-control" placeholder="Entrez une fonction" required>
                                <div class="invalid-feedback">
                                    Renseignez une fonction.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Corps</label>
                                <select name="corps" id="corps" class="form-control" >
                                    <option value="" disabled>Selectionner un corps</option>
                                    <option value="P">Personnel</option>
                                    <option value="V">Visiteur</option>
                                </select>
                                <div class="invalid-feedback">
                                    Renseignez un corps.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col-10">
                            <a name="" id="" class="btn btn-primary" href="{{ route('types.index') }}" role="button">Retour</a>
                        </div>
                        <div class="col-0">
                            <button type="submit" class="btn btn-success">Ajouter</button>
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

