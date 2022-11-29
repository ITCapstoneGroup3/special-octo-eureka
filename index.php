<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.php">
    <title>SunLight | Online store</title>
</head>
<style>
    h1{
            font-size: 50px;
            line-height: 60px;
            margin: 25px 0;
        }
    p{
        font-size:20px;
    }   
    .btn{
            display: inline-block;
            background: #098D9C;
            color: #fff;
            padding: 8px 30px;
            margin: 30px 0;
            border-radius: 30px;
        } 
    .col-2{
            max-width: 100%;
            padding: 50px 0;
        }
    .form{
            width: 250px;
            float: right;
            height: 380px;
            border-radius: 10px;
            padding: 25px;
        }
    .form input:focus{
            outline: none;
        }
    h4{
            text-align: center;
            font-size: 40px;
            color: #098D9C;
            text-decoration: underline;     
            text-decoration-color: #098D9C;  
            text-decoration-style: double;  
        }
    h2 {
            text-align: center;
            margin-bottom: 40px;
        }
    button {

            background: rgb(35, 174, 202);
            padding: 5px 10px;
            color: #fff;
            border-radius: 5px;
            margin-right: 2px;
            border: none;
        }    
        
       
</style>

<body>


<div class="login">
			<h2>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="user_name">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="user_name" placeholder="Username" id="user_name" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
            <p1 class="link">Don't have an account<br>
            <a href="form.php">Sign up here</a></p1>
</div>

        <div class="sunlight" style="padding: 10px;">
            <img class="images-sunlight" src="images/sunlight.jpg" width="310" height="310">
            <h1>Give Your Outfit<br> A New Style!</h1>
                <p>Style is something each of us already has, all we need to do is find it.</p>
                <a href="" class="btn">Explore Now &#10137;</a>
        </div>
        
        
                
        

       
        
            

        <h4>Men Featured Products</h4>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/10.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Graphic Shirt Striped</h5>
                        <p class="card-text">Price: $50.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden" name="Item_Name" value="Graphic Shirt Striped">
                        <input type="hidden" name="Price" value="50">
                    </div> 
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/6.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Gold Black T-Shirt</h5>
                        <p class="card-text">Price: $50.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden" name="Item_Name" value="Gold Black T-Shirt">
                        <input type="hidden" name="Price" value="50">
                    </div> 
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/7.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Chain Black T-Shirt</h5>
                        <p class="card-text">Price: $50.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden"  name="Item_Name" value="Chain Black T-Shirt">
                        <input type="hidden" name="Price" value="50">
                    </div> 
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/5.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Gray & Black Jacket</h5>
                        <p class="card-text">Price: $100.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden" name="Item_Name" value="Gray & Black Jacket">
                        <input type="hidden" name="Price" value="100">
                    </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/11.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Plaid Printed Pencil Pant</h5>
                        <p class="card-text">Price: $70.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden" name="Item_Name" value="Plaid Printed Pencil Pant">
                        <input type="hidden" name="Price" value="70">
                    </div> 
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/12.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cargo Pant</h5>
                        <p class="card-text">Price: $45.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden" name="Item_Name" value="Cargo Pant">
                        <input type="hidden" name="Price" value="45">
                    </div> 
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/14.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jeans Short</h5>
                        <p class="card-text">Price: $60.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden" name="Item_Name" value="Jeans Shor">
                        <input type="hidden" name="Price" value="60">
                    </div> 
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/13.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Lounge Short</h5>
                        <p class="card-text">Price: $40.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden" name="Item_Name" value="Lounge Short">
                        <input type="hidden" name="Price" value="40">
                    </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>

                            <h4 class="container mt-5">Women Featured Products</h4>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/15.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Green Joggers</h5>
                        <p class="card-text">Price: $60.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden" name="Item_Name" value="Green Joggers">
                        <input type="hidden" name="Price" value="60">
                    </div> 
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/16.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ribbon Short</h5>
                        <p class="card-text">Price: $50.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden" name="Item_Name" value="Ribbon Short">
                        <input type="hidden" name="Price" value="50">
                    </div> 
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/17.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Merci T-Shirt</h5>
                        <p class="card-text">Price: $50.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden"  name="Item_Name" value="Merci T-Shirt">
                        <input type="hidden" name="Price" value="50">
                    </div> 
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/18.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Gray Shoes</h5>
                        <p class="card-text">Price: $180.00</p>
                        <button type="submit" name="Add_Cart" class="btn btn-info">Add Cart</button>
                        <input type="hidden" name="Item_Name" value="Gray Shoes">
                        <input type="hidden" name="Price" value="180">
                    </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>