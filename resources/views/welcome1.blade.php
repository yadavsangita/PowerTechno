<!DOCTYPE html>
<html lang="en">
<head>

  <title>PowerTechno</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- giving style to this website-->

  <style>

  #gmap_canvas{height:500px;width:600px;}#mapouter{overflow:hidden;height:500px;width:600px;}

  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }

  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
     
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  } 

  .jumbotron {
      background-color: #00394d;
      color: #fff;
      padding: 150px 25px;
      font-family: Montserrat, sans-serif;
  }

  .container-fluid {
      padding: 80px 70px;

  }

  .bg-grey {
      background-color: #f6f6f6;
  }

  .logo-small {
      color: #00394d;
      font-size: 50px;
  }
  .logo {
      color: #00394d;
      font-size: 300px;
  }
 
  .panel {
      border: 1px solid #00394d; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #00394d !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #00394d;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #a0496d;
      z-index: 9999;
      border: 50;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #0b4761 !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #0b4761 !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #a0496d;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

  </style>
<!-- end of style-->
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <a class="navbar-brand" href="#myPage">

    <img src="images/ngo.jpg"  class="img-circle" width="80px" height="30px"></img></a>
      <ul class="nav navbar-nav navbar-right">
       

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
        ABOUT SOCIETY <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="#about"> <font color="black">ABOUT SOCIETY</font></a></li>
        <li><a href="#mission"><font color="black">MISSION</font></a></li>
        <li><a href="#mission"><font color="black">VISSION</font></a></li></ul>
        <li><a href="#services">AIMS & OBJECTIVES</a></li>
        <li><a href="#managing">MANAGING COMMITTEE</a></li>
        <li><a href="#pricing">MEMBERSHIP</a></li>
        <li><a href="{{ url('register') }}">JOIN AS MEMBER</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
<p><h1> Welcome To</h1> </p>

<img src="images/ngo.jpg" class="img-circle" width="350px" height="300px"></img>
  <p><h1> POWER TECHNO WELFARE SOCIETY</h1> </p>
   
  
</div>

<!-- Container (About Section) -->

<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2> Power Techno Welfare Society</h2><br>
      <font color="black" font-size="25"><b>
      Power Techno Welfare Society has competency to take all kind of related to Power and Manufacturing sectors. Most of its member have worked for more than 30 years with Tata Power in area of power generation, transmission, distribution, operation and maintenance etc. With such vast experience, the society has the capability to undertake and deliver highest quality of work. <br><br>
      <p>The society also endeavors to encourage employments of retired employees of Tata Power and children to all employees, existing as well as retired from the company. <br><br>

Techno Power Welfare Society is one of its kind company which aims to utilize the expertise of retired employees and also provide employment opportunity employee's children.</b></font>
</p>
      
    </div>
    <div class="col-sm-4">
    <br><br><br>
      <img src="images/ngo.jpg"  class="img-circle" width="300px" height="250px"></img>
    </div>
  </div>
</div>

<!-- Container (our Section) -->
<div class="container-fluid bg-grey" id="mission">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2>
      <h4><strong>MISSION:</strong> </h4>
<h4><strong>
<font color="black" font-size="20" font-family="Montserrat">
• To ensure high quality jobs of other Power Sector & Other sectors<br>
• To encourage employments of retired employees of Tata Power and children to all employees<br>
• To provide quality services in all areas of manufacturing sector with specific focus on Power sector
<br><br>




<h4><strong>VISION:</strong> </h4>
      • It will have membership of Management as well as Unionized category of ex-employees <br>
      • The Society will employ children of retired / current employees for fulfillment of its obligations and they can also become member of the society instead of merely being employees<br> 
      • Employment outside the pool of interested ex-employees & ex-employees children will be resorted if ready & competent manpower is not available
</font>

</strong></h4>
    

    </div>
  </div>
</div>

<!-- vission  -->





<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>AIMS & OBJECTIVE</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4> EMPLOYMENT OPPORTUNITIES</h4>
      <p>To ensure high quality jobs of other Power Sector & Other sectors</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>PROVIDE SERVICES</h4>
      <p>To provide quality services in all areas of manufacturing sector with specific focus on Power sector </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>ORGANIZE SOCIAL ACTIVITIES</h4>
      <p>To run and orgainze social activities and various programs to bring social awakening amongst the members as well as people</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>MEDICAL & EDUCATIONAL HELP</h4>
      <p>To give medical and educational help to the poor and needy persons</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>ORGANIZE SEMINAR</h4>
      <p>To conduct and organize career guidance seminar to students</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">CULTURAL PROGRAMS</h4>
      <p>To arrange various cultural programs and celebrate national festivals</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="managing" class="container-fluid text-center bg-grey">
  <h2>MANAGING COMMITTEE</h2><br>
  
  <div class="row text-center slideanim">
    <div class="col-sm-12">
      
   
   
        
        <p><strong><h2>Mr. Shashank Elias Pereira</h2>

        </strong></p>
        <p><h4><b>PRESIDENT</b></h4></p>
      </div>
    </div><br>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="panel">

   
   
        
        <p><strong><h4>Mr. George Elias Pereira</strong></p>
        <p>Secretary</h4></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel">
        
        <p><strong><h4>Mr. Usman Mohmad Naik</strong></p>
        <p>Treasurer</h4></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel">
        
        <p><strong><h4>Mr.A.J. Naik</strong></p>
        <p>Member</h4></p>
      </div>
    </div>
  </div><br>
   <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="panel">

   
   
        
        <p><strong><h4>Mr.SattarUmer Kader Umer Naik</strong></p>
        <p>Member</h4></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel">
        
        <p><strong><h4>Mr.Haribhau Narayan Patil</strong></p>
        <p>Member</h4></p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel">
        
        <p><strong><h4>Mr.Rajaram Tukaram Gawand</strong></p>
        <p>Member</h4></p>
      </div>
    </div>
  </div><br>
  

      </div>
    </div>

    
  </div>
</div>
<br>
<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>MEMBERSHIP</h2>
    <h4>Rules and Regulation of Power Techno Welfare Society</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-left">
        <div class="panel-heading">
          <h1>Membership</h1>
        </div>
        <div class="panel-body">
          <p><strong>
             The Membership of the Society are open to any person, who complete the age of 21 years and who agree with the aims and objects of the Society.
             <br><br>

             They shall have to abide by the Rules and Regulations of the said Society.Membership will be allowed after consideration and approval of Managing Committee.

            <br><br>
             Managing Comittee keeps the right to reject any Application for Membership with giving specific reason.<br><br>


          </strong>
        </div>
       
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Types of Members</h1>
        </div>
        <div class="panel-body">
          <p><strong>Ordinary Member</strong> </p>
          <p><strong>
            
            A person who pays Rs.120/- per year shall be admitted as Ordinary Member


          </strong> </p>
        </div>
        <div class="panel-footer">
          <h3>Rs.120</h3>
          <h4><strong>per year</strong></h4>
          <button class="btn btn-lg">
          <a href="{{ url('/register') }}">
          Join as Member</button></a>
          <br><br><br>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-left">
        <div class="panel-heading">
          <h1>Ceasing Member</h1>
        </div>
        <div class="panel-body">
          <p><strong>
            A person shall ipso-facto to cease to be a member and shall be removed as such by the Managing Committee 

          </strong></p>
        </div>
        <div class="panel-body">
          <p><strong>1.</strong> <strong>On his/her death</strong></p>
          <p><strong>2.</strong> <strong>On his/her resignation of Membership</strong></p>
          <p><strong>3.</strong> <strong>On his/her convicted for criminal offence</strong></p>
          <p><strong>4.</strong> <strong>If he/she fails to pay his subscription for more than six months</strong></p>
          <p><strong>5.</strong><strong> If he/she breaks the Rules and Regulations of the Society</strong></p>
          
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p><h4>Contact us and we'll get back to you within 24 hours.</h4></p>
      <p><span class="glyphicon glyphicon-map-marker"></span><font color="black"><b> ABC ,Mumbai,India</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91 25357171</p>
      <p><span class="glyphicon glyphicon-envelope"></span> sangita.yadav@ves.ac.in</b></font></p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
    <!--<div class="col-sm-6 slideanim">-->
      <div class="row">
       
          <!-- Add Google Maps -->

          <center>
<div id="mapouter"><div id="gmap_canvas"><iframe width="1500" height="500" frameborder="0" scrolling="no" marginheight="0" src="https://maps.google.com/maps?q= Matunga, Near Shalimar Industrial Estate ,Mumbai, India, &t=&z=14&ie=UTF8&iwloc=&output=embed" marginwidth="0"></iframe><a href="http://www.embedgooglemap.net">embedgooglemap.net</a></div><style>#gmap_canvas{height:500px;width:1500px;}#mapouter{overflow:hidden;height:500px;width:1500px;}</style></div>

</div></center>
</script>
        </div>

      </div>

    </div>
  </div>
</div>





<footer class="container-fluid-bg-grey text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Power Techno Welfare Society </p>
</footer>

<script>
$(document).ready(function(){
  
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    
    if (this.hash !== "") {
      
      event.preventDefault();

      var hash = this.hash;

      
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        
        window.location.hash = hash;
      });
    } 
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
