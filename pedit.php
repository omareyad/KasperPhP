
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kasperlive";
$res=1;
$emails = $_POST["email"];
$passwords = $_POST["password"];

// إجراء الإتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);
$ids = $_POST["id"];	
// التحقق من الإتصال
if (!$conn) {
    die("فشل الإتصال: " . mysqli_connect_error());
}

// لتحديث سجل بالجدول SQL بناء جملة 
$sql = "UPDATE stable SET email='$emails' WHERE id='$ids'";


// تنفيذ الإستعلام
if (mysqli_query($conn, $sql)) {
    header( "refresh:2;url=Edit.php" );
     $_SESSION['email'] = $emails;
    echo "تم تحديث السجل بنجاح";
 
} else {
    echo "فشل تحديث السجل: " . mysqli_error($conn);
}

// إغلاق الإتصال 
mysqli_close($conn);


