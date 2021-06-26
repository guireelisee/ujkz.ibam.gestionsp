
@php
header("Refresh:.0001; URL=../personnel");
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body style="background-color: white; font-size: 100%; color: black">

    @include('layouts.entete')

    <div class="wrapper">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                </div>
                <div class="col-6 text-center" style="margin-top: 6%">
                    <p class="bg-light border border-secondary p-6 rounded" style="font-size: 150%">
                        CERTIFICAT DE PRISE DE SERVICE <br><br>
                        <span style="font-style: italic">Pour régularisation</span>
                    </p>
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row text-justify mt-5" style="text-indent: 70px; margin: 0% 10% 0% 10%; line-height: 30px; font-size: 120%">
                <div class="col-12">
                    <div>
                        Je soussigné, Dr Blaise KONE, Directeur de l’Institut Burkinabé des Arts et Métiers (IBAM), certifie que <strong>
                            @foreach ($civilites as $civilite)
                            @if ($civilite->idCivilite == $personnel->idCivilite)
                            {{$civilite->intituleCivilite }}
                            @endif
                            @endforeach
                            {{$personnel->prenomP.' '.$personnel->nomP}}, numéro matricule {{$personnel->matriculeP}}</strong>,
                            @foreach ($titres as $titre)
                            @if ($titre->idTitreP == $personnel->idTitreP)
                            {{$titre->intituleTitreP}}
                            @endif
                            @endforeach
                            , mis à la disposition de l’Université Joseph KI-ZERBO et affecté à l’Institut Burkinabè des Arts et Métiers, par <strong>décision
                                @php
                                $article = (strcasecmp($personnel->motifPServ[0], 'a') == 0 || strcasecmp($personnel->motifPServ[0], 'e')== 0 || strcasecmp($personnel->motifPServ[0], 'i')== 0 || strcasecmp($personnel->motifPServ[0], 'o')== 0 || strcasecmp($personnel->motifPServ[0], 'y')== 0) ? 'd\'' : 'de ' ;
                                @endphp
                                {{$article . $personnel->motifPServ}} </strong> a effectivement pris service le <strong>{{date('d/m/Y', strtotime($personnel->datePServ))}}</strong> .
                            </div>
                            <div>
                                En foi de quoi le présent certificat est établi pour servir et valoir ce que de droit.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-3"></div>
                        <div class="col-3"></div>
                        <div class="col-6 text-left" style="margin: 2% 0% 0% 0%;">
                            <h4 style="color: black"><u>Dr Blaise KONE</u></h4>
                            <i>Maître de Conférences<br>
                                Chevalier de l’Ordre des palmes académiques</i>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="row mt-5">
                            <div class="col-3"></div>
                            <div class="col-3" style="margin: 2% 0% 0% -8%">
                                <h4 style="color: black"><u>Ampliations</u>:</h4>
                                <ul style="list-style-type: '-        '">
                                    <li>Présidence</li>
                                    <li>DRH</li>
                                    <li>DAF</li>
                                    <li>AC</li>
                                    <li>SP</li>
                                    <li>Intéressé</li>
                                    <li>Chrono </li>

                                    {{-- @foreach ($ampliations as $ampliation)
                                        @foreach ($idAmp as $id)
                                        @if ($ampliation->idAmp == $id)
                                        <li>
                                            {{$ampliation->intitule}}
                                        </li>
                                        @endif
                                        @endforeach
                                        @endforeach --}}
                                    </ul>
                                </div>
                                <div class="col-3"></div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">window.print();</script>

                </body>

                </html>
                