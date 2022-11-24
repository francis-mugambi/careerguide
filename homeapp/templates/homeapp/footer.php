{% load static %}
<span style="position: fixed; bottom: 10px; right: 10px; font-size: 50px" ><a href="#up">&#8593;</a></span>
 <section class="contact-us" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 align-self-center">
          <div class="row">
            <div class="col-lg-12">
              <form id="contact" action="/Contact/" method="POST">
                {% csrf_token %}
                <div class="row">
                  <div class="col-lg-12">
                     <p style="color: red; font-weight:bold;">{{msg1}}</p>
                    <h2>Let's get in touch</h2>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="name" type="text" id="name" placeholder="Write your first name..." required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Write your Email..." required="">
                  </fieldset>
                  </div>
                  <div class="col-lg-4">
                    <fieldset>
                      <input name="subject" type="text" id="subject" placeholder="Write your subject..." required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Write your message..." required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="button">SEND MESSAGE NOW</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="right-info">
            <ul>
              <li>
                <h6>Phone Number</h6>
                <span></span>
              </li><br>
              <li>
                <h6>Email Address</h6>
                <span><a href="mailto:mail@careerguide.co.ke">mail@careerguide.co.ke</a></span>
              </li>
              <li>
                <h6>Street Address</h6>
                <span>Tom Mboya Street Tudor, Msa, P.O BOX. 90420-80100 MSA, Kenya</span>
              </li>
              <li>
                <h6>Website URL</h6>
                <span>www.careerguide.co.ke</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Careerguide, Site. All Rights Reserved. 
          <br>Designed by: <a href="#" target="_parent" title="careerguide">Careerguide ICTS</a></p>
    </div>
  </section>

<!-- Start of Account creation form -->
<div id="id011" class="modal">
  <form class="modal-content1 animate" action="/saveDetails/" method="post" autocomplete="off">
    {% csrf_token %}
    <div class="imgcontainer">
      <span onclick="document.getElementById('id011').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="{% static 'assets/images/img_avatar2.png' %}" alt="Avatar" class="avatar"><br>
      <li onclick="document.getElementById('id011').style.display='none'" style="width:auto;"><a href="javascript:void(0)">Aready have an account? Login</a></li>
       <p style="color: red; font-weight: bold;">{{msg}}</p>
    </div>

    <div class="container">
   <!--<label for="email"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" autofocus required >-->
      
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter your Email" name="email" autofocus required >

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Set a Password" name="password" required>
        
      <label for="password"><b>Repeat Password</b></label>
      <input type="password" placeholder=" Repeat your Set Password" name="rpt_password" required>
        
      <button type="submit">Create Account</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1; border-radius: 20px;">
      <button type="button" onclick="document.getElementById('id011').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id011');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<!-- End of Account creation form --->

   <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="{% static 'vendor/jquery/jquery.min.js' %}"></script>
    <script src="{% static 'vendor/bootstrap/js/bootstrap.bundle.min.js' %}"></script>

  <!-- Javascript for all pages -->
    <script src="{% static 'assets/js/isotope.min.js' %}"></script>
    <script src="{% static 'assets/js/owl-carousel.js' %}"></script>
    <script src="{% static 'assets/js/lightbox.js' %}"></script>
    <script src="{% static 'assets/js/tabs.js' %}"></script>
    <script src="{% static 'assets/js/video.js' %}"></script>
    <script src="{% static 'assets/js/slick-slider.js' %}"></script>
    <script src="{% static 'assets/js/custom.js' %}"></script>
  <!-- End of Javascript for all pages -->

    <script>
    //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>

     <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VRLLF48FXG"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-VRLLF48FXG');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-191707521-1">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-191707521-1');
    </script>