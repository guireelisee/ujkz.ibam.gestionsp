<?php
use App\Http\Controllers\BordereauController;
use App\Http\Controllers\PersonnelController;
$idB = $_GET['idB'];
$idP = $_GET['idP'];
?>

@extends('layouts.maquette')
@section('objet')
BORDEREAU <br>
DES PIECES TRANSMISES <br>
@endsection

@section('conjonction')
A <br>
@endsection

@section('destinataire')
@if ( $bordereau = BordereauController::getBordereau($idB))
    {{$bordereau->destinataireB}}
@endif
@endsection

@section('corps')
<br><br>
<div class="container">
    <div class="row">
        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th>NATURE DES PIECES</th>
                    <th>NOMBRE DE PIECES</th>
                    <th>OBSERVATION</th>
                </tr>
            </thead>
            <tbody>
                @if ( $bordereau = BordereauController::getBordereau($idB))
                <tr>
                    <td>{{$bordereau->naturePieceB}}</td>
                    <td>{{$bordereau->nombrePieceB}}</td>
                    <th>{{$bordereau->observationB}}</th>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('signataire')
<div class="container">
    <div class="row text-center">
        <div class="col">
            <span>
                <div style="margin: 10% 0% 0% 70%">
                    @if ( $bordereau = PersonnelController::getPersonnelById($idP))
                    <span>
                        @if ($bordereau->prenomP == "Ousmane")
                            Pour le Directeur de l’IBAM, et P/D le Secrétaire Principal
                        @else
                            @if ( $personnel = PersonnelController::getPersonnelById($idP))
                                Par {{$personnel->prenomP." ".$personnel->nomP}}
                            @endif
                        @endif
                    </span>
                    @endif
                </div>
            </span>
        </div>
    </div>
    <div class="row text-center" style="font-weight: bolder">
        <div class="col">
            <span>
                <div style="margin: 5% 0% 0% 70%">
                    @if ( $personnel = PersonnelController::getPersonnelById($idP))
                    <u>
                        {{$personnel->prenomP." ".$personnel->nomP}}
                    </u>
                    @endif
                </div>
            </span>
        </div>
    </div>
</div>
@endsection

