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
                                <strong>Edit Form</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="/dashboard/shopaction/{{ $shopaction['id'] }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @method('put')
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Title</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ $shopaction['title'] }}" id="text-input" name="title" placeholder="Input Title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">SubTitle</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ $shopaction['subtitle'] }}" id="text-input" name="subtitle" placeholder="Input SubTitle" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Description</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea class="form-control" id="summary-ckeditor" name="description">{{ $shopaction['description'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">Upload Images</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <div class="mb-3">
                                                <input class="form-control" name="images" type="file" id="formFile" value="{{ $shopaction['images'] }}">
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