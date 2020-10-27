@extends('site.layouts.index')

@section('center')
<div id="corpo-contato">
    <section id="home" class="d-flex">
        <!--home -->
        <div class="container align-self-center">
            <!--container -->
            <div class="row">
                <!--row -->
                <div class="col-md-12 capa">

                    <h1>Contatos</h1>
                    <a href="#espaco2" class="btn btn-lg btn-custom btn-botao">
                        Veja Mais
                    </a>

                </div>
            </div>
            <!--/row -->
        </div>
        <!--/container -->
    </section>
    <!--/home -->

    <section id="espaco"></section>
    <section id="espaco2"></section>
    
    <section id="contato">
        <div class="container">
            <div id="localiza">
                <p>Ative o endereço no seu GPS</p>
                <div class="row">
                    <div class="col-md-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3739.3589633955316!2d-49.97737868507759!3d-20.409304186337206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bd591c50021e99%3A0xe45dd47be2891b7!2sR.%20Fioravante%20Davanzo%2C%203548%20-%20Lot.%20Nova%20Boa%20Vista%2C%20Votuporanga%20-%20SP%2C%2015500-020!5e0!3m2!1spt-BR!2sbr!4v1584722999423!5m2!1spt-BR!2sbr"
                            width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact-page" class="container">
        <div class="bg">    
            <div class="row">   
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">Entrar Em Contato</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                            </div>                        
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">Informação De Contato</h2>
                        <address>
                            <p>RP Utilidades Gourmet</p>
                            <p>R. Fioravante Davanzo, 3548 - Lot. Nova Boa Vista</p>
                            <p>Votuporanga, São Paulo.</p>
                            <p>Celular: (17)99623-9436.</p>
                            <p>Email: rogério@rputlidades.com.br</p>
                            <p><a href="https://www.facebook.com/rputilidadesgourmet/">Facebook: RP Utilidades</a></p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">Social Networking</h2>
                            <ul>
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>              
            </div>  
        </div>  

    </section>

    <section id="espaco">
    </section>

    <section id="espaco2">
    </section>

</div>
@endsection