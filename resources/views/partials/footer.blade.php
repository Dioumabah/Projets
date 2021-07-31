 <!-- ======= Footer ======= -->
 <footer id="footer">

     <div class="footer-top">
         <div class="container">
             <div class="row">

                 <div class="col-lg-3 col-md-6 footer-contact">
                     <h3><?= ucfirst(strtolower(config('app.name'))) ?></h3>
                     <p>
                          <br>
                         Conakry<br>
                         Guineé <br><br>
                         <strong>Téléphone:</strong>  +224 627 944 979<br>
                         <strong>Email:</strong> onghcms@gmail.com<br>
                     </p>
                 </div>

                 <div class="col-lg-2 col-md-6 footer-links">
                     <h4>Liens</h4>
                     <ul>
                         <li><i class="bx bx-chevron-right"></i> <a href="{{ route('index') }}">Acceuil</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="{{ route('vision.mission.buts') }}">Vision, mission, buts</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="{{ route('promotion') }}">Promotion de la santé</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="{{ route('approche.expertise') }}">Approche et expertise</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="{{ route('contact') }}">Contact</a></li>
                     </ul>
                 </div>

                 <div class="col-lg-3 col-md-6 footer-newsletter">

                 </div>

                 <div class="col-lg-4 col-md-6 footer-links">
                     <h4>Activités</h4>
                     <ul>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Renforcement des capacités</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Promotion de la santé</a></li>
                         <li><i class="bx bx-chevron-right"></i> <a href="#">Plaidoyer</a></li>
                     </ul>
                 </div>

             </div>
         </div>
     </div>

     <div class="container d-lg-flex py-4">

         <div class="mr-lg-auto text-center text-lg-left">
             <div class="copyright">
                 &copy; Copyright <strong><span><?= ucfirst(strtolower(config('app.name'))) ?></span></strong>. Tout droit reservé
             </div>
             <div class="credits"> Designed by <a href="https://www.linkedin.com/in/mamadou-diouma-bah-8669b31b0" target="blank" class="text-white">Bmd Technologies</a>
             </div>
         </div>
         <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
             <a href="https://www.facebook.com/Guinea-Health-Care-and-Medical-Service-Hcms-Guinea-108925684076476"
                 class="facebook" target="blank"><i class="bx bxl-facebook"></i></a>
         </div>
     </div>
 </footer><!-- End Footer -->
