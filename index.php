<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon-clone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
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
            </div>
            <div class="panel-deals" style="color: white;">
                Shop deals in Electronics
            </div>
        </div>

    </header>
    <div class="hero-section">
       
    </div>
    <div class="shop-section">
        <div class="box1 box">
           <div class="box-content">
                <h2>Health & Personal Care</h2>
                <div class="box-img" style="background-image: url('./box1.jpg');">

                </div>
                <a href="seemore.php">see more</a>
           </div>
            
        </div>
        <div class="box2 box">
            <div class="box-content">
                <h2>Minimum 50% Off | Grooming</h2>
                <div class="box-img" style="background-image: url('./box2.jpg');">

                </div>
                <a href="./seemore.php">see more</a>
           </div>
        </div>
        <div class="box3 box">
            <div class="box-content">
                <h2>New Launch | Amazon Prime</h2>
                <div class="box-img" style="background-image: url('./box3.jpg');">

                </div>
                <a href="">see more</a>
           </div>
        </div>
        <div class="box4 box">
            <div class="box-content">
                <h2>Newest Tech | Samsung | Apple</h2>
                <div class="box-img" style="background-image: url('./box4.jpg');">

                </div>
                <a href="">see more</a>
           </div>
        </div>
        
    </div>
    <div class="shop-section-2">
        <div class="box1 box">
            <div class="box-content">
                <h2>Beauty and Makeup Products</h2>
                <div class="box-img" style="background-image: url('./box5.jpg');">

                </div>
                <a href="">see more</a>
           </div>
        </div>
        <div class="box2 box">
            <div class="box-content">
                <h2>Upto 60% Off | Animal Foods</h2>
                <div class="box-img" style="background-image: url('./box6.jpg');">

                </div>
                <a href="">see more</a>
           </div>
        </div>
        <div class="box3 box">
            <div class="box-content">
                <h2>Soft Toys and DIY Games</h2>
                <div class="box-img" style="background-image: url('./box7.jpg');">

                </div>
                <a href="">see more</a>
           </div>
        </div>
        <div class="box4 box">
            <div class="box-content">
                <h2>Newest Arrivals | Women Apparels</h2>
                <div class="box-img" style="background-image: url('./box8.jpg');">

                </div>
                <a href="">see more</a>
           </div>
        </div>
    </div>
    <footer style="margin-top: 10px;">
        <div class="foot-panel1" onclick="redit()">
            Back to Top 
        </div>
        <div class="foot-panel2">
            <ul>
            <p>Get to Know Us</p>
            <a >About Us</a>
            <a >Careers</a>
            <a >Press Releases</a>
            <a >Amazon Science</a>
        </ul>
        <ul>
            <p>Connect with Us</p>
            <a >Facebook</a>
            <a >Careers</a>
            <a >Twitter</a>
            <a >Instagram</a>
        </ul>
        <ul>
            <p>Make Money with Us</p>
            <a >Sell on Amazon</a>
            <a >Sell under Amazon Accelerator</a>
            <a >Protect and Build Your Brand</a>
            <a >Amazon Global Selling</a>
        </ul>
        <ul>
            <p>Let Us Help You</p>
            <a >COVID-19 and Amazon</a>
            <a >Your Account</a>
            <a >Returns Centre</a>
            <a >Recalls and Product Safety Alerts</a>
        </ul>
        </div>
        <div class="foot-panel3">
            <div class="logo" onclick="redit()">

            </div>
        </div>
        <div class="foot-panel4">
            <div class="pages">
                <a>Conditions of use</a>
                <a>Privacy Notice</a>
                <a>Your Ads Privacy choices</a>
            </div>
            <div class="cpright">
                © 1996-2024, Amazon.com, Inc. or its affiliates
            </div>
        </div>
    </footer>
</body>
<script>
    function redit(){
        window.location.href="http://127.0.0.1:3000/index.html";
    }
</script>
</html>
















