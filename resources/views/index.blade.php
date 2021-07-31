@extends('layouts.appsite', ['title'=>'Acceuil'])

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container" data-aos="fade-in">
            <h1><?= ucfirst(strtolower(config('app.name'))) ?></h1>
                                                        <h2>GUINEA HEALTH CARE AND MEDICAL SERVICES (HCMS-GUINEA)</h2>
                                                        <div class="d-flex align-items-center">
                                                        <i class="bx bxs-right-arrow-alt get-started-icon"></i>
                                                          <a href="#about" class="btn-get-started scrollto">HCMS GUINEA</a>
                            </div>
                             </div>
                                                                                                                            </section><!-- End Hero -->

                                                                                                                            <main id="main">

                                                                                                                                <!-- ======= Why Us Section ======= -->
                                                                                                                                <section id="why-us" class="why-us">
                                                                                                                                    <div class="container">

                                                                                                                                        <div class="row">
                                                                                                                                            <div class="col-xl-4 col-lg-5" data-aos="fade-up">
                                                                                                                                                <div class="content">
                                                                                                                                                    {{-- <h3><?= ucfirst(strtolower(config('app.name'))) ?></h3> --}}
                                                                                                                                                    <p>
                                                                                                                                                    GUINEA HEALTH CARE AND MEDICAL SERVICES (HCMS-GUINEA) est une organisation non
                                                                                                                                                        gouvernementale qui a pour but de faire la promotion de la santé à travers une approche
                                                                                                                                                        participative visant l’implication des populations dans la conception, mise en œuvre et
                                                                                                                                                        le suivi des politiques en matière de santé.
                                                                                                                                                        Depuis des années, nous travaillons avec les communautés afin de contribuer à
                                                                                                                                                        l’amélioration de leur condition de santé.
                                                                                                                                                    </p>
                                                                                                                                                    <div class="text-center">
                                                                                                                                                        <a href="{{ route('vision.mission.buts') }}" class="more-btn">plus de detail <i class="bx bx-chevron-right"></i></a>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="col-xl-8 col-lg-7 d-flex">
                                                                                                                                                <div class="icon-boxes d-flex flex-column justify-content-center">
                                                                                                                                                    <div class="row">
                                                                                                                                                        <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                                                                                                                                            <div class="icon-box mt-4 mt-xl-0">
                                                                                                                                                                <i class="bx bx-receipt"></i>
                                                                                                                                                                <h4>Renforcement des capacités</h4>
                                                                                                                                                                <p>Notre organisation intervient en appui aux acteurs locaux en renforçant leurs compétences afin qu’ils s’impliquent activement dans la promotion de la santé et la prévention des maladies</p>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                                                                                                                                                            <div class="icon-box mt-4 mt-xl-0">
                                                                                                                                                                <i class="bx bx-cube-alt"></i>
                                                                                                                                                                <h4>Promotion de la santé</h4>
                                                                                                                                                                <p>Notre approche de promotion de la santé, se repose sur les acteurs et influenceurs communautaires avec qui nous travaillons pour la définition des objectifs en matière de communication pour un changement de comportement</p>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                        <div class="col-xl-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                                                                                                                                                            <div class="icon-box mt-4 mt-xl-0">
                                                                                                                                                                <i class="bx bx-images"></i>
                                                                                                                                                                <h4>Plaidoyer</h4>
                                                                                                                                                                <p>Notre but en matière de plaidoyer est de rappeler aux autorités politiques et locales compétentes, les principes incontournables sur lesquels nous souhaitons fonder la reforme de la promotion de la santé</p>
                                                                                                                                                            </div>
                                                                                                                                                        </div>
                                                                                                                                                    </div>
                                                                </div>
                                                               </div>
                                                           </div>

                                                                    </div>
                                                            </section><!-- End Why Us Section -->
                                                         <!-- ======= Blog Section ======= -->
                                                        <section id="blog" class="blog">
                                                          <div class="container">
                                                             <div class="section-title">
                                                            <h2 data-aos="fade-up">Activités</h2>
                                                            <p data-aos="fade-up"></p>
                                                            </div>
                                                                <div class="row">
                                                            @foreach ($activites as $activite)

                                                              <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                                                                <article class="entry">

                                                                  <div class="entry-img">
                                                                    <img src="{{ asset('/uploads/activites') }}/{{ $activite->image }}" alt="" class="img-fluid">
                                                                  </div>

                                                                  <h2 class="entry-title">
                                                                    <a href="/activite-detail/{{ $activite->id }}">{!! $activite->titre !!}</a>
                                                                  </h2>

                                                                  <div class="entry-meta">
                                                                    <ul>
                                                                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">{{ $activite->user->name }}</a></li>
                                                                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">{{ $activite->created_at }}</time></a></li>
                                                                    </ul>
                                                                  </div>

                                                                  <div class="entry-content">
                                                                    <p>
                                                                      {!! substr($activite->contenu, 0, 250) !!}
                                                                    </p>
                                                                    <div class="read-more">
                                                                      <a href="/activite-detail/{{ $activite->id }}">Lire tout</a>
                                                                    </div>
                                                                  </div>

                                                                </article><!-- End blog entry -->
                                                              </div>
                                                            @endforeach

                                                            </div>


                                                            <div class="blog-pagination" data-aos="fade-up">
                                                              {{ $activites->links() }}
                                                            </div>

                                                          </div>
                                                        </section><!-- End Blog Section -->
                                                    </main><!-- End #main -->
@endsection
