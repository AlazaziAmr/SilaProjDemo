@extends('layout.master')
@section('title','register')
@section('body')
    <div class="container my-4">
        <div class="progress my-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                 aria-valuemax="100">Your Info
            </div>
        </div>
        <div class="card card-blur border-white">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <h5>Your Info</h5>
                        </div>
                        <div class="col-md-6 col-12 text-md-right">
                            <a href="">Change your password</a>
                        </div>
                    </div>
                    <hr class="bg-white">
                    <div class="alert alert-warning" role="alert">
                        <i class="fa fa-exclamation-circle"></i>
                        Please notice that we need to confirm your information before you can make any transaction.
                        Thank you for your patience.
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="col-md-4 col-sm-12">
                                <h6>Basic Info</h6>
                                <p>lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum
                                    lorem</p>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="form-row">
                                    <div class="col mb-3">
                                        <label for="first-name" class="text-muted">First Name</label>
                                        <input type="text" class="form-control" name="first-name" id="first-name">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="last-name" class="text-muted">Last Name</label>
                                        <input type="text" class="form-control" name="last-name" id="last-name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col mb-3">
                                        <label for="address" class="text-muted">Street Address</label>
                                        <input type="text" class="form-control" name="address" id="address">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="city" class="text-muted">City</label>
                                        <input type="text" class="form-control" name="city" id="city">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-white">
                        <div class="form-row">
                            <div class="col-md-4 col-sm-12">
                                <h6>Address Info</h6>
                                <p>lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum
                                    lorem</p>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="form-row">
                                    <div class="col mb-3">
                                        <div class="form-group">
                                            <label class="text-muted" for="validationCustom06">State</label>
                                            <select class="form-control" id="validationCustom06" required>
                                                <option>State</option>
                                                <option>Texas</option>
                                                <option>California</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col mb-3">
                                        <label for="zip" class="text-muted">Zip Code</label>
                                        <input type="text" class="form-control" name="zip" id="zip">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col mb-3">
                                        <div class="d-flex">
                                            <label for="ssn" class="text-muted">SSN</label>
                                            <span class="ml-auto"><i class="fa fa-exclamation-circle text-muted"></i> </span>
                                        </div>

                                        <input type="number" class="form-control" name="ssn" id="ssn">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="birth-date" class="text-muted">Birth Date</label>
                                        <input type="date" class="form-control" name="birth-date" id="birth-date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="bg-white">
                        <div class="form-row">
                            <div class="col-md-4 col-sm-12">
                                <h6>Contact Info</h6>
                                <p>lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum lorem lorem ipsum lorem ipsum
                                    lorem</p>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="form-row">
                                    <div class="col mb-3">
                                        <label for="email" class="text-muted">Email</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                    <div class="col mb-3">
                                        <label for="phone" class="text-muted">phone</label>
                                        <input type="number" class="form-control" name="address" id="phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <input type="button" name="" class="btn btn-outline-secondary" value="Get Started">
                            <input type="button" name="" class="btn btn-dark px-3" value="Get Started">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
