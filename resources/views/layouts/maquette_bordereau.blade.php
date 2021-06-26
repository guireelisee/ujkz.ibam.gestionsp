
@php
header("Refresh:.0001; URL=../bordereau");
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>



<body style="background-color: white; font-size: 100%">

    @include('layouts.entete')

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
