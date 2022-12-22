<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link href="{{ asset('/') }}/front-end/css/invoice.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-5">

<header class="clearfix">
    <div id="logo">
        <img src="logo.png">
    </div>
    <div id="company">
        <h2 class="name">Md Ahsan Ltd</h2>
        <div> Shaheb Bazar Rajshahi 6000</div>
        <div>+8801721-778257</div>

    </div>
</header>
<main>

    <div id="details" class="clearfix">
        <div id="client">
            <div class="company">
                <h2 class="name">Billing Address</h2>
                <div> {{$shipping->full_name}}</div>
                <div> {{$shipping->email_address}}</div>
                <div> {{$shipping->mobile_number}}</div>
                <div> {{$shipping->address_line}}</div>
                <div> {{$shipping->city}}</div>
                <div> {{$shipping->divison}}</div>
                <div> {{$shipping->zip_code}}</div>
                <div> {{$shipping->country}}</div>


            </div>
        </div>
        <div id="invoice">
            <h1>INVOICE.00000{{$order->id }}</h1>
            <div class="date"> Date: {{$order->created_at}}</div>

        </div>
    </div>
    <table border="0" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th class="no">SL No</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="qty">QUANTITY</th>
            <th class="total">TOTAL</th>
        </tr>
        </thead>
        <tbody>

        <?php $i = 1; $sum = 0?>
        @foreach( $orderDetails as $orderDetail)
        <tr>
            <td class="no">{{ $i++ }}</td>
            <td class="desc">{{ $orderDetail->product_name }}</td>
            <td class="unit">{{ $orderDetail->product_price }}</td>
            <td class="qty">{{ $orderDetail->product_quantity }}</td>
            <td>{{$total = $orderDetail->product_price* $orderDetail->product_quantity }}</td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td colspan="2"></td>
            <td colspan="2">SUBTOTAL</td>
            <td>{{$order->order_total}}</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2">TAX 25%</td>
            <td>00</td>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td colspan="2">GRAND TOTAL</td>
            <td>{{$order->order_total}}</td>
        </tr>
        </tfoot>
    </table>
    <div id="thanks">Thank you!</div>
    <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
    </div>
</main>


        </div>

    </div>

</div>
</body>
</html>
