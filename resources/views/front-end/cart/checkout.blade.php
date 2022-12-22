@extends('front-end.home.header')

@section('title')
    Check Out Information
@endsection

@section('body')


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Checkout</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->

    <div class="container-fluid">

       {{-- <div class="row">
            <div class="col-md-6">
                {{ Form::open(['route'=>'customer.registration', 'method'=>'POST']) }}
                <h3>{{ Session::get('message') }}</h3>
                <h3 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Registration Form</span></h3>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>

                            <input class="form-control" type="text" placeholder="your name" name="first_name" required >
                            <span class="text-danger">{{ $errors->has('first_name') ? $errors->first('first_name') : '' }}</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="Last name" name="last_name" required >
                            <span class="text-danger">{{ $errors->has('last_name') ? $errors->first('last_name') : ' ' }}</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com" id="email" name="email"required >
                            <h4 class="text-success" id="ajaxresp"></h4>
                            <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+880 1721778257" name="mobile_number" required >
                            <span class="text-danger">{{ $errors->has('mobile_number') ? $errors->first('mobile_number') : ' ' }}</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" placeholder="123 Street" name="address_line_1" required>
                            <span class="text-danger">{{ $errors->has('address_line_1') ? $errors->first('address_line_1') : ' ' }}</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" type="text" placeholder="123 Street" name="address_line_2" required >
                            <span class="text-danger">{{ $errors->has('address_line_2') ? $errors->first('address_line_2') : ' ' }}</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select" name="country"  required>
                                <option selected>Bangladesh</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                            <span class="text-danger">{{ $errors->has('country') ? $errors->first('country') : ' ' }}</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="New York" name="city" required >
                            <span class="text-danger">{{ $errors->has('city') ? $errors->first('city') : ' ' }}</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="New York" name="divisan"required >
                            <span class="text-danger">{{ $errors->has('divisan') ? $errors->first('divisan') : ' ' }}</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="123" name="zip_code" required>
                            <span class="text-danger">{{ $errors->has('zip_code') ? $errors->first('zip_code') : ' ' }}</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" placeholder="password" name="password" required>
                            <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                        </div>
                        <div class="col-md-6 form-group">
                            <label> Confirm Password</label>
                            <input class="form-control" type="password" placeholder=" confirm password" name="confirm_password" required >
                        </div>
                        <div class="col-md-6 form-group">
                            <input  type="submit" class="btn btn-block btn-success" id="regbtn" value="Sign Up">
                        </div>

                        </div>
                    </div>
                {{Form::close()}}
                </div>--}}

            <div class="col-md-6">
                {{ Form::open([ 'route'=>'customer.login.info', 'method'=>'POST']) }}
                <h4><span>---Already Registered Login here---</span></h4>
                <div class="bg-light p-30 mb-5">


                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" placeholder="example@email.com" name="email" required >
                        <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" placeholder="password" name="password" required >
                        <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                    </div>
                    <div class="form-group">
                        <input  type="submit" class="btn btn-block btn-success" value="Login">
                    </div>



                </div>
                {{ Form::close() }}

            </div>
        </div>
    </div>




    <script>
        var emailElement = document.getElementById('email');
        emailElement.onkeyup = function (){
            var email = document.getElementById('email').value;
            var xmlHttp = new XMLHttpRequest();
            var serverPage = 'http://localhost/E-commerce/public/ajax-email-check/'+email;
            xmlHttp.open('GET', serverPage);
            xmlHttp.onreadystatechange = function (){

                if( xmlHttp.readyState === 4 && xmlHttp.status === 200){
                    document.getElementById('ajaxresp').innerHTML = xmlHttp.responseText;

                    if(xmlHttp.responseText === "Already Exist"){
                        document.getElementById('regbtn').disabled = true;
                    }else {
                        document.getElementById('regbtn').disabled = false;
                    }
                }

            }
            xmlHttp.send(null);


        }



    </script>


@endsection
