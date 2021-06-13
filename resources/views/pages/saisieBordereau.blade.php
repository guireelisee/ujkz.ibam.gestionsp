@php
use App\Models\Bordereau;
use App\Models\Personnel;
@endphp
@extends('layouts.master')

@section('pageName')
Impression bordereau
@endsection

@section('pageContent')
<style>
    h5 {
        font-weight: bold
    }
</style>

<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- page title  -->
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Impression d'un bordereau</h3>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                <form action="{{ route('bordereau.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="common_input mb_15">
                                <h5>Nature des pièces</h5>
                                <input name="naturePieceB" class="form-control" type="text" placeholder="Saisir la nature des pièces">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="common_input mb_15">
                                <h5>Nombre de pièces</h5>
                                <input name="nombrePieceB" class="form-control" type="number" placeholder="Entrer le nombre des pièces" min=0>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="common_input mb_15">
                                <h5>Observation</h5>
                                <input name="observationB" class="form-control" type="text" placeholder="Renseigner l'observation à faire">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            @if ($bordereaus = Bordereau::all())
                            <h5>Destinataire existant</h5>
                            <select name="destinataireB" class="nice_Select2 nice_Select_line wide" style="display: none;">
                                <option value="">Selectionner un destinataire</option>
                                @foreach ($bordereaus as $bordereau)
                                <option value="{{$bordereau->destinataireB}}">{{$bordereau->destinataireB}}</option>
                                @endforeach
                            </select>
                            @endif
                        </div>
                        <div class="col-lg-6">
                            <div class="common_input mb_15">
                                <h5>Nouveau destinataire</h5>
                                <input class="form-control" type="text" placeholder="Saisir un destinataire">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h5>Membre du personnel</h5>
                            @if ($personnels = Personnel::all())
                            <select name="idP" class="nice_Select2 nice_Select_line wide" style="display: none;">
                                <option value="">Selectionner un signataire</option>
                                @foreach ($personnels as $personnel)
                                <option value="{{$personnel->idP}}">{{$personnel->prenomP." ".$personnel->nomP}}</option>
                                @endforeach
                            </select>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                        <div class="create_report_btn mt_30">
                            <a href="{{ route('bordereau.index') }}" class="btn btn-secondary btn-block"> Retour</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="create_report_btn mt_30">
                            <input type="submit" name="send" value="Imprimer" class="btn btn-success btn-block">
                        </div>
                    </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
