@extends('layouts.master')

@section('pageName')
Tableau de bord
@endsection

@section('pageContent')

<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                    <div class="page_title_left d-flex align-items-center">
                        <h3 class="f_s_25 f_w_700 dark_text mr_30" >Tableau de bord</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 ">
                <div class="white_card card_height_100 mb_30 user_crm_wrapper">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="single_crm">
                                <div class="crm_head d-flex align-items-center justify-content-between" >
                                    <div class="thumb">
                                        <img src="img/crm/businessman.svg" alt="">
                                    </div>
                                    <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                </div>
                                <div class="crm_body">
                                    <h4>2455</h4>
                                    <p>User Registrations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single_crm ">
                                <div class="crm_head crm_bg_1 d-flex align-items-center justify-content-between" >
                                    <div class="thumb">
                                        <img src="img/crm/customer.svg" alt="">
                                    </div>
                                    <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                </div>
                                <div class="crm_body">
                                    <h4>2455</h4>
                                    <p>User Registrations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single_crm">
                                <div class="crm_head crm_bg_2 d-flex align-items-center justify-content-between" >
                                    <div class="thumb">
                                        <img src="img/crm/infographic.svg" alt="">
                                    </div>
                                    <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                </div>
                                <div class="crm_body">
                                    <h4>2455</h4>
                                    <p>User Registrations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="single_crm">
                                <div class="crm_head crm_bg_3 d-flex align-items-center justify-content-between" >
                                    <div class="thumb">
                                        <img src="img/crm/sqr.svg" alt="">
                                    </div>
                                    <i class="fas fa-ellipsis-h f_s_11 white_text"></i>
                                </div>
                                <div class="crm_body">
                                    <h4>2455</h4>
                                    <p>User Registrations</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-xl-12 ">
                <div class="white_card mb_30 card_height_100">
                    <div class="white_card_header">
                        <div class="row align-items-center justify-content-between flex-wrap">
                            <div class="col-lg-4">
                                <div class="main-title">
                                    <h3 class="m-0">Statistiques des impressions</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 text-right d-flex justify-content-end">
                                <select class="nice_Select2 max-width-220" >
                                    <option value="1">Par mois</option>
                                    <option value="1">Par année</option>
                                    <option value="1">Par jour</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div id="management_bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
