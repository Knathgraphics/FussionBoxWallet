

<?php
include('../connection.php');
session_start();

if($_SESSION['ID']['ID'] == ""){
	echo "<script> window.location = 'https://fussionbox.app/'</script>";
}

$Identitykey = $_SESSION['ID']['ID'];
$Query = "SELECT * FROM `registration` WHERE `ID` = '$Identitykey'";
$result = mysqli_query($Conn,$Query);
$Fetch = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="CryptoZone : Crypto Trading Admin Bootstrap 5 Template">
	<meta property="og:title" content="CryptoZone  :Crypto Trading Admin Bootstrap 5 Template">
	<meta property="og:description" content="CryptoZone  :Crypto Trading Admin  Admin Bootstrap 5 Template">
	<meta property="og:image" content="">
	<meta name="format-detection" content="telephone=no">
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	
	<!-- PAGE TITLE HERE -->
	<title>Refer | Fussionbox </title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="./vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="./vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	
	<!-- Style css -->
    <link href="./css/style.css" rel="stylesheet">
	
</head>
<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap');

  *{
    font-family: Mukta;
  }
div.loader{
	height: 100vh;
	width: 100vw;
	position: fixed;
	overflow: hidden;
	z-index: 100;
	display: block;
}
</style>


<div class="loader bg-secondary p-5" id="myloader">
<img src="../img/loaderlogo.png" class="d-block mx-auto" style="padding-top: 30vh;" width="60" alt="">
<lottie-player class="mx-auto d-block" src="https://assets7.lottiefiles.com/packages/lf20_ldq2pf6j.json"  background="transparent"  speed="1"  style="width: 100px; height: 100px;"  loop  autoplay></lottie-player>
</div>






    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index-2.html" class="brand-logo">
				<img src="images/logo/logo.png" class="logo-abbr" alt="">
				<img src="images/logo/logo-text.png" class="brand-title" alt="">
				<img src="images/logo/logo-color.png" class="logo-color" alt="">
				<img src="images/logo/logo-text-color.png" class="brand-title color-title" alt="">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="22" width="4" height="4" rx="2" fill="#2A353A"/>
					</svg>		
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
      **********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                               Refer
                            </div>
                        </div>
                        <div class="navbar-nav header-right">
							<div class="nav-item d-flex align-items-center">
								<div class="input-group search-area">
									<span class="input-group-text"><a href="javascript:void(0)"><svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="var(--secondary)"/>
										</svg>
										</a></span>
									<input type="text" class="form-control" placeholder="Search here...">
								</div>
							</div>
							<div class="dz-side-menu">	
								<div class="search-coundry d-flex align-items-center">
									<img src="images/United.png" alt="">
									<select class="default-select dashboard-select image-select">
									  <option data-display="Eng">Eng</option>
									  <option value="2">Af</option>
									   <option value="2">Al</option>
									</select>
								</div>
								<div class="sidebar-social-link ">
									<ul>
										<li class="nav-item dropdown notification_dropdown">
											<a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
												<svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M18.7071 8.56414C18.7071 9.74035 19.039 10.4336 19.7695 11.2325C20.3231 11.8211 20.5 12.5766 20.5 13.3963C20.5 14.215 20.2128 14.9923 19.6373 15.6233C18.884 16.3798 17.8215 16.8627 16.7372 16.9466C15.1659 17.0721 13.5937 17.1777 12.0005 17.1777C10.4063 17.1777 8.83505 17.1145 7.26375 16.9466C6.17846 16.8627 5.11602 16.3798 4.36367 15.6233C3.78822 14.9923 3.5 14.215 3.5 13.3963C3.5 12.5766 3.6779 11.8211 4.23049 11.2325C4.98384 10.4336 5.29392 9.74035 5.29392 8.56414V8.16515C5.29392 6.58996 5.71333 5.55995 6.577 4.55164C7.86106 3.08114 9.91935 2.19922 11.9558 2.19922H12.0452C14.1254 2.19922 16.2502 3.12359 17.5125 4.65728C18.3314 5.64484 18.7071 6.63146 18.7071 8.16515V8.56414ZM9.07367 19.1136C9.07367 18.642 9.53582 18.426 9.96318 18.3336C10.4631 18.2345 13.5093 18.2345 14.0092 18.3336C14.4366 18.426 14.8987 18.642 14.8987 19.1136C14.8738 19.5626 14.5926 19.9606 14.204 20.2134C13.7001 20.5813 13.1088 20.8143 12.4906 20.8982C12.1487 20.9397 11.8128 20.9407 11.4828 20.8982C10.8636 20.8143 10.2723 20.5813 9.76938 20.2125C9.37978 19.9606 9.09852 19.5626 9.07367 19.1136Z" fill="#130F26"/>
												</svg>
												
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 p-3 height370">
													<h4 class="text-center border-bottom pb-2">Notications</h4>
													<ul class="timeline">
														<li>
															<div class="timeline-badge primary"></div>
															<a class="timeline-panel text-muted" href="javascript:void(0);">
																<span></span>
																<h6 class="mb-0">Venus Coin Presale is Live</h6>
															</a>
														</li>
														<li>
															<div class="timeline-badge primary"></div>
															<a class="timeline-panel text-muted" href="javascript:void(0);">
																<span></span>
																<h6 class="mb-0">You have been awarded 15 Venus Token worth <strong class="text-primary">$60</strong>.</h6>
															</a>
														</li>
														<li>
															<div class="timeline-badge info">
															</div>
															<a class="timeline-panel text-muted" href="javascript:void(0);">
																<span></span>
																<h6 class="mb-0">Earn More just by Depositing Crypto</h6>
																<p class="mb-0">Autostaking will generate you income daily</p>
															</a>
														</li>
														<li>
															<div class="timeline-badge info">
															</div>
															<a class="timeline-panel text-muted" href="javascript:void(0);">
																<span></span>
																<h6 class="mb-0">You have been Awarded $100 USDT</h6>
															</a>
														</li>
														<li>
															<div class="timeline-badge success">
															</div>
															<a class="timeline-panel text-muted" href="javascript:void(0);">
																<span></span>
																<h6 class="mb-0">Trading will Open 1st March 2023</h6>
															</a>
														</li>
														
													</ul>
												</div>
												<a class="all-notification" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a>
											</div>
										</li>	
									
										<li class="nav-item dropdown notification_dropdown">
											<a class="nav-link bell-link " href="javascript:void(0);">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M16.9394 3.57129C18.2804 3.57129 19.5704 4.06765 20.5194 4.95828C21.4694 5.84704 22.0004 7.04579 22.0004 8.30073V15.6993C22.0004 18.3122 19.7304 20.4287 16.9394 20.4287H7.0604C4.2694 20.4287 2.0004 18.3122 2.0004 15.6993V8.30073C2.0004 5.68783 4.2594 3.57129 7.0604 3.57129H16.9394ZM18.5304 9.69615L18.6104 9.62123C18.8494 9.34964 18.8494 8.9563 18.5994 8.68471C18.4604 8.54517 18.2694 8.45994 18.0704 8.44121C17.8604 8.43091 17.6604 8.4974 17.5094 8.62852L13.0004 12C12.4204 12.4505 11.5894 12.4505 11.0004 12L6.5004 8.62852C6.1894 8.41312 5.7594 8.44121 5.5004 8.69407C5.2304 8.94693 5.2004 9.34964 5.4294 9.6306L5.5604 9.75234L10.1104 13.077C10.6704 13.4891 11.3494 13.7138 12.0604 13.7138C12.7694 13.7138 13.4604 13.4891 14.0194 13.077L18.5304 9.69615Z" fill="#130F26"/>
											</svg>
												
											</a>
										</li>	
										<li class="nav-item dropdown notification_dropdown">
											<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4023 13.4798C20.7599 13.6577 21.0359 13.9387 21.23 14.2197C21.6082 14.8003 21.5775 15.5121 21.2096 16.1395L20.4942 17.2634C20.1161 17.8627 19.411 18.2373 18.6854 18.2373C18.3277 18.2373 17.9291 18.1437 17.6021 17.9564C17.3364 17.7972 17.0298 17.741 16.7028 17.741C15.691 17.741 14.8428 18.5183 14.8121 19.4455C14.8121 20.5225 13.8719 21.3653 12.6967 21.3653H11.3068C10.1214 21.3653 9.18116 20.5225 9.18116 19.4455C9.16072 18.5183 8.3125 17.741 7.30076 17.741C6.96351 17.741 6.65693 17.7972 6.40144 17.9564C6.07441 18.1437 5.66563 18.2373 5.31816 18.2373C4.58235 18.2373 3.8772 17.8627 3.49908 17.2634L2.79393 16.1395C2.4158 15.5308 2.39536 14.8003 2.77349 14.2197C2.937 13.9387 3.24359 13.6577 3.59106 13.4798C3.8772 13.3487 4.06116 13.1333 4.23489 12.8804C4.74587 12.075 4.43928 11.0167 3.57062 10.5391C2.55888 10.0053 2.23185 8.81591 2.81437 7.88875L3.49908 6.78366C4.09181 5.8565 5.35904 5.52871 6.381 6.0719C7.2701 6.52143 8.42491 6.22174 8.94611 5.4257C9.10962 5.16347 9.2016 4.88251 9.18116 4.60156C9.16072 4.23631 9.27314 3.8898 9.46731 3.60884C9.84543 3.0282 10.5301 2.65359 11.2762 2.63486H12.7171C13.4734 2.63486 14.1581 3.0282 14.5362 3.60884C14.7202 3.8898 14.8428 4.23631 14.8121 4.60156C14.7917 4.88251 14.8837 5.16347 15.0472 5.4257C15.5684 6.22174 16.7232 6.52143 17.6225 6.0719C18.6343 5.52871 19.9117 5.8565 20.4942 6.78366L21.1789 7.88875C21.7717 8.81591 21.4447 10.0053 20.4227 10.5391C19.554 11.0167 19.2474 12.075 19.7686 12.8804C19.9322 13.1333 20.1161 13.3487 20.4023 13.4798ZM9.10962 12.0095C9.10962 13.4798 10.4075 14.6505 12.012 14.6505C13.6165 14.6505 14.8837 13.4798 14.8837 12.0095C14.8837 10.5391 13.6165 9.3591 12.012 9.3591C10.4075 9.3591 9.10962 10.5391 9.10962 12.0095Z" fill="#130F26"/>
												</svg>
												
											</a>
											
								
							</div>	
                        </div>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="material-icons">grid_view</i>
							<span class="nav-text">Dashboard</span>
						</a>
						
						<ul aria-expanded="false">
							<li><a href="dashboard.php">Home</a></li>
							<li><a href="deposit.php">Deposit</a></li>
							<li><a href="withdraw.php">Withdraw</a></li>
							<li><a href="nft.php">NFTs</a></li>
							<li><a href="refer.php">Refer and Earn </a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
							<i class="material-icons">trending_up</i>	
							<span class="nav-text">Trading </span>
						</a>
						<ul aria-expanded="false">
								
							<li><a href="future.php">Future</a></li>	
							<li><a href="inday.php">Intraday Trading</a></li>
							<li><a href="p2p.php">P2P Trading</a></li>
						</ul>
					</li>
					
					<li><a href="https://fussionbox.app">Logout</a></li>	
						</ul>
					</li>
					
				</ul>
				
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
		<br><br><br><br>
       
							
															<div class="card col-11 mx-auto mt-5 px-5">
                                                                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_9ti102vm.json"  class="d-block mx-auto" background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                                                                <h2>Refer and Earn</h2>
                                                                <p class="text-white ">Earn 0.025 Venus Token (XVS) and 0.1 USDT for every valid Referral. Top 100 Referrals will share $10,000 USDT.</p>

                                                                <div class="row mb-3 text-white">
                                                                    <div class="col-8"> <span style="font-size:11pt" class="material-symbols-outlined ">
diversity_3
</span>&nbsp;&nbsp; Total Referrals</div>
                                                                    <div class="col">
<?php

$Query4 = "SELECT * FROM `registration` WHERE `Referredby` = '$Fetch[ID]'";
$result4 = mysqli_query($Conn,$Query4);
$Count = mysqli_num_rows($result4);

$Query1 = "UPDATE `registration` SET `Referralcount`= '$Count' WHERE `ID` = '$Fetch[ID]' ";
    $result = mysqli_query($Conn,$Query1);
echo $Fetch['Referralcount'];

?>


																	</div>
                                                                </div>
                                                                <div class="row mb-3 text-white">
                                                                    <div class="col-8"> <img width="12" src="../xhtml/images/venus.png" alt=""> &nbsp; Total Venus Earned</div>
                                                                    <div class="col">
<?php	
$Calculatecrypt = $Fetch['Referralcount'] * 0.025;

$upcrypt = $Calculatecrypt + 15;

$Query5 = "UPDATE `registration` SET `Crypt`= '$upcrypt' WHERE `ID` = '$Fetch[ID]' ";
$result = mysqli_query($Conn,$Query5);
															
echo  $Calculatecrypt;

?>
																	</div>
                                                                </div>
                                                                <div class="row mb-3 text-white">
                                                                    <div class="col-8"> <img width="12" src="../xhtml/images/usdt.png" alt=""> &nbsp; Total USDT Earned</div>
                                                                    <div class="col">
																		<?php

$Calculateusdt = $Fetch['Referralcount'] * 0.1;

$upusdt = $Calculateusdt + 50 ;
$Query5 = "UPDATE `registration` SET `Usdt`= '$upusdt' WHERE `ID` = '$Fetch[ID]' ";
$result = mysqli_query($Conn,$Query5);													
echo  $Calculateusdt;
																		?>
																	</div>
                                                                </div>

														<form action="">
                                                            <div class="input-group">
                                                            
                                                                <input type="text" onclick="Copy()" value="https://fussionbox.app/create.php?ref=<?php echo $Fetch["ID"];?>" class="form-control" id="address">
                                                                <span class="input-group-text"><span onclick="Copy()" class="material-symbols-outlined small">
                                                                    file_copy
                                                                    </span></span>
                                                            </div>
    <br>
                                                            <div style="display: none;" id="mycopy" class="alert alert-primary alert-dismissible fade show">
                                                                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>	
                                                                <strong>Referral Link Copied</strong> 
                                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                                <span><i class="fa-solid fa-xmark"></i></span>
                                                                </button>
                                                            </div>
    
                                                        </form>
															</div>
															</div>

							

															<div class="card col-11 mx-auto mt-2 p-3">
                                                               <img src="../img/banner5.png" class="img-fluid mb-5 rounded" alt="">

<div class="container">
<p class="lead text-white">Steps to Buy Venus Token</p>
<ul class="text-white">
	<li>- Presale Price $3, Current Price $4</li>
	<li>- Minimum Buy 0.075 BNB</li>
	<li>- Deposit Amount in BNB (Binance Smart Chain)</li>
	<li>- Buy using the Presale Machine below</li>
	<li>- Note: Only users who purchase Venus Token can receive APYs</li>
</ul>

<br>

<br>

															   <form action="" id="buycoin" class="px-3 border border-2 rounded mt-3">
																<label for="" class="text-white mt-2">Available BNB: <strong id="newusdt">0.075</strong></label>
																<input type="number" placeholder="Minimum 0.075 BNB" value="" class="form-control" id="totalusdt">
																<p  style="font-size:9pt;" class="text-warning" id="result"></p>
															<center>	<span style="font-size: 20pt;" class="material-symbols-outlined text-white">
																	swap_horizontal_circle
																	</span></center>

																<label for="" class="text-white mt-3">You Get</label>
																<div class="input-group ">
                                                            
																	<input type="text"  onkeydown="return false" class="form-control " id="totalfsn">
																	<span class="input-group-text bg-primary">XVS</span>
																</div>
																
																<button id="swap" type="submit" class="btn btn-primary btn-block my-4 disabled ">Buy Venus</button>
<p class="alert alert-success" id="successmessage" style="display: none;">
	&check; Purchase Successful
</p>
															   </form>

	<br>
															   
										<p class="lead text-white">Our Social Media Platfom</p>

										<div class="row mb-3">
											<div class="col-3"><a href="https://blog.venus.io/?gi=84ef9d2f5203"><img width="20" src="./images/medium2.png" alt=""></a></div>
											<div class="col-3"><a href="https://www.reddit.com/r/VenusProtocol"><img width="20" src="./images/reddit2.png" alt=""></a></div>
											<div class="col-3"><a href="https://twitter.com/VenusProtocol"><img width="20" src="./images/twitter2.png" alt=""></a></div>
											<div class="col-3"><a href="https://github.com/VenusProtocol/venus-protocol"><img width="20" src="./images/github2.png" alt=""></a></div>
										</div>
										<div class="row">
											<div class="col-3"><a href="https://coinmarketcap.com/currencies/venus/"><img width="20" src="./images/cm2.png" alt=""></a></div>
											<div class="col-3"><a href="https://www.coingecko.com/en/coins/venus"><img width="20" src="./images/cg2.png" alt=""></a></div>
											<div class="col-3"><a href="https://venus.io/Whitepaper.pdf"><img width="20" src="./images/file2.png" alt=""></a></div>
											<div class="col"></div>
										</div>
										<p class="small text-white  mt-4" style="user-select: text;">Contract Address: 0xcF6BB5389c92Bdda8a3747Ddb454cB7a64626C63</p>
</div>





					
                                                            </div>
															</div>
<br>





    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="./vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>
	<script src="./vendor/swiper/js/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script>
	<script src="./vendor/raphael/raphael.min.js"></script>
	<script src="./vendor/morris/morris.min.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-1.js"></script>
    <script src="./js/custom.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./js/demo.js"></script>
    <script src="./js/styleSwitcher.js"></script>
	<script>
		jQuery(document).ready(function(){
			setTimeout(function(){
				dzSettingsOptions.version = 'dark';
				new dzSettings(dzSettingsOptions);
			},1500)
		});


		window.addEventListener('load', ()=>{
			document.getElementById('myloader').style.display = 'none';
		})
        function Copy(){
   
   var copyText = document.getElementById("address");
   copyText.select();
 copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
 navigator.clipboard.writeText(copyText.value);
 document.getElementById('mycopy').style.display = 'block'; 
 var me = setTimeout(Closealert,1200);
   }
       
  function Closealert(){
   document.getElementById('mycopy').style.display = 'none';
  }




  if(localStorage.getItem('balances') == null){
	window.location = 'dashboard.php';
}


var USDT = JSON.parse(localStorage.getItem('balances'));
document.getElementById('newusdt').innerText = USDT.binance;

var ErrorMessage = document.getElementById('result');
var FSNbalance = document.getElementById('totalfsn');


document.getElementById('totalusdt').addEventListener('keyup', ()=>{
	var USDTValue = +document.getElementById('totalusdt').value;
	if(USDTValue < 0.075 ){
	ErrorMessage.innerText = "Buy amount cannot be less than 0.075 BNB";
	FSNbalance.value = Number(USDTValue*300);
	document.getElementById('swap').classList.add('disabled');
	}
else if(USDTValue > 0.075 && USDT.binance < USDTValue){
	ErrorMessage.innerText = "Insuffient BNB Balance to Purchase " + USDTValue*300 + " Venus Coin" ;
	FSNbalance.value = Number(USDTValue*300);
	document.getElementById('swap').classList.add('disabled');
}

else if(USDTValue > 0.075 && USDTValue <= USDT.binance  ){
	ErrorMessage.innerText = "";
	FSNbalance.value = Number(USDTValue*300);
	document.getElementById('swap').classList.remove('disabled');
}
})

document.getElementById('buycoin').addEventListener('submit', (e)=>{
e.preventDefault();
	var XHR = new XMLHttpRequest();
	var USDT = document.getElementById('totalusdt').value;
	var FSN = document.getElementById('totalfsn').value;
	var WalletID = JSON.parse(localStorage.getItem('balances'));
	var ID = WalletID.id;
	XHR.open('GET','http://localhost/cryptbox/logic.php?USDT='+USDT+'&FSN='+FSN+'&ID='+ID,true);
document.getElementById('successmessage').style.display = "block";
	XHR.send();
var move = setTimeout(GotoDashboard,2000);
	

})

function GotoDashboard(){
	window.location = 'dashboard.php';
}
  
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

	<script>



	</script>
	
</body>
</html>