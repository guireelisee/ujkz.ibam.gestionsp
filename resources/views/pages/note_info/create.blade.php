@extends('layouts.master')

@section('css')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link rel="stylesheet" href="{{ asset('assets/editor/summernote.min.css') }}">
    <script src="{{ asset('assets/editor/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/editor/lang/summernote-fr-FR.js') }}"></script>
@endsection

@section('titre','Note d\'information')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('note_info.index') }}">Impression</a></li>
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
                <form class="needs-validation" action="{{ route('note_info.store') }}" method="post" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Destinataire</label>
                                <select class="form-control" name="idDNI" id="" required>
                                    <option disabled>Sélectionnez un signataire</option>
                                    @foreach ($destinataires as $destinataire)
                                    <option value="{{$destinataire->idDNI}}">{{$destinataire->intituleDNI}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Renseignez un signataire.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Signataire</label>
                                <select class="form-control" name="idP" id="" required>
                                    <option disabled>Sélectionnez un signataire</option>
                                    @foreach ($personnels as $personnel)
                                    <option value="{{$personnel->idP}}">{{$personnel->nomP .' '. $personnel->prenomP}}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Renseignez un signataire.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Corps</label>
                                <div id="summernote" name="corpsNI">

                                </div>
                                <div class="invalid-feedback">
                                    Renseignez une observation.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col-10">
                            <a name="" id="" class="btn btn-primary" href="{{ route('note_info.index') }}" role="button">Retour</a>
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

        $('#summernote').summernote({
            lang: 'fr-FR',
            placeholder: 'Saisir le corps de la note ici...',
            tabsize: 2,
            height: 120,
            toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });

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

