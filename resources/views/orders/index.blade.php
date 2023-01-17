@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('order.create') }}"> Create New Order</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($orders as $order)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $order->Item_name }}</td>
            <td>{{ $order->Price }}</td>
            <td>{{ $order->Quantity }}</td>
            <td>
                <form action="{{ route('order.destroy',$order->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('order.show',$order->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('order.edit',$order->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $orders->links() !!}

@endsection
