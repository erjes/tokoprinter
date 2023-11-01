@extends('layout.template')
<link rel="stylesheet"type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@section('konten')

<div class="small-container cart-page">
<table>
    <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
    </tr>
    <tr>
        <td>
            <div class="cart-info">
                <img src="https://id.canon/media/image/2021/01/12/147eea35e9314cca929e45ac8d0aec6b_CISS_CM_AS_FR_cl-362x320.png">
                <div>
                    <p>Printer</p>
                    <small>Price: RP.500.00</small><br>
                    <a href="">Remove</a>
                </div>
            </div>
        </td>
        <td><input type="number" vlaue="1"></td>
        <td>RP. 500.000</td>
    </tr>
    <tr>
        <td>
            <div class="cart-info">
                <img src="https://www.izikomputer.com/wp-content/uploads/2022/05/Printer-Epson-L1210-2.jpg">
                <div>
                    <p>Printer</p>
                    <small>Price RP. 500.000</small><br>
                    <a href="">Remove</a>
                </div>
            </div>
        </td>
        <td><input type="number" vlaue="1"></td>
        <td>RP. 500.000</td>
    </tr>
    <tr>
        <td>
            <div class="cart-info">
                <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/8/28/b632f887-e31e-4183-9b04-3c9c6d9bd0a4.jpg">
                <div>
                    <p>Printer</p>
                    <small>Price: RP.500.000</small><br>
                    <a href="">Remove</a>
                </div>
            </div>
        </td>
        <td><input type="number" vlaue="1"></td>
        <td>RP. 500.000</td>
    </tr>
    </table>
    
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>RP. 1.500.000</td>
            </tr>
        </table>
</div>
<div class="button-container">
    <button class="custom-btn btn-3"><span>CheckOut</span></button>
</div>
<script>
    var menuItems=document.getElementById("MenuItems");
    
    MenuItems.style.maxHeight="0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px"){
            MenuItems.style.maxHeight="200px";
        }
        else{
            MenuItems.style.maxHeight="0px";
        }
    }
</script>
@endsection