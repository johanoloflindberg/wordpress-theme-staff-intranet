<?php
/**
 * The template for displaying the footer
 *
 * Displays from <div class="footer"> to </html>
 *
 * @package WordPress
 * @subpackage WRDSB
 */

/**
 * Allow us to detect activated plugins
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
?>

    <div id="staffbar">
      <div class="container">
            howdy, this is the top bar, we are calling it #staffbar
      </div>
    <div>
          
      <div class="footer" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3">
            <!-- automate address -->
              <h1>Waterloo Region District School Board</h1>
              <address>51 Ardelt Avenue<br />
                Kitchener, ON N2C 2R5<br />
              </address>
              <address>
                Switchboard: 519-570-0003<br />
                <a href="http://www.wrdsb.ca/about-the-wrdsb/contact/">Contact Information</a><br />
                <a href="http://www.wrdsb.ca/about-the-wrdsb/contact/website-feedback/">Website Feedback Form</a>
              </address>
             <div class="social-icons">
                <!--<a href="#"><span class="icon-facebook" title="Facebook"></span></a>-->
                <!--<a href="#"><span class="icon-twitter" title="Twitter"></span></a>-->
                <!--<a href="#"><span class="icon-youtube" title="YouTube"></span></a>-->
             </div>
             
            </div>
            <div class="col-sm-6 col-md-3">
              <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
                <?php dynamic_sidebar( 'footer-left' ); ?>
              <?php endif; ?>
            </div>
            <div class="col-sm-6 col-md-3">
              <?php if ( is_active_sidebar( 'footer-centre' ) ) : ?>
                <?php dynamic_sidebar( 'footer-centre' ); ?>
              <?php endif; ?>
            </div>
            <div class="col-sm-12 col-md-3">
              <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
                <?php dynamic_sidebar( 'footer-right' ); ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
          <div class="container" id="loginbar">
            	<?php if ( is_user_logged_in() )
            	{
            		wp_loginout();
            	}
            	else
            	{ ?>
            		<a href="<?php echo site_url(); echo '/wp-login.php';?>">Log into <?php echo get_bloginfo('name'); ?></a>
            	<?php }?>
                 &middot; Go to <a href="http://www.wrdsb.ca">Public WRDSB Website</a>
              </p>
          </div>
    <?php wp_footer(); ?>
    </body>
    </html>
