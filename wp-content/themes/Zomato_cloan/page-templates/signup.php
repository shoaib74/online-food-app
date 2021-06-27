<?php
  // get header.php file
 
  /*
 Template Name: signup-Page-template
 */
  get_header();
?>

<!------------------------------- contact us section start here ------------------------------- -->
    <section id="signup">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-5">
                       
                            
                                         
                             <form action="method-post">
                                <div class="contact-form-signup">
                                    <div class="form-group">
                                        <label for="" class="">Full name</label>
                                        <input type="text" class="form-control" placeholder="Write your full name">
                                    </div>
                                    <div class="form-group ">
                                        <label for="" class="">Email</label>
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="form-group ">
                                        <label for="" class="">Contact</label>
                                        <input type="number" class="form-control" placeholder="Your Contact">
                                    </div>
                                    <div class="form-group ">
                                        <label for="" class=""> Password</label>
                                        <input type="text" class="form-control" placeholder="Your Password">
                                    </div>
                                    <button class="btn contact-btn" type="submit" role="button">SignUp</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------------------- contact-us section end here --------------------- -->
    <!------------------------------------------ map section start ----------------------------- -->
    <section id="map">
        <div class="map-content">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.037478057963!2d88.36102241400542!3d22.948846824840338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f893f23e3e3c23%3A0xd7f0e175dca5dbf1!2szomato%20Office!5e0!3m2!1sen!2sin!4v1624786963391!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        </div>
    </section>
    <!-------------------------------------------- map section end ------------------------------------------ -->

    <?php
  // get footer.php file
    get_footer();
    ?>