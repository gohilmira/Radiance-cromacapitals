
<footer class="footer style-2" id="footer">
      <div class="container">
        <div class="row">
          <div class="footer__body">
            <div class="col-xl-3 col-md-6 col-12">
              <div class="info">
                <img src="<?= $panel_url;?>assets/mtr/assets/images/logo.png" alt="MGR">
                <p class="desc fs-18">
                  Hello Coin games are based on the Play to earn concept that allows players to win digital currency gaming items and sell them to earn real world money. Players can invite their social media friends in track with other players inside the Hello Coin and collaborate enjoy the games together 
                </p>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6">
              <div class="link s1">
                <h5 class="title">Quick links</h5>
                <ul>
                  <li><a href="#">HLC Trading</a></li>
                  <li><a href="#">Development</a></li>
                  <li><a href="#">Advertisement</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-6">
              <div class="link s2">
                <h5 class="title">Help</h5>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Team Members</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Refund Policy</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
              <div class="newsletter">
                <h5 class="title">Social</h5>
                <ul class="social">
                  <li><a target="_blank" href="https://twitter.com/MgrCoin"><i class="fab fa-twitter"></i></a></li>
                  <li><a target="_blank" href="https://t.me/mgrtoken"><i class="fab fa-telegram"></i></a></li>
                  <li><a target="_blank" href="https://www.instagram.com/mgrcoin"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer_bottom">
            <p class="fs-16">Copyright © 2022, Hello Coin</p>
            <ul>
              <li><a href="#">Terms & Condition</a></li>
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Cookie Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <div class="register-popup modal fade" id="register-popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content bg-1">
          <div class="modal-body">
            <div class="">
              <label>Refferal Code</label>
              <input type="text" value="100000" name="registerId" id="registerId" placeholder="Refferal Code" class="form-control mt-2"/>
            </div>
            <div class="register-btn-outer text-center mt-4">
              <a href="javascript:void(0)" onclick="registeration();" class="btn-action style-2 aos-init">Register</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- end Footer -->
    <script src="<?= $panel_url;?>assets/mtr/app/js/jquery.min.js"></script>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.1.3/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>
    <script src="<?= $panel_url;?>assets/mtr/app/js/swiper-bundle.min.js"></script>
    <script src="<?= $panel_url;?>assets/mtr/app/js/swiper.js"></script>
    <script src="<?= $panel_url;?>assets/mtr/app/js/aos.js"></script>
    <script type="text/javascript" src="<?= $panel_url;?>assets/mtr/app/js/vanilla-tilt.js"></script>
    <script type="text/javascript">
      VanillaTilt.init(document.querySelector(".box-item"), {
          max: 25,
          speed: 400
      });
      
      //It also supports NodeList
      VanillaTilt.init(document.querySelectorAll(".box-item"));
    </script>
    <script>
      AOS.init();
    </script>
    <script src="<?= $panel_url;?>assets/mtr/app/js/app.js"></script>
    <script src="<?= $panel_url;?>assets/mtr/js/jquery.toaster.js"></script>
    <!-- <script src="../cdn.jsdelivr.net/gh/ethereum/web3.js%401.0.0-beta.36/dist/web3.min.js" integrity="sha256-nWBTbvxhJgjslRyuAKJHK+XcZPlCnmIAAMixz6EefVk=" crossorigin="anonymous"></script> -->
    <script src="<?= $panel_url;?>assets/mtr/js/mtr9968.js?1678378697"></script>
    <script>
      $(document).ready(function(){
      $(".menu-item-has-children").click(function(){
       $("#navbarTogglerDemo03").removeClass('show');
      });
      });
    </script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src='../cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script> 
    <script>
      $(document).ready(function() {
        $(".promotions-carousel").slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          arrows: true,
          autoplay:false,
          autoplaySpeed: 2000,
          infinite: true,
          speed: 500,
          responsive: [
            {
              breakpoint: 639,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        });
      });
      
    </script>
    
  </body>

<!-- Mirrored from mgrcoins.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Mar 2023 16:18:32 GMT -->
</html>