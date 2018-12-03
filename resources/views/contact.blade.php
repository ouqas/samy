@extends('themain')
@section('title', 'Add Product')
@section('content')

    <!-- Start Page Header -->
    <div class="page-header" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 hidden-xs">
                    <ol class="breadcrumb">
                        <li><a href="index-2.html">accueil</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="double-border"></div>
    <div class="main" role="main" style="margin-top:30px">
        <div id="content" class="content full">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div id="map2" class="contact-over-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.3241029177047!2d-9.200941584386827!3d38.75626976285513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ecd2f24f74abf%3A0x56e87089eff4c4b0!2sRua+da+Quinta+do+Charquinho+25%2C+1500-054+Lisboa%2C+Portugal!5e0!3m2!1sfr!2sma!4v1538735133378" width="660" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="spacer-20"></div>
                        <h2>Contactez-nous</h2>
                        <div class="row">
                            <form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="http://www.werdell.com/mail/contact.php">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Nom*">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="company" name="company"  class="form-control input-lg" placeholder="Entreprise*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea cols="6" rows="7" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Envoyer maintenant!">
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                        <div id="message"></div>
                    </div>
                    <!-- Start Sidebar -->
                    <div class="col-md-4 sidebar right-sidebar">
                        <div class="widget sidebar-widget text_widget">
                            <h3 class="title">Coordonnées</h3>
                            <address>
                                R Qta Charquinho,<br>
                                25r/c E 1500-530 Lisbon-Portugal<br>
                                info@werdell.com<br>

                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->

@endsection
