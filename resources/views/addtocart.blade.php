<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order!</title>
    <link rel="stylesheet" href={{asset('assets/css/ato.css')}}>
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="header">
    <p class="logo"><a class="logos" href="{{url('home')}}">GRP3</a></p>
    <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</div>
</div>
  <div class="container">
    <div id="root"></div>
    <div class="sidebar">
      <div class="head"><p>My Cart</p></div>
      <div class="caont">
        <div id="cartItem">Your cart is empty</div></div>
          <div class ="foot">
           <h3>Total</h3>
           <h2 id="total">$ 0.00</h2>
          </div>
         <div class="paynow" ><button onclick="functionPay()">Pay Now!</button></div>
      
       </div>

    <script>
      function functionPay () {
        if (cost !== "$ 0.00") { 
        window.location = "/Ojxmxeg4d9JmtK6xoQUwbARxFciLgm3e";
         }
        else{
         }
        } 

    </script>

<script type="text/javascript" src={{asset('assets/js/addtocart.js')}}></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


</body>
</html>