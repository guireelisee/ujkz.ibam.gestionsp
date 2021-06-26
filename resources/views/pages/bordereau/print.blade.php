@extends('layouts.maquette_bordereau')
@section('objet')
BORDEREAU <br>
DES PIECES TRANSMISES <br>
@endsection

@section('conjonction')
A <br>
@endsection

@section('destinataire')
    {{$bordereau->destinataireB}}
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
                <tr>
                    <td>{{$bordereau->naturePieceB}}</td>
                    <td>{{$bordereau->nombrePieceB}}</td>
                    <th>{{$bordereau->observationB}}</th>
                </tr>
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
                    @foreach ($personnels as $personnel)
                    @if ($personnel->idP === $bordereau->idP)
                        <span>
                        @if ($personnel->prenomP == "Ousmane")
                            Pour le Directeur de l’IBAM, et P/D le Secrétaire Principal
                        @else
                            Par {{$personnel->prenomP." ".$personnel->nomP}}
                        @endif
                    </span>
                    @endif
                    @endforeach

                </div>
            </span>
        </div>
    </div>
    <div class="row text-center" style="font-weight: bolder">
        <div class="col">
            <span>
                <div style="margin: 5% 0% 0% 70%">
                    @foreach ($personnels as $personnel)
                        @if ($personnel->idP === $bordereau->idP)
                        <u>
                            {{$personnel->prenomP." ".$personnel->nomP}}
                        </u>
                        @endif
                    @endforeach
                </div>
            </span>
        </div>
    </div>
</div>
@endsection

