<?php
    session_start();

    $total = 0;
   
?>
<html>
    <head>
        <title>CS 313 - Ponder 03</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <script src="functions.js"></script>
        <style>
            ::-webkit-scrollbar {
                    display: none;
            }
        
        </style>
    </head>
    <body>
         <?php 
                include '../nav.php'
            ?>
        <div id=container>
            <main id="main">
                
                    <?php 
                    
                    if(!isset($_SESSION['cart'][1]))
                        include 'item1.html';

                    if(!isset($_SESSION['cart'][2]))
                        include 'item2.html';

                    if(!isset($_SESSION['cart'][3]))
                        include 'item3.html';

                    if(!isset($_SESSION['cart'][4]))
                        include 'item4.html';

                    if(!isset($_SESSION['cart'][5]))
                        include 'item5.html';

                    if(!isset($_SESSION['cart'][6]))
                        include 'item6.html';

                    if(!isset($_SESSION['cart'][7]))
                        include 'item7.html';

                    if(!isset($_SESSION['cart'][8]))
                        include 'item8.html';

                
                        
                        ?>
               
                
            </main>
            <aside id="cart">
            <h1>Cart<span id="total"></span></h1>
                <div id="float">
                    <?php
                if(sizeof($_SESSION['cart']) > 0){
                    foreach($_SESSION["cart"] as $item){
                        echo '<div id="cart-item-' . $item['id'] . '" class="cart-item"> <div class="cart-item-text"> <span id="cart-item-name-' .
                         $item['id'] . '">' . $item['name'] . '</span> <span id="button'. $item['id'] . '" class="close" onclick="removeFromCart('. $item['id'] .
                          ',' . $item['price'] .',' . '1)"></span> <p class="cart-item-price"> Price: $' . 
                          $item['price'] . '</p> </div> <img id="cart-item-image-' . $item['id'] . '" class="cart-item-image" src="icon' . $item['id'] . '.png"><p class="cart-item-description" id="cart-item-description-' . $item['id'] . '" style="display:none;">' . 
                          '<strong>Description:</strong>Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor Lorem Ipsum Set Dolor</p></div>';


                        $total += $item['price'];
                        
                    }

                    echo '<script> setTotal(' . $total . ') </script>'; 

                }
                ?>
                    
                        
                    </div>
                    <a href="./cart.php"><button class="button" style="margin-right: 8px"><span>View Cart</span></button></a>
                    <a href="./checkout.php"><button><span>Checkout</span></button></a>                   
                </div>
            </aside>
        </div>
    </body>
</html>

