@extends('layouts.appsite', ['title'=>'Contact'])

@section('content')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-up">Nous contactez</h2>
                <p data-aos="fade-up">GUINEA HEALTH CARE AND MEDICAL SERVICES (HCMS-GUINEA) est une organisation non
                    gouvernementale qui a pour but de faire la promotion de la santé à travers une approche
                    participative visant l’implication des populations dans la conception, mise en œuvre et
                    le suivi des politiques en matière de santé.
                    Depuis des années, nous travaillons avec les communautés afin de contribuer à
                    l’amélioration de leur condition de santé.</p>
            </div>

            <div class="row justify-content-center">

                <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Nos adresse</h3>
                        <p>Conakry, Guinée</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-box">
                        <i class="bx bx-envelope"></i>
                        <h3>Email</h3>
                        <p>onghcms@gmail.com</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-box">
                        <i class="bx bx-phone-call"></i>
                        <h3>Contact</h3>
                        <p> +224 627 944 979</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
                <div class="col-xl-9 col-lg-12 mt-4">
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom" />
                                @error('name')
                                    <span class="text-danger text-sm ">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Votre Email" />
                                @error('email')
                                    <span class="text-danger text-sm ">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" />
                            @error('subject')
                                <span class="text-danger text-sm ">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            @error('message')
                                <span class="text-danger text-sm ">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="sent-message">
                                @if (Session::has('contact_creer'))
                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('contact_creer') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div><button class="btn-lg btn btn-primary" type="submit">Envoyer</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
