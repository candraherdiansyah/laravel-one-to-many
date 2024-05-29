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
</div>
@endsection
