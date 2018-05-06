@extends('layout.app') 
@section('content')
    
    <div class="row">
            @foreach($products as $product)
        
        <div class="col s6 m4 l3">
            <div class="card">
            <div class="card-image" style="height : 150px;overflow:hidden">
                <img src="{{url('/images/').'/'.$product->image}}" style="width : 100%; transform : translateY(-20%)">
                <span class="card-title">{{$product->name}}</span>
            </div>
            <div class="card-content">
                <p><b>{{$product->product_name}}</b></p>
                <p> Rp {{number_format($product->price)}}</p>
            </div>
            <div class="card-action">
                <a href="{{url('product').'/'.$product->id}}">Detail</a>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    <a href="{{url('/')}}/product/create" class="btn-floating btn-large waves-effect waves-light blue darken-4" title="Tambah Produk" style="position : absolute;right : 16px;bottom : 16px;"><i class="material-icons">add</i></a>
    
@endsection