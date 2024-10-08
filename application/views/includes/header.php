<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="<?=base_url()?>/assets/images/hmfindia-logo.jpg" type="image/png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=ucwords($title)?> | Helios Multizone foundation | An NGO</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?=base_url('assets/css/slick.css')?>">
	<link rel="stylesheet" href="<?=base_url('assets/css/slick-theme.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/')?>lightgallery.css">
	<script src="<?=base_url('assets/js/slick.js')?>"></script>
	<script src="<?=base_url('assets/js/lightgallery.js')?>"></script>
<style>
.slick-prev{
    left:15px;
    z-index:5;
}
.slick-next{
    right:15px;
}
a:hover{
    text-decoration:none;
}
.work-icon, .rounded-icon-70 
{
    display:inline-block;
    position:relative;
    padding:10px;
}
.work-icon:before , .rounded-icon-70:before
{
    content:"";
    border:2px dashed;
    height:100%;
    width:100%;
    border-radius:50%;
    position:absolute;
    top:0;
    left:0;
    border-color:inherit;
}
.letter-spc-4
{
    letter-spacing: 4px !important;
}
.rounded-icon-70 i{
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: linear-gradient(90deg, #c3636c, #dc3545);
    line-height: 70px;
    color:whitesmoke;
    box-shadow: 0 2px 5px 0px #00000073;
}
.work-icon i
{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    background: linear-gradient(90deg, #00ddff, #008dd2);
    line-height: 100px;
    color:whitesmoke;
    box-shadow: 0 2px 5px 0px #00000073;
}
.divider 
{
    border: 2px solid #008dd2;
    width: 25px;
    margin: 0px auto;
    position:relative;
}
.divider:before
{
    content:"";
    border: 1px solid #00ddff;
    width: 65px;
    margin: 0px auto;
    position:absolute;
    top: -8px;
    left: -2px;
}
.divider:after
{
    content:"";
    border: 1px solid #00dd;
    width: 65px;
    margin: 0px auto;
    position:absolute;
    bottom: -8px;
    right: -2px;
}
#whatsapp
{
    position: fixed;
    right: 1rem;
    bottom: 1rem;
}
#query_btn
{
    position: fixed;
    left: 1rem;
    bottom: 1rem;
    width: 80px;
    height: 80px;
    font-size: 14px;
    border-radius: 50%;
}
.bg-primary
{
    background: linear-gradient(90deg,#00ddff, #008dd2) !important;
}
.btn-primary
{
	background-color: #002e5b !important;
	border-color: #002e5b !important; 	
}
.heading
{
	text-transform: uppercase;
}
/*sticky header position*/
.sticky.is-sticky {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    z-index: 1000;
    width: 100%;
}
.nav-link
{
	font-size: 18px;
	font-weight: 500;
}
.middle-align
{
	vertical-align: middle !important;
}
.left-side {
    width: 60%;
    height: 100%;
    position: absolute;
    text-align: center;
    padding: 50px;
    top:0;
    left:0;
    transition: all 1s ease-in-out;
}

.login-form {
    position: relative;
    height: 450px;
}

.right-side {
    width: 40%;
    position: absolute;
    height: 100%;
    top: 0;
    right: -.5px;
    text-align: center;
    padding: 50px;
    z-index: 5;
    border-radius: 0 5px 5px 0;
    transition: all 1s ease-in-out;
}
.left-40
{
    left: 40% !important;
    border-radius: 0 5px 5px 0;
    transition: all 1s ease-in-out;
}
.right-60
{
    right: 60% !important;
    border-radius:5px 0 0 5px;
    transition: all 1s ease-in-out;
}
.hiddenn{
    opacity: 0;
    transition: all .3s ease-in-out;
    transition-delay: .3s;
}
.visible{
    opacity: 1;
    transition: all .3s ease-in-out;
    transition-delay: .3s;
}
.form {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 50px;
}
.login-form .banner-form{
    background:transparent;
}
.center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.center-x{
    position:absolute;
    left:50%;
    transform:translate(-50%,0);
}
.bottom-center{
    position: fixed;
    bottom: 1rem;
    margin: auto;
    left: 50%;
    transform: translate(-50%,0);
    z-index: 5;
}
.min-h-100vh
{
	min-height: 100vh;
}
i.input-icon{
    position: absolute;
    left: 0;
    top: 0;
    width: 40px;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.form-group
{
	position: relative;
}
.donate-slider img
{
	border:10px solid orangered;
	transition: .3s ease-in-out;
}
.donate-slider img:hover
{
	border:10px solid #002e5b;
	transform: scale(1.08);
	transition: .3s ease-in-out;
}
.card.top:after
{
    content:"";
    width:50px;
    height:50px;
    background: white;
    position:absolute;
    bottom: -25px;
    z-index: 0;
    left: calc(50% - 25px);
    transform:rotate(45deg);
}
.card.bottom:before
{
    content:"";
    width:50px;
    height:50px;
    background: white;
    position:absolute;
    top: -25px;
    z-index: 0;
    left: calc(50% - 25px);
    transform:rotate(45deg);
}
.card.bottom,.card.top
{
	min-height: 400px;
	text-align: justify;
	cursor: context-menu;
	z-index: 1;
}
.pop
{
	transform: scale(1);
	transition: .3s ease-in-out;
}
.pop:hover
{
	transform: scale(1.03);
	transition: .3s ease-in-out;
}
.fixed-bg
{
	background-origin: center;
	background-position: center;
	background-attachment: fixed;
	background-size: cover;
	background-repeat: no-repeat;
	background-color: rgba(0,0,0,.7);
}
.opacity-7
{
	background-color: rgba(0,0,0,.7);
}
p
{
	line-height: 2;
}
 .bg-primary .nav-link
{
    color: white !important ;
} 
.form-control,.btn
{
    border-radius: 2rem;
}
.text-shadow
{
    text-shadow: 0 10px 5px #0000002e;
}
.font-normal
{
    font-size: 16px !important;
}
.text-lg-left
{
    text-align: left;
}
.object-fit
{
    object-fit: cover;
    object-position: center;
}
@media only screen and (max-width: 576px) 
{
    .min-h-100vh
    {
        min-height: auto;
    }
    .login-form
    {
        height: 450px;
    }
    .left-side,.right-side
    {
        width: 100%;
        background: white !important;
        height: auto;
        padding: 20px;
    }
    .form
    {
        padding: 20px;
    }
    .right-60,.left-40
    {
        left:unset !important;
        right: unset !important;
    } 
    .left-side
    {
        top:0;
    }
    .right-side
    {
        top:unset;
        bottom: 2rem;
    }
    .right-side .btn-light
    {
        background-color: #002e5b !important;
        border-color: #002e5b !important; 
        color: white !important;
    }
    .text-sm-center
    {
        text-align: center ;
    }
    .display-1
    {
        font-size: 2rem;
    }
    .display-3{
        font-size:1.5rem;
    }
    .center-x{
        position:static;
        transform:unset;
    }
}
</style>
</head>
<body>

<!-- The Modal -->
<div class="modal fade" id="userForm">
  	<div class="modal-dialog modal-dialog-centered modal-lg">
	    <div class="modal-content">
			<div class="login-form">
            <div class="left-side">
                <div class="hiddenn">
                    <div class="text-dark pb-5">
                        <h2> Sign in to HMF India</h2>
                    </div>
                    <div>
                        <form class="banner-form" method="post" action="<?=base_url('Login/index')?>">
                            <div class="form-group mb-5">
                                <input type="number" minlength="10" maxlength="10" class="form-control pl-5" name="mobile" placeholder="Enter Your Mobile Number" required="True">
                                <i class="input-icon fa fa-user"></i>
                            </div>
                            <div class="form-group mb-5">
                                <input type="password" class="form-control pl-5" name="password" placeholder="Enter Your Password" required="True">
                                <i class="input-icon fa fa-key"></i>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary text-center iq-mt-30"><i class="fa fa-lock mr-2"></i>Login</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="visible form bg-white">
                    <div class="text-dark pb-5">
                        <h2>Become A Member</h2>
                    </div>
                    <div>
                        <form class="banner-form" method="post" action="Welcome/registration"> 
                            <div class="form-group">
                                <input type="text" name="name" class="form-control pl-5" placeholder="Full Name*" value="<?=set_value('name')?>" required>
                                <i class="input-icon fa fa-user"></i>
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control pl-5" minlength="10" maxlength="10" name="mobile" value="<?=set_value('mobile')?>" placeholder="Mobile Number* (10-Digits)" required>
                                <i class="input-icon fa fa-phone"></i>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control pl-5" name="password" value="<?=set_value('password')?>" placeholder="Create Your Password" required>
                                <i class="input-icon fa fa-key"></i>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control pl-5" name="referral" value="<?=set_value('referal')?>" placeholder="Refferal Code">
                                <i class="input-icon fa fa-user-plus"></i>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary text-center iq-mt-30"><i class="fa fa-lock mr-2"></i>SignUp</button>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
            <div class="right-side bg-primary">
                <div class="hiddenn center">
                    <div class="heading text-light">
                        <h2 class="display-4 d-none d-xl-block d-lg-block d-md-block">Hello Friend!</h2>
                    </div>
                    <div>
                        <button class="btn btn-light text-center" id="signup"><i class="fa fa-arrow-right mr-2"></i>Become A Member</button>
                    </div>
                </div>
                <div class="visible center">
                    <div class="heding text-light">
                        <h2 class="display-4 d-none d-xl-block d-lg-block d-md-block">Welcome Back!</h2>
                    </div>
                    <div>
                        <button class="btn btn-light text-center" id="signin"><i class="fa fa-arrow-left mr-2"></i>Already a Member</button>
                    </div>
                </div>
            </div>
        </div>
	    </div>
  	</div>
</div>
<?php if ($message=$this->session->flashdata('message')) { ?>
    <script type="text/javascript">
      alert("<?php echo $message ; ?>");
    </script>
<?php } ?>
	<!--top header-->
    <header>

        <nav class="navbar navbar-expand-lg bg-primary navbar-dark top-navbar" data-toggle="sticky-onscroll">
        	<div class="container">
            	<a class="navbar-brand" href="<?=base_url()?>"><span><img src="<?=base_url('assets/images/hmfindia-logo.jpg')?>" width="60"class="mr-3" alt=""></span><span class="display-4 middle-align font-weight-normal d-none d-xl-inline d-lg-inline d-md-inline">HMF INDIA</span></a>
                	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
	                <ul class="navbar-nav">
	                    <li class="nav-item">
							<a class="nav-link" href="<?=base_url()?>">Home</a>
						</li>
						<li class="nav-item">
						 	<a class="nav-link" href="about-foundation">HMF Foundation</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact">Contact Us</a>
						</li>
                        <span>
                            <?php if ($this->session->userdata('own_id')){ ?>
                                <a class="btn-light btn" href="<?=base_url('user/dashboard')?>"><i class="fa fa-user mr-2"></i>Member Zone</a>
                            <?php } elseif($slug == 'home' ||$slug == 'about-foundation' ||$slug == 'contact' ||$slug == 'donate') { ?>
                                <a class="btn-light btn" href="<?=base_url('earning-scheme')?>" ><i class="fa fa-user mr-2"></i>Digital Zone</a>
                            <?php } else{ ?>
                                <a class="btn-light btn" href="" data-toggle="modal" data-target="#userForm"><i class="fa fa-user mr-2"></i>Member Zone</a>
                            <?php } ?>
                        </span>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End top header-->