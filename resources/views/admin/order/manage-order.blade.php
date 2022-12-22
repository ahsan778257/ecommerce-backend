@extends('admin.dashboard.dash-master')



@section('mainpanel')

    <div class="container">
        <div class="row">
            <div class="col-md-12 justify-content-center">
                <div class="card align-items-center">
                    <table class="table table-bordered">
                        <h1> {{ Session::get('message') }}</h1>
                        <tr class="bg-info">

                            <td>Sl No</td>
                            <td>Customer Id</td>
                            <td>Shipping Id</td>
                            <td>Order Total</td>
                            <td>Order Date</td>
                            <td>Order Status</td>
                            <td>Payment Type</td>
                            <td>Payment Status</td>
                            <td>Action</td>
                        </tr>
                        @php($i = 1)
                        @foreach($orders as $order)

                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $order->customer_id }}</td>
                                <td>{{ $order->shipping_id }}</td>
                                <td>{{ $order->order_total}}</td>
                                <td>{{ $order->created_at }}</td>
                                <td>{{ $order->order_status }}</td>
                                <td>{{ $order->payment_type }}</td>
                                <td>{{ $order->payment_status}}</td>
                                <td>

                                        <a href="{{ route('order-detail',[ 'id'=>$order->id]) }}" class="btn btn-warning btn-xs">
                                            <i class="fa-solid fa-magnifying-glass-plus"></i>
                                        </a>
                                    <a href="{{ route('order-invoice',['id'=>$order->id ]) }}" class="btn btn-success btn-xs">
                                        <i class="fa-solid fa-file-invoice"></i>
                                    </a>
                                    <a href="{{ route('order-download',['id'=>$order->id ]) }}" class="btn btn-light btn-xs">
                                        <i class="fa-solid fa-download"></i>
                                    </a>
                                    <br>
                                    <a href="" class="btn btn-primary btn-xs">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-xs">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>


                                </td>
                            </tr>


                        @endforeach
                    </table>

                </div>

            </div>


        </div>
    </div>


@endsection

