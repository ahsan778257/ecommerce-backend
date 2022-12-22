@extends('admin.dashboard.dash-master')
@section('mainpanel')


    <div class="row align-items-center">
        <div class="col-md-12 grid-margin stretch-card ">
            <div class="card">
                <div class="card-body bg-info">
                    <h4 class="card-title text-center">Update Brand Form</h4>
                    <h5 class="card-description text-center text-dark">{{ Session::get('message') }} </h5>
                    <form class="forms-sample" action="{{ route('update-brandinfo') }}" method="post">
                        @csrf

                        <div class="form-group row">
                            <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Catagory Name</label>
                            <div class="col-sm-9">

                                <input type="text" class="form-control" name="brand_name" id="exampleInputUsername2" placeholder="brand_name" value="{{ $brands->brand_name}}">
                                <input type="hidden" name="brand_id"class="form-control" value="{{ $brands->id}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputMobile" class="col-sm-3 col-form-label">Catagory Price</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" id="exampleInputMobile" placeholder="brand_price" name="brand_price" value="{{ $brands->brand_price}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputstatus" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" id="exampleInputstatus" name="publication_status" {{ $brands->publication_status == 1 ? 'checked' : ''}} value="1">Published
                                <input type="radio" id="exampleInputstatus" name="publication_status" {{ $brands->publication_status == 0 ? 'checked' : ''}} value="0">Unpublished
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Catagory Description</label>
                            <div class="col-sm-9">
                                <textarea id="exampleInputPassword2" rows="10" cols="80" placeholder="brand_description" name="brand_description">{{ $brands->brand_description}}</textarea>
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

