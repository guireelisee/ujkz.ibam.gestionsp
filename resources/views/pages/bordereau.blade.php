@php
use App\Http\Controllers\PersonnelController;
use App\Models\Bordereau;
use App\Models\Personnel;
@endphp
@extends('layouts.master')

@section('pageName')
Bordereau
@endsection

@section('pageContent')

<!--/ menu  -->
<div class="main_content_iner ">

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

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
                                        <a class="btn_1" href="" data-toggle="modal" data-target="#exampleModalLong">Imprimer un bordereau</a>
                                    </div>
                                </div>
                            </div>

                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table lms_table_active3 ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
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
                                            <th scope="col">{{PersonnelController::getPersonnelById($bordereau->idP)->prenomP." ".PersonnelController::getPersonnelById($bordereau->idP)->nomP}}</th>
                                            <th scope="col">{{date('d M y', strtotime($bordereau->created_at))}}</th>
                                            <th scope="col">
                                                <form action="{{ route('bordereau.printBordereau', ['idB'=>$bordereau->idB,'idP'=>$bordereau->idP])}}" method="POST">
                                                    @csrf
                                                    @method('GET')
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <a name="" id="" class="btn btn-danger" href="{{ route('bordereau.destroy', ['id'=>$bordereau->idB]) }}" role="button"> <i class="fas fa-trash"></i></a>
                                                        </div>
                                                        <div class="col-4">
                                                            <button class="btn btn-success" type="submit"><i class="fas fa-print"></i></button>
                                                        </div>
                                                    </div>
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

<style>
    h5 {
        font-weight: bold
    }
</style>

<!-- modals ppup  -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Renseignez les donées avant l'impression</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('bordereau.store') }}" method="post" id="forms">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group  common_input mb_15">
                                <h5>Nature des pièces</h5>
                                <input name="naturePieceB" id="naturePieceB" class="form-control" type="text" placeholder="Saisir la nature des pièces">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group  common_input mb_15">
                                <h5>Nombre de pièces</h5>
                                <input name="nombrePieceB" id="nombrePieceB" class="form-control" type="number" placeholder="Entrer le nombre des pièces" min=0>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group  common_input mb_15">
                                <h5>Destinataire</h5>
                                <input name="destinataireB" id="destinataireB" class="form-control" type="text" placeholder="Saisir un destinataire">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group common_input mb_15">
                                <h5>Observation</h5>
                                <input name="observationB" id="observationB" class="form-control" type="text" placeholder="Entrer une observation" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h5>Signataire</h5>
                            @if ($personnels = Personnel::all())
                            <select name="idP" id="idP" class="form-group nice_Select2 nice_Select_line wide" style="display: none;" >
                                <option value="" disabled>Selectionner un signataire</option>
                                @foreach ($personnels as $personnel)
                                <option value="{{$personnel->idP}}">{{$personnel->prenomP." ".$personnel->nomP}}</option>
                                @endforeach
                            </select>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-success">Imprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modals ppup  -->
@endsection

@section('script')
<script>
    $(function() {
        $('#forms').validate({
            rules: {
                naturePieceB: {
                    required: true
                },
                nombrePieceB: {
                    required: true,
                    min: 0,
                    number: true
                },
                observationB: {
                    required: true
                },
                destinataireB: {
                    required: true
                },
                idP: {
                    required: true,
                }
            },
            messages: {
                naturePieceB: {
                    required: "La nature est requise.",
                },
                nombrePieceB: {
                    required: "Le nombre de pièces est requise.",
                    min:'Le nombre doit être supérieure à 0',
                    number:'Le champ doit contenir un nombre'
                },
                observationB: {
                    required: "L'observation est requise.",
                },
                destinataireB: {
                    required: "Le destinataire est requis.",
                },
                idP: {
                    required: "La personne signataire du bordereau est requise.",
                }
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');

            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>
@endsection
