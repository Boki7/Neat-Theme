<?php
/**
 * Template Name: Contact Page Template
 */
get_header();
?>

<div class="container-wrap">
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <?php $slika = get_field('hero_image'); ?>
                <li style="background-image: url(<?=$slika['sizes']['hero-image-size']?>);">
                    <div class="overlay-gradient"></div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 slider-text slider-text-bg">
                            <div class="slider-text-inner text-center">
                                <h1><?= get_field('title_text'); ?></h1>
                                <?php $link = get_field('link'); ?>
                                <h2><?= get_field('description_text');?></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div id="fh5co-contact">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Contact us</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-md-push-1 animate-box">
                <h3>Our Address</h3>
                <ul class="contact-info">
                    <li>
                        <i class="icon-location4"></i>
                        198 West 21th Street, Suite 721 New York NY 10016
                    </li>
                    <li>
                        <i class="icon-phone3"></i>
                        <a href="tel:+1235235598">+1235235598</a>
                    </li>
                    <li>
                        <i class="icon-location3"></i>
                        <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                    </li>
                    <li>
                        <i class="icon-globe2"></i>
                        <a href="www.yoursite.com">www.yoursite.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-7 col-md-push-1 animate-box">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary btn-modify">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- END container-wrap -->

<?php get_footer(); ?>
