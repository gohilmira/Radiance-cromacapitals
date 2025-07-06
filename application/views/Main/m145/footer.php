  <!-- ===============>> footer start here <<================= -->
  <footer class="footer ">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__top footer__top--style1">
          <div class="row gy-5 gx-4">
            <div class="col-md-6">
              <div class="footer__about">
                <a href="<?= base_url();?>index" class="footer__about-logo"><img src="<?= $this->conn->company_info('logo');?>" alt="Logo" style="width:95px;"></a>
                <p class="footer__about-moto ">Welcome to our trading site! We offer the best, most
                  affordable products and services around. Shop now and start finding great deals!</p>
                <div class="footer__app">
                  <div class="footer__app-item footer__app-item--apple">
                    <div class="footer__app-inner">
                      <div class="footer__app-thumb">
                        <a href="https://www.apple.com/app-store/" target="_blank" class="stretched-link">
                          <img src="<?= $panel_url;?>assets/images/apple.png" alt="apple-icon">
                        </a>
                      </div>
                      <div class="footer__app-content">
                        <span>Download on the</span>
                        <p class="mb-0">App Store</p>
                      </div>
                    </div>
                  </div>
                  <div class="footer__app-item footer__app-item--playstore">
                    <div class="footer__app-inner">
                      <div class="footer__app-thumb">
                        <a href="https://play.google.com/store" target="_blank" class="stretched-link">
                          <img src="<?= $panel_url;?>assets/images/play.png" alt="playstore-icon">
                        </a>
                      </div>
                      <div class="footer__app-content">
                        <span>GET IT ON</span>
                        <p class="mb-0">Google Play</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-sm-4 col-6">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Quick links</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="<?= base_url();?>about">About Us</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">Teams</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">Services</a> </li>
                    <li class="footer__linklist-item"> <a href="#">Features</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-md-2 col-sm-4 col-6">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Support</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="#">Terms &amp; Conditions</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">Privacy Policy</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">FAQs</a></li>
                    <li class="footer__linklist-item"> <a href="#">Support Center</a> </li>
                  </ul>
                </div>
              </div>

            </div>
            <div class="col-md-2 col-sm-4">
              <div class="footer__links">
                <div class="footer__links-tittle">
                  <h6>Company</h6>
                </div>
                <div class="footer__links-content">
                  <ul class="footer__linklist">
                    <li class="footer__linklist-item"> <a href="#">Careers</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">Updates</a>
                    </li>
                    <li class="footer__linklist-item"> <a href="#">Job</a> </li>
                    <li class="footer__linklist-item"> <a href="#">Announce</a>
                    </li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="footer__end">
            <div class="footer__end-copyright">
              <p class=" mb-0">© 2024 All Rights Reserved By <a href="<?= $this->conn->company_info('base_url');?>" target="_blank"><?= $this->conn->company_info('company_name');?></a> </p>
            </div>
            <div>
              <ul class="social">
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22 "><i class="fab fa-instagram"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fa-brands fa-linkedin-in"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="social__item">
                  <a href="#" class="social__link social__link--style22 "><i class="fab fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer__shape">
      <span class="footer__shape-item footer__shape-item--1"><img src="<?= $panel_url;?>assets/images/1_6.png" alt="shape icon"></span>
      <span class="footer__shape-item footer__shape-item--2"> <span></span> </span>
    </div>
  </footer>
  <!-- ===============>> footer end here <<================= -->



  <!-- ===============>> scrollToTop start here <<================= -->
  <a href="#" class="scrollToTop scrollToTop--style1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
  <!-- ===============>> scrollToTop ending here <<================= -->


  <!-- vendor plugins -->

  <script src="<?= $panel_url;?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?= $panel_url;?>assets/js/all.min.js"></script>
  <script src="<?= $panel_url;?>assets/js/swiper-bundle.min.js"></script>
  <script src="<?= $panel_url;?>assets/js/aos.js"></script>
  <script src="<?= $panel_url;?>assets/js/fslightbox.js"></script>
  <script src="<?= $panel_url;?>assets/js/purecounter_vanilla.js"></script>

  <script src="<?= $panel_url;?>assets/js/custom.js"></script>


</body></html>