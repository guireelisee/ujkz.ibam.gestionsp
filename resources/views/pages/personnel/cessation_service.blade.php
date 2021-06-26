@extends('layouts.master')

@section('titre','Cessation de service')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('personnel.index') }}">Impression d'une cessation de service</a></li>
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
                <form class="needs-validation" action="{{ route('personnel.print_cessation') }}" method="post" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Motif</label>
                                <input name="motifFServ" type="text" class="form-control" placeholder="Entrez un motif" required>
                                <div class="invalid-feedback">
                                    Renseignez un motif.
                                </div>
                            </div>
                        </div>
                        @php
                        date_default_timezone_set("Africa/Abidjan");
                        $date = date("Y-m-d", time());
                        @endphp

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date</label>
                                <input name="dateFServ" type="date" class="form-control" placeholder="Entrez une date" required value="{{$date}}">
                                <div class="invalid-feedback">
                                    Renseignez une date.
                                </div>
                            </div>
                        </div>
                    </div>

                    <input class="form-control" type="text" name="idP" value="{{$idP}}" hidden>

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

