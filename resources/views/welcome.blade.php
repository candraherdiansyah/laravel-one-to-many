@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <center><h2>Produk List</h2></center>
        @foreach ($produk as $item)
        <div class="card" style="width: 18rem;">
            <img src="{{asset('storage/produks/'.$item->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text"><a href="/produk/{{$item->id}}">{{$item->nama}}</a></p>
            </div>
          </div>
        @endforeach
    </div>
    <div class="row py-4">
        <div class="card">
            <div class="card-header">
                Daftar Merk
            </div>
            <div class="card-body">
                @foreach ($merk as $item)
                <a href="{{ route('produk.filterByMerk', ['id' => $item->id]) }}" class="btn btn-info">{{ $item->nama_merk }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
