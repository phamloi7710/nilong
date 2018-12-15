@extends('admin.general.master')
@section('content')       
<div id="page-content-wrapper">
    <div id="page-content">
        <div class="container">
            <div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Form validation
        </h3>
        <div class="example-box-wrapper">
            <form class="form-horizontal bordered-row" id="demo-form" data-parsley-validate="" novalidate="">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Required Field</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder="Required Field" required="" class="form-control" data-parsley-id="6952"><ul class="parsley-errors-list" id="parsley-id-6952"></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Min-length</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-minlength="6" placeholder="At least 6 characters" required="" class="form-control" data-parsley-id="8802"><ul class="parsley-errors-list" id="parsley-id-8802"></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Max-length</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-maxlength="6" placeholder="At most 6 characters" required="" class="form-control" data-parsley-id="1662"><ul class="parsley-errors-list" id="parsley-id-1662"></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Range length</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-range="[5,10]" placeholder="Between 5 and 10 characters" required="" class="form-control" data-parsley-id="5779"><ul class="parsley-errors-list" id="parsley-id-5779"></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">RegExp</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-pattern="#[A-Fa-f0-9]{6}" placeholder="Hexadecimal Color Code" required="" class="form-control" data-parsley-id="4704"><ul class="parsley-errors-list" id="parsley-id-4704"></ul>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-type="email" placeholder="Email address" required="" class="form-control" data-parsley-id="5645"><ul class="parsley-errors-list" id="parsley-id-5645"></ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">URL</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-type="url" placeholder="URL address" required="" class="form-control" data-parsley-id="3971"><ul class="parsley-errors-list" id="parsley-id-3971"></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Digits</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-type="digits" placeholder="Digits only" required="" class="form-control" data-parsley-id="7548"><ul class="parsley-errors-list" id="parsley-id-7548"></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Alphanum</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-type="alphanum" placeholder="Alphanumeric only" required="" class="form-control" data-parsley-id="5934"><ul class="parsley-errors-list" id="parsley-id-5934"></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-6">
                                <input type="text" id="ps1" required="" class="form-control" data-parsley-id="9521"><ul class="parsley-errors-list" id="parsley-id-9521"></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Repeat Password</label>
                            <div class="col-sm-6">
                                <input type="text" data-parsley-equalto="#ps1" required="" class="form-control" data-parsley-id="3581"><ul class="parsley-errors-list" id="parsley-id-3581"></ul>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Checkbox</label>
                            <div class="col-sm-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" required="" name="terms" data-parsley-multiple="terms" data-parsley-id="0024">
                                        Accept Terms &amp; Conditions
                                    </label><ul class="parsley-errors-list" id="parsley-id-multiple-terms"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-danger content-box text-center pad20A mrg25T">
                    <button class="btn btn-lg btn-primary">Validate form</button>
                </div>
            </form>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@stop