@extends('layout.master')
@section('title','transaction-hestory')
@section('body')
    <div class="container my-4">
        <div class="card card-blur border-white">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <h5>Transaction History</h5>
                        </div>
                        <div class="col-md-6 col-12 text-md-right text-center">
                            <button class="btn btn-dark my-md-0 my-3">New Transaction</button>
                        </div>
                    </div>
                    <hr class="bg-white">
                    <div class="table-responsive">
                        <table class="table border border-dark text-center">
                            <thead class="thead-dark">
                            <th>Account No.</th>
                            <th>Bank Name</th>
                            <th>recipient's Name</th>
                            <th>Amount</th>
                            <th>Ratio</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Transfer Date</th>
                            <th>Transfer Time</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>000</td>
                                <td>Plaid checked</td>
                                <td>Riyad Alshatbi</td>
                                <td>$500</td>
                                <td>$5</td>
                                <td>Checking</td>
                                <td>Active</td>
                                <td>11/7/2021</td>
                                <td>05:33PM</td>
                            </tr>
                            <tr>
                                <td>000</td>
                                <td>Plaid checked</td>
                                <td>Riyad Alshatbi</td>
                                <td>$500</td>
                                <td>$5</td>
                                <td>Checking</td>
                                <td>Active</td>
                                <td>11/7/2021</td>
                                <td>05:33PM</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
