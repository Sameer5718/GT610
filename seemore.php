<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon-clone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
    <style>
        .item-block {
            border: 1px solid #ddd;
            padding: 16px;
            height:500px;
            width: 23%; 
            text-align: center;
            margin: 16px 1%; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }
        .item-block img {
            height:150px;
            width: 150px;
            height: auto;
        }
        .item-block h2 {
            font-size: 18px;
            margin: 10px 0;
        }
        .item-block p {
            font-size: 16px;
            color: #b12704;
            margin: 10px 0;
        }
        .item-block button {
            background-color: #ffa41c;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
        .item-block button:hover {
            background-color: #cc8400;
        }
        .item-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo"></div>
                    
                </div>
                <div class="nav-address border">
                    <p class="add-first">Deliver to</p>
                    <div class="add-icon">
                        <i class="fa-solid fa-location-dot"></i>
                        <p class="add-second">India</p>
                    </div>
                </div>
                <div class="nav-search border">
                    <select class="search-select">
                        <option>All</option>
                    </select>
                    <input placeholder="search amazon" class="search-input">
                    <div class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
                <div class="nav-signin">
                    <a href="signup.php">
                        <img src="./signin.png" >
                    </a>
                </div>
                <div class="nav-second">
                    <img src="./retsave.png">   
                </div>
        </div>

        <div class="panel">
            <div class="panel-all" style="color: white;">
                <i class="fa-solid fa-bars" style="color: white;"></i> All
            </div>
            <div class="panel-ops">
                
                <p>Today's Deals</p>
                <p>Customer Service</p>
                <p>Registry</p>
                <p>Gift Cards</p>
                <p>Sell</p>
                <a href="cart.php">Go to cart</a>
            </div>
            <div class="panel-deals" style="color: white;">
                Shop deals in Electronics
            </div>
        </div>

    </header>
    <div class="head" style="border: 0.5px solid black; padding-top: 10px; padding-left: 10px; padding-bottom: 10px; font-style: italic;">
        <span>1-8 of 80 results</span>
    </div>
    <div class="item-container">
        <div class="item-block" data-id="1" data-name="Gym Exercise Cycle" data-price="₹6,599">
            <img src="gym1.jpg" alt="Product Image">
            <h2>Gym Exercise Cycle</h2>
            <p>₹6,599</p>
            <button onclick="addToCart(event)">Add to Cart</button>
        </div>
        <div class="item-block" data-id="2" data-name="Listerine MouthWash" data-price="₹599">
            <img src="hp2.jpg" alt="Product Image">
            <h2>Listerine MouthWash</h2>
            <p>₹599</p>
            <button onclick="addToCart(event)">Add to Cart</button>
        </div>
        <div class="item-block" data-id="3" data-name="Dettol Antiseptic" data-price="₹119">
            <img src="./hp3.jpg" alt="Product Image">
            <h2>Dettol antiseptic</h2>
            <p>₹119</p>
            <button onclick="addToCart(event)">Add to Cart</button>
        </div>
        <div class="item-block" data-id="4" data-name="Weighing Machine" data-price="₹899">
            <img src="hp4.jpg" alt="Product Image">
            <h2>Weiging Machine</h2>
            <p>₹899</p>
            <button onclick="addToCart(event)">Add to Cart</button>
        </div>
        <div class="item-block" data-id="5" data-name="Dettol Handwash" data-price="₹119">
            <img src="hp5.jpg" alt="Product Image">
            <h2>Dettol Handwash</h2>
            <p>₹119</p>
            <button onclick="addToCart(event)">Add to Cart</button>
        </div>
        <div class="item-block" data-id="6" data-name="Hot Water Bag" data-price="₹299">
            <img src="hp6.jpg" alt="Product Image">
            <h2>Hot Water Bag</h2>
            <p>₹299</p>
            <button onclick="addToCart(event)">Add to Cart</button>
        </div>
        <div class="item-block" data-id="7" data-name="Colgate toothpaste pack of 2" data-price="₹149">
            <img src="hp7.jpg" alt="Product Image">
            <h2>Colgate toothpaste pack of 2</h2>
            <p>₹149</p>
            <button onclick="addToCart(event)">Add to Cart</button>
        </div>
        <div class="item-block" data-id="8" data-name="Gilette Brush" data-price="₹449">
            <img src="hp8.jpg" alt="Product Image">
            <h2>Gilette Shave Brush</h2>
            <p>₹449</p>
            <button onclick="addToCart(event)">Add to Cart</button>
        </div>
        <div class="item-block" data-id="8" data-name="BP Machine" data-price="₹1,099">
            <img src="hp9.jpg" alt="Product Image">
            <h2>BP Machine</h2>
            <p>₹1,099</p>
            <button onclick="addToCart(event)">Add to Cart</button>
        </div>
    </div>
</body>
</html>
<script>
    function addToCart(event) {
        var itemBlock = event.target.closest('.item-block');
        var itemId = itemBlock.getAttribute('data-id');
        var itemName = itemBlock.getAttribute('data-name');
        var itemPrice = itemBlock.getAttribute('data-price');

        var item = {
            id: itemId,
            name: itemName,
            price: itemPrice,
            quantity: 1
        };

        var cart = JSON.parse(localStorage.getItem('cart')) || [];

        var existingItem = cart.find(i => i.id === item.id);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push(item);
        }

        localStorage.setItem('cart', JSON.stringify(cart));

        alert('Item added to cart');
    }
</script>
