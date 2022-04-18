@extends('layouts.main')

@section('content')
    <div class="col-md-6">
        <h2>Order</h2>
    <a role="button" class="btn btn-primary btn-sm mb-2" href="{{ Route('orders.create') }}">Tambah order</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nama</th>
                        <th>Pilihan</th>
                        <th>price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->orderable->name }}</td>
                        <td>{{ $order->price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection