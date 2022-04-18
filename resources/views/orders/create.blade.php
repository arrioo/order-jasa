@extends('layouts.main')

@section('content')
    <div class="col-md-6">
        <h2>Tambah Order</h2>
    <a role="button" class="btn btn-secondary btn-sm mb-2" href="{{ route('orders.index') }}">Back</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Order</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                </div>
                
                <div class="form-group">
                    <label for="choose">jasa atau barang</label>
                    <select class="form-control" id="choose" name="choose">
                        <option value="">Pilih</option>
                        <option value="service">Jasa</option>
                        <option value="item">Item</option>
                    </select>
                </div>

                <div class="form-group" id="service" style="display: none">
                    <label for="service">services</label>
                    <select class="form-control" id="service" name="service">
                        @foreach ($services as $service)
                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" id="item" style="display: none">
                    <label for="item">Items</label>
                    <select class="form-control" id="item" name="item">
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input class="form-control" type="number" id="price" name="price" >
                </div>

                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>

    {{-- include jquery --}}
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('#choose').change(function(){
                var choose = $('#choose').val();
                if(choose == 'service'){
                    $('#service').show();
                    $('#item').hide();
                }else if(choose == 'item'){
                    $('#item').show();
                    $('#service').hide();
                }else{
                    $('#service').hide();
                    $('#item').hide();
                }
            });
        });
    </script>
@endsection