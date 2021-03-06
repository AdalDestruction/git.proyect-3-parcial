<?php
    session_start();
    $database_name = "proyecto3parcial";
    $con = mysqli_connect("localhost","root", "", $database_name);
    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                echo '<script>window.location="shoppingcart.php"</script>';
            }else{
                echo '<script>alert("Ya has previamente añadido este producto")</script>';
                echo '<script>window.location="shoppingcart.php"</script>';
            }
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }
    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]); 
                }
            }
        }
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CARRTIO | AWP COMICS</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
            <style>
                @import url('https://fonts.googleapis.com/css?family=Titillium+Web');
* {
    font-family: 'Titillium Web', sans-serif;
}

.product {
    border: 1px solid #eaeaec;
    margin: -1px 19px 3px -1px;
    padding: 10px;
    text-align: center;
    background-color: #efefef;
}

table,
th,
tr {
    text-align: center;
}

.title2 {
    text-align: center;
    color: #000;
    background-color: #efefef;
    padding: 2%;
}

h2 {
    text-align: center;
    color: #fff;
    border: 2px solid #000;
    border-radius: 50px;
    background-color: #000;
    padding: 2%;
}

table th {
    background-color: #efefef;
}

.succes {
    background: none;
    border: 1px solid #000;
    border-radius: 10px;
    width: 130px;
    transition: .6s;
}

.succes:hover {
    background: #000;
    color: #fff;
    border: 1px solid #fff;
}

.atras {
    margin-left: 10px;
    margin-top: 10px;
}
            </style>
</head>
<body>
    <div class="atras">
        <a href="index/index.php">
            <img src="assets/src/previous.png" alt="" width="32" heigth="32">
        </a>
    </div>  
      <br>
      <br>
    <div class="container" style="width: 65%">
        <h2>CARRITO</h2>
        <div style="clear: both"></div>
        <h3 class="title2">Detallas de tu compra</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Nombre del comic</th>
                <th width="10%">Cantidad</th>
                <th width="13%">Precio</th>
                <th width="10%">Precio toal</th>
                <th width="17%">No lo quiero</th>
            </tr>
            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>$ <?php echo $value["product_price"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td><a href="shoppingcart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span
                                        class="text-danger">No lo quiero dije</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>