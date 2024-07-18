<?php
/* Smarty version 4.3.1, created on 2024-07-16 09:50:18
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6696425a62d240_08697734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1720432138,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6696425a62d240_08697734 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Conteneur carrousel">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="https://www.prestashop-project.org">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/11655907cfd19e95cccbc3da30426608ac548396_CONSRRUCTION.png" alt="sample-1" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Outils de Construction</h2>
                  <div class="caption-description"><h3></h3>
<p>Les matériaux de construction sont des substances utilisées pour créer des structures et des bâtiments. </p>
<p></p></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/91d3d19e558e219c3a46aa9f0727622e3c2184cb_informatique outils.png" alt="sample-2" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Outils Informatique</h2>
                  <div class="caption-description"><p>Les outils informatiques jouent un rôle crucial dans la conception, la gestion et l'exécution de projets de construction.</p></div>
                </figcaption>
                          </figure>
          </a>        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="https://www.prestashop-project.org">            <figure>
              <img src="http://localhost/prestashop/modules/ps_imageslider/images/5bd37ea8fe2e56e51a2f13926c909e4181720be5_LUXE2.png" alt="sample-3" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Luxe</h2>
                  <div class="caption-description"><p>Le luxe dans le secteur de la construction et de l'immobilier se traduit par une attention méticuleuse aux détails, une qualité exceptionnelle des matériaux et des finitions, ainsi que des caractéristiques et services exclusifs. </p></div>
                </figcaption>
                          </figure>
          </a>        </li>
          </ul>
    <div class="direction" aria-label="Boutons du carrousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Précédent">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Suivant">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
