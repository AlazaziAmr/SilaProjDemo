@extends('layout.master')
@section('title','amanahRegister')
@section('body')
    <!-- Start Register Account -->
    <div class="register my-4">
        <div class="container col-sm-8">


            <div class="card card-blur border-white mx-auto rounded">

                <div class="text-center pt-5">
                    <img src="img/logo-white.svg" width="200" height="100">
                </div>
                <div class="text-center pt-3">
                    <h3 class="font-weight-bold">Amanah Express</h3>
                </div>
                <div class="text-center pt-4 pb-5">
                    <h4>Create Account</h4>
                </div>

                <form class="pr-5 pl-5">
                    <!-- Start Register New Account For AmanahExpress Page -->
                    <div class="reg1" id="reg1">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom01A">First name</label>
                                <input type="text" class="form-control" id="validationCustom01A" placeholder="First Name" required>
                                <span id="fName" class="ml-auto"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom02A">Middle Name</label>
                                <input type="text" class="form-control" id="validationCustom02A" placeholder="Middle Name" required>
                                <span id="mName" class="ml-auto"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="validationCustom09A">Last name</label>
                                <input type="text" class="form-control" id="validationCustom09A" placeholder="Last Name" required>
                                <span id="lName" class="ml-auto"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput1A">Email</label>
                                    <input type="email" class="form-control" id="formGroupExampleInput1A" placeholder="Example@Example.com">
                                    <span id="eMail" class="ml-auto"></span>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="formGroupExampleInput2A">Phone Number</label>
                                    <input type="number" class="form-control" id="formGroupExampleInput2A" placeholder="Phone Number">
                                    <span id="pNumber" class="ml-auto"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <div class="font-password-1">
                                        <label for="pass">Password</label>
                                        <input type="Password" class="form-control" id="pass" placeholder="Enter Password" required><i id="eye1" onclick="showpass1()" class="fas fa-eye"></i>
                                        <span id="passs" class="ml-auto"></span>
                                    </div>
                                </div>
                                <p class="font-weight-bold">Password Must:</p>
                                <ul class="text-danger list-group list-group-flush">
                                    <li id="passCharacters" class="">at least 8 characters <i id="ipassCharacters" class="fas"></i></li>
                                    <li id="passNumeric" class="">at least 1 numeric <i id="ipassNumeric" class="fas"></i></li>
                                    <li id="passLowerCase" class="">at least 1 lower case character <i id="ipassLowerCase" class="fas"></i></li>
                                    <li id="passUpperCase" class="">at least 1 upper case character <i id="ipassUpperCase" class="fas"></i></li>
                                    <li id="passSpecialSymbol" class="">at least 1 special symbol <i id="ipassSpecialSymbol" class="fas"></i></li>
                                </ul>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <div class="font-password-1">
                                        <div class="d-flex">
                                            <label for="conpass">Password Confirm</label>
                                        </div>
                                        <input type="Password" class="form-control" id="conpass" placeholder="Confirm Password" required><i id="eye2" onclick="showpass2()" class="fas fa-eye"></i>
                                        <span id="conpasss" class="ml-auto"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-3 pb-5">
                            <div class="text-center">
                                <div class="">
                                    <button type="button" id="amanahReg" class="btn btn-dark btn-block">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Register New Account For AmanahExpress Page -->
                </form>
            </div>
        </div>
    </div>
    <!-- End Register Account -->
@stop
