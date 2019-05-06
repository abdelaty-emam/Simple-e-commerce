

<?php include 'header.php'; ?>
<?php include 'navbar.php';
    include 'connection.php'
?>

<form  action="<?php echo $_SERVER['PHP_SELF']?>"  enctype="multipart/form-data" method="post">
    
    <input class="form-control" name="productname" type="text"/>
    <input type="file" name="productimg"/>

    
<button name="action" type="submit" class="btn btn-info float-right">register</button>
    
</form>


<?php

if(isset($_POST['action']))
{
echo $productname = $_POST['productname'];
$type= $_FILES['productimg']['type'];
$imgname= $_FILES['productimg']['name'];

    $tmp= $_FILES['productimg']['tmp_name'];

    $validtypes = ["image/jpeg" ,"image/png" , "image/gif" ];
    if(in_array($type , $validtypes))
    {
  move_uploaded_file($tmp,"admin/uploads/".$imgname);

    }
    else        
    {
    }
}

?>


<?php
        
        
        
session_start();



if(!isset($_SESSION['flag']))
{
    header("location:adminlogin.php");
    
}
?>
<h2>Admin Home</h2>

<a href="logout.php">logout</a>


<?php include 'footer.php' ?>