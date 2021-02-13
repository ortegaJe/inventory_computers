@extends('layouts.backend')


@include('components.dt-computers.dt-row-details-css')

@section('content')
<!-- Page Content -->
<div class="content">
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
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Action</th>
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