<?php
session_start();
?>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="pricing-style.css" type= "text/css"rel="stylesheet">
     <!-- Font Awesome -->
     <script src="https://kit.fontawesome.com/7c914f3b0a.js" crossorigin="anonymous"></script>


</head>
<body>
    <div class="top-banner">
        <p class="choose-plan"> Choose Your Plan</p>
    </div>

    <div class="container">
        <h1 class="title">Software License</h1>
        <div class="cards">
            <div class="card" id="card-1">
                <label><input type="radio" name="software-license" value="hiopos">HioPos</lable>
                <h2 class="card-price" id="hiopos-price">₦15,000 <span> /month</span></h2>
                <div class="quantity">
                    <button class="btn minus-btn disabled" type="button">-</button>
                    <input type="text" id="quantity" value="1">
                    <button class="btn plus-btn" type="button">+</button>
                </div>
                <p class="total-price">
                    <p>Total</p>
                    <span>₦</span><span id="price">15000</span>
                </p>
                <button type="button" class= "card-btn"> Buy Now</button>
            </div>
        </div>
        <div class="cards">
            <div class="card" id="card-1">
                <label><input type="radio" name="software-license" value="hiopos">HioPos</lable>
                <h2 class="card-price" id="hiopos-price">₦15,000 <span> /month</span></h2>
                <div class="quantity">
                    <button class="btn minus-btn disabled" type="button">-</button>
                    <input type="text" id="quantity" value="1">
                    <button class="btn plus-btn" type="button">+</button>
                </div>
                <p class="total-price">
                    <p>Total</p>
                    <span>₦</span><span id="price">15000</span>
                </p>
                <button type="button" class= "card-btn"> Buy Now</button>
            </div>
        </div>
    
    </div>

    <script type="text/JavaScript">
        // setting default attribute to disabled of minus button
        document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

        // taking value to  increment/decrement input value
        var valueCount

        // putting price into a variable
        var price = document.getElementById("price").innerText;

        // price calculation
        function totalPrice(){
            var total = valueCount * price;
            document.getElementById("price").innerText = total;

        }
        // pluss button
        document.querySelector(".plus-btn").addEventListener("click", function(){
            // getting input value 
            valueCount = document.getElementById("quantity").value;

            // input increment by 1
            valueCount++;

            // setting increment input value
            document.getElementById("quantity").value = valueCount;

            
            if(valueCount > 1){
                document.querySelector(".minus-btn").removeAttribute("disabled");
                document.querySelector(".minus-btn").classList.remove("disabled");
            }
            // call price function
            totalPrice()
        })
         // minus button
         document.querySelector(".minus-btn").addEventListener("click", function(){
            // getting input value 
            valueCount = document.getElementById("quantity").value;

            // input increment by 1
            valueCount--;

            // setting increment input value
            document.getElementById("quantity").value = valueCount

            if(valueCount == 1){
                document.querySelector(".minus-btn").setAttribute("disabled", "disabled");

            }
               // call price function
               totalPrice()
        })

    </script>

</body>
</html>