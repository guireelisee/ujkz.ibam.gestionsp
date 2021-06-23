@extends('layouts.master')

@section('titre','Fonctions du visiteur')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('fonctions.index') }}">Edition de la fonction n°{{$fonctionVisiteur->idFonctionV}} </a></li>
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
                <form class="needs-validation" action="{{ route('fonction_visiteur.update', $fonctionVisiteur->idFonctionV) }}" method="post" novalidate>
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Intitulé</label>
                                <input name="intituleFonctionV" type="text" class="form-control" placeholder="Entrez une fonction" required value="{{$fonctionVisiteur->intituleFonctionV}}">
                                <div class="invalid-feedback">
                                    Renseignez une fontion.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col-10">
                            <a name="" id="" class="btn btn-primary" href="{{ route('fonctions.index') }}" role="button">Retour</a>
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

