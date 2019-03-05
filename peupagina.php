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
$titolPagina="Peu de pàgina per defecte";
$titolEntrada="Peu de pàgina per defecte";
$role="administrator";
$id="peu_pagina_per_defecte";
add_menu_page($titolPagina,$titolEntrada,$role,$id); ;
}
add_action('admin_menu','admin_menu_peu_pagina');
?>
