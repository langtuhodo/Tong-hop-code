// remove Portfolio functiones flatsome
function remove_menus () {
global $menu;
$restricted = array(__('Portfolios'));
end ($menu);
while (prev($menu)){
$value = explode(' ',$menu[key($menu)][0]);
if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
}
}
add_action('admin_menu', 'remove_menus');