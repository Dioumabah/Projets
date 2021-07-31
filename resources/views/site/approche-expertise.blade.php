@extends('layouts.appsite', ['title'=>'Approche et expertise'])

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('index') }}">Acceuil</a></li>
                    <li><a href="#">Information</a></li>
                </ol>
                <h2>Approche et expertise </h2>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">

                <div class="row">

                    <div class="col-lg-12 entries">

                        <article class="entry entry-single">


                            <h2 class="entry-title">
                                <a href="#">Approche et expertise </a>
                            </h2>

                            <div class="entry-content">
                                <p>
                                    <img src="{{ asset('assets/hcms-guinea/approche.PNG') }}" alt="">

                                </p>


                                <blockquote>
                                    <i class="icofont-quote-left quote-left"></i>
                                    <p>
                                        Approche et expertise.
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
