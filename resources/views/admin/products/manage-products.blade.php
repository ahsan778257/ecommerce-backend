@extends('admin.dashboard.dash-master')



@section('mainpanel')

    <div class="container">
        <div class="row">
            <div class="col-sm-12 justify-content-center">
                <div class="card align-items-center">
                    <table class="table table-bordered">
                        <tr class="bg-info">
                            <td>Si No</td>
                            <h1> {{ Session::get('message') }}</h1>
                            <td>Catagory id</td>
                            <td>Brand id</td>
                            <td>Product Name</td>
                            <td>Product price</td>
                            <td>Product Quantity</td>
                            <td>Publication status</td>
                            <td>Product Image</td>
                            <td>Action</td>
                        </tr>
                        @php($i = 1)
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $i++}}</td>
                                <td>{{ $product->catagory_name }}</td>
                                <td>{{ $product->brand_name}}</td>
                                <td>{{ $product->product_name}}</td>
                                <td>{{ $product->product_price}}</td>
                                <td>{{ $product->product_quantity}}</td>
                                <td>{{ $product -> publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <img src="{{ asset($product->product_image) }}" alt="no Image">

                                </td>
                                <td>
                                    @if($product -> publication_status == 1)
                                        <a href="{{ route('unpublisher',[ 'id'=>$product->id]) }}" class="btn btn-warning btn-xs">
                                            <i class="fa-solid fa-arrow-up"></i>
                                        </a>
                                    @else
                                        <a href="{{ route('publisher',[ 'id'=>$product->id]) }}" class="btn btn-secondary btn-xs">
                                            <i class="fa-solid fa-arrow-down"></i>
                                        </a>
                                    @endif

                                    <a href="{{ route('update-product',['id'=>$product->id]) }}" class="btn btn-success btn-xs">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                    <a href="{{ route('delete-product',['id'=>$product->id]) }}" class="btn btn-danger btn-xs">
                                        <i class="fa-solid fa-trash"></i>
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

