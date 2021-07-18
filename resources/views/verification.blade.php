@extends('layout.master')
@section('title','verification')
@section('body')
    <div class="container my-4">
        <div class="card card-blur border-white">
            <div class="card-body">
                <div class="container">
                    <h5>Money Transfer</h5>
                    <hr class="bg-white">
                    <form>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <h6>Transaction Details</h6>
                                <p>lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum
                                    lorem</p>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <div class="d-flex">
                                        <lable for="amount">Amount</lable>
                                        <label class="ml-auto"><i class="fa fa-check-circle text-success"></i> include
                                            fee</label>
                                    </div>
                                    <input type="number" class="form-control" name="amount" id="amount">
                                </div>
                                <div class="form-group">
                                    <label for="total">Total</label>
                                    <input type="number" class="form-control" name="total" id="total">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="fee">Fee</label>
                                            <input type="number" class="form-control" name="fee" id="fee">
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="currency">Currency</label>
                                            <i name="currency" id="currency" class="font-weight-bold">USD</i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="bank-account">Bank Account</label>
                                    <input type="number" class="form-control" name="bank-account" id="bank-account">
                                </div>
                            </div>
                        </div>
                        <hr class="bg-white">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <h6>Transaction Details</h6>
                                <p>lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum
                                    lorem</p>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="form-group">
                                    <lable for="full-name">Full Name</lable>
                                    <input type="number" class="form-control" name="full-name" id="full-name">
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <!-- Default dropleft button -->
                                            <div class="form-group">
                                                <label for="country">Select Country</label>
                                                <select class="form-control" id="country">
                                                    <option>turkish</option>
                                                    <option>Spain</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <!-- Default dropleft button -->
                                            <div class="form-group">
                                                <label for="city">Select City</label>
                                                <select class="form-control" id="city">
                                                    <option>Istanbul</option>
                                                    <option>Anqarah</option>
                                                </select>
                                            </div>
                                            <!--                                <input type="number" class="form-control" name="city" id="city">-->
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input type="number" class="form-control" name="phone" id="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <lable for="description">Notes
                                        <!--                                        <span class="text-muted">(optional)</span>-->
                                    </lable>
                                    <textarea class="form-control" name="description" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <input type="button" name="" class="btn btn-outline-secondary" value="Cancel">
                            <input type="button" name="" class="btn btn-dark px-3" value="Next">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
