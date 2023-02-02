@extends('admin.index')
@section('container')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Basic Form</strong> Elements
                            </div>
                            <div class="card-body card-block">
                                <form action="/dashboard/trustedcompany/{{ $trustedcompany['id'] }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @method('put')
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Nama Company</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ $trustedcompany['description'] }} " id="text-input" name="description" placeholder="Input Company Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">Upload Images</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="mb-3">
                                                <input class="form-control" value="{{ $trustedcompany['images'] }}" name="images" type="file" id="formFile">
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection