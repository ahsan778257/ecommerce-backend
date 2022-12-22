@extends('front-end.home.header')

@section('title')
    Cart Show Information
@endsection

@section('body')



    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-bordered table-hover text-center mb-0">
                    <thead class="thead-dark">
                    <tr>
                        <th>Sl No</th>
                        <th>Products</th>
                        <th>Price (TK.)</th>
                        <th>Quantity</th>
                        <th>Size</th>
                        <th>Color</th>
                        <th>Total (TK.)</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    @php($i = 1)
                    @php($sum = 0)
                    @foreach($cartProducts as $cartProduct)
                    <tbody class="align-middle table-bordered">

                        <tr>
                            <td>{{ $i++ }}</td>
                            <td class="align-middle">
                                <img src="{{ asset($cartProduct->attributes->image) }}" alt="" style="width: 50px;">
                                {{ $cartProduct->name }}
                            </td>
                            <td class="align-middle">TK. {{ $cartProduct->price }}</td>

                            <td class="align-middle">

                                {{ Form::open(['route'=>'cart-quantity-update', 'method'=>'POST']) }}
                                <div class="form-group">
                                    <input type="hidden" name="updateId" value="{{ $cartProduct->id }}" >
                                    <input type="number"  name="quantity" value="{{ $cartProduct->quantity }}" min="1">
                                    <input type="submit" class="btn-success" value="update">
                                </div>
                                {{ Form::close() }}


                            </td>

                            <td class="align-middle">{{ $cartProduct->attributes->size }}</td>
                            <td class="align-middle">{{ $cartProduct->attributes->color }} </td>
                            <td>{{ $total = $cartProduct->price*$cartProduct->quantity }}</td>


                            <td class="align-middle"><a href="{{ route('delete-cart-item',['id'=>$cartProduct->id]) }}" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a></td>

                            <?php $subTotal = $sum + $total; ?>


                            <?php  Session::put('subTotal',$subTotal); ?>



                        </tr>
                    </tbody>

                    @endforeach

                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal(TK.)</h6>

                            <h6>{{ $subTotal }}</h6>

                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping (TK.)</h6>
                            <h6 class="font-weight-medium">{{ $shipping = 0 }}</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total (TK.)</h5>
                            <h5>{{ $orderTotal =$subTotal+$shipping }}
                                <?php Session::put('orderTotal', $orderTotal) ?></h5>


                        </div>

                    </div>
                </div>

            </div>

        </div>
        <div class="row me-5">
            <div class="col-md-10 m-auto px-5">
                <a href="{{ route('checkout-form') }}" class="btn btn-primary font-weight-bold me-3 py-3">Previous</a>
            </div>
            <div class="col-md-2 m-auto px-5">
            @if(Session::get('customerId') && Session::get('shippingId'))
                <a href="{{ route('payments-form') }}" class="btn btn-primary font-weight-bold me-3 py-3">Checkout</a>
                @elseif(Session::get('customerId'))
                    <a href="{{ route('shopping-checkout') }}" class="btn btn-primary font-weight-bold me-3 py-3">Checkout</a>
                @else
                    <a href="{{ route('checkout-form') }}" class="btn btn-primary font-weight-bold me-3 py-3">Checkout</a>
                @endif
            </div>


        </div>
    </div>
    <!-- Cart End -->

@endsection



