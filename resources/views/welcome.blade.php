@extends('layout.app') 
@section('content')
 <center>
     <h5>Pilih Kategori</h5>
     <br>
 </center>
    <ul class="collection">
        @foreach($categories as $category)
        <a href="product/category/{{$category->id}}">
            <li class="collection-item avatar">
                <img src="{{$category->image}}" alt="" class="circle" style="">
                <span class="title dark-text">{{$category->name}}</span>
                <p>{{count($category->products)}} Produk <br>
            </li>
        </a>
        
        @endforeach
    </ul>
@endsection