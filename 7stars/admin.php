<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adminPage.css" type="text/css">

</head>

<body>

    <div class="container">
        <button type="button" class="btn btn-primary" style="margin-top: 20px;" onclick="myOrderFunction()">Orders
        </button>
        <button type="button" class="btn btn-success" style="margin-top: 20px;"
            onclick="myProductFunction()">Products</button>
        <button type="button" class="btn btn-info" style="margin-top: 20px;" onclick="myUserFunction()">Users</button>
    </div>
    <div id="Orders">
     <h3> All Orders </h3>
     <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
        <input type="text" placeholder="Search.." name="search2">
        <button type="submit"><i class="fa fa-search"></i>Search</button>
      </form>
     <button id="AcceptOrder" type="button" class="btn btn-info" style="margin-top: 20px; margin-bottom:20px ; margin-left: 1000px ;">AcceptOrder</button>
     <button id="RejectOrder" type="button" class="btn btn-info" style="margin-top: 20px; margin-bottom:20px ; margin-left: 1000px ;">RejectOrder</button>
     <table>
        <tr>
            <th>Order Details</th>
            <th>Product Details</th>
            <th>Users Details</th>
        </tr>

    </table>
    </div>

    <div id="Products">
        <!--product section-->
        <h3>All Products</h3>
        <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit"><i class="fa fa-search"></i>Search</button>
          </form>
        <button id="AddProduct" type="button" class="btn btn-info"
            style="margin-top: 20px; margin-bottom:20px ; margin-left: 1000px ;">Add Product</button>
        <button id="DeleteProduct" type="button" class="btn btn-info"
            style=" margin-bottom:20px ; margin-left: 1000px ;">Delete Product</button>
        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">

                <span class="close">&times;</span>
                <h4>Add New Product</h4>

                <div style="width: 100px;">
                    <div class="fotodiv"
                        style="width: 100px; height: 100px; background-color: lightblue;margin-bottom: 20px;">
                        Uploaded Image Preview
                    </div>
                    <form action="controllers/admin_control.php" method="post">
                        <!--File: <input type="file" name="file" required>-->
                        Description: <input type="text" name="description" required>
                        Price: <input type="number" name="price" required>
                        Notes: <input type="text" name="notes" required>
                        Category: <select name="category" required>
                            <option value="lawn">lawn</option>
                            <option value="cotton">cotton</option>
                            <option value="silk">silk</option>
                            <option value="chiffon">chiffon</option>
                            <option value="linen">linen</option>
                            <option value="wool">wool</option>
                            <option value="polyester">polyester</option>
                            <option value="nylon">nylon</option>
                            <option value="velvet">velvet</option>
                            <option value="georgette">georgette</option>
                        </select>
                        Gender: <select name="gender" required>
                            <option value="women">women</option>
                            <option value="men">men</option>
                        </select>
                        <button type="submit" name="product-add">Add product</button>
                    </form>
                </div>
            </div>
        </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Notes</th>
                <th>Price</th>
                <th>Category</th>
                <th>Gender</th>
            </tr>
            <?php
            require_once "controllers/admin_control.php";
            loadFromDB($conn, "products");
            ?>
        </table>

    </div>
    <!--product section end here -->


    <div id="Users">    <!--User Section -->
       
        <h3>All Users</h3>
        <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit"><i class="fa fa-search"></i>Search</button>
          </form>

        <button id="BlockUser" type="button" class="btn btn-info"
            style="margin-top: 20px; margin-bottom:20px ; margin-left: 1000px ;">Block User</button>
            <div id="myModal3" class="modal3">

                <!-- div to delete the product data of corresponding id -->
                <div class="modal3-content">
                    <span class="close3">&times;</span>
    
                    <div style="width: 100px;">
    
                        <form action="/">
                            <label for="fname">Write the ID:</label>
                            <input type="text" id="fname" name="fname"><br><br>
                            <input type="submit">
                        </form>
                    </div>
    
    
                </div>
            </div>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <?php
            require_once "controllers/admin_control.php";
            loadFromDB($conn, "users");
            ?>
        </table>
    </div>    <!--User Section End here --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="js/adminPageFunctions.js"></script>
</body>

</html>