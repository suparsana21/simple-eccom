<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UKM 45 - Solusi Jualan Pedagang Lokal</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

     <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
 

     <!-- Compiled and minified JavaScript -->
             
</head>
<body>

    <nav>
        
        <div class="nav-wrapper blue darken1">
                <a href="#" data-target="slide-out" class="sidenav-trigger white-text"><i class="material-icons">menu</i></a>                
            
            <div class="container">
                    <a href="#" class="brand-logo" style="font-size : 19px;font-weight : 700">UKM <span class="blue-text text-lighten-5">45</span></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                      <li><a href="badges.html">Tentang</a></li>
                      <li><a href="collapsible.html">Hubungi Kami</a></li>
                    </ul>
            </div>         
        </div>
    </nav>
            
    <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
              <div class="background">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Afghan_market_teeming_with_vendors_and_shoppers_2-4-09.jpg/250px-Afghan_market_teeming_with_vendors_and_shoppers_2-4-09.jpg" style="width:100%">
              </div>
              <a href="#name"><span class="white-text name">UKM 45</span></a>
              <a href="#name"><span class="white-text name">&nbsp;</span></a>
            </div></li>
            <li><a href="#!">Pilih Kategori</a></li>
            <li><a href="#!">Semua Produk</a></li>
            <li><div class="divider"></div></li>
            <li><a class="waves-effect" href="#!">Keluar</a></li>
          </ul>
    <div style="padding : 16px;">
            @yield('content')
    </div>

    @yield('script')

    <script>
       
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        
</body>
</html>