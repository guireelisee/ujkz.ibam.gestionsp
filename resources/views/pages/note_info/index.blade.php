@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('datatable/main.d810cf0ae7f39f28f336.css') }}">
@endsection

@section('titre','Notes d\'information')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('note_info.index') }}">Base de données</a></li>
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
            <div class="card-header">
                <div class="card-header-right">
                    {{-- <a href="{{ route('note_info.cessation') }}" type="button" class="btn btn-danger"><i class="fa fa-user-minus" aria-hidden="true"></i> Cessation de service</a> --}}
                    <a href="{{ route('note_info.create') }}" type="button" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Imprimer une note</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    {{-- id="example" --}}
                    <table class="table table-hover mb-0" id="">
                        <thead>
                            <tr>
                                <th scope="col">N°</th>
                                <th scope="col">Destinataire</th>
                                <th scope="col">Signataire</th>
                                <th scope="col">Corps</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notes as $note)
                            <tr>
                                <th scope="col">{{$note->idNI}}</th>
                                <th scope="col">{{$note->idDNI}}</th>
                                <th scope="col">
                                    @foreach ($personnels as $personnel)
                                        @if ($personnel->idP === $personnel->idP)
                                            {{$personnel->prenomP.' '.$personnel->nomP}}
                                        @endif
                                    @endforeach
                                </th>
                                <th scope="col">{{$note->corpsNI}}</th>
                                <th scope="col">
                                    <form action="{{ route('note_info.destroy', $personnel->idP)}}" method="POST">
                                        <a class="btn btn-success" href="{{ route('note_info.show',$personnel->idP) }}"><i class="fas fa-folder"></i></a>
                                            <a class="btn btn-alternate" href="{{ route('note_info.edit',$personnel->idP) }}"><i class="fas fa-edit"></i></a>
                                            @csrf
                                            @method('POST')
                                            <button class="btn btn-danger" type="submit"><i class="fas fa-user-minus"></i></button>
                                    </form>
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
