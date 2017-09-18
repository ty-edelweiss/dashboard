@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box-1 box-primary">
                <div class="box-content">
                    <h1 class="box-header">Datasources Configuration</h1>
                    <p class="box-body">
                        This is simple dashboard for checking source of research.
                        Database vendor is only postgresql. please, install and setting.
                        Input your target table to the form as follows.
                    </p>
                    @include('includes.database')
                </div>
            </div>
            <div class="box-1 box-success">
                <div class="box-content">
                    <h1 class="box-header">Hello, Research Dashboard!</h1>
                    <p>This is simple dashboard for checking source of research.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box-2 box-info">
                <div class="box-content">
                    <h1 class="box-header">Hello, Research Dashboard!</h1>
                    <p>This is simple dashboard for checking source of research.</p>
                </div>
            </div>
        </div>
    </div>
@endsection