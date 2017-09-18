@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default panel-box">
                <div class="panel-heading">
                   Table Statistics ( {{ $table }} )
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="table-left-column">Statistics</th>
                            <th class="table-right-column">Result Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="table-left-column">Count</th>
                            <td class="table-right-column">
                                <table-stats v-on:fetch="completeAjax"></table-stats>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            @include('includes.chart')
        </div>
    </div>
    <loading-spinner v-bind:loading="loading"></loading-spinner>
@endsection