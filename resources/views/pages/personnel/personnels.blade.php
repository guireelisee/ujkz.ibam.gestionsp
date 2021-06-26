@php
use App\Http\Controllers\PersonnelController;
use App\Models\TitrePersonnel;
use App\Models\FonctionPersonnel;
@endphp

@extends('layouts.master')

@section('pageName')
Personnels
@endsection

@section('pageContent')
<!--/ menu  -->
<div class="main_content_iner ">
    <div class="container-fluid p-0">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Personnels</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <div></div>
                                <div class="box_right d-flex lms_block">
                                    <div class="add_button ml-10">
                                        <a class="btn_1" href="" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter un personnel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table lms_table_active3 ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Titre</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prenom</th>
                                            <th scope="col">Fonction</th>
                                            <th scope="col">Téléphone</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date de prise de service</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($personnels as $personnel)
                                        <tr>
                                            <th scope="col">{{$personnel->idP}}</th>
                                            <th scope="col">{{PersonnelController::getTitreById($personnel->idTP)->intituleTitreP}}</th>
                                            <th scope="col">{{$personnel->nomP}}</th>
                                            <th scope="col">{{$personnel->prenomP}}</th>
                                            <th scope="col">{{PersonnelController::getFonctionById($personnel->idFP)->intituleFonctionP}}</th>
                                            <th scope="col">{{$personnel->telephoneP}}</th>
                                            <th scope="col"><a href="mailto:{{$personnel->emailP}}">{{$personnel->emailP}}</a> </th>
                                            <th scope="col">{{date('d M y', strtotime($personnel->datePServ))}}</th>
                                            <th scope="col">
                                                <form action="{{ route('personnels.destroy', ['id'=>$personnel->idP])}}" method="POST">
                                                    <a class="btn btn-alternate" href="" data-toggle="modal" data-target="#profil" data-id="{{$personnel->idP}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                                    <a class="btn btn-alternate" href="{{ route('personnels.edit',$personnel->idP) }}"><i class="fas fa-edit"></i></a>
                                                    @csrf
                                                    @method('GET')
                                                    <button class="btn btn-danger" type="submit"><i class="fas fa-trash"></i></button>
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

<!-- Modal voir profil  -->
<!-- Modal -->
<div class="modal fade" id="profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="id">Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <div class="card custom-card">
                        <div class="card-header"><img class="img-fluid" src="img/profilebox/1.jpg" alt="" data-original-title="" title=""></div>
                        <div class="card-profile"><img class="rounded-circle" src="img/profilebox/7.jpg" alt="" data-original-title="" title=""></div>
                        <ul class="card-social">
                            <li><a href="#" data-original-title="" title=""><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        <div class="text-center profile-details">
                            <h4>Dr. Nom Prénom</h4>
                            <h6>Fonction</h6>
                        </div>
                        <div class="card-footer row">
                            <div class="col-4 col-sm-4">
                                <h6>Téléphone</h6>
                                <h3 class="">66594866</h3>
                            </div>
                            <div class="col-4 col-sm-4">
                                <h6>Fonction</h6>
                                <h3>Enseignant</h3>
                            </div>
                            <div class="col-4 col-sm-4">
                                <h6>Service</h6>
                                <h3>Administration</h3>
                            </div>
                        </div>
                        <div class="card-footer row">
                            <div class="col-4 col-sm-4">
                                <h6>Date de naissance</h6>
                                <h3 class="">9564</h3>
                            </div>
                            <div class="col-4 col-sm-4">
                                <h6>Date de prise de service</h6>
                                <h3><span class="">49</span>K</h3>
                            </div>
                            <div class="col-4 col-sm-4">
                                <h6>Date de retraite</h6>
                                <h3><span class="">96</span>M</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modals ppup  -->

<!-- Modal ajout personnel  -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajout d'un nouveau personnel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('personnels.store') }}" method="post" id="forms">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group common_input mb_15">
                                <h5>Nom</h5>
                                <input name="nomP" id="nomP" class="form-control" type="text" placeholder="Renseigner une personnel...">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group common_input mb_15">
                                <h5>Prénom(s)</h5>
                                <input name="prenomP" id="prenomP" class="form-control" type="text" placeholder="Renseigner une personnel...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Titre</h5>
                            <select name="idTitreP" id="idTitreP" class="form-group nice_Select2 nice_Select_line wide" style="display: none;" >
                                <option value="" disabled>Selectionner un titre</option>
                                @if ($titres = TitrePersonnel::all())
                                    @foreach ($titres as $titre)
                                        <option value="{{$titre->idTitreP}}">{{$titre->intituleTitreP}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <h5>Fonction</h5>
                            <select name="idFonctionP" id="idFonctionP" class="form-group nice_Select2 nice_Select_line wide" style="display: none;" >
                                <option value="" disabled>Selectionner une fonction</option>
                                @if ($fonctions = FonctionPersonnel::all())
                                    @foreach ($fonctions as $fonction)
                                        <option value="{{$fonction->idFonctionP}}">{{$fonction->intituleFonctionP}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modals ppup  -->

    @endsection

    @section('script')
    <script>

        $('#profil').on('show.bs.modal', function(event) {
            var id = button.data('id');
            $('#id').val(id);
        })

        $(function() {
            $('#forms').validate({
                rules: {
                    intituleAmp: {
                        required: true
                    }
                },
                messages: {
                    intituleAmp: {
                        required: "L'personnel est requise.",
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
