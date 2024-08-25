<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        .cart {
            margin-top: 20px;
            padding: 16px;
        }
        .cart-item {
            border: 1px solid #ddd;
            padding: 16px;
            margin: 10px 0;
        }
        .cart-item h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        .cart-item p {
            font-size: 16px;
            margin: 5px 0;
        }
        .remove-button {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="cart">
    <h2>Shopping Cart</h2>
    <div id="cart-items"></div>
</div>

<script>
    function displayCart() {
        var cart = JSON.parse(localStorage.getItem('cart')) || [];
        var cartItemsContainer = document.getElementById('cart-items');
        cartItemsContainer.innerHTML = '';

        if (cart.length === 0) {
            cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            cart.forEach((item, index) => {
                var itemDiv = document.createElement('div');
                itemDiv.classList.add('cart-item');
                itemDiv.innerHTML = `
                    <h3>${item.name}</h3>
                    <p>Price: $${item.price}</p>
                    <p>Quantity: ${item.quantity}</p>
                    <button class="remove-button" onclick="removeFromCart(${index})">Remove</button>
                `;
                cartItemsContainer.appendChild(itemDiv);
            });
        }
    }

    function removeFromCart(index) {
        var cart = JSON.parse(localStorage.getItem('cart')) || [];
        if (cart[index].quantity > 1) {
            cart[index].quantity--;
        } else {
            cart.splice(index, 1);
        }
        localStorage.setItem('cart', JSON.stringify(cart));
        displayCart();
    }

    
    window.onload = displayCart;
</script>

</body>
</html>
