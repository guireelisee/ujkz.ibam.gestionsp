@extends('layouts.master')

@section('pageName')
Bordereau
@endsection

@section('pageContent')
<!--/ menu  -->
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Bordereau</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4>Historique</h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">
                                                <form Active="#">
                                                    <div class="search_field">
                                                        <input type="text" placeholder="Rechercher...">
                                                    </div>
                                                    <button type="submit"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="add_button ml-10">
                                            <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">Imprimer un bordereau</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table id="basic-laratable" class="table lms_table_active3 ">
                                        <thead>
                                            <tr>
                                                <th scope="col">N°</th>
                                                <th scope="col">Nature des pièces</th>
                                                <th scope="col">Nombre des pièces</th>
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
                                                <th scope="col">{{$bordereau->idP}}</th>
                                                <th scope="col">{{date('d M y', strtotime($bordereau->created_at))}}</th>
                                                <th scope="col">
                                                    <form action="{{ route('bordereau.print', ['idB'=>$bordereau->idB,'idP'=>$bordereau->idP]),}}" method="post">
                                                        @csrf
                                                        @method('GET')
                                                        <button class="btn btn-success" type="submit"><i class="fas fa-print"></i></button>
                                                    </form>
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
            </div>
        </div>
    </div>
@endsection
