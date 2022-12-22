@extends('admin.dashboard.dash-master')



@section('mainpanel')

    <div class="container">
        <div class="row">
            <div class="col-md-10 justify-content-center">
                <div class="card align-items-center">
                    <table class="table table-bordered border-dark">

                        <thead> <h2>Customer Information </h2></thead>
                        <tr class="text-dark fw-bold">
                            <td>Customer Name</td>
                            <td>{{$customer->first_name. ' '.$customer->last_name}}</td>
                        </tr>
                        <tr class="text-dark fw-bold">
                            <td>Customer Email</td>
                            <td>{{$customer->email}}</td>
                        </tr>
                        <tr class="text-dark fw-bold">
                            <td>Customer Mobile Number</td>
                            <td>{{$customer->mobile_number}}</td>
                        </tr>
                        <tr class="text-dark fw-bold">
                            <td>Customer Address</td>
                            <td>{{$customer->address_line_1.', '.$customer->address_line_2.' ,'.$customer->zip_code.' ,'.$customer->city.','.$customer->divisan.' ,'.$customer->country}}</td>
                        </tr>

                    </table>
                    <br>
                    <table class="table table-bordered border-dark">
                        <thead> <h2>Shipping Address Information </h2></thead>
                        <tr class="text-dark fw-bold">
                            <td>Shipping Name</td>
                            <td>{{$shipping->full_name}}</td>
                        </tr>
                        <tr class="text-dark fw-bold">
                            <td>Shipping Email</td>
                            <td>{{$shipping->email_address}}</td>
                        </tr>
                        <tr class="text-dark fw-bold">
                            <td>Shipping Mobile Number</td>
                            <td>{{$shipping->mobile_number}}</td>
                        </tr>
                        <tr class="text-dark fw-bold">
                            <td>Shipping Address</td>
                            <td>{{$shipping->address_line.', '.$shipping->zip_code.' ,'.$shipping->city.','.$shipping->divison.' ,'.$shipping->country}}</td>
                        </tr>

                    </table>
                    <br>
                    <table class="table table-bordered border-dark">
                        <thead> <h2>Payments Information </h2></thead>
                        <tr class="text-dark fw-bold">
                            <td>Payments Type</td>
                            <td>{{$payments->payment_type}}</td>
                        </tr>
                        <tr class="text-dark fw-bold">
                            <td>Payments Status</td>
                            <td>{{$payments->payment_status}}</td>
                        </tr>




                    </table>
                    <table class="table table-bordered border-dark">
                        <thead> <h2>Product Information </h2></thead>
                        <tr class="bg-primary text-light fw-bold">
                            <td>SL NO</td>
                            <td>Product Id</td>
                            <td>Product Name</td>
                            <td>Product Price</td>
                            <td>Product Quantity</td>
                            <td>Total Tk. </td>
                        </tr>
                            @php($i = 1 )
                            @foreach( $orderDetails as $orderDetail)
                        <tr class="text-dark fw-bold">
                            <td>{{ $i++ }}</td>
                            <td> {{ $orderDetail->product_id }} </td>
                            <td>{{ $orderDetail->product_name }}</td>
                            <td> Tk. {{ $orderDetail->product_price }}</td>
                            <td>{{ $orderDetail->product_quantity }}</td>
                            <td>Tk.{{ $orderDetail->product_price * $orderDetail->product_quantity}}</td>

                        </tr>
                        @endforeach

                    </table>




                </div>

            </div>


        </div>
    </div>


@endsection

