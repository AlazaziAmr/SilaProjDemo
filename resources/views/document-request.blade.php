@extends('layout.master')
@section('title','document-request')
@section('bootstrap-upload-file')
    <link href="https://cdn.bootcdn.net/ajax/libs/bootstrap-fileinput/5.2.2/css/fileinput.min.css" rel="stylesheet">
@stop
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
                    <h5>Document Request</h5>
                    <hr class="bg-white">
                    <form>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <h6>Confirm Identity</h6>
                                <div class="pre-scrollable">
                                    <p> Please provide us with the front and back of a current photo ID, such as a:</p>
                                    <ul>
                                        <li>State-issued driver's license</li>
                                        <li>Driver's permit</li>
                                        <li>State ID card</li>
                                        <li>Military ID</li>
                                    </ul>
                                    <p>Or any of the following documents, as long as they're current:</p>
                                    <ul>
                                        <li>Utility bill dated within the past 60 days (please note: we cannot accept mobile phone bills, but we can accept internet or landline bills)</li>
                                        <li>Lease agreement (Negotiated within the past year; month-to-month leases must be negotiated within the past 6 months. Leases must include the terms and be signed by both the lessor and lessee.)</li>
                                        <li>Signed mortgage agreement (signed, and dated within the last 60 days)</li>
                                        <li>NYC ID card</li>
                                        <li>Tuition statement (for college or university students only; must include your dorm address, the date, and the school contact information)</li>
                                    </ul>
                                    <h6>Document Requirements:</h6>
                                    <ul>
                                        <li>Clear photos and PDFs are fine; we cannot accept screenshots or scans.</li>
                                        <li>All documents must be current. IDs cannot be expired, and monthly bills or statements should have been issued within the past 60 days.</li>
                                        <li>We need to see all four corners of the document, and the information we need to verify must be clearly visible.</li>
                                        <li>If you're using a photo ID, please send us images of both the front and the back.</li>
                                        <li>If the document has a signature requirement, then it must be hand-signed. We cannot accept electronic signatures (with the exception of leases, where electronic signatures are acceptable).</li>
                                        <li>Government-issued documents (such as a state-issued ID or passports) must be in color. We can accept black-and-white photos or PDFs of other documents, such as utility bills.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="form-group">
                                    <label for="first-name" class="text-muted">First Name</label>
                                    <input type="number" class="form-control" name="first-name" id="first-name">
                                </div>
                                <div class="form-group">
                                    <div class="d-flex">
                                        <label for="ssn" class="text-muted">SSN</label>
                                        <span class="ml-auto"><i class="fa fa-exclamation-circle text-muted"></i> </span>
                                    </div>
                                    <input type="number" class="form-control" name="ssn" id="ssn">
                                </div>

                                <div class="form-group">
                                    <div class="file-loading">
                                        <input id="file-1" type="file" class="file" data-overwrite-initial="false" data-min-file-count="1">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-right">
                            <input type="button" name="" class="btn btn-outline-secondary mx-3" value="Cancel">
                            <input type="button" name="" class="btn btn-dark px-4" value="Next">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- start push script -->
    @section('script-upload-file')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.bootcdn.net/ajax/libs/bootstrap-fileinput/5.2.2/js/fileinput.min.js"></script>
        <script src="https://cdn.bootcdn.net/ajax/libs/bootstrap-fileinput/5.2.2/themes/fa/theme.min.js"></script>
    @stop
    <!-- end push script -->

@stop
