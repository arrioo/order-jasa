@extends('layouts.main')

@section('content')
    <div class="col-md-6">
        <h2>Layanan Jasa</h2>
    <a role="button" class="btn btn-primary btn-sm mb-2" href="{{ Route('services.create') }}">Tambah jasa</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis service</th>
                        <th class="text-center">deskripsi</th>
                        <th>durasi</th>
                        <th>price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                    <tr>
                        <td> {{ $loop->iteration }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->description }}</td>
                        <td>{{ $service->duration }}</td>
                        <td>{{ $service->price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection