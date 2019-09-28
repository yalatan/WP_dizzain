

<?php

get_header();
?>
    <main>
        <section class="about_us section">
            <div class="container">
                <h3 class="section_header">About Olynk</h3>
                <div class="about_us_content wrapper">
                    <div class="about_us_content_div">
                        <img src="<?php bloginfo( 'template_url' ); ?>/images/circle_about_us1.png" alt="" class="about_us_content_image">
                        <div class="about_us_content_text">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/arrow1.png" alt="" class="arrow">
                            <h4 class="about_us_content_h4">Complete your Lynk</h4>
                            <p class="about_us_content_p">Don't forget to add your photo & company logo. Click to upload a photo to help people in your proximity recognize you before they can Lynk with you.</p>
                        </div>
                    </div>
                    <div class="about_us_content_div">
                        <img src="<?php bloginfo( 'template_url' ); ?>/images/circle_about_us2.png" alt="" class="about_us_content_image">
                        <div class="about_us_content_text">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/arrow2.png" alt="" class="arrow">
                            <h4 class="about_us_content_h4">Set Global Filters</h4>
                            <p class="about_us_content_p">Targeted search will help find professionals based on desired job functions, in your proximity - to enable personalized professional networking.</p>
                        </div>
                    </div>
                    <div class="about_us_content_div">
                        <img src="<?php bloginfo( 'template_url' ); ?>/images/circle_about_us3.png" alt="" class="about_us_content_image">
                        <div class="about_us_content_text">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/arrow3.png" alt="" class="arrow">
                            <h4 class="about_us_content_h4">Connect</h4>
                            <p class="about_us_content_p">Share your Lynk for in-person networking. Build your personal and professional network organically. Feel free to add as many connections as you like.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="launch section">
            <div class="form container" id="form">
                <h3 class="section_header">Get notified about launching</h3>
                <form class="form">
                    <input type="email" name="email" id="" placeholder="Enter your email here">
                    <button type="submit" class="button form_button" id="send_form">Submit</button>
                </form>
            </div>
            <div class="success container" id="success_message">
                <h3 class="section_header">Thank you for your interest in Olynk!</h3>
                <p class="header_p">You will know our news first.</p>

            </div>

        </section>
        <section class="our_team section">
            <div class="container">
                <h3 class="section_header">Our Team </h3>
                <div class="our_team_content wrapper">
                    <div class="our_team_content_div">
                        <div class="circle_div">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/team_foto.png" alt="" class="circle_div_image">
                        </div>

                        <h4 class="our_team_content_h4">Gaurav Saraf</h4>
                        <p class="our_team_content_p">Product leader</p>

                    </div>
                    <div class="our_team_content_div">
                        <div class="circle_div">
                            <img src="<?php bloginfo( 'template_url' ); ?>/images/team_default_foto.png" alt="" class="circle_div_image">
                        </div>
                        <h4 class="our_team_content_h4">Ankur Saraogi</h4>
                        <p class="our_team_content_p">Product & Program Management</p>

                    </div>

                    <div class="our_team_content_div">
                        <div class="circle_div">
                            <img src="<?php bloginfo( 'template_url'); ?>/images/team_default_foto.png" alt="" class="circle_div_image">
                        </div>
                        <h4 class="our_team_content_h4">Piyush Gupta</h4>
                        <p class="our_team_content_p"></p>

                    </div>

                </div>
        </section>
    </main>

<?php
get_footer();