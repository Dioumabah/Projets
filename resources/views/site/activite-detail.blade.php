@extends('layouts.appsite', ['title'=>'Deatail activité'])

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="{{ route('index') }}">Acceuil</a></li>
                <li><a href="#">Activité</a></li>
            </ol>
            <h2>{{ $activite->titre }} </h2>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{ asset('/uploads/activites') }}/{{ $activite->image }}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="#">{{ $activite->titre }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a
                                        href="#">{{ $activite->user->name }}</a></li>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a
                                        href="#"><time datetime="2020-01-01">{{ $activite->created_at }}</time></a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>
                               {!! $activite->contenu !!}
                            </p>



                            <blockquote>
                                <i class="icofont-quote-left quote-left"></i>
                                <p>
                                  {{ $activite->titre }}
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

                <div class="col-lg-4">

                    <div class="sidebar">

                        <h3 class="sidebar-title">Recherche</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text" class="typeahead">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </form>

                        </div><!-- End sidebar search formn-->


                        <h3 class="sidebar-title">Recent activités</h3>
                        <div class="sidebar-item recent-posts">
                            @foreach ($activites as $activite)
                                <div class="post-item clearfix">
                                <img src="{{ asset('/uploads/activites') }}/{{ $activite->image }}" alt="">
                                <h4><a href="/activite-detail/{{ $activite->id }}">{{ $activite->titre }}</a></h4>
                                <time>{{ $activite->created_at }}</time>
                            </div>
                            @endforeach



                        </div><!-- End sidebar recent posts-->


                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div>

        </div>
    </section><!-- End Blog Section -->

    </main><!-- End #main -->


@endsection
