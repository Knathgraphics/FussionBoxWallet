<?php
include('connection.php');



if($_GET['seed'] != "" && $_GET['walletname'] != ''){
    if ($_GET['refer'] != ''){
    $Referredby =$_GET['refer'];
    }
    else{
        $Referredby = '';
    }
    
    $seed = base64_encode($_GET['seed']);
    $walletname =  ucwords($_GET['walletname']) ;
    $ID = random_int(10000000,99999999);
    
    $Query = "INSERT INTO `registration`(`ID`, `Wallet`, `Phrase`, `Crypt`, `Bitcoin`, `Ethereum`,`Binance`, `Litecoin`, `Tron`, `Usdt`, `Referredby`) VALUES ('$ID','$walletname','$seed',15,0,0,0,0,0,50, $Referredby)";
    $result = mysqli_query($Conn,$Query);
    echo mysqli_error($Conn);
}

// $seed = base64_encode("pelumi, gift, personal,torkdf,yfood,torodkg,sotdkl,sokdor");
//     $walletname = "nathagency";
//     $ID = random_int(10000000,99999999);
// $Query = "INSERT INTO `registration`(`$ID`, `Wallet`, `Phrase`, `Crypt`, `Bitcoin`, `Ethereum`, `Litecoin`, `Tron`, `Usdt`, `Dogecoin`) VALUES ('$ID','$walletname','$seed',10,0,0,0,0,50,0)";
//     $result = mysqli_query($Conn,$Query);
//     echo mysqli_error($Conn);

 
if(isset($_POST['login'])){
    session_start();
    $phrase= mysqli_real_escape_string($Conn,$_POST['enterseed']);
    $encodedstring = (base64_encode(strtolower(trim($phrase))));
    $Query = "SELECT * FROM `registration` WHERE `Phrase` = '$encodedstring'";
    $result = mysqli_query($Conn,$Query);
    $count = mysqli_num_rows($result);
   
    if ($count > 0){
        $_SESSION['ID'] = mysqli_fetch_array($result);
        echo "<script>window.location = 'xhtml/dashboard.php'</script>";
    }
    else{
        session_destroy();
        echo "<script>window.location = 'create.php'</script>";
    }

}

if($_GET['USDT'] != '' && $_GET['FSN'] != '' && $_GET['ID'] != ''){
    $usdt = $_GET['USDT'];
    $fsn = $_GET['FSN'];
    $id = $_GET['ID'];

    $Query2 = "SELECT * FROM `registration` WHERE `ID` ='$id'";
    $result2 = mysqli_query($Conn,$Query2);
    $Fetcher = mysqli_fetch_array($result2);
    
    $NewCrypt = $Fetcher['Crypt'] + $fsn;
    $NewUSDT = $Fetcher['Usdt'] - $usdt;
    
    
    $Query = "UPDATE `registration` SET `Crypt`='$NewCrypt',`Usdt`= '$NewUSDT' WHERE `ID` = '$id' ";
    $result = mysqli_query($Conn,$Query);
    echo mysqli_error($Conn);
}



?>