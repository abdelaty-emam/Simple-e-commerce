
<?php include 'header.php'; ?>
<?php include 'navbar.php';
    include 'connection.php'
?>


<div class="container text-center">
    <div class="row">


<?php

        $q= "select * from products";
$table=  mysqli_query($con  , $q);

    while($product = mysqli_fetch_array($table))
    {
        
        echo '
        <div class="col-sm-3">   
        
    <a href="singleproduct.php?x='.$product['id'].'">
            <div  class="product">
                
                <div class="temp">
    <img src="'.$product['imgPath'].'" class="img-fluid"/>
    
    <div class="product-desc">
    <p>'.substr($product['description'],0,100).'...'.'</p>        
        </div> 
                </div>
                
        <h2 class="text-info">'.$product['name'].'</h2>    
        <p class="text-info">price : '.$product['price'].'</p>';        
                   
    if($product['price']!=$product['priceafter'])
            {
            echo'<div class="ribbon">
            onSale <br/>
<span>'.floor(($product['priceafter']/$product['price'])*100).'</span>
            </div>';    
           }
                echo'</div>
        </a>
        </div>';
        
        
    }


?>    
        
        
        
        
    </div>
</div>


<?php include 'footer.php' ?>