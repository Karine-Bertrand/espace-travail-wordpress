<?php

/**
 * Plugin Name: plugin qui ne fait rien
 * Description: essai avec plugin 
 * Author: c'est moi!
 */

function activatedHook(){
    error_log("********** plugin ********** ACTIVE **********") ;
}

function deactivatedHook()
{
    error_log("********** plugin ********** DESACTIVE **********");
}

function uninstalldHook()
{
    error_log("********** plugin ********** DESINSTALLE **********");
}

register_activation_hook(__FILE__, 'activatedHook');
register_deactivation_hook(__FILE__, 'deactivatedHook');
register_uninstall_hook(__FILE__, 'uninstalldHook');

 ?>