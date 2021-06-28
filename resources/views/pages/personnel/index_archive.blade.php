@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('datatable/main.d810cf0ae7f39f28f336.css') }}">
@endsection

@section('titre','Personnel')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('personnel.index') }}">Base de données</a></li>
@endsection

@section('main')

@if(session()->get('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session()->get('delete') }}
</div><br />
@endif
@if(session()->get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div><br />
@endif


{{-- <div class="row">
    <div class="col-sm-6">
        <div class="toast hide toast-3s" role="alert" aria-live="assertive" data-delay="3000" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">Bootstrap 3s</strong>
                <small class="text-muted">A l'instant</small>
                <button type="button" class="m-l-5 mb-1 mt-1 close" data-dismiss="toast" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
        </div>
        <button class="btn btn-primary" onclick="$('.toast-3s').toast('show')">3 sec</button>
    </div>
</div> --}}

<!-- [ Main Content ] start -->
<div class="row">

    <!-- prject ,team member start -->
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    {{-- id="example" --}}
                    <table class="table table-hover mb-0" id="">
                        <thead>
                            <tr>
                                <th scope="col">Matricule</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Fonction</th>
                                <th scope="col">Téléphone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Prise de service</th>
                                <th scope="col">Fin de service</th>
                                <th scope="col">Dossiers</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personnels as $personnel)
                            <tr>
                                <th scope="col">{{$personnel->matriculeP}}</th>
                                <th scope="col">
                                    @foreach ($titres as $titre)
                                        @if ($titre->idTitreP === $personnel->idTitreP)
                                            {{$titre->intituleTitreP}}
                                        @endif
                                    @endforeach
                                </th>
                                <th scope="col">{{$personnel->nomP}}</th>
                                <th scope="col">{{$personnel->prenomP}}</th>
                                <th scope="col">
                                    @foreach ($fonctions as $fonction)
                                        @if ($fonction->idFonctionP === $personnel->idFP)
                                            {{$fonction->intituleFonctionP}}
                                        @endif
                                    @endforeach
                                </th>
                                <th scope="col"><a href="tel:+226{{$personnel->telephoneP}}">{{$personnel->telephoneP}}</a> </th>
                                <th scope="col"><a href="mailto:{{$personnel->emailP}}" target="_blank">{{$personnel->emailP}}</a> </th>
                                <th scope="col">{{date('d/m/Y', strtotime($personnel->datePServ))}}</th>
                                <th scope="col">{{date('d/m/Y', strtotime($personnel->dateFServ))}}</th>
                                <th scope="col">
                                    <a class="btn btn-success" href="{{ route('personnel.show',$personnel->idP) }}"><i class="fas fa-folder"></i></a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('datatable/scripts/main.d810cf0ae7f39f28f336.js') }}"></script>
@endsection
