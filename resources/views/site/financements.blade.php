@extends('layouts.appsite', ['title'=>'Financements'])

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('index') }}">Acceuil</a></li>
                    <li><a href="#">Information</a></li>
                </ol>
                <h2>Financements </h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 entries">

                        <article class="entry entry-single">


                            <h2 class="entry-title">
                                <a href="#">Financements </a>
                            </h2>



                            <div class="entry-content">
                                <p>
                                    Selon l’article 13 des statuts de HCMS-GUINEA

                                    Les ressources de GUINEA HEALTH AND MEDICAL SERVICES (HCMS-GUINEA) proviennent de :
                                <ul>
                                    <li>Souscriptions des membres fondateurs ;</li>
                                    <li> Droits d’adhésion ;</li>
                                    <li> Cotisations régulières des membres ;</li>
                                    <li> Souscriptions volontaires des membres d’honneur et des partenaires ;</li>
                                    <li> Dons et legs ;</li>
                                    <li> Subventions d’organisations privées ou publiques ;</li>
                                    <li> Revenus générés par les activités du réseau ;</li>
                                    <li> Toutes autres contributions admises par les textes en vigueur</li>
                                </ul>
                                </p>


                                <blockquote>
                                    <i class="icofont-quote-left quote-left"></i>
                                    <p>
                                        Financements.
                                    </p>
                                    <i class="las la-quote-right quote-right"></i>
                                    <i class="icofont-quote-right quote-right"></i>
                                </blockquote>


                            </div>

                            <div class="entry-footer clearfix">
                                <div class="float-left">
                                    <i class="icofont-folder"></i>
                                    <ul class="cats">
                                        <li><a href="#">Business</a></li>
                                    </ul>

                                    <i class="icofont-tags"></i>
                                    <ul class="tags">
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Tips</a></li>
                                        <li><a href="#">Marketing</a></li>
                                    </ul>
                                </div>

                                <div class="float-right share">
                                    <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                                    <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                                    <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
                                </div>

                            </div>

                        </article><!-- End blog entry -->



                    </div><!-- End blog entries list -->



                </div>

            </div>
        </section><!-- End Blog Section -->

    </main><!-- End #main -->
@endsection
