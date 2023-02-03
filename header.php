<?php
/**
 * Main Header file
 * 
 * @package hoha
 */

$menu_class = \HOHA\Inc\Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id('kilo-header-menu');

$header_menus = wp_get_nav_menu_items($header_menu_id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="uganda, hands of hope, hoha, children, women, health, education, iganga, jinja, kamuli, luuka, ngo, pads, tailoring">
    <?php wp_head();?>
    <style>
        #owl-demo .item img{
            display: block;
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body <?php body_class(); ?>>
<?php 
    if( function_exists('wp_body_open')){
        wp_body_open();
    }
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="/">HOHA.ORG.UG</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <?php if( !empty($header_menus) && is_array($header_menus)){ ?>
        <ul class="navbar-nav ml-auto">
          <?php
                foreach($header_menus as $menu_item){
                  if(! $menu_item->menu_item_parent){
                    $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                    $has_children = ! empty($child_menu_items) && is_array($child_menu_items);

                    if(! $has_children){?>
                        <li class="nav-item active"><a href="<?php echo esc_url( $menu_item->url); ?>" class="nav-link"><?php echo esc_html($menu_item->title);?></a></li>
                    <?php }
                  }else{?>
                      <li class="nav-item dropdown">
                          <a id= "navbarDropdown" href="<?php echo esc_url( $menu_item->url) ?>" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" ><?php echo esc_html($menu_item->title);?></a>
                          <ul class="dropdown-menu animate slideIn" aria-labelledby="navbarDropdown" >
                              <?php foreach($child_menu_items as $child_menu_item){ ?>
                                  <li>
                                      <a href="<?php echo esc_url( $child_menu_item->url) ?>" class="dropdown-item"><?php echo esc_html($child_menu_item->title);?></a>
                                  </li>     
                              <?php } ?>
                          </ul>
                      </li>
                  <?php }
                
                } ?>
                <li class="nav-item btn-warning">
                  <a href="https://gofund.me/a1828fd4" class="nav-link">Donate</a>
                </li>
        </ul>
      <?php } ?>
   
    </div>
  </div>
</nav>
  <!-- END nav -->