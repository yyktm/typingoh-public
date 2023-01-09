<?php 
namespace controller\SelectLevel;

use function view\SelectLevel\SelectLevel;

function get() {
    $levelURL = get_url('play?level=');
    SelectLevel($levelURL);

}