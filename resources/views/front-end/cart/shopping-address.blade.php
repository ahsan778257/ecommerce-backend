@extends('front-end.home.header')

@section('title')
    Check Out Information
@endsection

@section('body')

<div class="container">
    <div class="row">
       <h5> Dear {{ Session::get('customerName') }} your Billing information and Shipping information is same then <strong class="text-success">Save Shipping Info</strong> button</h5>

    </div>

</div>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{ Form::open([ 'route'=>'shipping-address-save', 'method'=>'POST']) }}
                @csrf

                <h3 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Shipping Address gose here...</span></h3>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>

                            <input class="form-control" value="{{ $customer->first_name. ' '.$customer->last_name }}" type="text" placeholder="your name" name="full_name" required>

                        </div>

                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control"  value="{{ $customer->email }}" type="text" placeholder="example@email.com" id="email" name="email_address"required >
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" value="{{ $customer->mobile_number }}" placeholder="+880 1721778257" name="mobile_number" required >

                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line</label>
                            <input class="form-control" type="text" value="{{ $customer->address_line_1 }}" placeholder="123 Street" name="address_line" required>

                        </div>

                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select" name="country" value="{{ $customer->country }}"  required>
                                <option >Bangladesh</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>

                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="New York" value="{{ $customer->city }}" name="city" required >

                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="New York" value="{{ $customer->divisan }}" name="divison"required >
                    </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="123" name="zip_code" value="{{ $customer->zip_code }}" required>

                        </div>

                    </div>
                    <div class="form-group">
                        <input  type="submit" class="btn btn-block btn-success" id="regbtn" value="Save Shipping Info">
                    </div>
                </div>
                {{Form::close()}}
            </div>

        </div>
    </div>
@endsection
