<?php

require_once 'config.php';

// Library
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/router.php';

// Model
require_once SOURCE_BASE . 'models/abstract.model.php';
require_once SOURCE_BASE . 'models/kanji.model.php';
require_once SOURCE_BASE . 'models/inquiry.model.php';

// Message
require_once SOURCE_BASE . 'libs/message.php';

// DB
require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/kanji.query.php';
require_once SOURCE_BASE . 'db/inquiry.query.php';

// Partials
require_once SOURCE_BASE . 'partials/header.php';
require_once SOURCE_BASE . 'partials/footer.php';

// View
require_once SOURCE_BASE . 'views/home.php';
require_once SOURCE_BASE . 'views/announcement.php';
require_once SOURCE_BASE . 'views/inquiryform.php';
require_once SOURCE_BASE . 'views/privacypolicy.php';
require_once SOURCE_BASE . 'views/selectlevel.php';
require_once SOURCE_BASE . 'views/play.php';
require_once SOURCE_BASE . 'views/result.php';


use function lib\route;


session_start();

try {

    \partials\header();

    $url = parse_url(CURRENT_URI);
    $rpath = str_replace(BASE_CONTEXT_PATH, '', $url['path']);
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    
    route($rpath, $method);

    
    \partials\footer();
    
} catch(Throwable $e) {

    die('<h1>致命的なエラーが発生しました。</h1>');
    
}

