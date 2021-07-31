@extends('layouts.appsite', ['title'=>'Promotion de la santé'])

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('index') }}">Acceuil</a></li>
                    <li><a href="#">Information</a></li>
                </ol>
                <h2>Promotion de la santé </h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 entries">

                        <article class="entry entry-single">


                            <h2 class="entry-title">
                                <a href="#">Promotion de la santé </a>
                            </h2>



                            <div class="entry-content">
                                <p>
                                    Notre approche de promotion de la santé, se repose sur les acteurs et influenceurs
                                    communautaires avec qui nous travaillons pour la définition des objectifs en matière de
                                    communication pour un changement de comportement.

                                    De nos jours, la stratégie de travail de notre organisation est centrée sur le
                                    développement des outils et stratégie de communication à fort impact local qui
                                    permettent d’apporter un changement au niveau local à travers le pouvoir d’action de la
                                    population.

                                    Depuis une plusieurs années, notre organisation développe des actions de promotion de la
                                    santé avec la forte participation des communautés autour des problèmes collectifs de
                                    santé comme : la santé de la reproduction, le paludisme, l’eau l’hygiène assainissement,
                                    le diabète, la lèpre et la santé maternelle et infantile.

                                </p>


                                <blockquote>
                                    <i class="icofont-quote-left quote-left"></i>
                                    <p>
                                        Promotion de la santé.
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
