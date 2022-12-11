<?php
/* Smarty version 3.1.43, created on 2022-12-11 22:50:02
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_6396508a30b1a9_07149664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1670792566,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6396508a30b1a9_07149664 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/classic/modules/ps_imageslider/views/templates/hook/slider.tpl -->
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Pokaz slajdów">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://sjp.pl/najlepsze">
            <figure>
              <img src="http://localhost/modules/ps_imageslider/images/3d5adf287192111a33dde1cb963c4afbb06d2d68_e6cc1a30-2dec-4dc5-b0f2-c5b656909d5b.jpg" alt="Ale one są wspaniałe" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase"></h2>
                  <div class="caption-description"><h1><strong><span style="color:#00d3b3;">Super kursy</span></strong></h1>
<p><span style="color:#00d3b3;">Nasze kursy są najlepsze.</span></p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-PL&amp;utm_content=download">
            <figure>
              <img src="http://localhost/modules/ps_imageslider/images/516d5c048a6871b0a9b00e74bf2071bae7c5670b_7869fd17-9599-4a5e-9b03-4748a3dae016.png" alt="Ależ one są dobre" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase"></h2>
                  <div class="caption-description"><h3><span style="color:#ae542f;">Ależ one są dobre</span></h3>
<p><span style="color:#ae542f;">Są tak dobre, że będziesz zadowolony.</span></p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Poprzedni">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Następny">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<!-- end /var/www/html/themes/classic/modules/ps_imageslider/views/templates/hook/slider.tpl --><?php }
}
