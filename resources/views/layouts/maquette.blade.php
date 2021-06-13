
<?php
header("Refresh:.0001; URL=../Bordereau);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>



<body style="background-color: white; font-size: 110%">

    <div class="wrapper" style="font-weight: bold">
        <!-- Content Wrapper. Contains page content -->
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <span>
                        <em>KGTAN/ <br></em>
                        MINISTERE DE L’ENSEIGNEMENT SUPERIEUR, <br>
                        DE LA RECHERCHE SCIENTIFIQUE <br>
                        ET DE L’INNOVATION <br>
                        -=-=-=-=-=-=-=- <br>
                        SECRETARIAT GENERAL <br>
                        -=-=-=-=-=-=- <br>
                        UNIVERSITE JOSEPH KI-ZERBO <br>
                        -=-=-=--=-==-=- <br>
                    </span>
                </div>
                <div class="col" style="margin: 5% 0 0 0">
                    <img class="mt-5" src="{{ asset('img/logo/UO.jpg') }}" width= "150" height="150" alt="">
                </div>
                <div class="col">
                    <span>
                        BURKINA FASO <br>
                        -=-=-=-=-=- <br>
                        Unité – Progrès – Justice !
                    </span>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <img class="ms-5" src="{{ asset('img/logo/ibam.png') }}" width= "150" height="90" alt="">
                </div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <span>
                        Institut Burkinabè des Arts et Métiers <br>
                        03 BP 7021 Ouagadougou 03 <br>
                        Tél. : (226) 25-35-67-31/62 <br>
                        Fax. : (226) 25-30-72-42 <br>
                        Télex : 5270 BF
                    </span>
                </div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <span>
                        <div style="margin: -10% 0% 0% 40%">
                            <span>
                                Ouagadougou, le <br>
                            </span>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="row text-center" style="margin: 0% 0% 0% 3%">
                <span>
                    N°<?=date('Y');?>-________________/MESRSI/SG/UJKZ/IBAM/D
                </span>
            </div>
        </div>
    </div>
    <div style="font-size: large; font-weight: bold; margin: 0% 0% 0% -5%">
        <div class="container text-justify">
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    @yield('objet')
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    @yield('conjonction')
                </div>
            </div>
        </div>
        <div class="container text-justify">
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col">
                    @yield('destinataire')
                </div>
            </div>
        </div>
    </div>
</div>
@yield('corps')

@yield('signataire')

<script type="text/javascript">window.print();</script>

</body>

</html>
