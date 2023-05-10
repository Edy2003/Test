<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <style>
        <?php include "style.css"; ?>
    </style>
</head>
<body>
<div class="container" id="container">
    <header >
        <span class="breadcrumb"> ></span>
        <span class="step breadcrumb">Contact Info ></span>
        <span class="step breadcrumb">Quantity ></span>
        <span class="step breadcrumb">Price ></span>
        <span class="step breadcrumb">Done</span>
    </header>
    <div class="forms">
        <form  class='contact form' id="regForm">
            <p class="contact-title">Contact info</p>
            <div class="inputs">
                <p>Name</p>
                <input type="text" required">
            </div>
            <div class="inputs">
                <p>Email</p>
                <input type="email" required>
            </div>
            <div class="inputs">
                <p>Phone</p>
                <input type="number">
            </div>
            <button class='button' onclick="nextButton(1,event)">Continue</button>
        </form>

        <form  class='quantity form' id="regForm">
            <p class="contact-title">Quantity</p>
            <div class="inputs quantity-input">
                <p>Quantity</p>
                <input type="number" id="quantity-num" max="1000" required>
            </div>
            <div>
                <button class='button' onclick="nextButton(1,event)">Continue</button>
                <button class='button' onclick="nextButton(-1,event)">&larr; Back</button>
            </div>
        </form>

        <form  class='form' id="regForm">
            <p class="contact-title">Price</p>
            <div class="price-input">
                <p id="price"></p>
            </div>
            <div>
                <button class='button' onclick="nextButton(1,event)">Send to Email</button>
                <button class='button' onclick="nextButton(-1,event)">&larr; Back</button>
            </div>
        </form>

        <form  class='form' id="regForm">
            <p class="contact-title">Done</p>
            <div class="button-again">
                <button class='button' onclick="again()">Start again &rarr;</button>
            </div>
        </form>
    </div>
</div>
<h2>Title</h2>
<p>Description</p>

<script >
    <? include "index.js";?>
</script>

</body>
</html>