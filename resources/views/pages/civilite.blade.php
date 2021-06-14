@extends('layouts.master')

@section('pageName')
Civilité
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
                                <h3 class="m-0">Civilité</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <div></div>
                                <div class="box_right d-flex lms_block">
                                    <div class="add_button ml-10">
                                        <a class="btn_1" href="" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-plus" aria-hidden="true"></i> Ajouter une civilité</a>
                                    </div>
                                </div>
                            </div>
                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <table class="table lms_table_active3 ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Intitulé</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($civilites as $civilite)
                                        <tr>
                                            <th scope="col">{{$civilite->idCivilite}}</th>
                                            <th scope="col">{{$civilite->intituleCivilite}}</th>
                                            <th scope="col">
                                                <form action="{{ route('civilite.destroy', $civilite->idCivilite)}}" method="POST">
                                                    <a class="btn btn-alternate" href="{{ route('civilite.edit',$civilite->idCivilite) }}"><i class="fas fa-edit"></i></a>
                                                    @csrf
                                                    @method('DELETE')
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

<!-- modals ppup  -->
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ajout d'une nouvelle civilité</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('civilite.store') }}" method="post" id="forms">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group common_input mb_15">
                                <h5>Intitulé</h5>
                                <input name="intituleCivilite" id="intituleCivilite" class="form-control" type="text" placeholder="Monsieur / Madame / Mademoiselle">
                            </div>
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
        $(function() {
            $('#forms').validate({
                rules: {
                    intituleCivilite: {
                        required: true
                    }
                },
                messages: {
                    intituleCivilite: {
                        required: "La civilité requise.",
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
