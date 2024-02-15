 <!-----MISC---->
 <div class="misc">
     <button class="scroll-to-top-btn" data-visible="false" aria-label="scroll to top of the page">
         <img src="/wp-content/themes/zosak-consulting/src/assets/icons/top-icon.svg" alt="scroll to top icon" />
     </button>
 </div>
 <!--------------------->
 <div class="overlay-image" data-visible="false"></div>
 <!-----FOOTER---->
 <footer class="footer pb-4">
     <div class="container">
         <div class="footer__wrapper">
             <div class="footer__inner-wrapper">
                 <a href="index.html" class="footer__logo-wrapper">
                     <img src="/wp-content/themes/zosak-consulting/src/assets/images/logo-zosak-horizontal.svg"
                         alt="footer logo zosak" class="footer__logo mb-64" />
                 </a>
                 <nav class="footer__nav">
                     <ul class="footer__list">
                         <li class="footer__item">
                             <a class="footer__link" href="#">Naslovna</a>
                         </li>
                         <li class="footer__item">
                             <a class="footer__link" href="#offer">Što nudimo</a>
                         </li>
                         <li class="footer__item">
                             <a class="footer__link" href="#benefiti">Benefiti naših usluga</a>
                         </li>
                         <li class="footer__item">
                             <a class="footer__link" href="#o-nama">O nama</a>
                         </li>
                         <li class="footer__item">
                             <a class="footer__link" href="#contact">Kontakt</a>
                         </li>
                     </ul>
                 </nav>
             </div>
             <div class="footer__info-and-socials-wrapper">
                 <div class="footer__info-obrt">
                     <div class="info-obrt__oib"><img
                             src="/wp-content/themes/zosak-consulting/src/assets/icons/person-icon.svg"
                             alt="oib number by kim zosak"><span>Kim Zošak </span></div>
                     <div class="info-obrt__oib"><img
                             src="/wp-content/themes/zosak-consulting/src/assets/icons/oib-icon.svg"
                             alt="oib number by kim zosak"><span>OIB: 88703572310 </span></div>
                     <div class="info-obrt"><img
                             src="/wp-content/themes/zosak-consulting/src/assets/icons/building-icon.svg"
                             alt="oib number by kim zosak"> <span>Draganići 14, 10000 Zagreb</span></div>
                 </div>
                 <div class="footer__inner-wrapper">
                     <div class="footer__socials">
                         <a href="#"><img
                                 src="/wp-content/themes/zosak-consulting/src/assets/icons/gmail-white-icon.svg"
                                 aria-hidden="true" /></a>
                         <a href="#"><img
                                 src="/wp-content/themes/zosak-consulting/src/assets/icons/instagram-white-icon.svg"
                                 aria-hidden="true" /></a>
                         <a href="#"><img src="/wp-content/themes/zosak-consulting/src/assets/icons/fb-white-icon.svg"
                                 aria-hidden="true" /></a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="copyright">
         <div class="copyright__paragraph">
             <p>Copyright © 2023 - All Rights Reserved.</p>
             <p>Website kreirao i uredio: GALAC-DESIGN</p>
         </div>
         <div class="copyright-terms">
             <a href="<?php echo site_url('privatnost') ?>">Politika privatnosti</a>
             <span class="copyright-separator">|</span>
             <a href="<?php echo site_url('uvjeti') ?>">Uvjeti korištenja</a>
         </div>
     </div>
     <?php wp_footer() ?>
 </footer>
 <!--------------------->
 </body>

 </html>