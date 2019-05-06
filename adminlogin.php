<?php session_start() ?>

<?php include 'header.php'; ?>
<?php include 'navbar.php';
    include 'connection.php';


?>


<div class="container">  
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 
        
   
                     <div class="form-group">
    <label>admin mail :</label>
    <input name="adminmail" type="email" class="form-control"/>    
        </div>
   
        
        <div class="form-group">
    <label>admin password :</label>
    <input name="adminpass" type="password" class="form-control"/>    
        </div>
        

<button name="action" type="submit" class="btn btn-info float-right">register</button>
        
    </form>
</div>


<?php

if(isset($_POST['action']))
{
   
$adminpass = $_POST['adminpass'];
$adminmail = $_POST['adminmail'];
$q="select * from admins where password = '$adminpass' and mail = '$adminmail'" ;
    $table = mysqli_query($con , $q);
    if(mysqli_num_rows($table)>0)
    {
    $_SESSION['flag']="true" ;  
        header("location:adminhome.php");

    }
    else
    {
        
        header("location:adminlogin.php");
    }
    
}





?>

<?php include 'footer.php' ?>

