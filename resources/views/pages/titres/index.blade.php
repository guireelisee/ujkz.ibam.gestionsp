@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('datatable/main.d810cf0ae7f39f28f336.css') }}">
@endsection

@section('titre','Titres')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('types.index') }}">Disponibles</a></li>
@endsection

@section('main')

@if(session()->get('delete'))
<div class="alert alert-danger">
    {{ session()->get('delete') }}
</div><br />
@endif
@if(session()->get('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
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
            <div class="card-header">
                <div class="card-header-right">
                    <a href="{{ route('titres.create') }}" type="button" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    {{-- id="example" --}}
                    <table class="table table-hover mb-0" id="">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Corps</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($titresP as $titreP)
                            <tr>
                                <th scope="col">{{$titreP->idTitreP}}</th>
                                <th scope="col">{{$titreP->intituleTitreP}}</th>
                                <th scope="col">Personnel</th>
                                <th scope="col">
                                    {{-- <form action="{{ route('type_mission.destroy', $typeMission->idTM)}}" method="POST"> --}}
                                        <a class="btn btn-alternate" href="{{ route('titre_personnel.edit',$titreP->idTitreP) }}"><i class="fas fa-edit"></i></a>
                                        {{-- @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                        </form> --}}
                                    </th>
                                </tr>
                                @endforeach
                                @foreach ($titresV as $titreV)
                                <tr>
                                    <th scope="col">{{$titreV->idTitreV}}</th>
                                    <th scope="col">{{$titreV->intituleTitreV}}</th>
                                    <th scope="col">Visiteur</th>
                                    <th scope="col">
                                        {{-- <form action="{{ route('type_mission.destroy', $typeMission->idTM)}}" method="POST"> --}}
                                        <a class="btn btn-alternate" href="{{ route('titre_visiteur.edit',$titreV->idTitreV) }}"><i class="fas fa-edit"></i></a>
                                        {{-- @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
                                        </form> --}}
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
