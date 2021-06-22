@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('datatable/main.d810cf0ae7f39f28f336.css') }}">
@endsection

@section('titre','Bordereau')

@section('sous_titre')
<li class="breadcrumb-item">
    <a href="">
        <i class="feather icon-home"></i>
    </a>
</li>
<li class="breadcrumb-item"><a href="{{ route('bordereau.index') }}">Vue globale</a></li>
@endsection

@section('main')

<!-- [ Main Content ] start -->
<div class="row">

    <!-- prject ,team member start -->
    <div class="col-xl-12 col-md-12">
        <div class="card table-card">
            <div class="card-header">

                <div class="card-header-right">
                   <a href="{{ route('bordereau.create') }}" type="button" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Imprimer</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="example">
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
    <script src="{{ asset('datatable/scripts/main.d810cf0ae7f39f28f336.js') }}"></script>
@endsection
