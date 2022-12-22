
@extends('front-end.home.header')

@section('title')
    Home! MultiShop - Online Shop
@endsection



@section('body')


    <div class="container">

        <div class="row">
            <div class="col-sm-10">
                <table class="table table-bordered">
                    <thead class="align-items-center"> <tr>
                        <td>Product Image </td>
                        <td>Product Name </td>
                    </tr>
                    </thead>
                    @foreach($searchResults as $searchResult)
                    <tr>

                        <td><img src="{{ asset($searchResult->product_image) }}"></td>
                        <td><a href="{{ route('product-details',[ 'id'=>$searchResult->id,'name'=>$searchResult->product_name]) }}">{{ $searchResult->product_name }}</a></td>
                    </tr>
                    @endforeach



                </table>

            </div>

        </div>
    </div>









@endsection
