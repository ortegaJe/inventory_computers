@extends('layouts.backend')

@include('components.dt-row-details-css')

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
                        <thead class="thead-light">
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
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6 col-sm-4">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +16%
                            </div>
                            <div class="font-size-h4 font-w600">720</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -3%
                            </div>
                            <div class="font-size-h4 font-w600">160</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +9%
                            </div>
                            <div class="font-size-h4 font-w600">24.3</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Average</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Content -->
@endsection

@include('components.dt-row-details-js')