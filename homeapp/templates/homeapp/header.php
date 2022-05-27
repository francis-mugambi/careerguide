{% load static %}
    
    <!-- Google adsense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9893863129623950"
     crossorigin="anonymous"></script>

     <!-- Bootstrap core CSS -->
    <link href="{% static 'vendor/bootstrap/css/bootstrap.min.css' %}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{% static 'assets/css/fontawesome.css' %}">
    <link rel="stylesheet" href="{% static 'assets/css/templatemo-edu-meeting.css' %}">
    <link rel="stylesheet" href="{% static 'assets/css/create-account-login.css' %}">
    <link rel="stylesheet" href="{% static 'assets/css/owl.css' %}">
    <link rel="stylesheet" href="{% static 'assets/css/lightbox.css' %}">
     <link href="{% static 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' %}" rel="stylesheet">

 <!-- Sub Header Start -->
  <div class="sub-header" id="up">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-8">
          <div class="left-content">
            <p>This is the best <em>Career Guide</em> website.</p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-4">
          <div class="right-icons">
            <ul>
              <li onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><a href="javascript:void(0)">Login</a></li>
              <li><a href="https://www.facebook.com/groups/160717846234183" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- End of Sub Header -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="/" class="logo">
                          careerguide
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-sectio"><a href="/"><span class="active1">Home</span></a></li>
                          <li><a href="/careerguide" ><span class="active2">careerguide</span></a></li>              
                          <li><a href="/Approved_programmes"><span class="active3">Approved courses</span></a></li> 
                          <li class="has-sub">
                              <a href="javascript:void(0)" class="active4"><span class="active4">courses</span></a>
                              <ul class="sub-menu">
                                  <li><a href="/Degree_courses">Degree</a></li>
                                  <li><a href="/Diploma_courses">Diploma</a></li>
                                  <li><a href="/Certificate_courses">Certificate</a></li>
                              </ul>
                          </li>
                          
                          <li class="scroll-to-sectio"><a href="#contact">Contact Us</a></li>                       
                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->

<!-- Start of Login form -->
<div id="id01" class="modal">
  <form class="modal-content1 animate" action="/allowLogin/" method="post" autocomplete="off">
    {% csrf_token %}
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="{% static 'assets/images/img_avatar2.png' %}" alt="Avatar" class="avatar"><br>
      <li onclick="document.getElementById('id011').style.display='block'" style="width:auto;"><a href="javascript:void(0)">Don't have an acount? create</a></li>
      <p style="color: red; font-weight:bold;">{{msg1}} {{msg2}}</p>
    </div>
    <div class="container">
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter your Email" name="email" required autofocus="on" >

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter your Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1; border-radius: 20px;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<!-- End of Login form -->

<!-- Start of Login form Script -->
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- Login form Script -->
