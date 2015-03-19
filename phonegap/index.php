<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>jQuery Mobile Web App Starter</title>

    <!-- Include meta tag to ensure proper rendering and touch zooming -->
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <!-- Include jQuery Mobile stylesheets -->
    <link href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" rel="stylesheet">
    <link href="stylesheets/style.css" rel="stylesheet">

    <!-- Include the jQuery library -->
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>

    <!-- Include the jQuery Mobile library -->
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>

<div data-role="page" id="home">
    <div data-role="header">
        <h1>Hot Mess Pizza</h1>
        <a class="ui-btn-left" href="tel:509-123-1234"><img src="images/call.png" alt="Call Us"></a><br>

        <div data-role="navbar">
            <ul>
                <li><a class="ui-btn-active ui-state-persist" href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#about">About Us</a></li>
            </ul>
        </div>
    </div>


    <div data-role="content">
        <h2>Welcome to Hot Mess pizza!</h2>
        <p>Click on <a href="#menu">Menu</a> to get your order started!</p>
    </div>

    <div data-role="footer" data-position="fixed">
        <h4>Some pizza place &copy; 2015</h4>
    </div>
</div>

<div data-role="page" id="menu">
    <div data-role="header">
        <h1>Hot Mess Pizza</h1>
        <a class="ui-btn-left" href="tel:509-123-1234"><img src="images/call.png" alt="Call Us"></a><br>

        <div data-role="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a class="ui-btn-active ui-state-persist" href="#menu">Menu</a></li>
                <li><a href="#location">Location</a></li>
                <li><a href="#about">About Us</a></li>
            </ul>
        </div>
    </div>


    <div data-role="content">
        <h2>Pizzas</h2>

        <div data-product="2120" class="product">
            <span data-name="Hot Mess"><h5>Hot Mess</h5></span>
            <span data-price="9.99"><small>$9.99</small></span><br>
            <span class="description">the original, the great, The Hot Mess. Upon the crust of this monster lies our spiciest sauce and our signature over aged pepperoni and vegies. For that extra flavor! This is our favorite pie, and its how we made a name for ourselves!</span>
        </div>

        <div data-product="1235" class="product">
            <span data-name="The Sissy"><h5>The Sissy</h5></span>
            <span data-price="10.99"><small>$10.99</small></span><br>
            <span class="description">The Sissy contains all vegetables for all you health freaks out there!</span>
        </div>

        <div data-product="1510" class="product">
           <span data-name="Euro Style"><h5>Euro Style</h5></span>
            <span data-price="14.99"><small>$14.99</small></span><br>
            <span class="description">This is our take on the european style ham and pineapple. Savory and sweet all in one bite! Something unique and fun to try!</span>
        </div>

        <div data-product="3510" class="product">
            <span data-name="Original Pepper"><h5>Original Pepper</h5></span>
            <span data-price="10.99"><small>$10.99</small></span><br>
            <span class="description">Classic pepperoni pizza!</span>
        </div>

        <h2>Salads</h2>

        <div data-product="6432" class="product">
            <span data-name="Classic Salad"><h5>Classic Salad</h5></span>
            <span data-price="7.99"><small>$7.99</small></span><br>
            <span class="description">Just a plain salad with croutons, onions, a deviled egg. Available dressings are Ranch and Thousand Island.</span>
        </div>

        <div data-product="6432" class="product">
            <span data-name="Fruit Bowl"><h5>Fruit Bowl</h5></span>
            <span data-price="5.99"><small>$5.99</small></span><br>
            <span class="description">Plain fruit bowl, nothing special. Contains strawberries, blue berries pineapple, and grapes.</span>
        </div>

        <h2>Drinks</h2>

        <div>
            <small>1.99</small><br>
            Cola, Lemonade, Root Beer, or Bottled Water
        </div>
    </div>

    <div id="cartDiv">

    </div>
    <div>
        <button id="buy">Buy Now</button>
    </div>
    <div>
        <button id="saveOrder">Save Order</button>
    </div>
    <div>
        <button id="loadOrder">Load Order</button>
    </div>

    <div data-role="footer" data-position="fixed">
        <h4>Some pizza place &copy; 2015</h4>
    </div>
</div>

<div data-role="page" id="location">
    <div data-role="header">
        <h1>Hot Mess Pizza</h1>
        <a class="ui-btn-left" href="tel:509-123-1234"><img src="images/call.png" alt="Call Us"></a><br>

        <div data-role="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a class="ui-btn-active ui-state-persist" href="#location">Location</a></li>
                <li><a href="#about">About Us</a></li>
            </ul>
        </div>
    </div>

    <div data-role="content">
        <script>
            navigator.geolocation.getCurrentPosition(function (pos) {
                var lat = pos.coords.latitude;
                var lng = pos.coords.longitude;
                var dest = "Pizza+Pipeline+415+N.+Sullivan"
                var url = "<iframe src='http://www.maps.google.com/maps?saddr=" + lat + "," + lng + "&daddr=" + dest + "&output=embed" + "&z=10" + "' width='500' height='500' frameborder='0' style='border:0'></iframe>"
                console.log(url)
                $('#dir-map').append(url)
            })


        </script>
        Directions to nearest Hot Mess Pizza:<br>

        <div id="dir-map"></div>
    </div>

    <div data-role="footer" data-position="fixed">
        <h4>Some Pizza Place&copy; 2015</h4>
    </div>
</div>

<div data-role="page" id="about">
    <div data-role="header">
        <h1>Hot Mess Pizza</h1>
        <a class="ui-btn-left" href="tel:509-123-1234"><img src="images/call.png" alt="Call Us"></a><br>

        <div data-role="navbar">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#location">Location</a></li>
                <li><a class="ui-btn-active ui-state-persist" href="#about">About Us</a></li>
            </ul>
        </div>
    </div>

    <div data-role="content">
        <p>We offer an array of exceptional pizza dishes. Our menu consists of many fan favorites and classics
            such as the original, the great, The Hot Mess. Upon the crust of this monster lies our spiciest
            sauce and our signature over aged pepperoni and vegies. For that extra flavor! This is our favorite
            pie, and its how we made a name for ourselves!</p>
    </div>

    <div data-role="footer" data-position="fixed">
        <h4>Some pizza place &copy; 2015</h4>
    </div>
</div>

<script>
    var cart = [];

    function displayCart() {
        var cartDiv = $('#cartDiv');
        cartDiv.html("");
        var grandTotal = 0;

        for (var item in cart) {
            var name = cart[item].name;
            var qty = cart[item].qty;
            var price = cart[item].price;
            var subtotal = qty * price;
            grandTotal += subtotal;

            cartDiv.append('<hr><br/><div>'+ name + "<br/>" + '<small> $' + price.toFixed(2) + ' - ' + qty + '<br/>Subtotal: $' + subtotal.toFixed(2) + '</small></div>')
        }
        cartDiv.append('<hr><p>Grand Total: $' + grandTotal.toFixed(2) + '</p>');
        $('#buy').parent().show();

    }


    $(document).ready(function () {
        $('#buy').parent().hide();

        $('div[data-product]').each(function () {
            $(this).append('<button class="btnCart">Add To Cart</button>');
        })

        $('.btnCart').on("click", function (event) {
            var pid = $(this).parent().data("product");
            console.log(pid);
            if (cart[pid]) {
                cart[pid].qty += 1
            } else {
                cart[pid] = new Object;
                cart[pid].qty = 1;
                cart[pid].pid = pid;
                cart[pid].name = $(this).parent().children("span").data("name");
                cart[pid].price = $(this).parent().children('span').next().data('price');
            }
            displayCart();
        })
        $('#buy').on('click', function (event) {
            var buyUrl = "";
            for (var item in cart) {
                buyUrl += "&pid[]=" + item + "&qty[]=" + cart[item].qty;
            }
            $.getJSON('buy.php?' + buyUrl, function (data) {
                $("#cartDiv").append(data);
            })
            $('#buy').parent().hide();

        })

        $('#saveOrder').on('click', function(event){
            var cartStr = "[";
            for(var item in cart){
                cartStr += JSON.stringify(cart[item]) + ",";
            }
            cartStr = cartStr.slice(0,-1);
            cartStr += "]";
            console.log(cartStr);
            localStorage['cart'] = cartStr;
        })

        $('#loadOrder').on('click', function(event){
            cart = [];
            var obj = JSON.parse(localStorage['cart']);
            for( var item in obj){
                pid = obj[item].pid ;
                cart[pid] = obj[item];
            }
            displayCart()
        })


    })

</script>

</body>
</html>