@extends('layout.header')
@section('body')
<div class="container">
    <!-- Start Register Account -->
    <div class="register my-4">
        <div class="container col-sm-8">


            <div class="card card-blur border-white mx-auto rounded">

                <div class="text-center pt-5">
                    <img src="{{asset('img/logo-white.svg')}}" width="200" height="100">
                </div>
                <div class="text-center pt-3">
                    <h3 class="font-weight-bold">Amanah Express</h3>
                </div>
                <div class="text-center pt-4 pb-5">
                    <h4>Create Account</h4>
                </div>

                <form class="pr-5 pl-5" action="registration" method="post" >

                    @csrf
                    @method('post')

                    <!-- Start Register New Account For Sila Page -->
                    <div class="reg1" id="reg1">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom01">First name</label>
                                <input type="text" value="{{$user->first_name}}" name="first_name" class="form-control" id="validationCustom01" placeholder="First Name" required>
                                <span id="sFirstName" class="text-danger"></span>
                            </div>
                            <!--                            <div class="col-md-4 mb-3">-->
                            <!--                                <label for="validationCustom02">Middle Name</label>-->
                            <!--                                <input type="text" class="form-control" id="validationCustom02" placeholder="Khalid" required>-->
                            <!--                            </div>-->
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom09">Last name</label>
                                <input type="text" value="{{$user->last_name}}" name="last_name" class="form-control" id="validationCustom09" placeholder="Last Name" required>
                                <span id="sLastName" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom07">Street Address</label>
                                <input type="text" class="form-control" id="validationCustom07" name="address" placeholder="Street Address" required>
                                <span id="sStreetAddress" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom05">City</label>
                                <input type="text" class="form-control" id="validationCustom05" name="city" placeholder="City" required>
                                <span id="sCity" class="text-danger"></span>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="validationCustom06">State</label>
                                    <select class="form-control" name="state" id="validationCustom06" required>
                                        <option hidden>State</option>
                                        <option>Tx</option>
                                        <option>Cl</option>
                                    </select>
                                    <span id="sState" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom08">ZIP Code</label>
                                <input type="text" class="form-control" name="zipcode" id="validationCustom08" placeholder="ZIP Code" required>
                                <span id="sZip" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">SSN</label>
                                <input type="text" class="form-control" name="ssn" id="validationCustom03" placeholder="SSN" required>
                                <span id="sSSN" class="text-danger"></span>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="validationCustom04">Birth Date</label>
                                <input type="date" class="form-control" name="birthdate" id="validationCustom04" required>
                                <span id="sBirthDate" class="text-danger"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput1">Email</label>
                                    <input type="email" value="{{$user->email}}" name="email" class="form-control" id="formGroupExampleInput1" placeholder="Example@Example.com">
                                    <span id="sEmail" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2">Phone Number</label>
                                    <input type="text" value="{{$user->phone_number}}" name="phone_number" class="form-control" id="formGroupExampleInput2" placeholder="Phone Number">
                                    <span id="sPhone" class="text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3 pb-5">
                            <div class="text-center">
                                <div class="">
                                    <button type="submit" class="btn btn-dark btn-block">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Register New Account For Sila Page -->
                </form>
            </div>
        </div>
    </div>
    <!-- End Register Account -->
</div>

    @extends('layout.footer')
