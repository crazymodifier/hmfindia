<!-- Button to Open the Modal -->
<button type="button" class="bottom-center btn btn-danger" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Corona Virus Relief fund
</button>

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title d-flex justify-content-center">HERE IS YOUR CHANCE TO CONTRIBUTE IN INDIA'S WAR AGAINST COVID-19!</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6">
            <p>Keeping in mind the objective of dealing with any kind of emergency or distress situation, like the COVID-19 pandemic, and to provide relief to the affected, a public charitable foundation  under the name of helios multizone foundation Assistance and Relief in Emergency Situations Fund has been set up.</p>
          </div>
          <div class="col-lg-6">
            <h5 class="text-center">HOW TO CONTRIBUTE?</h5>
            <p>Name of the Account: <b>HELIOS MULTIZONE FOUNDATION</b> <br>
              Account Number: <b>6803605739</b> <br>
IFSC Code: IDIB000R106 <br>
Name of Bank & Branch: INDIAN BANK <br>
Ravindrapuri Varanasi UP</p>
          </div>
        </div>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger mx-2" data-dismiss="modal">Close</button>
        <a href="<?=base_url('donate')?>" class="btn btn-primary mx-2">Another Payment Method <i class="fa fa-arrow-right"></i></a>
      </div>

    </div>
  </div>
</div>

	<section class="bg-primary text-light py-5	">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<h5 class="heading border-bottom pb-2">quick Links</h5>
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="<?=base_url()?>" class="nav-link">
								Home
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('about-foundation')?>" class="nav-link">
								Foundation
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('contact')?>" class="nav-link">
								Contact Us
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('terms-and-conditions')?>" class="nav-link">
								Terms & Conditions
							</a>
						</li>
						<li class="nav-item">
							<a href="<?=base_url('privacy-policy')?>" class="nav-link">
								Privacy Policy
							</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3">
					<h5 class="heading border-bottom pb-2">contact us</h5>
					<span class="row">
						<span class="col-1">
							<i class="fa fa-map"></i>
						</span>
						<span class="col-10">
							<address>
								Lakhrawan, Bajardiha,
								Varanasi, Uttar Pradesh (221109), INDIA
							</address>
						</span>
					</span>
					<span class="row">
						<span class="col-1">
							<i class="fa fa-envelope"></i>
						</span>
						<span class="col-10">
							<address>
								<a class="text-light" href="mailto:hmfindia1@gmail.com">hmfindia1@gmail.com</a>
							</address>
						</span>
					</span>
					<span class="row">
						<span class="col-1">
							<i class="fa fa-phone-square"></i>
						</span>
						<span class="col-10">
							<address>
								<a class="text-light" href="telto:7236098508">+91-7236098508</a>
							</address>
						</span>
					</span>
				</div>
				<div class="col-lg-3">
					<h5 class="heading border-bottom pb-2">Reach Us</h5>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.3253082362858!2d82.97753381437016!3d25.29327223400431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e3210378b48a3%3A0x63fb285272bbf4d!2sBajardiha%20Rd%2C%20Varanasi%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1582452798377!5m2!1sen!2sin" frameborder="0" class="w-100" allowfullscreen=""></iframe>
				</div>
				<div class="col-lg-3">
					<h5 class="heading border-bottom pb-2">Donaters</h5>
					<div class="slider_1 text-center">
            <?php foreach ($donaters as $donater) { ?>
						<div class="">
							<?=$donater->name?><br>
							Donate <i class="fa fa-inr"></i> <?=$donater->ammount?>/-
						</div>
            <?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Button to Open the Modal -->
<button type="button" id="query_btn" class="btn btn-danger" data-toggle="modal" data-target="#query_form">
  Ask your
  Query
</button>
<a id="whatsapp" href="https://api.whatsapp.com/send?phone=+917236098508&text=type your massege here.."><img width="50" src="<?=base_url()?>assets/images/whatsapp.png"></a>
<!-- The Modal -->
<div class="modal fade" id="query_form">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header border-0">
        <h4 class="modal-title">Query form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <form action="<?=base_url('Welcome/query')?>" method="POST">
      <!-- Modal body -->
      <div class="modal-body px-4">
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <input type="number" name="mobile" class="form-control" placeholder="Enter your contact number">
        </div>
        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <textarea name="message" class="form-control" placeholder="Enter your qurey"></textarea>
        </div>
      </div>
      <!-- Modal footer -->
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<footer>

    <section class="bg-dark text-light py-2">
        <div class="d-flex container justify-content-between">
            <span>
                &copy; 2019 - <?= date("Y");?> All Rights Resevred. | Digital Partner : <a class="text-light" href="https:kumaardigitalworld.com"> Kumaar Digital World</a> 
            </span>
            <span>
                Developed By : <a class="text-light" href="https:crazymodifier.com"> Crazy Modifier</a>
            </span>
        </div>
    </section>
</footer>
<script>
        
// Sticky navbar
// =========================
$(document).ready(function () {
  $("#lightgallery").lightGallery(); 
$('#exampleModal').modal('show')
$('.slider_1').slick({
      slidesToShow: 1,
      centerMode: false,
      centerPadding: '00px',
      mobileFirst:true,
      });
$('.mission-slider').slick({
      slidesToShow: 3,
      centerMode: false,
      centerPadding: '00px',
      mobileFirst:true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            autoplay:true,
            speed:2000,
            arrows:false,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            autoplay:true,
            speed:2000,
            arrows:false,
          }
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            autoplay:true,
            speed:2000,
          }
        },
        {
          breakpoint: 300,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay:true,
            arrows:false,
            speed:2000,
          }
        }
        ],
      });

$('.slider-5').slick({
    slidesToShow:5, 
    autoplay:true,
    speed:1500,
    responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            autoplay:true,
            speed:2000,
            arrows:false,
          }
        },
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            autoplay:true,
            speed:2000,
          }
        },
        {
          breakpoint: 300,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay:true,
            arrows:false,
            speed:2000,
          }
        }
        ],
})
                // Custom function which toggles between sticky class (is-sticky)
                var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
                    var stickyHeight = sticky.outerHeight();
                    var stickyTop = stickyWrapper.offset().top;
                    if (scrollElement.scrollTop() >= stickyTop) {
                        stickyWrapper.height(stickyHeight);
                        sticky.addClass("is-sticky");
                    }
                    else {
                        sticky.removeClass("is-sticky");
                        stickyWrapper.height('auto');
                    }
                };

                // Find all data-toggle="sticky-onscroll" elements
                $('[data-toggle="sticky-onscroll"]').each(function () {
                    var sticky = $(this);
                    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
                    sticky.before(stickyWrapper);
                    sticky.addClass('sticky');

                    // Scroll & resize events
                    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
                        stickyToggle(sticky, stickyWrapper, $(this));
                    });

                    // On page load
                    stickyToggle(sticky, stickyWrapper, $(window));
                });
                $("#signin").click(function(){
        $(".left-side").addClass("left-40");
        $(".hiddenn").css({"opacity": "1", "z-index": "1"});
        $(".visible").css({"opacity": "0", "z-index": "-1"});
        $(".right-side").addClass("right-60");
    })
    $("#signup").click(function(){
        $(".left-side").removeClass("left-40");
        $(".hiddenn").css({"opacity": "0", "z-index": "-1"});
        $(".visible").css({"opacity": "1", "z-index": "1"});
        $(".right-side").removeClass("right-60");
    })
            });
</script>
</body>
</html>