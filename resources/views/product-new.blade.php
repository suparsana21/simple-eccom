@extends('layout.app') 
@section('content')
<div class="row">
    <form class="col s12" method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
        {{csrf_field()}}
          <div class="row">
            <div class="input-field col s12">
                <input id="icon_prefix" type="text" name="name" class="validate">
                <label for="icon_prefix">Nama Produk</label>
            </div>
            <div class="input-field col s12">
                <select name="category">
                    <option value="" disabled selected>Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <label>Kategori</label>
            </div>
                
            <div class="input-field col s12">
                <input id="price" name="price" type="number" class="validate"/>
                <label for="price">Harga</label>
            </div>
            <div class="input-field col s12">
                <textarea id="textarea1" name="description" class="materialize-textarea"></textarea>
                <label for="textarea1">Deskripsi Produk</label>
            </div>
            <div class="file-field input-field col s12">
                <div class="btn">
                    <span>Foto</span>
                    <input type="file" name="image" accept="image/*">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Foto Produk">
                </div>
                </div>
            </div>
              <hr>
              <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_seller" type="text" name="seller_name" class="validate">
              <label for="icon_seller">Nama Penjual</label>
            </div>
            <div class="input-field col s12">
              <i class="material-icons prefix">phone</i>
              <input id="icon_telephone" type="tel" name="seller_phone" class="validate">
              <label for="icon_telephone">Kontak Penjual</label>
            </div>
            <div class="input-field col s12">
                <i class="material-icons prefix">home</i>
                <input id="icon_address" type="tel" name="seller_address" class="validate">
                <label for="icon_address">Alamat Penjual</label>
            </div>
            <div class="input-field col s12">
                   <button class="btn blue" style="width : 100%" type="submit">Upload Produk</button>
            </div>
          </div>
        </form>
      </div>
            
    
    
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
    
        
@endsection