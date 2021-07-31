 <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-none d-lg-block">
     <div class="container d-flex">
         <div class="contact-info mr-auto">
             <ul>
                 <li><i class="icofont-envelope"></i><a href="mailto:onghcms@gmail.com"
                         target="blank">onghcms@gmail.com</a>
                 </li>
                 <li><i class="icofont-phone"></i> +224 627 944 979</li>
                 <li><i class="icofont-facebook"></i> <a
                         href="https://www.facebook.com/Guinea-Health-Care-and-Medical-Service-Hcms-Guinea-108925684076476">onghcms</a>
                 </li>
             </ul>

         </div>
         <div class="cta">
             <a href="#about" class="scrollto">Hcms Guinea</a>
         </div>
     </div>
 </section>

 <!-- ======= Header ======= -->
 <header id="header">
     <div class="container d-flex">

         <div class="logo mr-auto">
             {{-- <h1 class="text-light"><a href="{{ route('index') }}"><span>Flexor</span></a></h1> --}}
             <!-- Uncomment below if you prefer to use an image logo -->
             <a href="{{ route('index') }}"><img src="{{ asset('assets/hcms-guinea/logo.png') }}" alt=""
                     class="img-fluid"></a>
         </div>

         <nav class="nav-menu d-none d-lg-block">
             <ul>
                 <li class="{{ set_active_route('index') }}"><a href="{{ route('index') }}">Acceuil</a></li>
                 <li class="drop-down"><a href="">QUI NOUS SOMMES ? </a>
                     <ul>
                         <li class="{{ set_active_route('vision.mission.buts') }}"><a
                                 href="{{ route('vision.mission.buts') }}">Vision, mission, buts </a></li>

                         <li class="{{ set_active_route('impact.social') }}"><a
                                 href="{{ route('impact.social') }}">Impact social </a></li>
                         <li class="{{ set_active_route('financements') }}"><a
                                 href="{{ route('financements') }}">Financements</a></li>
                         <li class="{{ set_active_route('positionnement') }}"><a
                                 href="{{ route('positionnement') }}">Positionnement </a></li>
                         <li class="{{ set_active_route('approche.expertise') }}"><a
                                 href="{{ route('approche.expertise') }}">Approche et expertise </a></li>
                     </ul>
                 </li>
                 <li class="drop-down"><a href="">ACTIVITES </a>
                     <ul>
                         <li class="{{ set_active_route('renforcement.capacite') }}"><a
                                 href="{{ route('renforcement.capacite') }}">Renforcement des capacités </a></li>

                         <li class="{{ set_active_route('promotion') }}"><a
                                 href="{{ route('promotion') }}">Promotion de la santé </a></li>
                         <li class="{{ set_active_route('plaidoyer') }}"><a
                                 href="{{ route('plaidoyer') }}">Plaidoyer </a></li>
                     </ul>
                 </li>
                 {{-- <li><a href="#about">About</a></li>
                 <li><a href="#services">Services</a></li>
                 <li><a href="#portfolio">Portfolio</a></li> --}}
                 {{-- <li><a href="#team">Team</a></li>
                 <li><a href="#pricing">Pricing</a></li> --}}
                 {{-- <li><a href="blog.html">Blog</a></li> --}}
                 <li class="{{ set_active_route('contact') }}"><a href="{{ route('contact') }}">CONTACT</a></li>

             </ul>
         </nav><!-- .nav-menu -->

     </div>
 </header><!-- End Header -->
