
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
                        <h4 class="card-title text-center">Add Products Form</h4>
                        <h5 class="card-description text-center text-dark">{{ Session::get('message') }} </h5>
                        <form class="forms-sample" action="{{ route('add-productsave') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Catagory Name</label>
                                <div class="col-sm-9">
                                    <select name="catagory_id" id="exampleInputUsername2" class="form-control text-center">

                                        <option> >---Select Catagory Name---< </option>
                                      @foreach($catagories as $catagory)
                                        <option value="{{ $catagory->id }}">{{ $catagory->catagory_name }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Brand Name</label>
                                <div class="col-sm-9">
                                    <select name="brand_id" id="exampleInputUsername2" class="form-control text-center">

                                        <option> >---Select Brand Name---< </option>
                                       @foreach($brands as $brand)
                                        <option value="{{ $brand->id }}"> {{ $brand->brand_name }} </option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">{{ $errors->has('brand_id') ? $errors->first('brand_id') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Product Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  placeholder="product-name" name="product_name">
                                    <span class="text-danger">{{ $errors->has('product_name') ? $errors->first('product_name') : ' ' }}</span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Product Price</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control"  placeholder="product-price" name="product_price">
                                    <span class="text-danger">{{ $errors->has('product_price') ? $errors->first('product_price') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Product Quantity</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" placeholder="product-quantity" name="product_quantity">
                                    <span class="text-danger">{{ $errors->has('product_quantity') ? $errors->first('product_quantity') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputstatus" class="col-sm-3 col-form-label">Publication Status</label>
                                <div class="col-sm-9">
                                    <input type="radio" id="exampleInputstatus" name="publication_status" value="1">Published
                                    <input type="radio" id="exampleInputstatus" name="publication_status" value="0">Unpublished
                                    <br>
                                    <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Short Description</label>
                                <div class="col-sm-9">
                                    <textarea id="exampleInputPassword2" rows="10" cols="80" placeholder="short_description" name="short_description"></textarea>
                                    <span class="text-danger">{{ $errors->has('short_description') ? $errors->first('short_description') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Long Description</label>
                                <div class="col-sm-9">
                                    <textarea  rows="10" cols="80" placeholder="long_description" name="long_description"></textarea>
                                    <span class="text-danger">{{ $errors->has('long_description') ? $errors->first('long_description') : ' ' }}</span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-3 col-form-label" >Product Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="product_image" accept="multipart/form-data">
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
