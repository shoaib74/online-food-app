<?php
  // get header.php file
 
  /*
 Template Name: login-Page-template
 */
  get_header();
?>

<!------------------------------- contact us section start here ------------------------------- -->
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="contact-content">
                                <div class="contact-heading">
                                    <h1 class="text-white">Get a quote</h1>
                                </div>
                                <div class="contact-para">
                                    <p class="text-white">
                                    If you talk about food just as much as you eat it, you're in good company. We've got famous chefs and stars—Julia Child, Sophia Loren, Virginia Woolf—to thank for some of the greatest food quotes of all time. Do what you will with these: Memorize them, pin them, or print them out and tack them up all over your kitchen. 
                                    </p>
                                </div>
                                <div class="content-item">
                                    <div class="row justify-content-between">
                                        <div class="col-sm-6">
                                            <div class="reshaping contact-box">
                                                <div class="reshaping-image contact-image">
                                                    <img src="<?php echo get_template_directory_uri().'/image/reshape-1.jpg';?>" alt="Reshaping-Business-Process" class="img-fluid">
                                                </div>
                                                <div class="reshaping-heading contact-heading">
                                                    <h4 class="text-white">All happiness depends on a leisurely breakfast.</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="data-security contact-box">
                                                <div class="data-security-image contact-image">
                                                    <img src="<?php echo get_template_directory_uri().'/image/reshape-2.webp';?>" alt="Enhance-Data-Security" class="img-fluid">
                                                </div>
                                                <div class="data-security-heading contact-heading">
                                                    <h4 class="text-white">You don't need a silver fork to eat good food.</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="caters-greater contact-box">
                                                <div class="caters-greater-image contact-image">
                                                    <img src="<?php echo get_template_directory_uri().'/image/reshape-3.webp';?>" alt="Caters-Greater-Transparency" class="img-fluid">
                                                </div>
                                                <div class="caters-greater-heading contact-heading">
                                                    <h4 class="text-white">I only drink Champagne on two occasions.</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="storage-cost contact-box">
                                                <div class="storage-cost-image contact-image">
                                                    <img src="<?php echo get_template_directory_uri().'/image/reshape-4.webp';?>" alt="Reduce-Data-Storage-Cost" class="img-fluid">
                                                </div>
                                                <div class="storage-cost-heading contact-heading">
                                                    <h4 class="text-white">A balanced diet is a cookie in each hand.</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="data-duplicacy contact-box">
                                                <div class="data-duplicacy-image contact-image">
                                                    <img src="<?php echo get_template_directory_uri().'/image/reshape-5.jpg';?>" alt="Eliminates-Data-Duplicacy" class="img-fluid">
                                                </div>
                                                <div class="data-duplicacy-heading contact-heading">
                                                    <h4 class="text-white">Cooking is like love. It should be entered .</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="time-risk contact-box">
                                                <div class="time-risk-image contact-image">
                                                    <img src="<?php echo get_template_directory_uri().'/image/reshape-6.jpg';?>" alt="reduce-time" class="img-fluid">
                                                </div>
                                                <div class="time-risk-heading  contact-heading">
                                                    <h4 class="text-white">People who love to eat are always the best people.</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-5">   
                            <form action="method-post">
                                <div class="contact-form">
                                    <div class="form-group">
                                        <label for="" class="">Username</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group ">
                                        <label for="" class="">Password</label>
                                        <input type="Password" class="form-control" placeholder="">
                                    </div>
                                    <!-- <div class="form-group ">
                                        <label for="" class="">Contact</label>
                                        <input type="email" class="form-control" placeholder="Your Contact">
                                    </div>
                                    <div class="form-group ">
                                        <label for="" class=""> Write a message</label>
                                        <textarea name="message" type= "text" placeholder="Write a message" id="" cols="10" rows="7" class="form-control"></textarea>
                                    </div> -->
                                    <button class="btn contact-btn" type="submit" role="button">Login</button>
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