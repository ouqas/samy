@extends('themain')
@section('title', 'Add Product')
@section('content')

    <!-- Start Hero Slider -->
    <div class="hero-slider">
        <div class="slider-rev-cont">
            <div class="tp-banner-container">
                <div class="tp-limited">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-delay="5000" data-masterspeed="600" data-slotamount="7" data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img src="main/images/banner-1.jpg" alt="">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfr whiter h4 tp-resizeme"
                                 data-x="right"
                                 data-hoffset="-15"
                                 data-y="center"
                                 data-voffset="-80"
                                 data-speed="1000"
                                 data-start="500"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300">
                                luminosité
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr whiter h2 tp-resizeme"
                                 data-x="right"
                                 data-hoffset="-20"
                                 data-y="center"
                                 data-voffset="-40"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300">
                                déterminée
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption customin whiter customout tp-resizeme"
                                 data-x="right"
                                 data-hoffset="-20"
                                 data-y="center"
                                 data-voffset="20"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:100% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                                 data-start="1100"
                                 data-speed="600"
                                 data-easing="Linear.easeNone"
                                 data-endspeed="600"
                                 data-endeasing="Linear.easeNone"
                            ><hr class="md">
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-delay="5000" data-masterspeed="600" data-slotamount="7" data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img src="main/images/banner-2.jpg" alt="">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfr whiter h4 tp-resizeme"
                                 data-x="right"
                                 data-hoffset="-15"
                                 data-y="center"
                                 data-voffset="-80"
                                 data-speed="1000"
                                 data-start="500"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300">
                                propriétés
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr whiter h2 tp-resizeme"
                                 data-x="right"
                                 data-hoffset="-20"
                                 data-y="center"
                                 data-voffset="-40"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300">
                                spécifiques
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption customin whiter customout tp-resizeme"
                                 data-x="right"
                                 data-hoffset="-20"
                                 data-y="center"
                                 data-voffset="20"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:100% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                                 data-start="1100"
                                 data-speed="600"
                                 data-easing="Linear.easeNone"
                                 data-endspeed="600"
                                 data-endeasing="Linear.easeNone"
                            ><hr class="md">
                            </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-delay="5000" data-masterspeed="600" data-slotamount="7" data-transition="fade">
                            <!-- MAIN IMAGE -->
                            <img src="main/images/banner-3.jpg" alt="">
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption sfr whiter h4 tp-resizeme"
                                 data-x="right"
                                 data-hoffset="-15"
                                 data-y="center"
                                 data-voffset="-80"
                                 data-speed="1000"
                                 data-start="500"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300">
                                efficacité
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption sfr whiter h2 tp-resizeme"
                                 data-x="right"
                                 data-hoffset="-20"
                                 data-y="center"
                                 data-voffset="-40"
                                 data-speed="1000"
                                 data-start="600"
                                 data-easing="Back.easeInOut"
                                 data-endspeed="300">
                                énergétique
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption customin whiter customout tp-resizeme"
                                 data-x="right"
                                 data-hoffset="-20"
                                 data-y="center"
                                 data-voffset="20"
                                 data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:100% 50%;"
                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"

                                 data-start="1100"
                                 data-speed="600"
                                 data-easing="Linear.easeNone"
                                 data-endspeed="600"
                                 data-endeasing="Linear.easeNone"
                            ><hr class="md">
                            </div>
                        </li>
                        <!-- SLIDE  -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Slider -->
    <div class="double-border"></div>
    <!-- Start Lead Block -->
    <div class="lead-block">
        <div class="container">
            <div class="tabs">
                <div class="tab-content">
                    <div id="sampletab1" class="tab-pane active">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <p>Les systèmes d'éclairage à LED offrent la révolution la plus prometteuse dans l'éclairage depuis l’introduction des ampoules par EDISON il y a plus de 130 ans.</p>
                                <p>Les sources lumineuses LED sont en train de s’imposer dans tous les domaines d’applications grâce à leur haut rendement lumineux (une efficacité lumineuse pouvant atteindre aujourd'hui jusqu'à 130 lm/W) et leurs durées de vie élevées (jusqu'à 20 ans d’utilisation).</p>
                                <hr class="md"><div class="clearfix"></div>

                            </div>
                            <div class="col-md-6 col-sm-6 hidden-xs">
                                <img src="main/images/Schema.jpg" alt="" style="margin-top:-30px">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Lead Block -->
    <!-- Start Featured Projects -->
    <div class="featured-projects">
        <div class="container">
            <h2><small>DONNER VIE A VOTRE</small> ARCHITECTURE</h2>
            <div class="row">
                <div class="col-md-4 col-sm-4 format-standard">
                    <a href="downlights.html" class="featured-project-block media-box">
                        <img src="main/images/interieur.jpg" alt="" class="featured-image">
                        <span class="project-overlay">
                        	<span class="project-title">éclairage précis et direct</span>
                        	<span class="project-cat">intérieur</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 format-standard">
                    <a href="urbain.html" class="featured-project-block media-box">
                        <img src="main/images/public.jpg" alt="" class="featured-image">
                        <span class="project-overlay">
                        	<span class="project-title">Luminaires très appréciés</span>
                        	<span class="project-cat">urbain</span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4 col-sm-4 format-standard">
                    <a href="muraux.html" class="featured-project-block media-box">
                        <img src="main/images/exterieur.jpg" alt="" class="featured-image">
                        <span class="project-overlay">
                        	<span class="project-title">lumière adaptée aux besoins</span>
                        	<span class="project-cat">extérieur</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Featured Projects -->


@endsection
