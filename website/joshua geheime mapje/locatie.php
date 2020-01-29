<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Winkelwagen</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="location.css">
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
        <h2>Locatie</h2>
        <form action="POST">
            <div class="inputdiv">
                <input placeholder="bv. 6969OK" type="text" name="postcode" id="" autocomplete="off" autofocus required>
                <label for="postcode">Postcode*</label>
            </div>
            <div class="inputdiv">
                <input placeholder="bv. 420" type="text" name="huisnummer" id="" autocomplete="off" required>
                <label for="huisnummer">Huisnummer*</label>
            </div>
            <div class="inputdiv">
                <input placeholder="bv. A" type="text" name="toevoegingen" id="" autocomplete="off">
                <label for="toevoegingen">Toevoegingen*</label>
            </div>
        </form>
        <button style="background: #424242;" class="function">Vorige</button>
        <button style="background: #FE2F90; float: right;" class="function">Volgende</button>
    </main>
    <footer>
        <p>&#169; 2019 BoomerShop - Amsterdam</p>
    </footer>
</body>

</html>