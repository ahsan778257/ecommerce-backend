@extends('front-end.home.header')

@section('title')
    Check Out Information
@endsection

@section('body')

    <div class="container">
        <div class="row">
            <h5> Dear {{ Session::get('customerName') }}  Plese Complete Payment methods </h5>

        </div>

    </div>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{ Form::open([ 'route'=>'new-order', 'method'=>'POST']) }}
                @csrf

                <h3 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">........Payments.......</span></h3>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <table class="table table-bordered">
                            <th>Payments Method</th>
                            <th>Select Option</th>
                            <tr>
                                <td>Cash on Delivery</td>
                                <td><input type="radio" name="payment_type" value="Cash">Cash on Delivery</td>

                            </tr>

                                <td>Mobile Banking</td>
                                <td><input type="radio" name="payment_type" value="mobile_banking">Mobile Banking</td>

                            </tr>
                            <tr>
                                <td>Card</td>
                                <td><input type="radio" name="payment_type" value="card">Card</td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button class="btn btn-primary btn-lg btn-block" id="sslczPayBtn"
                                            token="if you have any token validation"
                                            postdata="your javascript arrays or objects which requires in backend"
                                            order="If you already have the transaction generated for current order"
                                            endpoint="{{ url('pay-via-ajax') }}"> Pay Now
                                    </button>
                                </td>

                            </tr>
                        </table>
                </div>
                {{Form::close()}}
            </div>

        </div>
    </div>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>


        <!-- If you want to use the popup integration, -->
        <script>
            var obj = {};
            obj.cus_name = $('#customer_name').val();
            obj.cus_phone = $('#mobile').val();
            obj.cus_email = $('#email').val();
            obj.cus_addr1 = $('#address').val();
            obj.amount = $('#total_amount').val();

            $('#sslczPayBtn').prop('postdata', obj);

            (function (window, document) {
                var loader = function () {
                    var script = document.createElement("script"), tag = document.getElementsByTagName("script")[0];
                    // script.src = "https://seamless-epay.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR LIVE
                    script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(7); // USE THIS FOR SANDBOX
                    tag.parentNode.insertBefore(script, tag);
                };

                window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
            })(window, document);
        </script>



@endsection

