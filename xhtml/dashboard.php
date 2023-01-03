

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



$Query4 = "SELECT * FROM `registration` WHERE `Referredby` = '$Fetch[ID]'";
$result4 = mysqli_query($Conn,$Query4);
$Count = mysqli_num_rows($result4);

$Query1 = "UPDATE `registration` SET `Referralcount`= '$Count' WHERE `ID` = '$Fetch[ID]' ";
$result = mysqli_query($Conn,$Query1);
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
	
	<!-- PAGE TITLE HERE -->
	<title>Dashboard | Fussionbox </title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="./vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="./vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
	
	<!-- Style css -->
    <link href="./css/style.css" rel="stylesheet">
	
</head>
<body >
<style>
	@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&display=swap');

*{
  font-family: Mukta;
  user-select:none;
}
img{
	pointer-events:none;
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
            <a href="#" class="brand-logo">
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
                                Dashboard
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
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid bg-secondary">
				<div class="row">
					<div class="col-xl-8">
						<div class="row">
							<div class="col-xl-12">
								<div class="card bubles">
									<div class="">
										<div class="">
										<div class="container px-4 col-md-4 col-xl-4 col-xxl-4 " style="border-radius: 9px; z-index:-1">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators" style="display:none;">
          <button style="width: 8px; height: 5px; border-radius: 50px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button style="width: 8px; height: 5px; border-radius: 50px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button style="width: 8px; height: 5px; border-radius: 50px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  <button style="width: 8px; height: 5px; border-radius: 50px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
         
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/banner2.png" class="d-block w-100 rounded" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/banner3.png" class="d-block w-100 rounded" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/banner5.png" class="d-block w-100 rounded" alt="...">
          </div>
		  <div class="carousel-item">
            <img src="../img/banner4.png" class="d-block w-100 rounded" alt="...">
          </div>
        </div>
        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button> -->
      </div>
  </div>
										</div>
									</div>
								</div>
							</div>




		<div class="container p-5 py-2 mx-auto">
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
							<div class="col-xl-12">
								<div class="swiper mySwiper">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="card card-wiget">
												<div class="card-body">
													<div class="card-wiget-info">
														<h2 class="p-0 m-0"><?php echo $Fetch['Wallet']?></h2>
														<h3 class="count-num m-0 p-0 h2">
															<?php 
															$Balance = ($Fetch['Crypt'] * 4) + ($Fetch['Usdt'] * 0.99) +  $Fetch['Bitcoin'] + $Fetch['Ethereum'] + $Fetch['Litecoin'] + $Fetch['Tron'];

															echo '$'.$Balance;
															?>
														</h3>

														<p class="m-0 p-0 text-white">Total Balance</p>
													<span class="m-0 p-0 text-white" style="font-size: 8pt;">Wallet ID:<i id="walletid"><?php echo $Fetch['ID']?></i> </span>
														<div>
														
														</div>
													</div>	
													<div id="NewCustomers"></div>
												</div>
												<div class="back-icon">
													<svg width="64" height="127" viewBox="0 0 64 127" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g opacity="0.05">
														<path d="M70.1991 32.0409C63.3711 28.2675 56.1119 25.3926 48.9246 22.4098C44.7559 20.6849 40.7669 18.6724 37.2451 15.8694C30.3093 10.3351 31.639 1.3509 39.7607 -2.20684C42.0606 -3.21307 44.4684 -3.5365 46.9121 -3.68024C56.3275 -4.18336 65.2758 -2.4584 73.7928 1.63839C78.0333 3.68679 79.4349 3.03993 80.8723 -1.38029C82.3817 -6.05207 83.6395 -10.7957 85.041 -15.5034C85.9753 -18.6659 84.8254 -20.7502 81.8426 -22.0799C76.3802 -24.4876 70.7741 -26.2126 64.8805 -27.1469C57.19 -28.3329 57.19 -28.3688 57.1541 -36.0952C57.1181 -46.984 57.1181 -46.984 46.1934 -46.984C44.6122 -46.984 43.0309 -47.02 41.4497 -46.984C36.3467 -46.8403 35.4842 -45.9419 35.3405 -40.8029C35.2686 -38.503 35.3405 -36.203 35.3045 -33.8671C35.2686 -27.0391 35.2327 -27.1469 28.6922 -24.7751C12.88 -19.0252 3.1052 -8.24421 2.06304 9.00543C1.12868 24.2785 9.10664 34.5924 21.6486 42.1032C29.375 46.739 37.9279 49.4702 46.1215 53.0998C49.3199 54.5014 52.3745 56.1185 55.0338 58.3466C62.904 64.8512 61.4665 75.6681 52.1229 79.7649C47.1277 81.957 41.845 82.4961 36.4186 81.8133C28.0453 80.7711 20.0314 78.579 12.4847 74.6619C8.06447 72.3619 6.77075 72.9729 5.2614 77.7524C3.96768 81.8852 2.81771 86.0538 1.66773 90.2225C0.122451 95.8286 0.697435 97.1583 6.05201 99.7817C12.88 103.088 20.1752 104.777 27.6141 105.963C33.4358 106.897 33.6155 107.149 33.6874 113.186C33.7233 115.917 33.7233 118.684 33.7593 121.416C33.7952 124.866 35.4483 126.878 39.006 126.95C43.0309 127.022 47.0918 127.022 51.1167 126.914C54.4229 126.842 56.1119 125.045 56.1119 121.703C56.1119 117.966 56.2916 114.192 56.1478 110.455C55.9682 106.646 57.6213 104.705 61.2868 103.699C69.7319 101.399 76.9193 96.8708 82.4535 90.1147C97.8345 71.4276 91.9768 44.0797 70.1991 32.0409Z" fill="#9568FF"/>
														</g>
													</svg>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="card card-wiget">
												<div class="card-body">
													<div class="card-wiget-info">
														<h4 class="count-num">$0.0</h4>
														<p>Profit & Loss</p>
														<div>
															<span class="text-success">+0.02%</span>
														</div> 
													</div>	
													<div id="ProfitlossChart"></div>
												</div>
												<div class="back-icon">
													<svg width="157" height="114" viewBox="0 0 157 114" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g opacity="0.05">
															<path d="M12.1584 84.1906V110.157C12.1584 111.737 13.5953 113.053 15.4007 113.053H37.8751C39.6436 113.053 41.1173 111.77 41.1173 110.157V64.4771L24.7957 79.0565C21.3324 82.1172 16.9112 83.8944 12.1584 84.1906Z" fill="#9568FF"/>
															<path d="M52.3177 64.1484V110.158C52.3177 111.737 53.7546 113.054 55.56 113.054H78.0344C79.8029 113.054 81.2766 111.77 81.2766 110.158V83.0721C76.1554 82.9734 71.3657 81.1633 67.7551 77.938L52.3177 64.1484Z" fill="#9568FF"/>
															<path d="M92.4769 80.2078V110.157C92.4769 111.736 93.9138 113.053 95.7191 113.053H118.194C119.962 113.053 121.436 111.769 121.436 110.157V54.8994L95.6823 77.904C94.6875 78.7926 93.6191 79.5496 92.4769 80.2078Z" fill="#9568FF"/>
															<path d="M159.421 20.9355L132.636 44.8617V110.157C132.636 111.736 134.073 113.053 135.878 113.053H158.353C160.121 113.053 161.595 111.769 161.595 110.157V22.7456C160.858 22.1862 160.306 21.6925 159.9 21.3634L159.421 20.9355Z" fill="#9568FF"/>
															<path d="M177.806 -21.4532C176.737 -22.4734 175.116 -23 173.053 -23C172.869 -23 172.648 -23 172.464 -23C162 -22.5722 151.573 -22.1114 141.11 -21.6836C139.71 -21.6177 137.794 -21.5519 136.283 -20.2026C135.804 -19.7747 135.436 -19.2811 135.141 -18.6887C133.594 -15.6938 135.768 -13.7521 136.799 -12.8306L139.415 -10.461C141.22 -8.81546 143.063 -7.16992 144.905 -5.55729L81.6816 50.9505L53.2754 25.5763C51.5806 24.0624 49.2964 23.2067 46.8647 23.2067C44.433 23.2067 42.1856 24.0624 40.4908 25.5763L2.65272 59.3427C-0.88424 62.5022 -0.88424 67.6033 2.65272 70.7628L4.34751 72.2767C6.0423 73.7906 8.32659 74.6462 10.7582 74.6462C13.1899 74.6462 15.4374 73.7906 17.1321 72.2767L46.8647 45.7177L75.2709 71.0919C76.9657 72.6058 79.25 73.4615 81.6816 73.4615C84.1133 73.4615 86.3607 72.6058 88.0924 71.0919L159.421 7.37663L167.49 14.5512C168.448 15.4069 169.774 16.5916 171.8 16.5916C172.648 16.5916 173.495 16.3942 174.379 15.9663C174.969 15.6702 175.485 15.341 175.927 14.9461C177.511 13.5309 177.806 11.7209 177.88 10.3057C178.174 4.25011 178.506 -1.80547 178.837 -7.89396L179.316 -17.0102C179.427 -18.9191 178.948 -20.4001 177.806 -21.4532Z" fill="#9568FF"/>
															</g>
													</svg>

												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="card card-wiget">
												<div class="card-body">
													<div class="card-wiget-info">
														<h4 class="count-num">$0</h4>
														<p class="sm-chart">Total Deposit</p>
													</div>
													<div id="TotaldipositChart"></div>
												</div>
												<div class="back-icon">
													<svg width="138" height="113" viewBox="0 0 138 113" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g opacity="0.05">
														<path d="M119.285 -15.4771H113.59V4.77299H133.524V-1.23874C133.524 -9.08974 127.136 -15.4771 119.285 -15.4771Z" fill="#9568FF"/>
														<path d="M99.3521 -49.0015H42.3988C39.7777 -49.0015 37.6527 -46.8765 37.6527 -44.2554V4.77188H104.098V-44.2554C104.098 -46.8765 101.973 -49.0015 99.3521 -49.0015Z" fill="#9568FF"/>
														<path d="M28.1602 -15.4771H14.8711C10.898 -15.4771 7.16314 -13.9305 4.35502 -11.122C1.5466 -8.31391 0 -4.57905 0 -0.605927V4.77299H28.1602V-15.4771Z" fill="#9568FF"/>
														<path d="M108.211 59.8423C108.211 66.8647 113.998 75.3463 121.183 75.3463H157.254C159.875 75.3463 162 73.2213 162 70.6002V49.0845C162 46.4634 159.875 44.3384 157.254 44.3384H121.183C113.998 44.3384 108.211 52.82 108.211 59.8423ZM128.777 59.8414C128.777 62.4628 126.652 64.5875 124.031 64.5875C121.41 64.5875 119.285 62.4628 119.285 59.8414C119.285 57.2203 121.41 55.0953 124.031 55.0953C126.652 55.0953 128.777 57.2203 128.777 59.8414Z" fill="#9568FF"/>
														<path d="M105.012 76.6807C101.013 71.8922 98.719 65.7555 98.719 59.8437C98.719 53.932 101.013 47.7953 105.012 43.0068C109.406 37.7452 115.15 34.8476 121.184 34.8476H153.774V20.6093C153.774 19.8236 153.719 19.0516 153.615 18.2966C153.293 15.9761 151.277 14.2656 148.935 14.2656H0V96.7621C0 105.716 6.38731 113 14.2383 113H139.535C147.386 113 153.774 105.716 153.774 96.7621V84.8399H121.184C115.15 84.8399 109.406 81.9422 105.012 76.6807Z" fill="#9568FF"/>
														</g>
													</svg>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="card card-wiget">
												<div class="card-body">
													<div class="card-wiget-info rewards">
														<h4 class="count-num">$</h4>
														<p>Rewards Earned</p>
														<div>
															<span class="text-primary">+200 This Month</span>
														</div> 
														<div class="d-flex align-items-baseline reward-earn">
															<h2 class="me-2">10%</h2>
															<span>Level 1</span>
														</div>
														<div class="progress-box">
															<div class="progress">
																<div class="progress-bar bg-primary" style="width:10%; height:7px; border-radius:4px;" role="progressbar"></div>
															</div>
														</div>
													</div>
												</div>
												<div class="back-icon">
													<svg width="115" height="123" viewBox="0 0 115 123" fill="none" xmlns="http://www.w3.org/2000/svg">
														<g opacity="0.05">
														<path d="M15.3627 66.1299L0.487194 95.8762C-0.228022 97.3054 -0.151221 99.0034 0.687599 100.362C1.52882 101.719 3.00965 102.546 4.60689 102.546H26.9838L40.4097 120.447C41.2821 121.614 42.6514 122.29 44.0926 122.29C46.0066 122.29 47.5151 121.148 48.2159 119.744L62.2334 91.7073C43.2814 89.8952 26.5722 80.2854 15.3627 66.1299Z" fill="#9568FF"/>
														<path d="M137.06 95.8762L122.184 66.1299C110.975 80.2854 94.2658 89.8952 75.3137 91.7073L89.3324 119.744C90.0321 121.148 91.5405 122.29 93.4545 122.29C94.8958 122.29 96.2662 121.614 97.1386 120.447L110.563 102.546H132.94C134.537 102.546 136.018 101.719 136.86 100.362C137.698 99.0034 137.775 97.3054 137.06 95.8762Z" fill="#9568FF"/>
														<path d="M76.4862 10.3573L68.7736 -1.96338L61.0634 10.3573C60.431 11.3677 59.4314 12.0937 58.2758 12.383L44.1766 15.9098L53.5105 27.0509C54.2761 27.9641 54.6577 29.1389 54.5749 30.3282L53.5705 44.8269L67.0504 39.3932C67.6912 39.1352 69.0016 38.7908 70.4956 39.3932L83.9768 44.8269L82.9735 30.3282C82.8919 29.1389 83.2735 27.9641 84.0392 27.0509L93.373 15.9098L79.2738 12.383C78.1182 12.0937 77.1186 11.3677 76.4862 10.3573Z" fill="#9568FF"/>
														<path d="M127.676 23.9022C127.676 -8.57659 101.252 -35 68.7736 -35C36.2949 -35 9.87146 -8.57659 9.87146 23.9022C9.87146 56.3797 36.2949 82.8043 68.7736 82.8043C101.252 82.8043 127.676 56.3809 127.676 23.9022ZM105.166 16.1848L92.2966 31.5451L93.679 51.5352C93.7882 53.1192 93.0754 54.6481 91.7914 55.5817C90.5061 56.5141 88.8321 56.7205 87.3596 56.1277L68.7736 48.6359L50.1876 56.1277C49.6896 56.3281 47.7059 56.9977 45.7559 55.5817C44.4719 54.6481 43.759 53.1192 43.8682 51.5352L45.2531 31.5451L32.384 16.186C31.364 14.968 31.0424 13.3119 31.5332 11.8023C32.024 10.2926 33.2576 9.14062 34.7984 8.75541L54.2365 3.8929L64.8675 -13.0935C65.71 -14.4387 67.186 -15.2559 68.7736 -15.2559C70.3613 -15.2559 71.8373 -14.4387 72.6797 -13.0935L83.3132 3.8929L102.751 8.75541C104.292 9.14062 105.526 10.2926 106.016 11.8023C106.507 13.3119 106.186 14.968 105.166 16.1848Z" fill="#9568FF"/>
														</g>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										 <div id="tradingview_85dc0" class="tranding-chart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 assets-al col-lg-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h2 class="heading">Assets Allocation</h2>
										<div class="dropdown custom-dropdown">
											<div class="btn sharp btn-primary tp-btn " data-bs-toggle="dropdown">
												<svg width="6" height="20" viewBox="0 0 6 20" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M5.19995 10.001C5.19995 9.71197 5.14302 9.42576 5.03241 9.15872C4.9218 8.89169 4.75967 8.64905 4.55529 8.44467C4.35091 8.24029 4.10828 8.07816 3.84124 7.96755C3.5742 7.85694 3.28799 7.80001 2.99895 7.80001C2.70991 7.80001 2.4237 7.85694 2.15667 7.96755C1.88963 8.07816 1.64699 8.24029 1.44261 8.44467C1.23823 8.64905 1.0761 8.89169 0.965493 9.15872C0.854882 9.42576 0.797952 9.71197 0.797952 10.001C0.798085 10.5848 1.0301 11.1445 1.44296 11.5572C1.85582 11.9699 2.41571 12.2016 2.99945 12.2015C3.58319 12.2014 4.14297 11.9694 4.55565 11.5565C4.96832 11.1436 5.20008 10.5838 5.19995 10L5.19995 10.001ZM5.19995 3.00101C5.19995 2.71197 5.14302 2.42576 5.03241 2.15872C4.9218 1.89169 4.75967 1.64905 4.55529 1.44467C4.35091 1.24029 4.10828 1.07816 3.84124 0.967552C3.5742 0.856941 3.28799 0.800011 2.99895 0.800011C2.70991 0.800011 2.4237 0.856941 2.15667 0.967552C1.88963 1.07816 1.64699 1.24029 1.44261 1.44467C1.23823 1.64905 1.0761 1.89169 0.965493 2.15872C0.854883 2.42576 0.797953 2.71197 0.797953 3.00101C0.798085 3.58475 1.0301 4.14453 1.44296 4.55721C1.85582 4.96988 2.41571 5.20164 2.99945 5.20151C3.58319 5.20138 4.14297 4.96936 4.55565 4.5565C4.96832 4.14364 5.20008 3.58375 5.19995 3.00001L5.19995 3.00101ZM5.19995 17.001C5.19995 16.712 5.14302 16.4258 5.03241 16.1587C4.9218 15.8917 4.75967 15.6491 4.55529 15.4447C4.35091 15.2403 4.10828 15.0782 3.84124 14.9676C3.5742 14.8569 3.28799 14.8 2.99895 14.8C2.70991 14.8 2.4237 14.8569 2.15666 14.9676C1.88963 15.0782 1.64699 15.2403 1.44261 15.4447C1.23823 15.6491 1.0761 15.8917 0.965493 16.1587C0.854882 16.4258 0.797952 16.712 0.797952 17.001C0.798084 17.5848 1.0301 18.1445 1.44296 18.5572C1.85582 18.9699 2.41571 19.2016 2.99945 19.2015C3.58319 19.2014 4.14297 18.9694 4.55565 18.5565C4.96832 18.1436 5.20008 17.5838 5.19995 17L5.19995 17.001Z" fill="var(--primary)"/>
												</svg>
											</div>
											
										</div>
									</div>
									<div class="card-body text-center pt-0 pb-2">
										<div id="morris_donught" class="custome-donut"></div>
										<div class="chart-items">
											<div class="row">
												<div class=" col-xl-12 col-sm-12">
													<div class="text-start">
														<span class="font-w600 mb-2 d-block text-secondary fs-14">This Month</span>
														<div class="color-picker">
															<span class="mb-0 col-6 fs-14">
																<svg class="me-2" width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="14" height="14" rx="4" fill="var(--primary)"/>
																</svg>
																VENUS (XVS)
															</span>
															<h5>$92,630,897</h5>													
														</div>
														<div class="color-picker">
															<span class="mb-0 col-6 fs-14">
																<svg class="me-2" width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="14" height="14" rx="4" fill="#2A353A"/>
																</svg>
																BTC(20%)
															</span>
															<h5>$721,979,664</h5>
														</div>
														<div class="color-picker">
															<span class="mb-0 col-6 fs-14">
																<svg class="me-2" width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="14" height="14" rx="4" fill="#C0E192"/>
																</svg>
																BNB(10%)
															</span>
															<h5>$675,953,644</h5>
														</div>
														<div class="color-picker">
															<span class="mb-0 col-6 fs-14">
																<svg class="me-2" width="16" height="16" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="14" height="14" rx="4" fill="#E085E4"/>
																</svg>
																ETH(10%)
															</span>
															<h5>$588,543,534</h5>
														</div>	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>	
							</div>




							<div class="col-xl-4 market-previews col-sm-6" >
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div>
											<h2 class="heading m-0">Wallet Balance</h2>
											<p class="small text-bolder text-white p-0 m-0 mb-4">Deposit to Auto-Earn</p>
											
											
										</div>
									</div>
									<div class="card-body pt-0 px-0">
										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm ">
													<img src="../img/venus.png" style="max-width: 30px;" alt="">
												</span>
												<div class="ms-2">
													<h6>VENUS (XVS)</h6>
													<span style="font-size: 8pt; padding: 2px;" class="alert alert-warning mt-3">Auto Earn </span> <span class="small text-white"> $4</span>
												</div>
											</div>
											<div class="count">
												<h6 id="cptbal"><?php echo $Fetch['Crypt']?></h6>
												<span class="text-success">49,835% APY</span>
											</div>
										</div>


										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm ">
													<img src="./images/usdt.png" style="max-width: 30px;" alt="">
												</span>
												<div class="ms-2">
													<h6>USDT (TRC 20)  </h6>
													<span style="font-size: 8pt; padding: 2px;" class="alert alert-warning  mt-3">Auto Earn </span><span class="small text-white" id="usdtprice">...</span>
												</div>
											</div>
											<div class="count">
												<h6 id="usdtbal"><?php echo $Fetch['Usdt']?></h6>
												<span class="text-success">20% APY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
											</div>
										</div>


										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm ">
													<img src="./images/BTC.png" style="max-width: 30px;" alt="">
												</span>
												<div class="ms-2">
													<h6>Bitcoin (BTC) </h6>
													<span style="font-size: 8pt; padding: 2px;" class="alert alert-warning  mt-3">Auto Earn </span><span class="small text-white" id="btcprice">...</span>
												</div>
											</div>
											<div class="count">
												<h6 id="btcbal" ><?php echo $Fetch['Bitcoin']?></h6>
												<span class="text-success">35% &nbsp;&nbsp;APY &nbsp;&nbsp;&nbsp;</span>
											</div>
										</div>

										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm ">
													<img src="./images/eth.png" style="max-width: 30px;" alt="">
												</span>
												<div class="ms-2">
													<h6>Ethereum (ETH) </h6>
													<span style="font-size: 8pt; padding: 2px;" class="alert alert-warning  mt-3">Auto Earn </span><span class="small text-white" id="ethprice">...</span>
												</div>
											</div>
											<div class="count">
												<h6 id="ethbal"><?php echo $Fetch['Ethereum']?></h6>
												<span class="text-success">75% &nbsp;&nbsp;APY &nbsp;&nbsp;&nbsp;</span>
											</div>
										</div>


										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm ">
													<img src="./images/BNB.png" style="max-width: 30px;" alt="">
												</span>
												<div class="ms-2">
													<h6>Binance Coin (BNB) </h6>
													<span style="font-size: 8pt; padding: 2px;" class="alert alert-warning  mt-3">Auto Earn </span><span class="small text-white" id="bnbprice">...</span>
												</div>
											</div>
											<div class="count">
												<h6 id="bnbbal"><?php echo $Fetch['Binance']?></h6>
												<span class="text-success">55% APY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
											</div>
										</div>



										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm ">
													<img src="./images/litecoin.png" style="max-width: 30px;" alt="">
												</span>
												<div class="ms-2">
													<h6>Litecoin (LTC) </h6>
													<span style="font-size: 8pt; padding: 2px;" class="alert alert-warning  mt-3">Auto Earn </span><span class="small text-white" id="ltcprice">...</span>
												</div>
											</div>
											<div class="count">
												<h6 id="ltcbal"><?php echo $Fetch['Litecoin']?></h6>
												<span class="text-success">48% APY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
											</div>
										</div>

										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm ">
													<img src="./images/BUSD.png" style="max-width: 30px;" alt="">
												</span>
												<div class="ms-2">
													<h6>BUSD (BEP 20) </h6>
													<span style="font-size: 8pt; padding: 2px;" class="alert alert-warning  mt-3">Auto Earn </span><span class="small text-white" id="trxprice">$1</span>
												</div>
											</div>
											<div class="count">
												<h6 id="trxbal">0.0000</h6>
												<span class="text-success">43% APY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
											</div>
										</div>



										<div class="previews-info-list">
											<div class="pre-icon">
												<span class="icon-box icon-box-sm ">
													<img src="./images/tron.png" style="max-width: 30px;" alt="">
												</span>
												<div class="ms-2">
													<h6>Tron (TRX) </h6>
													<span style="font-size: 8pt; padding: 2px;" class="alert alert-warning  mt-3">Auto Earn </span><span class="small text-white" id="trxprice">...</span>
												</div>
											</div>
											<div class="count">
												<h6 id="trxbal"><?php echo $Fetch['Tron']?></h6>
												<span class="text-success">40% APY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
											</div>
										</div>

										
											
										
										<br>
										<center><button class="btn btn-primary email-btn disabled ">+71 cryptocurrencies (Coming Soon)</button></center>
										</div>
									</div>
								</div>
							</div>


















							<div class="col-xl-3 col-sm-6">
								<div class="card bg-secondary email-susb">
									<div class="card-body text-center">
									<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
	<div class="tradingview-widget-container__widget"></div>
	
	<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
		
	{
	"symbol": "BINANCE:BTCUSDT",
	"width": "100%",
	"height": "100%",
	"locale": "en",
	"dateRange": "1D",
	"colorTheme": "dark",
	"trendLineColor": "rgba(41, 98, 255, 1)",
	"underLineColor": "rgba(41, 98, 255, 0.3)",
	"underLineBottomColor": "rgba(41, 98, 255, 0)",
	"isTransparent": true,
	"autosize": true,
	"largeChartUrl": ""
  }
	</script>
  </div>
  <!-- TradingView Widget END -->
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4">
						<div class="row">
							<div class="col-xl-12 col-sm-6">
								<div class="card h-auto">
									<div class="card-body px-0 pt-1">
										<div class="">
											<nav class="buy-sell">
											  <div class="nav nav-tabs" id="nav-tab2" role="tablist">
												<button class="nav-link active" id="nav-buy-tab" data-bs-toggle="tab" data-bs-target="#nav-buy" type="button" role="tab" aria-controls="nav-buy" aria-selected="true">buy</button>
												<button class="nav-link" id="nav-sell-tab" data-bs-toggle="tab" data-bs-target="#nav-sell" type="button" role="tab" aria-controls="nav-sell" aria-selected="false">sell</button>
											  </div>
											</nav>
											<div class="tab-content" id="nav-tabContent">
												<div class="tab-pane fade show active" id="nav-buy" role="tabpanel" aria-labelledby="nav-buy-tab">
													<nav class="limit-sell">
														<div class="nav nav-tabs" id="nav-tab3" role="tablist">
															<button class="nav-link active" id="nav-market-order-tab1" data-bs-toggle="tab" data-bs-target="#nav-market-order1" type="button" role="tab" aria-controls="nav-market-order1" aria-selected="true">market order</button>
															<button class="nav-link" id="nav-limit-order-tab1" data-bs-toggle="tab" data-bs-target="#nav-limit-order1" type="button" role="tab" aria-controls="nav-limit-order1" aria-selected="false">limit order</button>
													  </div>
													</nav>
													<div class="tab-content" id="nav-tabContent1">
														<div class="tab-pane fade show active" id="nav-market-order1" role="tabpanel" aria-labelledby="nav-market-order-tab1">
														</div>
														<div class="tab-pane fade" id="nav-limit-order1" role="tabpanel" aria-labelledby="nav-limit-order-tab1">
														</div>
													</div>
													<div class="sell-element">
														<form>
															<div class="sell-blance">
																<label class="form-label text-primary">Price</label>
																<div class="form-label blance"><span>BALANCE: $<?php echo $Balance?></span ></div>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="0.00">
																	<span class="input-group-text">USDT</span>
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Amount</label>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="Amount">
																	<span class="input-group-text">BTC</span>
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Total</label>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="Total">
																	<span class="input-group-text">USDT</span>
																</div>
															</div>
															<div class="slider-wrapper">
															  <div id="employees"></div>
															</div>
															<div class="text-center">
																<a href="http://moo" class="btn btn-primary w-75 disabled">Trading Opening Soon</a>
															</div>	
														</form>
													</div>	
											  
												</div>
												<div class="tab-pane fade" id="nav-sell" role="tabpanel" aria-labelledby="nav-sell-tab">
													<nav class="limit-sell">
														<div class="nav nav-tabs" id="nav-tab4" role="tablist">
															<button class="nav-link active" id="nav-market-order-tab" data-bs-toggle="tab" data-bs-target="#nav-market-order" type="button" role="tab" aria-controls="nav-market-order" aria-selected="true">market order</button>
															<button class="nav-link" id="nav-limit-order-tab" data-bs-toggle="tab" data-bs-target="#nav-limit-order" type="button" role="tab" aria-controls="nav-limit-order" aria-selected="false">limit order</button>
													  </div>
													</nav>
													<div class="tab-content" id="nav-tabContent2">
													  <div class="tab-pane fade show active" id="nav-market-order" role="tabpanel" aria-labelledby="nav-market-order-tab"></div>
													  <div class="tab-pane fade" id="nav-limit-order" role="tabpanel" aria-labelledby="nav-limit-order-tab">...</div>
													</div>
													<div class="sell-element">
														<form>
															<div class="sell-blance">
																<label class="form-label text-primary">Price</label>
																<div class="form-label blance"><span>BALANCE: $<?php echo $Balance?></span></div>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="0.00">
																	<span class="input-group-text">USDT</span>
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Amount</label>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="Amount">
																	<span class="input-group-text">BTC</span>
																</div>
															</div>
															<div class="sell-blance">
																<label class="form-label text-primary">Total</label>
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="Total">
																	<span class="input-group-text">USDT</span>
																</div>
															</div>
															<div class="slider-wrapper">
															  <div id="employees1"></div>
															</div>
															<div class="text-center">
																<a href="https://moonpay.com" class="btn btn-primary w-75 disabled">Trading Opening Soon</a>
															</div>	
														</form>
													</div>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-sm-6">
								<div class="card">
									<div class="card-header py-2">
										<h2 class="heading">Order Book <span>(BTC/USDT)</span></h2> 
									</div>	
									<div class="card-body pt-0 pb-3 px-2">
										<nav class="buy-sell style-1">
											<div class="nav nav-tabs" id="nav-tab1" role="tablist">
												<button class="nav-link active" id="nav-openorder-tab" data-bs-toggle="tab" data-bs-target="#nav-openorder" type="button" role="tab" aria-controls="nav-openorder" aria-selected="true">Open Orders</button>
											 	<button class="nav-link" id="nav-orderhistory-tab" data-bs-toggle="tab" data-bs-target="#nav-orderhistory" type="button" role="tab" aria-controls="nav-orderhistory" aria-selected="false">Order History</button>
											</div>
										</nav>
										<div class="tab-content" id="nav-tabContent3">
											<div class="tab-pane fade show active" id="nav-openorder" role="tabpanel" aria-labelledby="nav-openorder-tab">
												<div class="list-row-head">
													<span>Price</span>
													<span>Size</span>
													<span class="text-end">Total</span>
												</div>
												<div class="list-table danger">
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row"><span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">
															
														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">
														</div>
													</div>
												</div>
												<div class="list-bottom-info">
													<h6 class="text-danger mb-0">19858.19 <i class="fa-solid fa-caret-up"></i></h6>
												</div>
												<div class="list-table success">
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">
															
														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="nav-orderhistory" role="tabpanel" aria-labelledby="nav-orderhistory-tab">
												<div class="list-row-head">
													<span>Price</span>
													<span>Size</span>
													<span class="text-end">Total</span>
												</div>
												<div class="list-table danger">
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row"><span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">
															
														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">
														</div>
													</div>
												</div>
												<div class="list-bottom-info">
													<h6 class="text-danger mb-0">19858.19 <i class="fa-solid fa-caret-up"></i></h6>
												</div>
												<div class="list-table success">
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
													<div class="list-row">
														<span>19852.63</span>
														<span>0.050300</span>
														<span class="text-end">2.362877</span>
														<div class="bg-layer">

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-sm-6 server-chart">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h2 class="heading mb-0">Server Status</h2>
									</div>
									<div class="card-body pt-0 custome-tooltip">
										<div id="chartBar" class="chartBar"></div>
										<div class="d-flex server-status">
											<div>	
												<span>Country</span>
												<h4 class="fs-14 mb-0">United States</h4>
											</div>
											<div>	
												<span>Domain</span>
												<h4 class="fs-14 mb-0">Fussionbox</h4>
											</div>
											<div>	
												<span><i class="fa-solid fa-caret-up text-secondary scale-2"></i></span>
												<h4 class="fs-14 mb-0">2.0 mbps</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
   <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="./vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>
	<script src="./vendor/swiper/js/swiper-bundle.min.js"></script>
	<script src="https://s3.tradingview.com/tv.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script>
	<script src="./vendor/raphael/raphael.min.js"></script>
	<script src="./vendor/morris/morris.min.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-1.js"></script>
    <script src="./js/custom.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="./js/dashboard/tradingview-2.js"></script>
	<script src="./js/demo.js"></script>
    <script src="./js/styleSwitcher.js"></script>
	

	<script>
	async function CoinPrices2(){
			var Fetch = await fetch('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');
			var Response = await Fetch.json();

			
				document.getElementById('btcprice').innerText = " $"+Response[0].current_price;
				document.getElementById('ethprice').innerText = " $"+Response[1].current_price;
				document.getElementById('usdtprice').innerText = " $"+Response[2].current_price;
				//document.getElementById('bnbprice').innerText = " $"+Response[3].current_price;
				// document.getElementById('ltcprice').innerText = " $"+Response[12].current_price;
				// document.getElementById('trxprice').innerText = " $"+Response[16].current_price;
			

		}
		CoinPrices2();

var WalletID = document.getElementById('walletid').innerText;
var Btcbalance = document.getElementById('btcbal').innerText;
var Ethbalance = document.getElementById('ethbal').innerText;
var Bnbbalance = document.getElementById('bnbbal').innerText;
var Ltcbalance = document.getElementById('ltcbal').innerText;
let Usdtbalance = document.getElementById('usdtbal').innerText;
var Trxbalance = document.getElementById('trxbal').innerText;
var Cryptbalance = document.getElementById('cptbal').innerText;

	var WalletBalances = {
		"id": WalletID,
	"bitcoin":Btcbalance,
	"ethereum":Ethbalance,
	"binance":Bnbbalance,
	"litecoin":Ltcbalance,
	"usdt":Usdtbalance,
	"tron":Trxbalance,
	"crypt":Cryptbalance,

   }

   localStorage.setItem('balances', JSON.stringify(WalletBalances));
			



window.addEventListener('load', ()=>{
			document.getElementById('myloader').style.display = 'none';
			var check = setTimeout(CheckView,1000);
})

function CheckView (){
	if(screen.width > 600){
	document.getElementById('myloader').style.display = 'block';
	document.getElementById('myloader').innerHTML += "<h1 class='text-center text-white'>Fussion Box is Only Supported On Mobile Phones </h1>";	
}
}
	</script>
	<script>
		jQuery(document).ready(function(){
			setTimeout(function(){
				dzSettingsOptions.version = 'dark';
				new dzSettings(dzSettingsOptions);
			},1500)
		});
	</script>
	<script src="//code.tidio.co/g08xja2jwhtj7aeky3f6wlj0vxgjgwsk.js" async></script>
</body>
</html>