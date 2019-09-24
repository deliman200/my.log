<footer>
        <div class="container">
            <div class="footerlogo"><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Logo" class="img-fluid"></a></div>
            <div class="social">
                <ul>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/fb.png" alt ="facebook icon"/></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/tw.png" alt ="twitter icon"/></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/google.png" alt ="google plus icon"/></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/in.png" alt ="linkedin icon"/></a></li>
                </ul>
            </div>
        </div>
    </footer>



    <!-- Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
                <div class="form-group">
                   <input type="text" class="form-control controlName" id="formName" placeholder="Name">
                   <span class="iconforms"><img src="<?php bloginfo('template_url'); ?>/images/iconname.png" alt="icon form 1"/></span>
                </div>

                <div class="form-group">
                   <input type="text" class="form-control controlphone" id="formPhone" placeholder="Phone">
                   <span class="iconforms"><img src="<?php bloginfo('template_url'); ?>/images/iconphone.png" alt="icon form 2"/></span>
                </div>

                <div class="form-group">
                   <input type="text" class="form-control controlemail" id="formEmail" placeholder="Email">
                   <span class="iconforms"><img src="<?php bloginfo('template_url'); ?>/images/iconmail.png" alt="icon form 3"/></span>
                </div>

                <div class="form-group">
                    <textarea class="form-control controlmessage" id="FormControlTextarea1" rows="3" placeholder="Message"></textarea>
                     <span class="iconforms"><img src="<?php bloginfo('template_url'); ?>/images/iconmessage.png" alt="icon form 4"/></span>
                </div>
            </form>
          </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-cdomains text-left"><i class="fa fa-paper-plane"></i>  Send changes</button>
          </div>
        </div>
      </div>
    </div>

</div> <!-- end container -->
</body>
</html>