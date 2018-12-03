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
                        <li class="active">Acces</li>
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
                        <div class="spacer-20"></div>
                        <h2>Veuillez remplir ce formulaire pour recevoir le document</h2>
                        <div class="clearfix" style="margin-top:70px"></div>
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
                                        <input type="text" id="company" name="company" class="form-control input-lg" placeholder="Entreprise*">
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
                        <div class="clearfix" style="margin-top:220px"></div>
                        <div id="message"></div>
                    </div>
                    <!-- Start Sidebar -->

                </div>
            </div>
        </div>
    </div>
    <!-- End Body Content -->

@endsection
