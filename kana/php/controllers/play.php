<?php 
namespace controller\Play;
use Throwable;

use db\KanjiQuery;
use function view\Play\Play;

function get() {

    $level = get_param('level',null,false);    
    $Q_Kanjis = KanjiQuery::fetchByLevel($level);
    Play($Q_Kanjis);    
}