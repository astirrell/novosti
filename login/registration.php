<?php
    require_once '..\connect\connect.php';
    
    $Surname = $_POST['Surname'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];

    function gen_password($length = 6)
    {				
        $chars = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP'; 
        $size = strlen($chars) - 1; 
        $password = '';
        while($length--) {
            $password .= $chars[random_int(0, $size)]; 
        }
        return $password;
    }
    $newPassword = gen_password(8);
    mysqli_query($connect, "INSERT INTO `table1` (`Surname`, `Name`, `Email`, `Password`) VALUES ('$Surname', '$Name', '$Email', '$newPassword')");

    header('Location: /index/index.php');
    $to = $Email;
    $subject = 'Kod';
    $message = $newPassword;

?>
