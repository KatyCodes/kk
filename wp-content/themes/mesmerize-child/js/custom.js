jQuery(document).ready(function($) {
  $('#page > div.header-wrapper > div > div.header-description.gridContainer.media-on-right > div > div.header-hero-media.col-md.col-xs-12 > div > div > img').addClass('  animated tada duration5 eds-on-hover  ');


  if ($('#menu-item-60').hasClass("current-menu-item")) {
    $("#main_menu > li.mesmerize-menu-cart").show();
    $('#offcanvas_menu > li.mesmerize-menu-cart').show();
  }

   $('.copyright').html("© 2018 Kachka and <a target='_blank' href ='https://dev-vista.com'>  Dev-Vista </a>");

   $("#page > div.footer.footer-content-lists.footer-border-accent.paralax > div > div > div > div.col-sm-4.flexbox.center-xs.middle-xs.content-section-spacing-medium.footer-column-black > div > div.footer-logo.space-bottom-small > h2 > span").html("<img src='http://localhost:8888/kachka/wp-content/uploads/2018/03/kachkaicon.png'></img>");

   
})
