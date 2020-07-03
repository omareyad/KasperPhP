<?php
session_start();
if(isset($_SERVER['HTTP_REFERER'])){
	$pageName = basename($_SERVER['HTTP_REFERER']);
	
	$conn = mysqli_connect("localhost", "root", "", "kasperlive");
	
	
		$email = $_POST["email"];
		$password = $_POST["password"];
        $error_email=$_POST["error_email"];



if(!empty($email)){
if(!empty($password)){
    
    	$sql = "SELECT * FROM stable where email='$email' and password='$password'" ;
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
            
			$_SESSION['max']=$res;
            $one  = $row['one'];	
            $_SESSION['one']=$one;
            $two  = $row['two'];	
            $_SESSION['two']=$two;
            $id  = $row['id'];	
            $_SESSION['id']=$id;
            $_SESSION['email']=$email;
        
			
        header('Location:index.php');
        
        
        }
    else{
        
       $error_email=" * الإيميل أو كلمة المرور غير صحيحة ";
        $_SESSION['error_email']=$error_email;
          header('Location:login.php');
			
    }
    
    
}else{
    
      $error_email=" * كلمة المرور غير صحيحة ";
    $_SESSION['error_email']=$error_email;
     header('Location:login.php');
}    
    
    
    
    
}else{
    
   $error_email=" * الإيميل غير صحيح ";
    $_SESSION['error_email']=$error_email;
     header('Location:login.php');
}        

	

	
	mysqli_close($conn);
}
else{
    echo"خطأ-- Error 404";
     header('Location:login.php');
}
?>
