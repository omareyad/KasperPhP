<?php
session_start();
if(isset($_SERVER['HTTP_REFERER'])){
	$pageName = basename($_SERVER['HTTP_REFERER']);
	
	$conn = mysqli_connect("localhost", "root", "", "kasperlive");
	
	
		
        $name1= $_POST['name1'];
        $name2= $_POST['name2'];
        $email = $_POST["email"];
		$password = $_POST["password"];
        $error_reg=$_POST["error_reg"];



if(!empty($email)){
if(!empty($password)){
if(!empty($name1)){
if(!empty($name2)){
    
    	$sql = "INSERT INTO stable (one,two, email, password)
		VALUES ('$name1','$name2', '$email', '$password')";
		$stat = mysqli_query($conn, $sql);
		
            
			
            
			
        header('Location:login.php');
        
}
    else{
               $error_reg=" * يرجى كتابة الإسم الإخير ";
                $_SESSION['error_reg']=$error_reg;
          header('Location:register.php');
        
    }
}else{
    
    $error_reg=" * يرجى كتابة الإسم الأول ";
                $_SESSION['error_reg']=$error_reg;
          header('Location:register.php');
}
        
   
    
    
}else{
    
      $error_reg=" * كلمة المرور فارغة ";
    $_SESSION['error_reg']=$error_reg;
     header('Location:register.php');
}    
    
}
    
    
else{
    
   $error_reg=" * الإيميل فارغ ";
    $_SESSION['error_reg']=$error_reg;
     header('Location:register.php');
}        

	

	
	mysqli_close($conn);
}
else{
    echo"خطأ-- Error 404";
     header('Location:register.php');
}

?>
