@extends('layout.master')
@section('title','login')
@section('body')
    <!-- Start login Account -->
    <div class="login my-4">
        <div class="container col-sm-8">


            <div class="card card-blur border-white mx-auto rounded">

                <div class="text-center pt-5">
                    <img src="img/logo-white.svg" width="200" height="100" width="100" height="100">
                </div>
                <div class="text-center pt-3">
                    <h3 class="font-weight-bold">Amanah Express</h3>
                </div>
                <div class="text-center pt-4 pb-4">
                    <h4>Login</h4>
                </div>
                <div class="text-center">
                    <p>New here?<a href="" style="color: black">Create new account</a></p>
                </div>
                <!-- Start login Form -->
                <form class="pr-5 pl-5">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Email</label>
                        <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <div class="font-password-1">
                            <div class="d-flex">
                                <label for="formGroupExampleInput2">Password </label>
                                <span class="ml-auto">Forgot Password?</span>
                            </div>
                            <input type="Password" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Password"><i id="eye" class="fa fa-eye" onclick="showpass()"></i>
                        </div>
                    </div>
                    <div class="pt-3 pb-5">
                        <div class="row text-center">
                            <div class="col">
                                <button type="button" class="btn btn-outline-dark btn-block">Cancel</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-dark btn-block">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- End login Form -->
            </div>


        </div>
    </div>
    <!-- End login Account -->

@stop
