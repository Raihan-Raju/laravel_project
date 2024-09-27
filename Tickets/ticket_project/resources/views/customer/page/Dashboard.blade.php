@extends('customer.partial.Layout')
@section('title')
    <h3>{{ auth()->guard('customer')->user()->name }}</h3>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div class="form-group" style="max-width:300px; min-width:200px;">
                            <form action="" method="get">
                                <select name="" id="" class="form-control" max-width="200">
                                    <option value="">All Data</option>
                                    <option value="">1 Day</option>
                                    <option value="">7 Day</option>
                                    <option value="">1 Month</option>
                                    <option value="">3 Month</option>
                                    <option value="">6 Month</option>
                                    <option value="">1 year</option>
                                    <option value="">3 year</option>
                                </select>
                            </form>
                        </div>

                    </div>
                    <div class="row ">
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card shadow">
                                <div class="card-body p-3">
                                    <div class="text-center">
                                        <h2 class="text-primary fw-bold m-0"><b>0</b></h2>
                                        <h3 class="fw-bold m-0">Total Value</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card shadow">
                                <div class="card-body p-3">
                                    <div class="text-center">
                                        <h2 class="text-primary fw-bold m-0"><b>0</b></h2>
                                        <h3 class="fw-bold m-0">Total Value</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card shadow">
                                <div class="card-body p-3">
                                    <div class="text-center">
                                        <h2 class="text-primary fw-bold m-0"><b>0</b></h2>
                                        <h3 class="fw-bold m-0">Total Value</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                            <div class="card shadow">
                                <div class="card-body p-3">
                                    <div class="text-center">
                                        <h2 class="text-primary fw-bold m-0"><b>0</b></h2>
                                        <h3 class="fw-bold m-0">Total Value</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
