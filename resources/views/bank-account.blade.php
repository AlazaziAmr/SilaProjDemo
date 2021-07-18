@extends('layout.master')
@section('title','bank-account')
@section('body')
    <div class="container my-4">
        <div class="progress my-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0"
                 aria-valuemax="100">Bank Accounts
            </div>
        </div>
        <div class="card card-blur border-white">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <h5>Bank Accounts</h5>
                        </div>
                        <div class="col-md-6 col-12 text-md-right text-center">
                            <button class="btn btn-outline-dark my-md-0 my-3 mr-md-3">Enter Account/Routing</button>
                            <button class="btn btn-outline-dark">Connect Via Plaid</button>
                        </div>
                    </div>
                    <hr class="bg-white">
                    <div class="table-responsive">
                        <table class="table border border-dark text-center">
                            <thead class="thead-dark">
                            <th>Account</th>
                            <th>Bank Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>000</td>
                                <td>Plaid checked</td>
                                <td>Checking</td>
                                <td>Active</td>
                            </tr>
                            <tr>
                                <td>000</td>
                                <td>Plaid checked</td>
                                <td>Checking</td>
                                <td>Active</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
