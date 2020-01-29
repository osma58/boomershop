<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Winkelwagen</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="winkelwagen.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <header>
        <div class="title">
            <a href="/">
                <h1>BoomerShop</h1>
            </a>
        </div>
        <div class="middle">
            <ul>
                <li>Menu</li>
                <li>Aanbiedingen</li>
                <li>Aanbieders</li>
            </ul>
        </div>
        <div class="right">
            <div class="cart">
                <img src="shoppingcart.png" alt="">
                <p>1</p>
            </div>
            <button>Sign in</button>
            <button class="active">Sign up</button>
        </div>
    </header>
    <main>
        <hr>
        <div class="contents">
            <h2>Winkelmandje</h2>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td class="product">Pizza Spicy Chicken Meatlover</td>
                    <td class="price">€12</td>
                    <td class="quantity"><img src="plus.svg">2<img src="minus.svg"></tdc>
                    <td class="total">€12</td>
                    <td><img class="cross" src="cross.svg"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total">€12</td>
                </tr>
            </table>
        </div>
        <div class="sidebar">
            <h3>Bestelling</h3>
            <table>
                <tr class="products">
                    <td class="item">Producten</td>
                    <td class="price">€12,95</td>
                </tr>
                <tr class="shipping">
                    <td class="item">Shipping</td>
                    <td class="price">€3</td>
                </tr>
                <tr class="total">
                    <td class="item">Totaal</td>
                    <td class="price">€15,95</td>
                </tr>
            </table>
            <button>
                Volgende
            </button>
        </div>
    </main>
    <footer>
        <p>&#169; 2019 BoomerShop - Amsterdam</p>
    </footer>
</body>

</html>