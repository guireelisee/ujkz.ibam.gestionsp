<!DOCTYPE html>
<html lang="fr">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('pageName') - A.C.W.E GEST | Votre logiciel de gestion d'actes administratifs</title>

    <link rel="icon" href="{{ asset('img/mini_logo.png') }}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/themefy_icon/themify-icons.css') }}" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/niceselect/css/nice-select.css') }}" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/owl_carousel/css/owl.carousel.css') }}" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{ asset('vendors/gijgo/gijgo.min.css') }}" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/font_awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/tagsinput/tagsinput.css') }}" />

    <!-- date picker -->
    <link rel="stylesheet" href="{{ asset('vendors/datepicker/date-picker.css') }}" />

    <link rel="stylesheet" href="{{ asset('vendors/vectormap-home/vectormap-2.0.2.css') }}" />

    <!-- scrollabe  -->
    <link rel="stylesheet" href="{{ asset('vendors/scroll/scrollable.css') }}" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/datatable/css/buttons.dataTables.min.css') }}" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{ asset('vendors/text_editor/summernote-bs4.css') }}" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{ asset('vendors/morris/morris.css') }}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{ asset('vendors/material_icon/material-icons.css') }}" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{ asset('css/metisMenu.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/colors/default.css') }}" id="colorSkinCSS">
</head>
<body class="crm_body_bg">



    <!-- main content part here -->

    <!-- sidebar  -->
    <nav class="sidebar">
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="{{ route('index') }}"><img src="{{ asset('img/logo.png') }}" alt=""></a>
            <a class="small_logo" href="{{ route('index') }}"><img src="{{ asset('img/mini_logo.png') }}" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="">
                <a class="" href="{{ route('index') }}" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Tableau de bord</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a class="" href="{{ route('bordereau.index') }}" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Bordereau</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Cessation de service</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Fiches </span>
                    </div>
                </a>
                <ul>
                    <li><a href="#">Audience avec le directeur</a></li>
                    <li><a href="#">Autorisation prélèvement</a></li>
                    <li><a href="#">Autorisation absence</a></li>
                    <li><a href="#">Passage dans les classes</a></li>
                    <li><a href="#">Inscription standarde</a></li>
                    <li><a href="#">Maison des hôtes</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Lettres</span>
                    </div>
                </a>
                <ul>
                    <li><a href="#">Président de l'UO</a></li>
                    <li><a href="#">Demande de salles</a></li>
                </ul>
            </li>
            <li class="">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Notes de service</span>
                    </div>
                </a>
                <ul>
                    <li><a href="#">Interim coordonnateur</a></li>
                    <li><a href="#">Réunions</a></li>
                    <li><a href="#">Report réunions</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Notes d'information</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Personnels</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Prise de service</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Visiteurs</span>
                    </div>
                </a>
            </li>
            <li class="">
                <a   class="has-arrow" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="img/menu-icon/dashboard.svg" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Configurations</span>
                    </div>
                </a>
                <ul>
                    <li><a href="#">Ampliations</a></li>
                    <li><a href="{{ route('civilite.index') }}">Civilités</a></li>
                    <li><a href="#">Filières</a></li>
                    <li><a href="#">Salles</a></li>
                    <li><a href="#">Fonctions</a></li>
                    <li><a href="{{ route('titre.index')}}">Titres</a></li>
                    <li><a href="#">Types</a></li>
                    <li><a href="#">Utilisateurs</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <!--/ sidebar  -->


    <section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
        <div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="line_icon open_miniSide d-none d-lg-block">
                            <img src="img/line_img.png" alt="">
                        </div>
                        <div class="serach_field-area d-flex align-items-center">
                            <div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Rechercher">
                                    </div>
                                    <button type="submit"> <img src="img/icon/icon_search.svg" alt=""> </button>
                                </form>
                            </div>
                        </div>
                        <div class="profile_info">
                            <img src="img/client_img.png" alt="#">
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>Utilisateur</p>
                                    <h5>Son nom</h5>
                                </div>
                                <div class="profile_info_details">
                                    <a href="#">Voir son profil</a>
                                    <a href="#">Paramètres</a>
                                    <a href="#">Se déconnecter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ menu  -->

        @yield('pageContent')

        <!-- footer part -->
        <div class="footer_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p><strong>Copyright © 2020-2021 ACWE-MIAGE L2/IBAM</strong> Tous droits reservés</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- main content part end -->

    <!-- footer  -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/main.d810cf0ae7f39f28f336.js') }}"></script>
    <script src="{{ asset('js/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/jquery-validation/additional-methods.min.js') }}"></script>
    <!-- popper js -->
    <!-- popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- bootstarp js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- sidebar menu  -->
    <script src="{{ asset('js/metisMenu.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('vendors/count_up/jquery.waypoints.min.js') }}"></script>
    <!-- waypoints js -->
    <script src="{{ asset('vendors/chartlist/Chart.min.js') }}"></script>
    <!-- counterup js -->
    <script src="{{ asset('vendors/count_up/jquery.counterup.min.js') }}"></script>

    <!-- nice select -->
    <script src="{{ asset('vendors/niceselect/js/jquery.nice-select.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>

    <!-- responsive table -->
    <script src="{{ asset('vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/vfs_fonts.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatable/js/buttons.print.min.js') }}"></script>
    {{-- <script src="{{ asset('vendors/datatable/js/main.d810cf0ae7f39f28f336.js') }}"></script> --}}

    <!-- datepicker  -->
    <script src="{{ asset('vendors/datepicker/datepicker.js') }}"></script>
    <script src="{{ asset('vendors/datepicker/datepicker.en.js') }}"></script>
    <script src="{{ asset('vendors/datepicker/datepicker.custom.js') }}"></script>

    <script src="{{ asset('js/chart.min.js') }}"></script>
    <script src="{{ asset('vendors/chartjs/roundedBar.min.js') }}"></script>

    <!-- progressbar js -->
    <script src="{{ asset('vendors/progressbar/jquery.barfiller.js') }}"></script>
    <!-- tag input -->
    <script src="{{ asset('vendors/tagsinput/tagsinput.js') }}"></script>
    <!-- text editor js -->
    <script src="{{ asset('vendors/text_editor/summernote-bs4.js') }}"></script>
    <script src="{{ asset('vendors/am_chart/amcharts.js') }}"></script>

    <!-- scrollabe  -->
    <script src="{{ asset('vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendors/scroll/scrollable-custom.js') }}"></script>

    <!-- vector map  -->
    <script src="{{ asset('vendors/vectormap-home/vectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('vendors/vectormap-home/vectormap-world-mill-en.js') }}"></script>

    <!-- apex chrat  -->
    <script src="{{ asset('vendors/apex_chart/apex-chart2.js') }}"></script>
    <script src="{{ asset('vendors/apex_chart/apex_dashboard.js') }}"></script>

    <!-- <script src="vendors/echart/echarts.min.js"></script> -->


    <script src="{{ asset('vendors/chart_am/core.js') }}"></script>
    <script src="{{ asset('vendors/chart_am/charts.js') }}"></script>
    <script src="{{ asset('vendors/chart_am/animated.js') }}"></script>
    <script src="{{ asset('vendors/chart_am/kelly.js') }}"></script>
    <script src="{{ asset('vendors/chart_am/chart-custom.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/dashboard_init.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    @yield('script')
</body>

</html>
