
@extends('admin.dashboard.dash-master')


@section('mainpanel')

    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Form elements </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
            </nav>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12 grid-margin stretch-card ">
                <div class="card">
                    <div class="card-body bg-info">
                        <h4 class="card-title text-center">Brand Add Form</h4>
                        <h5 class="card-description text-center text-dark">{{ Session::get('message') }} </h5>
                        <form class="forms-sample" action="{{ route('brandsave') }}" method="post">
                            @csrf

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Brand Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="brand_name" id="exampleInputUsername2" placeholder="brand_name">
                                    <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Brand Price</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="exampleInputMobile" placeholder="brand_price" name="brand_price">
                                    <span class="text-danger">{{ $errors->has('brand_price') ? $errors->first('brand_price') : ' ' }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputstatus" class="col-sm-3 col-form-label">Publication Status</label>
                                <div class="col-sm-9">
                                    <input type="radio" id="exampleInputstatus" name="publication_status" value="1">Published
                                    <input type="radio" id="exampleInputstatus" name="publication_status" value="0">Unpublished
                                    <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Brand Description</label>
                                <div class="col-sm-9">
                                    <textarea id="exampleInputPassword2" rows="10" cols="80" placeholder="brand_description" name="brand_description"></textarea>
                                    <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}
                                </div>
                            </div>

                            <div class="form-check form-check-flat form-check-primary">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"> Remember me </label>
                            </div>
                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>


@endsection

