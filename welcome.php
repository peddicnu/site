<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

<script type="text/javascript">
var varieties=[
["Diagonal View - Front","Diagonal View - Rear","Paint Condition","Visual Cracks & Welds","Rust Condition","Hand Rails","Fenders/Brackets","Guards","Hoods","Step Ladders"],
["Cab Structure","Mirrors & Glasses","Lights - Front & Rear", "Operator Seats","Dashboard","Control Leavers"],
["Working / Smoke condition","Oil Leakes", "Fuels Leaks","Radiator Leaks","Blow Bye","Turbocharger","FIP & Injector","Fan & belt"],
["Battery Condition","Lights - front & rear","Horn / Alarm","ECM / Solenoids","Alternator","Self Starter"],
["Pump","Loader Control Valve","Oil Tank","Cylinder","Oil Leaks","Hoses Condition","Backhoe Control Valve",],
["Transmission(Charging) Pump","Propeller Shaft","Transmission Housing","Front Axle","Rear Axle & Differential","Clutch","Oil Leaks"],
["Cracks & Welds","Steering Cylinder","Loader Frame", "Backhoe Frame","Stabilizer/Outriggers","Sliding Frame","Boom & Stick"],
["Front Tyres","Rear Tyres"],
["Loader Bucket","Backhoe Bucket","Rock Breaker","Bucket Teeth","Pins & Bushes"]
];

function Box2(idx) {
var f=document.myform;
f.box2.options.length=null;
for(var i=0; i<varieties[idx].length; i++) {
	f.box2.options[i]=new Option(varieties[idx][i], i); 
    }    

}

window.onload=function() {
var box1=document.myform.box1;
box1.onchange=function(){Box2(this.selectedIndex);};
// create 2nd select
try { // IE
  var sel=document.createElement("<select name=\"box2\"><\/select>");
  }
catch(e) {
  var sel=document.createElement("select");
  sel.name = "box2";
  }
document.myform.getElementsByTagName('fieldset')[0].insertBefore(sel, box1.nextSibling);
// fill 2nd select
Box2(0);
}
</script>

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html">Website</a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="index.html" class="nav-link">Home</a></li>
              <!--    <li><a href="html/agents.html" class="nav-link">Agents</a></li>-->
                  <li><a href="html/property.html" class="nav-link">Property</a></li>
                  <li><a href="html/about.html" class="nav-link">About</a></li>
                  <li><a href="html/blog.html" class="nav-link">Blog</a></li>
                  <li><a href="html/contact.html" class="nav-link">Contact</a></li>
                  
<li><a href="" class="nav-link"> <?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
<li><a href="logout.php" class="nav-link">Sign Out</a></li>
                  <li><a href="reset-password.php" class="nav-link">Reset Password</a></li>
                 
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <span class="h4 text-primary mb-4 d-block">Welcome</span>
              <h1 class="mb-2"><?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
              <p class="text-center mb-5"><span class="small address d-flex align-items-center justify-content-center"> <br><!--<span class="icon-room mr-3 text-primary"></span>--> <span>You logged in</span></span></p>
            
                <div class="d-flex media-38289 justify-content-around mb-5">
                 <!-- <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>Hydraulics</span></div>
                  <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>Trucks</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>Machinery</span></div>
                </div>-->
              <p><a href="#" class="btn btn-primary text-white px-4 py-3">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    

    <form action="">
      <div class="realestate-filter">
        <div class="container">
          <div class="realestate-filter-wrap nav">
            <a href="#for-rent" class="active" data-toggle="tab" id="rent-tab" aria-controls="rent" aria-selected="true">New List</a>
           <a href="#for-sale" class="" data-toggle="tab" id="sale-tab" aria-controls="sale" aria-selected="false">Previous</a>
          </div>
        </div>
      </div>
      
      <div class="realestate-tabpane pb-5">
        <div class="container tab-content">
           <div class="tab-pane active" id="for-rent" role="tabpanel" aria-labelledby="rent-tab">

             <div class="row">
               <div class="col-md-4 form-group">
                 <select name="Category" id="" class="form-control w-100">
                   
                   <option value="">General Appearance</option>
                   <option value="">Cabin</option>
                   <option value="">Engine</option>
                   <option value="">Electrical</option>
                   <option value="">Hydraulics</option>
                   <option value="">Transmission</option>
                   <option value="">Chassis & Frame</option>
                   <option value="">Typres & Wheels</option>
                   <option value="">Attachment & Accessories</option>
                  
                 </select>
               </div>
              <div class="col-md-4 form-group">
                 <select name="General" id="" class="form-control w-100">
                   <option value="">Building</option>
                   <option value="">Townhouses</option>
                   <option value="">Duplexes</option>
                   <option value="">Quadplexes</option>
                   <option value="">Condominiums</option>
                 </select>
               </div>
               <!--<div class="col-md-4 form-group">
                 <input type="text" class="form-control" placeholder="Title">
               </div>-->
               <div class="col-md-4 form-group">
                 <input type="text" class="form-control" placeholder="Extra Remarks">
               </div>
             </div>

             <div class="row">
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Values</option>
                   <option value="">A</option>
                   <option value="">B</option>
                   <option value="">C</option>
                   <option value="">D</option>
                 </select>
               </div>
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Remarks</option>
                   <option value="">Appearing Good</option>
                   <option value="">Good Condition</option>
                   <option value="">Available</option>
                   <option value="">Few glasses are damaged</option>
		   <option value="">No Leak</option>
                   <option value="">Not Checked</option>
                   <option value="">No rust</option>
                   <option value="">Not Available</option>
                   <option value="">Not found</option>
                 </select>
               </div>
               <div class="col-md-4 form-group">
                 <div class="row">
                  <!-- <div class="col-md-6 form-group">
                     <select name="" id="" class="form-control w-100">
                       <option value="">Min Price</option>
                       <option value="">$100</option>
                       <option value="">$200</option>
                       <option value="">$300</option>
                       <option value="">$400</option>
                     </select>
                   </div>-->
                  <!-- <div class="col-md-6">
                     <select name="" id="" class="form-control w-100">
                       <option value="">Max Price</option>
                       <option value="">$25,000</option>
                       <option value="">$50,000</option>
                       <option value="">$75,000</option>
                       <option value="">$100,000</option>
                       <option value="">$100,000,000</option>
                     </select>
                   </div>-->
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-4">
                 <input type="submit" class="btn btn-black py-3 btn-block" value="Submit">
               </div>
             </div>

           </div>
           <div class="tab-pane" id="for-sale" role="tabpanel" aria-labelledby="sale-tab">
             <div class="row">
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   
                   <option value="">General Appearance</option>
                   <option value="">Cabin</option>
                   <option value="">Engine</option>
                   <option value="">Electrical</option>
                   <option value="">Hydraulics</option>
                   <option value="">Transmission</option>
                   <option value="">Chassis & Frame</option>
                   <option value="">Typres & Wheels</option>
                   <option value="">Attachment & Accessories</option>
                  
                 </select>
               </div>
              <div class="col-md-4 form-group">
                 <select name="General" id="" class="form-control w-100">
                   <option value="">Building</option>
                   <option value="">Townhouses</option>
                   <option value="">Duplexes</option>
                   <option value="">Quadplexes</option>
                   <option value="">Condominiums</option>
                 </select>
               </div>
               <!--<div class="col-md-4 form-group">
                 <input type="text" class="form-control" placeholder="Title">
               </div>-->
               <div class="col-md-4 form-group">
                 <input type="text" class="form-control" placeholder="Extra Remarks">
               </div>
             </div>

             <div class="row">
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Values</option>
                   <option value="">A</option>
                   <option value="">B</option>
                   <option value="">C</option>
                   <option value="">D</option>
                 </select>
               </div>
               <div class="col-md-4 form-group">
                 <select name="" id="" class="form-control w-100">
                   <option value="">Remarks</option>
                   <option value="">0</option>
                   <option value="">1</option>
                   <option value="">2</option>
                   <option value="">3+</option>
                 </select>
               </div>
               <div class="col-md-4 form-group">
                 <div class="row">
                   <!-- <div class="col-md-6 form-group">
                     <select name="" id="" class="form-control w-100">
                       <option value="">Min Price</option>
                       <option value="">$100</option>
                       <option value="">$200</option>
                       <option value="">$300</option>
                       <option value="">$400</option>
                     </select>
                   </div>-->
                  <!-- <div class="col-md-6">
                     <select name="" id="" class="form-control w-100">
                       <option value="">Max Price</option>
                       <option value="">$25,000</option>
                       <option value="">$50,000</option>
                       <option value="">$75,000</option>
                       <option value="">$100,000</option>
                       <option value="">$100,000,000</option>
                     </select>
                   </div>-->
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-4">
                 <input type="submit" class="btn btn-black py-3 btn-block" value="Get">
               </div>
             </div>

           </div>
        </div>
      </div>
    </form>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6">
            <div class="h-100 p-5 bg-black">
              <div class="row">
                <div class="col-md-6 text-center mb-4">
                  <div class="service-38201">
                    <span class="flaticon-house-2"></span>
                    <h3>Estate Insurance</h3>
                    <p>Estate Management</p>
                  </div>
                </div>
                <div class="col-md-6 text-center mb-4">
                  <div class="service-38201">
                    <span class="flaticon-bathtub"></span>
                    <h3>Elegant Bathtub</h3>
                    <p>Estate Management</p>
                  </div>
                </div>
                <div class="col-md-6 text-center mb-4">
                  <div class="service-38201">
                    <span class="flaticon-house-1"></span>
                    <h3>Fresh Air</h3>
                    <p>Estate Management</p>
                  </div>
                </div>
                <div class="col-md-6 text-center mb-4">
                  <div class="service-38201">
                    <span class="flaticon-calculator"></span>
                    <h3>Estate Calculator</h3>
                    <p>Estate Management</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 ml-auto">
            <h3 class="heading-29201">About Us</h3>
            
            <p class="mb-5">Perspiciatis quidem harum provident repellat sint.</p>

            <div class="service-39290 d-flex align-items-start mb-5">
              <div class="media-icon mr-4">
                <span class="flaticon-house-1"></span>
              </div>
              <div class="text">
                <h3>Mission</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo rem sit dolorem saepe ex voluptatum nam nulla et!</p>
              </div>
            </div>

            <div class="service-39290 d-flex align-items-start mb-5">
              <div class="media-icon  mr-4">
                <span class="flaticon-calculator"></span>
              </div>
              <div class="text">
                <h3>Vission</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo rem sit dolorem saepe ex voluptatum nam nulla et!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-black block-14">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <h3 class="heading-29201 text-center text-white">Latest Properties</h3>
            
            <p class="mb-5 text-white">Perspiciatis quidem, harum provident, repellat sint officia quos fugit tempora id deleniti.</p>
          </div>
        </div>
        

        <div class="owl-carousel nonloop-block-14">
          <div class="media-38289">
            <a href="property-single.html" class="d-block"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
            <div class="text">
              <div class="d-flex justify-content-between mb-3">
                <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
              </div>
              <h3 class="mb-3"><a href="#">$570,000</a></h3>
              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
            </div>
          </div>

          <div class="media-38289">
            <a href="property-single.html" class="d-block"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="text">
              <div class="d-flex justify-content-between mb-3">
                <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
              </div>
              <h3 class="mb-3"><a href="#">$1,570,000</a></h3>
              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
            </div>
          </div>

          <div class="media-38289">
              <a href="property-single.html" class="d-block"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="text">
                <div class="d-flex justify-content-between mb-3">
                  <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                  <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
                </div>
                <h3 class="mb-3"><a href="#">$980,000</a></h3>
                <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
              </div>
            </div>


          <div class="media-38289">
            <a href="property-single.html" class="d-block"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
            <div class="text">
              <div class="d-flex justify-content-between mb-3">
                <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
              </div>
              <h3 class="mb-3"><a href="#">$570,000</a></h3>
              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
            </div>
          </div>

          <div class="media-38289">
            <a href="property-single.html" class="d-block"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="text">
              <div class="d-flex justify-content-between mb-3">
                <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
              </div>
              <h3 class="mb-3"><a href="#">$1,570,000</a></h3>
              <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
            </div>
          </div>

          <div class="media-38289">
              <a href="property-single.html" class="d-block"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
              <div class="text">
                <div class="d-flex justify-content-between mb-3">
                  <div class="sq d-flex align-items-center"><span class="wrap-icon icon-fullscreen
"></span> <span>2911 Sq Ft.</span></div>
                  <div class="bed d-flex align-items-center"><span class="wrap-icon icon-bed"></span> <span>2.</span></div>
                  <div class="bath d-flex align-items-center"><span class="wrap-icon icon-bath"></span> <span>2</span></div>
                </div>
                <h3 class="mb-3"><a href="#">$980,000</a></h3>
                <span class="d-block small address d-flex align-items-center"> <span class="icon-room mr-3 text-primary"></span> <span>156/10 Sapling Street, Harrison, ACT 2914</span></span>
              </div>
            </div>

        </div>

        
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center">
            <h3 class="heading-29201 text-center">Our Agents</h3>
            
            <p class="mb-5">Perspiciatis quidem, harum provident, repellat sint officia quos fugit tempora id deleniti.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="person-29381">
              <div class="media-39912">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
              </div>
              <h3><a href="#">Josh Long</a></h3>
              <span class="meta d-block mb-4">4 Properties</span>
              <div class="social-32913">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="person-29381">
              <div class="media-39912">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
              </div>
              <h3><a href="#">Melinda David</a></h3>
              <span class="meta d-block mb-4">10 Properties</span>
              <div class="social-32913">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="person-29381">
              <div class="media-39912">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
              </div>
              <h3><a href="#">Jessica Soft</a></h3>
              <span class="meta d-block mb-4">18 Properties</span>
              <div class="social-32913">
                <a href="#"><span class="icon-facebook"></span></a>
                <a href="#"><span class="icon-twitter"></span></a>
                <a href="#"><span class="icon-instagram"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-primary">
      <div class="container block-13">
        <div class="nonloop-block-13 owl-carousel">
          <div class="testimonial-38920 d-flex align-items-start">
            <div class="pic mr-4"><img src="images/person_1.jpg" alt=""></div>
            <div>
              <span class="meta">Business Man</span>
              <h3 class="mb-4">Josh Long</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur id, hic quos nihil nulla veritatis!</p>
              <div class="mt-4">
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
              </div>
            </div>
          </div>

          <div class="testimonial-38920 d-flex align-items-start">
            <div class="pic mr-4"><img src="images/person_2.jpg" alt=""></div>
            <div>
              <span class="meta">Business Woman</span>
              <h3 class="mb-4">Jean Doe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur id, hic quos nihil nulla veritatis!</p>
              <div class="mt-4">
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
              </div>
            </div>
          </div>

          <div class="testimonial-38920 d-flex align-items-start">
            <div class="pic mr-4"><img src="images/person_3.jpg" alt=""></div>
            <div>
              <span class="meta">Business Woman</span>
              <h3 class="mb-4">Jean Doe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo sapiente unde pariatur id, hic quos nihil nulla veritatis!</p>
              <div class="mt-4">
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
                <span class="icon-star text-white"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center">
            <h3 class="heading-29201 text-center">Blog Posts</h3>
            
            <p class="mb-5">Perspiciatis quidem, harum provident, repellat sint officia quos fugit tempora id deleniti.</p>
          </div>
        </div>

        <div class="row">
          
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_2.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_3.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="text-white h5 mb-3">Subscribe</h3>
            <form action="" class="d-flex">
              <input type="text" class="form-control mr-3" placeholder="Enter your email">
              <input type="submit" class="btn btn-primary text-white" value="Send Now">
            </form>
          </div>
          <div class="col-md-3 ml-auto">
            <h3 class="text-white h5 mb-3">Subscribe</h3>
            <ul class="list-unstyled menu-arrow">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Terms of Service</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3 class="text-white h5 mb-3">About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolores deserunt, obcaecati fuga quo. Autem explicabo sapiente, maiores.</p>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

