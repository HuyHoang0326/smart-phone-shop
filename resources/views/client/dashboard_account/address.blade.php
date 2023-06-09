@extends('client.my-account')
@section('dashboard_content')

<div class="tab-pane active" id="address">
    <p>The following addresses will be used on the checkout page by default.</p>
    <h4 class="billing-address">Billing address</h4>
    <a href="#" class="view">Edit</a>
    <p><strong>Bobby Jackson</strong></p>
    <address>
        <span><strong>City:</strong> Seattle</span>,
        <br>
        <span><strong>State:</strong> Washington(WA)</span>,
        <br>
        <span><strong>ZIP:</strong> 98101</span>,
        <br>
        <span><strong>Country:</strong> USA</span>
    </address>
</div>

@endsection