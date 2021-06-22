@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('datatable/main.d810cf0ae7f39f28f336.css') }}">
@endsection

@section('titre','Bordereau')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('bordereau.index') }}">Archives</a></li>
@endsection

@section('main')

<!-- [ Main Content ] start -->
<div class="row">

    <!-- prject ,team member start -->
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <div class="card-header-right">
                    <a href="{{ route('bordereau.create') }}" type="button" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Imprimer</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    {{-- id="example" --}}
                    <table class="table table-hover mb-0" id="">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nature</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Observation</th>
                                <th scope="col">Destinataire</th>
                                <th scope="col">Signataire</th>
                                <th scope="col">Date de création</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bordereaus as $bordereau)
                            <tr>
                                <th scope="col">{{$bordereau->idB}}</th>
                                <th scope="col">{{$bordereau->naturePieceB}}</th>
                                <th scope="col">{{$bordereau->nombrePieceB}}</th>
                                <th scope="col">{{$bordereau->observationB}}</th>
                                <th scope="col">{{$bordereau->destinataireB}}</th>
                                <th scope="col">
                                    @foreach ($personnels as $personnel)
                                        @if ($personnel->idP === $bordereau->idP)
                                            {{$personnel->nomP .' '.$personnel->prenomP}}
                                        @endif
                                    @endforeach
                                </th>
                                <th scope="col">{{date('d M y', strtotime($bordereau->created_at))}}</th>
                                <th scope="col">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-3">
                                            <a name="" id="" class="btn btn-primary" href="{{ route('bordereau.edit', $bordereau->idB) }}" role="button"><i class="fas fa-edit"></i></a>
                                        </div>
                                        <div class="col-xl-3 col-md-3">
                                            <form action="" method="post">
                                                <a name="" id="" class="btn btn-danger" href="{{ route('bordereau.destroy', $bordereau->idB) }}" role="button"><i class="fas fa-trash"></i></a>
                                            </form>
                                        </div>
                                        <div class="col-xl-3 col-md-3">
                                            <form action="{{ route('bordereau.print', ['idB'=>$bordereau->idB]) }}" method="POST">
                                                @csrf
                                                @method('POST')
                                                  <button type="submit" class="btn btn-success"><i class="fas fa-print"></i></button>
                                            </form>
                                        </div>
                                    </div>
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
