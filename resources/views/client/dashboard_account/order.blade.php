@extends('client.my-account')
@section('dashboard_content')
    
<div class="tab-pane fade active" id="orders">
    <h3>Orders</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Order</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order_origin as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td><span class="success">{{ $item->status }}</span></td>
                        <td><a href="{{route('my-account-order-at-time',['id'=>$item->id])}}" class="view">view</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection