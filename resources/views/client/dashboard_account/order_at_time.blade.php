@extends('client.my-account')
@section('dashboard_content')

<div class="tab-pane fade active" id="orders">
    <h3>Orders</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>order_origin</th>
                    <th>product</th>
                    <th>user</th>
                    <th>quatity</th>
                    <th>sale</th>
                    <th>price</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order_at_time as $item)
                    <tr>
                        <td>{{ $item->id_order_origin }}</td>
                        <td>
                            @foreach ($product as $itemProduct)
                                @if ($itemProduct->id == $item->id_product)
                                        {{ $itemProduct->name }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{ Auth::user()->name }}</td>
                        <td>{{ $item->quatity }}</td>
                        <td>{{ $item->sale }}</td>
                        <td>{{ $item->price }}</td>
                        <td><span class="success">{{ $item->status }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection