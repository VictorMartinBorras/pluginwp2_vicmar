<?php
/*
Plugin Name: Peu de pàgina per defecte per a noves entrades
Plugin URI:https://github.com/VictorMartinBorras/pluginwp2_vicmar.git
Description: Crea peus de pàgina per defecte per a noves entrades
Version: 0.1
Author:Victor Martin
Author URI:https://github.com/VictorMartinBorras
License: GNU GPLv3
*/
function admin_menu_peu_pagina(){
$titolPagina="Peu de pagina per defecte";
$titolEntrada="Peu de pagina per defecte";
$role="administrator";
$id="peu_pagina_per_defecte";
$nom_funcio="nouPeuPagDef";
add_menu_page($titolPagina,$titolEntrada,$role,$id, $nom_funcio);
}
add_action('admin_menu','admin_menu_peu_pagina');
add_action('wp_footer','afegPeuPagDef');

function nouPeuPagDef(){
include_once('formPeuPag.php');
}

function afegPeuPagDef(){
 echo "<div style='color: red;
 font-size: 10px;
 margin: 10px;'>".get_option('footer_text')."</div>";
}

?>
