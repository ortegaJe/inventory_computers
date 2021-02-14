@extends('layouts.backend')


@include('components.dt-computers.dt-row-details-css')

@section('content')
<!-- Page Content -->
<div class="content">
    @include('components.gutters-tiny')
    <div class="col-md-12">
        <div class="block block-rounded block-bordered">
            <div class="block-header block-header-default border-b">
                <h3 class="block-title">
                    Lista<small> | Equipos informaticos</small>
                </h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle"
                        data-action-mode="demo">
                        <i class="si si-refresh"></i>
                    </button>
                    <button type="button" class="btn-block-option">
                        <i class="si si-wrench"></i>
                    </button>
                </div>
            </div>
            <div class="block-content block-content-full">
                <div class="table-responsive">
                    <table id="example" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>codigo</th>
                                <th>serial</th>
                                <th>ip</th>
                                <th>mac</th>
                                <th>anydesk</th>
                                <th>fecha de creación</th>
                                <th>sede</th>
                                <th>estado</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>CODIGO</th>
                                <th>SERIAL</th>
                                <th>IP</th>
                                <th>MAC</th>
                                <th>ANYDESK</th>
                                <th>FECHA DE CREACIÓN</th>
                                <th>SEDE</th>
                                <th>ESTADO</th>
                                <th>ACTION</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->
@endsection

@include('components.dt-computers.dt-row-details-js')