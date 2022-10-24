@extends('template.layout')

@section('yield')
Dashboard
@endsection

@section('content')

<div class="section-header">
            <h1>Dashboard</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-boxes"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Barang</h4>
                    </div>
                    <div class="card-body">
                        {{ $barang->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-map-marker"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Tempat</h4>
                    </div>
                    <div class="card-body">
                        {{ $tempat->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total User</h4>
                    </div>
                    <div class="card-body">
                        {{ $user->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-cog"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Setting</h4>
                    </div>
                    <div class="card-body">
                        1
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection