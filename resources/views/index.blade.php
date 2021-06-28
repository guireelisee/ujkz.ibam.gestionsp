@extends('layouts.master')

@section('titre','Tableau de bord')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Vue globale</a></li>
@endsection

@section('main')

<!-- [ Main Content ] start -->
<div class="row">
    <!-- page statustic card start -->
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-blue">
                            <a href="{{ route('personnel.index') }}" style="color: #477ffb">
                                    {{$compteur_personnel}}
                                </h4>
                                <h6 class="text-muted m-b-0">
                                    @if ($compteur_personnel >1)
                                    Personnels en service
                                    @else
                                    Personnel en service
                                    @endif
                                </h6>
                            </a>
                        </div>
                        <div class="col-4 text-right">
                            <i class="feather icon-user f-28"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-blue">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-yellow">
                            <a href="{{ route('personnel.archive') }}" style="color:#f9b956">
                                    {{$compteur_personnel_archive}}
                                </h4>
                                <h6 class="text-muted m-b-0">
                                    @if ($compteur_personnel_archive >1)
                                    Personnels dans les archives
                                    @else
                                    Personnel dans les archives
                                    @endif
                                </h6>
                            </a>
                        </div>
                        <div class="col-4 text-right">
                            <i class="feather icon-user-minus f-28"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-yellow">
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-green">
                                <a href="{{ route('bordereau.index') }}" style="color: #9ccc65">
                                    {{$compteur_bordereau}}
                                </h4>
                                <h6 class="text-muted m-b-0">
                                    @if ($compteur_bordereau > 1)
                                    Bordereaux imprimés
                                    @else
                                    Bordereau imprimé
                                    @endif
                                </h6>
                            </a>
                        </div>
                        <div class="col-4 text-right">
                            <i class="feather icon-clipboard f-28"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-green">

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-blue">3</h4>
                            <h6 class="text-muted m-b-0">Notes</h6>
                        </div>
                        <div class="col-4 text-right">
                            <i class="feather icon-layers f-28"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-blue">

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-yellow">3</h4>
                            <h6 class="text-muted m-b-0">Fiches</h6>
                        </div>
                        <div class="col-4 text-right">
                            <i class="feather icon-file-text f-28"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-yellow">

                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-green">3</h4>
                            <h6 class="text-muted m-b-0">Lettres</h6>
                        </div>
                        <div class="col-4 text-right">
                            <i class="feather icon-mail f-28"></i>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-c-green">

                </div>
            </div>
        </div>


    <!-- page statustic card end -->

    {{-- <!-- prject ,team member start -->
        <div class="col-xl-12 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Projects</h5>
                    <div class="card-header-right">
                        <div class="btn-group card-option">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="feather icon-more-horizontal"></i>
                            </button>
                            <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="chk-option">
                                            <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                        </div>
                                        Assigned
                                    </th>
                                    <th>Name</th>
                                    <th>Due Date</th>
                                    <th class="text-right">Priority</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="chk-option">
                                            <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                        </div>
                                        <div class="d-inline-block align-middle">
                                            <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                            <div class="d-inline-block">
                                                <h6>John Deo</h6>
                                                <p class="text-muted m-b-0">Graphics Designer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Able Pro</td>
                                    <td>Jun, 26</td>
                                    <td class="text-right"><label class="badge badge-light-danger">Low</label></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="chk-option">
                                            <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                        </div>
                                        <div class="d-inline-block align-middle">
                                            <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                            <div class="d-inline-block">
                                                <h6>Jenifer Vintage</h6>
                                                <p class="text-muted m-b-0">Web Designer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Mashable</td>
                                    <td>March, 31</td>
                                    <td class="text-right"><label class="badge badge-light-primary">high</label></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="chk-option">
                                            <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                        </div>
                                        <div class="d-inline-block align-middle">
                                            <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                            <div class="d-inline-block">
                                                <h6>William Jem</h6>
                                                <p class="text-muted m-b-0">Developer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Flatable</td>
                                    <td>Aug, 02</td>
                                    <td class="text-right"><label class="badge badge-light-success">medium</label></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="chk-option">
                                            <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label"></span>
                                            </label>
                                        </div>
                                        <div class="d-inline-block align-middle">
                                            <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                            <div class="d-inline-block">
                                                <h6>David Jones</h6>
                                                <p class="text-muted m-b-0">Developer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Guruable</td>
                                    <td>Sep, 22</td>
                                    <td class="text-right"><label class="badge badge-light-primary">high</label></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    @endsection
