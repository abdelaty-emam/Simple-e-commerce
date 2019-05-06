

<?php include 'header.php'; ?>
<?php include 'navbar.php';
    include 'connection.php';

?>
<?php


$id = $_GET['x'];

    $q= "select * from products where id = '$id'";
$table=  mysqli_query($con  , $q);
$product = mysqli_fetch_array($table);

echo '
<div class="container">
    <div class="row">
    
    <div class="col-sm-3">
    
<img src="'.$product['imgPath'].'" class="img-fluid"/>
    </div>

    
        
<div class="col-md-9">
    <h2 class="text-info">'.$product['name'].'</h2>    
        <p>'.$product['description'].'</p>
<h3>price :'.$product['price'].'</h3>
    <h4>quantity :'.$product['quantity'].'</h4>    
        </div>
        
        
        
    </div>
</div>
';

?>


<div class="comments">
		<div class="comment-wrap">
				<div class="photo">
						<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>
				</div>
				<div class="comment-block">
						<form action="">
								<textarea name="" id="" cols="30" rows="3" placeholder="Add comment..."></textarea>
						</form>
				</div>
		</div>

		<div class="comment-wrap">
				<div class="photo">
						<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg')"></div>
				</div>
				<div class="comment-block">
						<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam reprehenderit quasi
								sapiente modi tempora at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?</p>
						<div class="bottom-comment">
								<div class="comment-date">Aug 24, 2014 @ 2:35 PM</div>
								<ul class="comment-actions">
										<li class="complain">Complain</li>
										<li class="reply">Reply</li>
								</ul>
						</div>
				</div>
		</div>

		<div class="comment-wrap">
				<div class="photo">
						<div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/felipenogs/128.jpg')"></div>
				</div>
				<div class="comment-block">
						<p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam.</p>
						<div class="bottom-comment">
								<div class="comment-date">Aug 23, 2014 @ 10:32 AM</div>
								<ul class="comment-actions">
										<li class="complain">Complain</li>
										<li class="reply">Reply</li>
								</ul>
						</div>
				</div>
		</div>
</div>

</div>
<div class="owl-carousel owl-theme">

<?php

$categoryid=$product['categoryid'];

$q= "select * from products where categoryid = '$categoryid'";
$table=  mysqli_query($con  , $q);
while($product = mysqli_fetch_array($table))
{
    if($product['id'] != $id)
    {
echo '<div class="item">
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
}


?>


</div>




<?php include 'footer.php' ?>