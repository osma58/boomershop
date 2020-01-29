<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Winkelwagen</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="payment_method.css">
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
        <h2>Betaalmethode</h2>
        <form action="POST">
            <button name="payment" value="ideal">iDeal</button>
            <button name="payment" value="paypal">Paypal</button>
            <button name="payment" value="bitcoin">Bitcoin</button>
            <button name="payment" value="monero">Monero</button>
            <button name="payment" value="mediacollege">Mediacollege Print Pas</button>
        </form>
        <button style="background: #424242;" class="function">Vorige</button>
        <button style="background: #FE2F90; float: right;" class="function">Volgende</button>
    </main>
    <footer>
        <p>&#169; 2019 BoomerShop - Amsterdam</p>
    </footer>
</body>

</html>