<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17.08.15
 * Time: 13:23
 */

use yii\helpers\Url;
use yii\helpers\Html;
use landing\widgets\ActiveForm;
use landing\widgets\Captcha;
use yii\web\View;
?>

<div class="background-image-overlay"></div>

<div id="outer-background-container" data-default-background-img="assets/images/other_images/bg5.jpg"
     style="background-image:url(assets/images/other_images/bg5.jpg);"></div>
<!-- end: #outer-background-container -->

<!-- Outer Container -->
<div id="outer-container">

    <!-- Left Sidebar -->
    <section id="left-sidebar">

        <div class="logo">
            <a href="#intro" class="link-scroll"><img src="assets/images/other_images/logo.png" alt="Twilli Air"></a>
        </div>
        <!-- .logo -->

        <!-- Menu Icon for smaller viewports -->
        <div id="mobile-menu-icon" class="visible-xs" onClick="toggle_main_menu();"><span
                class="glyphicon glyphicon-th"></span></div>

        <ul id="main-menu">
            <li id="menu-item-text" class="menu-item scroll"><a href="#text">Text</a></li>
            <li id="menu-item-carousel" class="menu-item scroll"><a href="#carousel">Carousel</a></li>
            <li id="menu-item-grid" class="menu-item scroll"><a href="#grid">Grid</a></li>
            <li id="menu-item-featured" class="menu-item scroll"><a href="#featured">Featured</a></li>
            <li id="menu-item-contact" class="menu-item scroll"><a href="#contact">Contact</a></li>
        </ul>
        <!-- #main-menu -->

    </section>
    <!-- #left-sidebar -->
    <!-- end: Left Sidebar -->

    <section id="main-content" class="clearfix">

        <article id="intro" class="section-wrapper clearfix"
                 data-custom-background-img="assets/images/other_images/bg5.jpg">
            <div class="content-wrapper clearfix wow fadeInDown" data-wow-delay="0.3s">
                <div class="col-sm-10 col-md-9 pull-right">

                    <section class="feature-text">
                        <h1>Say more with less with TWILLI Air</h1>

                        <p>TWILLI Air is a fully-responsive, minimalistic HTML template, designed to be ideal for
                            websites with concise content.</p>

                        <p><a href="#text" class="link-scroll btn btn-outline-inverse btn-lg">find out more</a></p>
                    </section>

                </div>
                <!-- .col-sm-10 -->
            </div>
            <!-- .content-wrapper -->
        </article>
        <!-- .section-wrapper -->

        <article id="text" class="section-wrapper clearfix"
                 data-custom-background-img="assets/images/other_images/bg1.jpg">
            <div class="content-wrapper clearfix">
                <div class="col-sm-10 col-md-9 pull-right">

                    <h1 class="section-title">Text Content</h1>

                    <p class="feature-paragraph"><img data-img-src="assets/images/other_images/transp-image5b.png"
                                                      class="lazy pull-right" alt="Lorem Ipsum">Etiam at ligula sit amet
                        arcu laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec. <a
                            href="#carousel">Suspendisse molestie lorem odio</a>, sit amet. Laoreet consequat. Duis
                        dictum lorem metus, vitae dapibus.</p>
                    <h4>Duis dictum lorem metus</h4>

                    <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus risus imperdiet
                        nec. Suspendisse molestie lorem odio. Etiam scelerisque lacus tempor, rhoncus diam vel, gravida
                        felis. Fusce tristique sem et leo. Pellentesque sed malesuada turpis. Quisque eget lacus sit
                        amet dui.</p>

                    <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-1');"
                          class="btn btn-outline-inverse btn-sm">read more</a></p>

                    <div class="content-to-populate-in-modal" id="modal-content-1">
                        <h1>Lorem Ipsum</h1>

                        <p><img data-img-src="assets/images/other_images/transp-image4.png"
                                class="lazy rounded_border hover_effect pull-right" alt="Lorem Ipsum">Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit. Sed in urna vel ante mollis tincidunt. Donec nec
                            magna condimentum tortor laoreet lobortis. Nunc accumsan sapien eu tortor fringilla, et
                            condimentum metus pellentesque. Maecenas rhoncus tortor nec mi congue aliquet. Integer eu
                            turpis scelerisque, iaculis magna non, tempor sem. Quisque consectetur nisi eu felis
                            euismod, sit amet faucibus justo molestie. Ut pretium sapien dui, id facilisis metus
                            interdum pharetra.</p>

                        <p>Etiam scelerisque lacus tempor, rhoncus diam vel, gravida felis. Fusce tristique sem et leo
                            aliquam vulputate. Ut eget orci in sapien commodo fringilla. Ut luctus faucibus viverra.
                            Quisque ut ante eget libero rutrum imperdiet. Morbi in diam bibendum, venenatis arcu sed,
                            consequat libero. Nulla imperdiet, ipsum et adipiscing pulvinar, nibh metus porta mauris, et
                            vestibulum dolor sapien sit amet justo. In dignissim leo nec erat faucibus volutpat.</p>

                        <h3>Duis dictum lorem metus, vitae dapibus</h3>

                        <p><img data-img-src="assets/images/other_images/transp-image3.png"
                                class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">Sed auctor urna mi,
                            sed fringilla felis vulputate nec. Cras eu nibh id quam pretium convallis. Donec ante enim,
                            placerat nec sagittis sit amet, tempor in velit. Maecenas ultricies commodo lacus id porta.
                            Suspendisse eros elit, lacinia vitae erat vitae, egestas accumsan nunc. Maecenas dictum odio
                            ipsum, non volutpat erat consequat tempor. Pellentesque sed malesuada turpis. Quisque eget
                            lacus sit amet dui feugiat molestie sit amet eget purus. Morbi eget neque nec lectus tempus
                            sagittis nec at ante. </p>

                        <p>Etiam scelerisque lacus tempor, rhoncus diam vel, gravida felis. Fusce tristique sem et leo
                            aliquam vulputate. Ut eget orci in sapien commodo fringilla. Ut luctus faucibus viverra.
                            Quisque ut ante eget libero rutrum imperdiet. Morbi in diam bibendum, venenatis arcu sed,
                            consequat libero. Nulla imperdiet, ipsum et adipiscing pulvinar, nibh metus porta mauris, et
                            vestibulum dolor sapien sit amet justo. In dignissim leo nec erat faucibus volutpat.</p>
                    </div>
                    <!-- #modal-content-1 -->

                </div>
                <!-- .col-sm-10 -->
            </div>
            <!-- .content-wrapper -->
        </article>
        <!-- .section-wrapper -->

        <article id="carousel" class="section-wrapper clearfix"
                 data-custom-background-img="assets/images/other_images/bg6.jpg">
            <div class="content-wrapper clearfix">

                <div id="features-carousel" class="carousel slide with-title-indicators max-height"
                     data-height-percent="70" data-ride="carousel">

                    <!-- Indicators - slide navigation -->
                    <ol class="carousel-indicators title-indicators">
                        <li data-target="#features-carousel" data-slide-to="0" class="active">Lorem Ipsum</li>
                        <li data-target="#features-carousel" data-slide-to="1">Suspendisse</li>
                        <li data-target="#features-carousel" data-slide-to="2">Maecenas</li>
                        <li data-target="#features-carousel" data-slide-to="3">Scelerisque</li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <div class="carousel-text-content">
                                <img src="assets/images/other_images/transp-image1.png" class="icon" alt="Lorem Ipsum">

                                <h2 class="title">Lorem Ipsum</h2>

                                <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus
                                    risus imperdiet nec. Suspendisse molestie lorem odio.</p>

                                <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-2');"
                                      class="btn btn-outline-inverse btn-sm">read more</a></p>

                                <div class="content-to-populate-in-modal" id="modal-content-2">
                                    <h1>Lorem Ipsum</h1>

                                    <p><img data-img-src="assets/images/other_images/transp-image1.png"
                                            class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">Etiam
                                        at ligula sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae
                                        dapibus risus imperdiet nec. <a href="#">Suspendisse molestie lorem odio</a>,
                                        sit amet. </p>

                                    <p>Laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec.
                                        Suspendisse molestie lorem odio, sit amet.</p>

                                    <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus
                                        risus imperdiet nec. Suspendisse molestie lorem odio test.</p>
                                </div>
                                <!-- #modal-content-2 -->
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="item">
                            <div class="carousel-text-content">
                                <img src="assets/images/other_images/transp-image6.png" class="icon" alt="Lorem Ipsum">

                                <h2 class="title">Suspendisse molestie</h2>

                                <p>Etiam at ligula sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae
                                    dapibus risus imperdiet nec. Duis dictum lorem metus.</p>

                                <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-3');"
                                      class="btn btn-outline-inverse btn-sm">read more</a></p>

                                <div class="content-to-populate-in-modal" id="modal-content-3">
                                    <h1>Suspendisse molestie</h1>

                                    <p><img data-img-src="assets/images/other_images/transp-image6.png"
                                            class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">Etiam
                                        at ligula sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae
                                        dapibus risus imperdiet nec. <a href="#">Suspendisse molestie lorem odio</a>,
                                        sit amet. </p>

                                    <p>Laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec.
                                        Suspendisse molestie lorem odio, sit amet.</p>

                                    <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus
                                        risus imperdiet nec. Suspendisse molestie lorem odio test.</p>
                                </div>
                                <!-- #modal-content-3 -->
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="item">
                            <div class="carousel-text-content">
                                <img src="assets/images/other_images/transp-image7.png" class="icon" alt="Lorem Ipsum">

                                <h2 class="title">Maecenas id dolor</h2>

                                <p>Fusce erat augue, fermentum sit amet congue a, ullamcorper ac enim. Maecenas id dolor
                                    imperdiet, mollis felis ut, pellentesque ante. Sed id congue arcu. Nulla eget
                                    commodo sem. Suspendisse suscipit, sem ac.</p>

                                <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-4');"
                                      class="btn btn-outline-inverse btn-sm">read more</a></p>

                                <div class="content-to-populate-in-modal" id="modal-content-4">
                                    <h1>Maecenas id dolor</h1>

                                    <p><img data-img-src="assets/images/other_images/transp-image7.png"
                                            class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">Etiam
                                        at ligula sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae
                                        dapibus risus imperdiet nec. <a href="#">Suspendisse molestie lorem odio</a>,
                                        sit amet. </p>

                                    <p>Laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec.
                                        Suspendisse molestie lorem odio, sit amet.</p>

                                    <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus
                                        risus imperdiet nec. Suspendisse molestie lorem odio test.</p>
                                </div>
                                <!-- #modal-content-4 -->
                            </div>
                        </div>
                        <!-- .item -->

                        <div class="item">
                            <div class="carousel-text-content">
                                <img src="assets/images/other_images/transp-image4.png" class="icon" alt="Lorem Ipsum">

                                <h2 class="title">Sed scelerisque</h2>

                                <p>Aenean a est fringilla, malesuada eros vel, condimentum augue. Sed lorem sapien,
                                    vestibulum quis nisl volutpat, fermentum adipiscing massa. Cras ac faucibus nisl.
                                    Proin ac convallis sapien. </p>

                                <p><a href="" onclick="populate_and_open_modal(event, 'modal-content-5');"
                                      class="btn btn-outline-inverse btn-sm">read more</a></p>

                                <div class="content-to-populate-in-modal" id="modal-content-5">
                                    <h1>Sed scelerisque</h1>

                                    <p><img data-img-src="assets/images/other_images/transp-image4.png"
                                            class="lazy rounded_border hover_effect pull-left" alt="Lorem Ipsum">Etiam
                                        at ligula sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae
                                        dapibus risus imperdiet nec. <a href="#">Suspendisse molestie lorem odio</a>,
                                        sit amet. </p>

                                    <p>Laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec.
                                        Suspendisse molestie lorem odio, sit amet.</p>

                                    <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus
                                        risus imperdiet nec. Suspendisse molestie lorem odio test.</p>
                                </div>
                                <!-- #modal-content-5 -->
                            </div>
                        </div>
                        <!-- .item -->

                    </div>
                    <!-- .carousel-inner -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#features-carousel" data-slide="prev"></a>
                    <a class="right carousel-control" href="#features-carousel" data-slide="next"></a>

                </div>
                <!-- #about-carousel -->

            </div>
            <!-- .content-wrapper -->
        </article>
        <!-- .section-wrapper -->

        <article id="grid" class="section-wrapper clearfix"
                 data-custom-background-img="assets/images/other_images/bg2.jpg">
            <div class="content-wrapper clearfix">
                <div class="col-sm-11 col-md-10 pull-right">

                    <h1 class="section-title">Grid</h1>

                    <!-- grid -->
                    <section class="grid row clearfix clearfix-for-2cols">

                        <!-- grid item -->
                        <div class="grid-item col-md-6">
                            <div class="item-content clearfix">
                                <span class="icon glyphicon glyphicon-stats"></span>

                                <div class="text-content">
                                    <h5>Lorem ipsum dolor sit amet</h5>

                                    <p>Nullam ac rhoncus sapien, non gravida purus. Aliquam adipiscing eros non elit
                                        imperdiet congue. Integer ultricies.</p>
                                </div>
                            </div>
                            <!-- end: .item-content -->
                        </div>
                        <!-- end: .grid-item -->

                        <!-- grid item -->
                        <div class="grid-item col-md-6">
                            <div class="item-content clearfix">
                                <span class="icon glyphicon glyphicon-record"></span>

                                <div class="text-content">
                                    <h5>Aliquam adipiscing eros non elit</h5>

                                    <p>Nullam ac rhoncus sapien, non gravida purus. Alinon elit imperdiet congue.
                                        Integer ultricies sed ligula eget tempus.</p>
                                </div>
                            </div>
                            <!-- end: .item-content -->
                        </div>
                        <!-- end: .grid-item -->

                        <!-- grid item -->
                        <div class="grid-item col-md-6">
                            <div class="item-content clearfix">
                                <span class="icon glyphicon glyphicon-lock"></span>

                                <div class="text-content">
                                    <h5>Integer ultricies sed ligula</h5>

                                    <p>Aliquam adipiscing eros non elit imperdiet congue. Integer ultricies sed ligula
                                        ligula eget.</p>
                                </div>
                            </div>
                            <!-- end: .item-content -->
                        </div>
                        <!-- end: .grid-item -->

                        <!-- grid item -->
                        <div class="grid-item col-md-6">
                            <div class="item-content clearfix">
                                <span class="icon glyphicon glyphicon-file"></span>

                                <div class="text-content">
                                    <h5>Lorem ipsum dolor sit amet</h5>

                                    <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Integer
                                        ultricies sed ligula eget tempus.</p>
                                </div>
                            </div>
                            <!-- end: .item-content -->
                        </div>
                        <!-- end: .grid-item -->

                    </section>
                    <!-- end: grid -->

                </div>
                <!-- .col-sm-11 -->
            </div>
            <!-- .content-wrapper -->
        </article>
        <!-- .section-wrapper -->

        <article id="featured" class="section-wrapper clearfix"
                 data-custom-background-img="assets/images/other_images/bg3.jpg">
            <div class="content-wrapper clearfix">
                <div class="col-sm-11 pull-right">

                    <h1 class="section-title">Featured</h1>

                    <!-- feature columns -->
                    <section class="feature-columns row clearfix">

                        <!-- feature 1 -->
                        <article class="feature-col col-md-4">
                            <a href="" onclick="populate_and_open_modal(event, 'modal-content-6');"
                               class="thumbnail linked">
                                <div class="image-container">
                                    <img data-img-src="assets/images/other_images/project-3.jpg"
                                         class="lazy item-thumbnail" alt="Lorem Ipsum">
                                </div>
                                <div class="caption">
                                    <h5>Image Carousel</h5>

                                    <p>This feature contains an image carousel when you open popup.</p>
                                </div>
                                <!-- .caption -->
                            </a><!-- .thumbnail -->

                            <div class="content-to-populate-in-modal" id="modal-content-6">
                                <h1>Sed scelerisque</h1>

                                <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Etiam at ligula
                                    sit amet arcu laoreet consequat.<br/></p>

                                <!-- image slider inside popup -->
                                <div id="unique-id-for-image-slider" class="owl-carousel popup-image-gallery">
                                    <!-- slide -->
                                    <div>
                                        <!-- caption is optional. To remove it, remove the <h6> below -->
                                        <h6 class="caption">Caption for Image 1</h6>
                                        <img class="lazyOwl" data-src="assets/images/other_images/bg1.jpg">
                                    </div>
                                    <!-- slide -->
                                    <div>
                                        <h6 class="caption">Caption for Image 2</h6>
                                        <img class="lazyOwl" data-src="assets/images/other_images/bg2.jpg">
                                    </div>
                                    <!-- slide -->
                                    <div>
                                        <h6 class="caption">Caption for Image 3</h6>
                                        <img class="lazyOwl" data-src="assets/images/other_images/bg3.jpg">
                                    </div>
                                </div>
                            </div>
                            <!-- #modal-content-6 -->
                        </article>

                        <!-- feature 2 -->
                        <article class="feature-col col-md-4">
                            <a href="" onclick="populate_and_open_modal(event, 'modal-content-7');"
                               class="thumbnail linked">
                                <div class="image-container">
                                    <img data-img-src="assets/images/other_images/project-2.jpg"
                                         class="lazy item-thumbnail" alt="Lorem Ipsum">
                                </div>
                                <div class="caption">
                                    <h5>Text popup</h5>

                                    <p>This feature contains generic image and text content when you open popup.</p>
                                </div>
                                <!-- .caption -->
                            </a><!-- .thumbnail -->

                            <div class="content-to-populate-in-modal" id="modal-content-7">
                                <img data-img-src="assets/images/other_images/top-image2.jpg" class="lazy full-width"
                                     alt="Lorem Ipsum">

                                <h1>Sed scelerisque</h1>

                                <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Etiam at ligula
                                    sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae dapibus risus
                                    imperdiet nec. Suspendisse molestie lorem odio</a>, sit amet. </p>

                                <p>Laoreet consequat. Duis dictum lorem metus, vitae dapibus risus imperdiet nec.
                                    Suspendisse molestie lorem odio, sit amet.</p>

                                <p>Suspendisse molestie lorem odio, sit amet. Duis dictum lorem metus, vitae dapibus
                                    risus imperdiet nec. Suspendisse molestie lorem odio test.</p>
                            </div>
                            <!-- #modal-content-7 -->
                        </article>

                        <!-- feature 3 -->
                        <article class="feature-col col-md-4">
                            <a href="" onclick="populate_and_open_modal(event, 'modal-content-8', '', 'full-size');"
                               class="thumbnail linked">
                                <div class="image-container">
                                    <img data-img-src="assets/images/other_images/project-4.jpg"
                                         class="lazy item-thumbnail" alt="Lorem Ipsum">
                                </div>
                                <div class="caption">
                                    <h5>Alternate Gallery</h5>

                                    <p>Inside this feature's popup you'll find an alternative version of an image
                                        gallery.</p>
                                </div>
                                <!-- .caption -->
                            </a><!-- .thumbnail -->

                            <div class="content-to-populate-in-modal" id="modal-content-8">
                                <h1>Sed scelerisque</h1>

                                <p>Nullam ac rhoncus. Aliquam adipiscing eros non elit imperdiet congue. Etiam at ligula
                                    sit amet arcu laoreet consequat. Duis dictum lorem metus, vitae dapibus risus
                                    imperdiet nec. Suspendisse molestie lorem odio</a>, sit amet. Adipiscing eros non
                                    elit imperdiet congue tiam at ligula sit amet arcu.</p>

                                <!-- alt image slider inside popup -->
                                <div id="unique-id-for-alt-image-slider" class="owl-carousel popup-alt-image-gallery">
                                    <div class="item"><a href="assets/images/other_images/bg1.jpg"
                                                         data-lightbox="popup-alt-gallery"><img class="lazyOwl"
                                                                                                data-src="assets/images/other_images/gallery-thumb-1.jpg"></a>
                                    </div>
                                    <div class="item"><a href="assets/images/other_images/bg2.jpg"
                                                         data-lightbox="popup-alt-gallery"><img class="lazyOwl"
                                                                                                data-src="assets/images/other_images/gallery-thumb-2.jpg"></a>
                                    </div>
                                    <div class="item"><a href="assets/images/other_images/bg3.jpg"
                                                         data-lightbox="popup-alt-gallery"><img class="lazyOwl"
                                                                                                data-src="assets/images/other_images/gallery-thumb-3.jpg"></a>
                                    </div>
                                    <div class="item"><a href="assets/images/other_images/bg4.jpg"
                                                         data-lightbox="popup-alt-gallery"><img class="lazyOwl"
                                                                                                data-src="assets/images/other_images/gallery-thumb-4.jpg"></a>
                                    </div>
                                    <div class="item"><a href="assets/images/other_images/bg5.jpg"
                                                         data-lightbox="popup-alt-gallery"><img class="lazyOwl"
                                                                                                data-src="assets/images/other_images/gallery-thumb-5.jpg"></a>
                                    </div>
                                    <div class="item"><a href="assets/images/other_images/bg6.jpg"
                                                         data-lightbox="popup-alt-gallery"><img class="lazyOwl"
                                                                                                data-src="assets/images/other_images/gallery-thumb-6.jpg"></a>
                                    </div>
                                    <div class="item"><a href="assets/images/other_images/bg2.jpg"
                                                         data-lightbox="popup-alt-gallery"><img class="lazyOwl"
                                                                                                data-src="assets/images/other_images/gallery-thumb-2.jpg"></a>
                                    </div>
                                    <div class="item"><a href="assets/images/other_images/bg3.jpg"
                                                         data-lightbox="popup-alt-gallery"><img class="lazyOwl"
                                                                                                data-src="assets/images/other_images/gallery-thumb-3.jpg"></a>
                                    </div>
                                </div>
                            </div>
                            <!-- #modal-content-8 -->
                        </article>

                    </section>
                    <!-- end: .feature-columns -->

                    <!-- End: Section content to edit -->

                </div>
                <!-- .col-sm-10 -->
            </div>
            <!-- .content-wrapper -->
        </article>
        <!-- .section-wrapper -->

        <article id="contact" class="section-wrapper clearfix"
                 data-custom-background-img="assets/images/other_images/bg4.jpg">
            <div class="content-wrapper clearfix">

                <h1 class="section-title">Contact</h1>

                <!-- CONTACT DETAILS -->
                <div class="contact-details col-sm-5 col-md-3">
                    <p>123A,<br/>Molestie Lorem Avenue,<br/>Aliquam<br/>AAA0010</p>

                    <p>Tel: (+20) 21 301 524</p>

                    <p><a href="mailto:info@loremipsum.com">info@loremipsum.com</a></p>
                </div>
                <!-- END: CONTACT DETAILS -->

                <!-- CONTACT FORM -->
                <div class="col-sm-7 col-md-9">
                    <!-- IMPORTANT: change the email address at the top of the assets/php/mail.php file to the email address that you want this form to send to -->

                    <form class="form-style validate-form clearfix" action="assets/php/mail.php" method="POST"
                          role="form">

                        <!-- form left col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="text-field form-control validate-field required"
                                       data-validation-type="string" placeholder="Full Name" name="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="text-field form-control validate-field required"
                                       data-validation-type="email" id="form-email" placeholder="Email Address"
                                       name="email">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="text-field form-control validate-field phone"
                                       data-validation-type="phone" id="form-contact-number"
                                       placeholder="Contact Number" name="contact_number">
                            </div>
                            <div class="form-group text-right">
                                <img id="form-captcha-img" src="">
                                <input type="text" class="text-field form-control validate-field required"
                                       data-validation-type="captcha" id="form-captcha" placeholder="Enter text"
                                       name="captcha">
                                <span id="form-captcha-refresh" class="fa fa-refresh" title="Reload"></span>
                            </div>
                        </div>
                        <!-- end: form left col -->

                        <!-- form right col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea placeholder="Message..." class="form-control validate-field required"
                                          name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <img src="assets/images/theme_images/loader-form.GIF" class="form-loader">
                                <button type="submit" class="btn btn-sm btn-outline-inverse">Submit</button>
                            </div>
                            <div class="form-group form-general-error-container"></div>
                        </div>
                        <!-- end: form right col -->

                    </form>
                    <?php /*$form = ActiveForm::begin([
                        'id' => 'contact-form',
                        'action' => Url::toRoute('contacts'),
                        'options' => [
                            'class' => 'form-style validate-form clearfix',
                            'role' => 'form',
                        ]
                    ]); */?><!--
                    <div class="col-md-6">
                        <div class="form-group">
                            <?/*= $form->field($model, 'name', [
                            ]) */?>
                        </div>
                        <div class="form-group">
                            <?/*= $form->field($model, 'email') */?>
                        </div>
                        <div class="form-group">
                            <?/*= $form->field($model, 'subject') */?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <?/*= $form->field($model, 'body')->textArea(['rows' => 6]) */?>
                        </div>
                        <div class="form-group">
                            <?/*= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                'captchaAction' => 'default/captcha',
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                            ]) */?>
                            <?/*= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) */?>
                        </div>
                    </div>
                    --><?php /*ActiveForm::end(); */?>
                </div>
                <!-- end: CONTACT FORM -->

            </div>
            <!-- .content-wrapper -->
        </article>
        <!-- .section-wrapper -->

    </section>
    <!-- #main-content -->

    <!-- Footer -->
    <section id="footer">

        <!-- Go to Top -->
        <div id="go-to-top" onclick="scroll_to_top();"><span class="icon glyphicon glyphicon-chevron-up"></span></div>

        <ul class="social-icons">
            <li><a href="#" target="_blank" title="Facebook"><img
                        src="assets/images/theme_images/social_icons/facebook.png" alt="Facebook"></a></li>
            <li><a href="#" target="_blank" title="Twitter"><img
                        src="assets/images/theme_images/social_icons/twitter.png" alt="Twitter"></a></li>
            <li><a href="#" target="_blank" title="Google+"><img
                        src="assets/images/theme_images/social_icons/googleplus.png" alt="Google+"></a></li>
        </ul>

        <!-- copyright text -->
        <div class="footer-text-line">&copy; 2014 Twilli | Air</div>
    </section>
    <!-- end: Footer -->

</div><!-- #outer-container -->
<!-- end: Outer Container -->

<!-- Modal -->
<!-- DO NOT MOVE, EDIT OR REMOVE - this is needed in order for popup content to be populated in it -->
<div class="modal fade" id="common-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="modal-body">
            </div>
            <!-- .modal-body -->
        </div>
        <!-- .modal-content -->
    </div>
    <!-- .modal-dialog -->
</div><!-- .modal -->



<?="<!--[if lt IE 9]>"?>
<? $this->registerJs('jQuery("#outer-background-container").backstretch("assets/images/other_images/bg5.jpg");',View::POS_READY); ?>
<?="<![endif]-->"?>

<?="<!--[if lt IE 9]>"?>
<? $this->registerJs('contact_form_IE9_placeholder_fix()'); ?>
<?="<![endif]-->"?>