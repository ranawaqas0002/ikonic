<?php

/**

 * Template Name: Home Page

 * Description: This template is for diplaying the homepage

 *

 */

 get_header(); ?> 

<style>

    section{
        overflow: hidden !important;
    }
    .card-top{
        max-width: 226px;
        width: 100%;
        height: 180px;
        display: inline-grid;
        align-content: center;
        text-align: center;
        padding: 22px 18px 22px 18px;
        box-shadow: #0000004D 0px 3px 6px;
        border-radius: 5px;
    }
    .card-top .icon img{
        width: 50px;
    }
    .card-top .card-text p{
        font-size: 15px;
        color: #54585A;
        font-weight: 600;
        line-height: 20px;
        margin-bottom: 0px;
    }
    .space-left{
        margin-left: 20px;
    }
    /* .cards{
        text-align: center;
    } */

    .cards a{
        color: #54585A;
        text-decoration: none;
    }
    .cards a:hover{
        color: #326295;
    }
    .joint-img img{
        max-width: 460px;
        width: 100%;
    }
    .section-4 video#custom-video{
        max-width: 700px;
        width: 100%;
        margin: auto;
    }
    .video-col{
        text-align: center;
    }
    p.sub-heading {
    font-size: 18px;
    font-weight: 600;
    line-height: 20px;
}
    .program-text p{
        font-size: 20px;
        font-weight: 600;
        padding-top: 10px;
    }
    .program-card{
        background-color: white;
        max-width: 443px;
        width: 100%;
        height: 171px;
        display: inline-grid;
        align-content: center;
        border-radius: 5px;
        box-shadow: #0000004D 0px 3px 6px;
    }
    .program-main-card{
        text-align: center;
    }
    .program-card:hover {
    background-color: #345884;
}
.program-card:hover p{
    color: white;
}
.program-card:hover .program-icon img{
    filter: brightness(0) invert(1);
}
    
/* FAQ CSS */
.accordion{
    background-color: #F2F2F2;
    color: #54585A;
    cursor: pointer;
    font-size: 20px;
    font-weight: 600;
    line-height: 28px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.5s;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 22px 18px 22px;
    margin-top: 10px;
}
.panel p{
    font-size: 15px;
    font-weight: 300;
    line-height: 20px;
    color: #54585A;
    padding: 30px;
    
}
.accordion i{
    font-size: 14px;
}
.active, .accordion:hover{
    background-color: #345884;
    color: #ffffff;
}
.panel{
    background-color: #F2F2F2;
    overflow: hidden;
    display: none;
    color: #54585A;
    padding: 35px 30px 35px 30px;
}
.faq{
    margin-bottom: 10px;
}

/* BELOW FAQ */
.below-faq h5{
    font-size: 18px;
    line-height: 20px;
    font-weight: 600;
}
.btn-below-faq.btn-left {
    text-align: right;
}
.btn-below-faq.btn-right {
    text-align: left;
}
.btn-below-faq button {
    width: 220px;
    height: 38px;
    background-color: #326295;
    color: #ffffff;
    font-size: 13px;
    line-height: 21px;
    font-weight: 700;
    border: none;
    
}


.slider-for video#custom-video {
    max-width: 700px;
    width: 100%;
}
.slick-track {
    margin: 0px;
}

.slider-nav img {
    max-width: 210px;
    width: 100%;
}
.slider-for.slick-slider {
    text-align: center;
}
.below-faq a{
    color: #4F514F;
    text-decoration: none;
    font-weight: 700;
}

    @media screen and (min-width: 1400px){
        .card-top{
            max-width: 260px;
            width: 100%;

        }
        .first-col {
    margin-right: 20px;
}
    .second-col{
        margin-left: 20px;
    }
    }

    @media (min-width: 1200px) and (max-width: 1399px) {
        .first-col {
    margin-right: 10px;
}
    .second-col{
        margin-left: 10px;
    }
    }

    @media (min-width: 1024px) and (max-width: 1200px) {
        .card-top{
            max-width: 194px;
            width: 100%;
        }
        .space-left{
        margin-left: 12px;
    }
    .program-card{
        max-width: 350px;
        width: 100%;
    }
    .first-col {
    margin-right: 10px;
}
    .second-col{
        margin-left: 10px;
    }
    }

    @media (min-width:768px) and (max-width: 1024px){
        .slider-nav img {
    max-width: 190px;
    width: 100%;
}
.program-card{
    max-width: 330px;
    width: 100%;
    margin-left: 5px;
    margin-right: 5px;
}
.section-5 .mt-40{
    margin-top: 15px;
}
.accordion{
    font-size: 16px;
    line-height: 20px;
}
    }

    @media screen and (max-width: 767px) {
        .slider-nav img {
    max-width: 130px;
    width: 100%;
}
.section-5 .mt-40{
    margin-top: 0px !important;
}
.program-card{
    margin-bottom: 20px;
}
.accordion{
    font-size: 14px;
    line-height: 20px;
}
.btn-below-faq button {
    width: 150px;
    font-size: 12px;
    line-height: 2opx;
}
.card-top{
    max-width: 600px;
    width: 100%;
    margin-bottom: 20px;
    margin-left: 10px;
}
.mobile-side-padding {
    padding-left: 25px;
    padding-right: 25px;
}
        
    }
</style>

<!-- Section 1 -->
<?php
$section_1 = get_field('section_1');
if($section_1){
    ?>
 <section>
 <div class="main-image">
    <div class="container mobile-side-padding">
        <div class="row">
                <div class="col-lg-11 offset-lg-1 pt-180 pb-180">
                    <h1 class="white-text sm-pb"><?php echo $section_1['heading']?></h1>
                    <h3 class="white-text"><?php echo $section_1['subheading']?></h3>
                </div>
            </div>
        </div>
    </div>
 </section>
 <?php } ?>

 <!-- Section 2 -->
 <?php
$section_2 = get_field('section_2');
if($section_2){
    ?>
 <section class="section-2">
    <div class="container mobile-side-padding">
        <div class="row">
            <div class="offset-lg-1 col-lg-10 pt-90">
                <h2 class="gray-text sm-pb"><?php echo $section_2['heading']?></h2>
                <p><?php echo $section_2['text']?></p>
            </div>
            
            <div class="row">
                <div class="col-lg-11 offset-lg-1 cards pt-50 pb-90">
                    <div class="col-lg-3 col-6 card-top ">
                        <div class="icon sm-pb">
                        <img src="<?php echo $section_2['card_1_img'] ?>" alt="">
                        </div>

                        <div class="card-text">
                            <p><?php echo $section_2['card_1_text'] ?></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 card-top space-left">
                        <div class="icon sm-pb">
                        <img src="<?php echo $section_2['card_2_img'] ?>" alt="">
                        </div>

                        <div class="card-text">
                            <p><a href="tel:3373106000"><?php echo $section_2['card_2_text'] ?></a></p><br>
                        </div>
                    </div>

                    <div class="col-lg-3 card-top space-left">
                        <div class="icon sm-pb">
                        <img src="<?php echo $section_2['card_3_img'] ?>" alt="">
                        </div>

                        <div class="card-text">
                            <p><a href="<?php echo $section_2['card_3_link'] ?>"><?php echo $section_2['card_3_text'] ?> </a></p><br>
                        </div>
                    </div>

                    <div class="col-lg-3 card-top space-left">
                        <div class="icon sm-pb">
                        <img src="<?php echo $section_2['card_4_img'] ?>" alt="">
                        </div>

                        <div class="card-text">
                            <p><?php echo $section_2['card_4_text'] ?></p><br>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
 </section>
 <?php } ?>

 <!-- Section-3 -->
 <?php 
 $section_3 = get_field('section_3');
 if($section_3){
    ?>
 <section class="section-3 light-gray-bg">
    <div class="container mobile-side-padding">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 pt-150 pb-150">
                <h2 class="gray-text align-center"><?php echo $section_3['heading'] ?></h2>
                <p class="align-center pb-30"><?php echo $section_3['text'] ?></p>
                <div class="align-center joint-img"><img src="<?php echo $section_3['image'] ?>" alt=""></div>
            </div>
        </div>
    </div>
 </section>
<?php } ?>
 
<!-- Section-4 -->
<?php 
 $section_4 = get_field('section_4');
 if($section_4){
    ?>
 <section class="section-4 gradient-bg pt-150 pb-150">
    <div class="container mobile-side-padding">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 video-col">
                <h2 class="white-text align-center"><?php echo $section_4['heading'] ?></h2>
                <video id="custom-video" poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/poster11.png" controls>
                    <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dummy.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
           
        </div>
    </div>
 </section>
 <?php } ?>

<!-- Video Slider -->
<?php 
 $video_slider = get_field('video_slider');
 if($video_slider){
    ?>
 <section class="video-slider pt-150 pb-150">
    <div class="container mobile-side-padding">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
            <h2 class="gray-text align-center sm-pb"><?php echo $video_slider['heading'] ?></h2>
            
                <div class="slider-for">
                    <div class="slide-1">
                    <video id="custom-video" poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/video-11.jpg" controls>
                    <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dummy.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                    </div>
                    <div class="slide-1">
                    <video id="custom-video" poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/video-22.jpg" controls>
                    <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dummy.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                    </div>
                </div>


                <div class="slider-nav">
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/video-11.jpg"  alt="Video 1">
                    </div>
                    <div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/video-22.jpg"  alt="Video 2">
                    </div>
                    <!-- Add more thumbnail slides as needed -->
                </div>
            </div>
        </div>
    </div>
    
</section>
<?php } ?>

<!-- Section 5 -->
<?php 
 $section_5 = get_field('section_5');
 if($section_5){
    ?>
<section class="section-5 light-gray-bg pt-90 pb-90">
    <div class="container mobile-side-padding">
        <div class="row pb-30">
            <h2 class="gray-text align-center"><?php echo $section_5['heading'] ?></h2>
            <p class="gray-text align-center sub-heading"><?php echo $section_5['text'] ?></p>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 program-main-card">
                <div class="col-lg-5 program-card first-col">
                    <div class="program-icon align-center">
                    <img src="<?php echo $section_5['card_1_img'] ?>" alt="">
                    </div>
                    <div class="program-text">
                    <p class="align-center gray-text"><?php echo $section_5['card_1_text'] ?></p>
                    </div>
                </div>
                <div class="col-lg-5 program-card second-col">
                    <div class="program-icon align-center">
                    <img src="<?php echo $section_5['card_2_img'] ?>" alt="">
                    </div>
                    <div class="program-text">
                    <p class="align-center gray-text"><?php echo $section_5['card_2_text'] ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-10 offset-lg-1 program-main-card mt-40">
                <div class="col-lg-5 program-card first-col">
                    <div class="program-icon align-center">
                    <img src="<?php echo $section_5['card_3_img'] ?>" alt="">
                    </div>
                    <div class="program-text">
                    <p class="align-center gray-text"><?php echo $section_5['card_3_text'] ?></p>
                    </div>
                </div>
                <div class="col-lg-5 program-card second-col">
                    <div class="program-icon align-center">
                    <img src="<?php echo $section_5['card_4_img'] ?>" alt="">
                    </div>
                    <div class="program-text">
                    <p class="align-center gray-text"><?php echo $section_5['card_4_text'] ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-10 offset-lg-1 program-main-card mt-40">
                <div class="col-lg-5 program-card first-col">
                    <div class="program-icon align-center">
                    <img src="<?php echo $section_5['card_5_image'] ?>" alt="">
                    </div>
                    <div class="program-text">
                    <p class="align-center gray-text"><?php echo $section_5['card_5_text'] ?></p>
                    </div>
                </div>
                <div class="col-lg-5 program-card second-col">
                    <div class="program-icon align-center">
                    <img src="<?php echo $section_5['card_6_image'] ?>" alt="">
                    </div>
                    <div class="program-text">
                    <p class="align-center gray-text"><?php echo $section_5['card_6_text'] ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-10 offset-lg-1 program-main-card mt-40">
                <div class="col-lg-5 program-card first-col">
                    <div class="program-icon align-center">
                    <img src="<?php echo $section_5['card_7_image'] ?>" alt="">
                    </div>
                    <div class="program-text">
                    <p class="align-center gray-text"><?php echo $section_5['card_7_text'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php } ?>

<!-- Section 6 FAQ-->
<?php 
$section_6 = get_field('section_6');
if ($section_6) {
?>
<section class="section-6 pt-90 pb-90">
    <div class="container mobile-side-padding">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="wrapper">
                    <h2 class="gray-text"><?php echo $section_6['heading']; ?></h2>
                    <div class="faq">
                        <?php $testItems = $section_6['faq']; ?>

                        <?php foreach ($testItems as $testitem) { ?>
                            <button class="accordion">
                                <?php echo $testitem['question']; ?>
                                <i class="fas fa-plus"></i>
                            </button>
                            <div class="panel">
                                <?php echo $testitem['answer']; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mobile-side-padding">
        <div class="col-lg-8 offset-lg-2 below-faq pt-50">
            <h5 class="gray-text align-center"><?php echo $section_6['subheading']; ?></h5>
            <p class="align-center"><?php echo $section_6['text']; ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 offset-lg-1 pt-50 d-flex justify-content-evenly">
            <div class="col-lg-5 btn-below-faq btn-left">
                <button><?php echo $section_6['btn_1_text']; ?></button>
            </div>
            <div class="col-lg-5 btn-below-faq btn-right">
                <button><?php echo $section_6['btn_2_text']; ?></button>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $('.accordion').click(function () {
            $(this).toggleClass('active');
            var icon = $(this).find('i');
            
            if (icon.hasClass('fa-plus')) {
                icon.removeClass('fa-plus').addClass('fa-minus');
            } else {
                icon.removeClass('fa-minus').addClass('fa-plus');
            }

            var panel = $(this).next();
            panel.slideToggle();
        });
    });
</script>

<?php } ?>






<?php
get_footer();?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  $(document).ready(function () {
    $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      asNavFor: '.slider-nav',
    });

    $('.slider-nav').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      centerMode: true,
      focusOnSelect: true,
      responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    }
  ]
    });
  });


</script>
<script>

</script>