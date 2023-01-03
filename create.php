
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
    overflow-y:hidden;
    z-index: 1000;
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

    <div class="alertmy align-items-center " id="alerter" >
    <span class="material-symbols-outlined  small" id="icon">
check_circle
</span> <span id="response">Registration Successful</span>
    </div>

<div class="container mx-auto px-4 mt-2 mt-lg-4">
    <br>
    <p class="text-center mt-5 mt-lg-3">Create a Wallet</p>

 <center>  <div class="stages mb-3 row mx-auto justify-content-center">
        <div class="col stage1 c me-3" ></div>
        <div class="col stage2 d me-3" id="st2"></div>
        <div class="col stage3 d me-3" id="st3"></div>
    </div></center> 


    <div class="align-items-center">
       <p class="lead text-bold text-center m-0 p-0">Generate Mnemonics</p>
    <p class="small text-center m-0 p-0 "><span class="material-symbols-outlined small" style="color: lime;">
        done
        </span> Transcribe &nbsp;&nbsp;&nbsp; <span class="material-symbols-outlined small" style="color: red;">
            close
             </span> Digital Copy&nbsp;&nbsp;&nbsp; <span class="material-symbols-outlined small" style="color: red;">
                close
                 </span> Screenshot</p> 
    </div>
    
    <br>
    <div class="first" id="first" >
        <br>
                 <div class=" container col-12 col-lg-6 mx-auto ">
                    <div class="row ">
                      <div class="col-2 col-lg-1">
                        <span class="material-symbols-outlined text-white " style="width: 80px; max-width: 80px;">
                          vpn_key
                          </span>
                      </div>
                      <div class="col">
                        <h6 class="m-0 p-0">The Mnemonic is the key to your wallet</h6>
                        <p class="small text-secondary mb-3 p-0">Obtaining your Mnemonics means obtainng your Assets</p>
                      </div>
                    </div>
                    <div class="row ">
                        <div class="col-2 col-lg-1">
                          <span class="material-symbols-outlined text-white " style="width: 80px; max-width: 80px;">
                           password
                            </span>
                        </div>
                        <div class="col">
                          <h6 class="m-0 p-0">Transcribe the Mnemonics</h6>
                          <p class="small text-secondary mb-3 p-0">Do not Make Copies or Take Screenshots</p>
                        </div>
                      </div>
                      <div class="row ">
                        <div class="col-2 col-lg-1">
                          <span class="material-symbols-outlined text-white align-self-center d-flex" style="width: 80px; max-width: 80px;">
                            hub
                            </span>
                        </div>
                        <div class="col">
                          <h6 class="m-0 p-0">Store in a Safe Place</h6>
                          <p class="small text-secondary mb-3 p-0">Once Lost, the asset cannot be recovered</p>
                        </div>
                      </div>



<label for="checker" class="mt-5 align-self-center d-flex justify-content-center" style="font-size: 9pt;"><input  class="me-2" type="checkbox" style="accent-color:#7525FA;; border: none; outline: none; box-shadow: none;" name="" id="checker">&nbsp;I understand that i am responsible for the security of my mnemonics</label>

<br>
<button  style="background-color: gray;" id="gen" class="btn btn-primary disabled w-50 d-block py-2  mx-auto px-4 border-0 shadow-none align-items-center "><span class="material-symbols-outlined small text-white align-self-center">
    east
    </span>&nbsp; Generate</button>

    <p class="text-center mt-3">I already have a Wallet? <a href="signin.php" class="text-white text-decoration-none"> Login Wallet</a></p>

</div>
</div> 

<br>



</div>


<div class="second" id="second" style="display: none;">
<p class="px-5 small">Write down your 12 Mnemonic Phrases, ensure you keep it Safe.</p>
    
<div class="container col-10 col-lg-5 mx-auto border justify-content-center px-2 border-1 rounded py-4 ">

<div class="row  px-3 justify-content-center mx-auto mb-3">
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">1</p>
        <p id="1" class="m-0 p-0">ffddddd</p>
    </div>
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">2</p>
        <p id="2" class="m-0 p-0">ffddddd</p>
    </div>
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">3</p>
        <p id="3" class="m-0 p-0">ffddddd</p>
    </div>
</div>
<div class="row  px-3 justify-content-center mx-auto mb-3">
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">4</p>
        <p id="4" class="m-0 p-0">ffddddd</p>
    </div>
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">5</p>
        <p id="5" class="m-0 p-0">ffddddd</p>
    </div>
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">6</p>
        <p id="6" class="m-0 p-0">ffddddd</p>
    </div>
</div>
<div class="row px-3 justify-content-center mx-auto mb-3">
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">7</p>
        <p id="7" class="m-0 p-0">ffddddd</p>
    </div>
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">8</p>
        <p id="8" class="m-0 p-0">ffddddd</p>
    </div>
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">9</p>
        <p id="9" class="m-0 p-0">ffddddd</p>
    </div>
    
</div>

<div class="row  px-3 justify-content-center mx-auto mb-3">
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">10</p>
        <p id="10" class="m-0 p-0">ffddddd</p>
    </div>
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">11</p>
        <p id="11" class="m-0 p-0">ffddddd</p>
    </div>
    <div class="col-4 col-lg-3">
        <p class="text-secondary m-0 p-0" style="font-size: 8pt;">12</p>
        <p id="12" class="m-0 p-0">ffddddd</p>
    </div>
</div>

</div>
<br><br>
<button  style="background-color: #7525FA; box-shadow: 12px 5px 32px -4px rgba(117,37,250,0.72);
-webkit-box-shadow: 12px 5px 32px -4px rgba(117,37,250,0.72);
-moz-box-shadow: 12px 5px 32px -4px rgba(117,37,250,0.72); " id="ihave" class="btn btn-primary w-50 d-block py-2  mx-auto px-4 border-0  align-items-center mt-2 ">I have backed up</button>

<br><br>
</div>


<div class="third" id="third" style="display: none;">
    
    <div class="container col-10 col-lg-5 mx-auto border-0  py-4 ">
    <form action="">
    <p class="small m-0 mb-1">Enter Wallet Name:</p>
        <input type="text" required id="walletname" class="form-control bg-dark text-white border-0 shadow-none mb-4">
        <p class="small m-0 mb-1">Enter 5th Phrase:</p>
        <input type="text" id="x" required class="form-control bg-dark text-white border-0 shadow-none mb-4">
        <p class="small m-0 mb-1">Enter 8th Phrase:</p>
        <input type="text" id="y" required class="form-control bg-dark text-white border-0 shadow-none mb-4">
        <p class="small m-0 mb-1" id="12th">Enter 12th Phrase:</p>

        <input type="text" id="z" required onfocus="Checker()"  class="form-control bg-dark text-white border-0 shadow-none mb-4">
        
        <p class="small m-0 mb-1">Referred by:</p>
        <input type="number" value="" id="refer" class="form-control bg-dark text-white border-0 shadow-none mb-4"> 
        
        <p class="small m-0 p-0 mb-1">Code: <strong id="verification"></strong> </p>
        <input type="text" id="entercode" required  placeholder="Enter the above Code"  class="form-control bg-dark text-white border-0 shadow-none mb-1">
        <p class="small text-warning text-center p-0 m-0 mb-3" style="font-size: 8pt;" id="codemsg"></p>

        <button name="submit"  style="background-color: #7525FA; box-shadow: 12px 5px 32px -4px rgba(117,37,250,0.72);
        -webkit-box-shadow: 12px 5px 32px -4px rgba(117,37,250,0.72);
        -moz-box-shadow: 12px 5px 32px -4px rgba(117,37,250,0.72); " id="create" class="btn btn-primary w-75 d-block py-2  mx-auto px-4 border-0 btn-block align-items-center "> Create Wallet</button>
    </form>

 
    </div>

  
   
    <br><br>
    </div>
    

    <?php
if($_GET['ref'] != ""){
  $Ref = $_GET['ref'];
  echo "<script>document.getElementById('refer').value = '$Ref'</script>";
}
else{
    echo "<script>document.getElementById('refer').value = ''</script>";  
}
?>








<script type="module">
import mnemonics from './list.js';

var Code = document.getElementById('verification');
    var Num = Math.floor(Math.random() * 100000000);
    var Hex = Num.toString(16).toUpperCase();
    Code.innerText = Hex;
    
document.getElementById('entercode').addEventListener('keyup', ()=>{
var Input = document.getElementById('entercode').value;
    if(Input != Hex){
        document.getElementById('codemsg').innerText = 'Incorrect Code';
        document.getElementById('create').setAttribute('disabled', true);
    }
    else {
        document.getElementById('codemsg').innerText = '';
        document.getElementById('create').removeAttribute('disabled');
    }

})
    

    var Phrases = []; 
    var Checkbox = document.getElementById('checker');
    var BtnGenerate = document.getElementById('gen');

    Checkbox.addEventListener('click', ()=>{
    if(Checkbox.checked == true){
    BtnGenerate.classList.remove('disabled');
    BtnGenerate.style.setProperty('background-color', '#7525FA')
    } 
    else if(Checkbox.checked == false){
    BtnGenerate.classList.add('disabled');
    BtnGenerate.style.setProperty('background-color', 'gray')
    }    
    });
    

    document.getElementById('gen').addEventListener('click', Generate);

    function Generate(){
        document.getElementById('st2').classList.remove('d');
        document.getElementById('st2').classList.add('c');
       document.getElementById('first').style.display = 'none';
       document.getElementById('second').style.display = 'block';
       MnemonicsGenerator(1);MnemonicsGenerator(2);MnemonicsGenerator(3);MnemonicsGenerator(4);
       MnemonicsGenerator(5);
       MnemonicsGenerator(6);MnemonicsGenerator(7);
       MnemonicsGenerator(8);
       MnemonicsGenerator(9);MnemonicsGenerator(10);MnemonicsGenerator(11);
       MnemonicsGenerator(12);

       for(var i = 0;i <=11; i++){
        Phrases.push(document.getElementById(i+1).innerText);
       }
       
      
       
    }

    function MnemonicsGenerator(id){
        document.getElementById(id).innerHTML = mnemonics[Math.floor(Math.random()*47000)]
    }
    document.getElementById('ihave').addEventListener('click', IHaveBackedUp);
    function IHaveBackedUp(){
        document.getElementById('st3').classList.remove('d');
        document.getElementById('st3').classList.add('c');
        document.getElementById('first').style.display = 'none';
       document.getElementById('second').style.display = 'none';
       document.getElementById('third').style.display = 'block';

    }

    document.getElementById('z').addEventListener('keyup', ()=>{
        document.getElementById('create').classList.remove('disabled'); 
    });
   
     
    

document.getElementById('create').addEventListener('click',()=>{


document.getElementById('create').classList.add('disabled');
document.getElementById('create').innerHTML = "<span class='spinner spinner-border-sm spinner-border text-white'></span>"

        var five =  document.getElementById('x').value.trim().toLowerCase();
        var eight = document.getElementById('y').value.trim().toLowerCase();
        var twelve = document.getElementById('z').value.trim().toLowerCase();
        var Walletname = document.getElementById('walletname').value.trim().toLowerCase();
        var Refcode = document.getElementById('refer').value;



if(five == Phrases[4] && eight == Phrases[7] && twelve == Phrases[11] ){
alertr('Registration Successful', 'success');

function Setlocation (){
    Locator('signin.php');
}
var set = setTimeout(Insert, 1000);

function Insert(){
    var XHR = new XMLHttpRequest();
    XHR.open('GET', 'logic.php?seed='+Phrases+'&walletname='+Walletname+'&refer='+Refcode,true);
  console.log(XHR.responseText);
    XHR.send();
   document.getElementById('x').value = document.getElementById('y').value = document.getElementById('z').value = '';

var set = setTimeout(Setlocation, 3000);
}


}
else{
    alertr('Registration Unsuccessful', 'danger');
    function Setlocation (){
    Locator('create.php');
}
Phrases = [];
var set = setTimeout(Setlocation, 3000);
}

})
 

function alertr(text,icon){
document.getElementById('alerter').style.display = 'block';
document.getElementById('response').innerText = text;
if(icon == 'danger'){
    text = 'dangerous';
    document.getElementById('alerter').style.backgroundColor = 'red';
   
}
else if (icon == 'success'){
    text = 'check_circle';
    document.getElementById('alerter').style.backgroundColor = '#7525FA';
}
document.getElementById('icon').innerText = text;

var dismiss = setTimeout(Dismiss, 3000);

}


function Dismiss(){
document.getElementById('alerter').style.display = 'none';
}


function Locator (url){
    window.location = url;
}

window.addEventListener('load', ()=>{
			document.getElementById('myloader').style.display = 'none';
			var check = setTimeout(CheckView,40);
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
