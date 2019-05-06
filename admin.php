

<?php include 'header.php'; ?>
<?php include 'navbar.php';
    include 'connection.php'
?>



<div class="container">
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
        <div class="form-group">
    <label>admin name :</label>
    <input name="adminname" type="text" class="form-control"/>    
        </div>
        
        
        <div class="form-group">
    <label>admin password :</label>
    <input name="adminpass" type="password" class="form-control"/>    
        </div>
        

        
        
                <div class="form-group">
    <label>admin mail :</label>
    <input name="adminmail" type="email" class="form-control"/>    
        </div>
                <div class="form-group">
    <label>admin age :</label>
    <input name="adminage" type="number" class="form-control"/>    
        </div>
        

<button name="action" type="submit" class="btn btn-info float-right">register</button>
        
    </form>
</div>





<?php

if(isset($_POST['action']))
{
$adminname = $_POST['adminname'];
$adminpass = $_POST['adminpass'];
$adminmail = $_POST['adminmail'];
$adminage = $_POST['adminage'];


$q="insert into admins (name , age , password , mail) values ('$adminname' , '$adminage' , '$adminpass' , '$adminmail')";
 mysqli_query($con , $q);
    
}

?>














<?php include 'footer.php' ?>

