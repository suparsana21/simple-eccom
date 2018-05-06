@extends('layout.app') 
@section('content')
    <div style="height : 250px;overflow : hidden">
        <img src="{{url('/images').'/'.$data->image}}" alt="" style="width : 100%;transform : translateY(-20%)">
    </div>
    <center>
    <h5 style="text-transform : uppercase;text-align : center"> <b>{{$data->product_name}}</b> </h5>
    <p style="font-size : 20px;margin-top : 0">Rp {{number_format($data->price)}}</p>
    </center>
    <p style="text-align : justify;font-size : 18px">
        {{$data->description}}
    </p>
    <hr>
    <p style="text-align : left;font-size : 18px">
        <b>Tentang Penjual</b> 
        <br>
        <br>
        <i class="material-icons prefix" style="font-size : 15px">account_circle</i>
        {{$data->seller_name}}
        <br>
        <i class="material-icons prefix" style="font-size : 15px">phone</i>
        {{$data->seller_phone}}
        <br>
        <i class="material-icons prefix" style="font-size : 15px">home</i>
        {{$data->seller_address}}
        <a href="tel:{{$data->seller_phone}}" class="btn blue" style="width : 100%;margin : 20px 0 0;display : block">Hubungi Penjual</a>
    </p>
    
@endsection