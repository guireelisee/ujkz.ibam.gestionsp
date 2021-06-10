
<?php
// header('Refresh:.0001; URL=');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>



<body class="hold-transition sidebar-mini">

  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->

    <div class="container" style="width: 78%;">
        <div class="row">
            <div class="col-md-9">
                <div class="container">
                    <div class="row">
                        <div class="col img-thumbnail me-4">
                        <img src="{{ asset('img/logo/ibam.png') }}" style="width: 50%" alt="" class="">
                    </div>
                    <div class="col img-thumbnail">
                        <img src="{{ asset('img/logo/UO.jpg') }}" style="width: 32%" alt="" class="r">
                    </div>
                    </div>

                        <p>SOMGANDE, OUAGADOUGOU <br>
                        Adresse<span>&nbsp;</span>:  BP 202 Ouaga <br>
                        Tel (+226): 62 82 64 88, 66 59 48 66 , 66 68 03 54 <br>
                        Fax (+226): 25 35 67 62
                        </p>
                    <hr width="1000">
                    <div class="img" style=" margin-left: 15px;">
                        <p>Coordonnées du client<br>
                        Tel:<br>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="container" style="margin-top: 200px;">
                    <h4>FACTURE N°</h4>
                    <h5>Date: </h5>
                </div>
            </div>
        </div>
    </div>
  </div>

  {{-- <script type="text/javascript">window.print();</script> --}}

</body>

</html>
