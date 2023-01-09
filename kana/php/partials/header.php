<?php

namespace partials;

use lib\Auth;
use lib\Msg;

function header()
{
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>読みがなタイピング</title>
        <meta name="description" content="漢字の読みがなをあてるクイズができます。漢検1級～5級までの難易度の漢字を掲載しています。">
        <link rel="icon" href="<?php echo BASE_IMAGE_PATH; ?>i02.png">
        <!-- <link rel="icon" href=""> -->
        <link href="https://fonts.googleapis.com/css2?family=Yuji+Syuku&display=swap" rel="stylesheet">
        <!-- <link href="//fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet"> -->
        <link rel="stylesheet" href="<?php echo BASE_CSS_PATH; ?>style.css">
    </head>

    <body>
        <div id="container">
            <header class="container m-3">
                <nav class="row align-items-center py-2 ml-2">
                    <a href="<?php the_url('/'); ?>" class="d-flex align-items-center mb-3 mb-md-0 ml-3">
                        <img width="400" class="mr-2" src="<?php echo BASE_IMAGE_PATH; ?>i03.png" alt="読みがなタイピング　サイトロゴ">
                    </a>

                    <!-- <div class="col-md-auto">
                    <a href="" class="btn btn-primary mr-2">登録</a>
                    <a href="">ログイン</a>
                </div>  -->
                </nav>
            </header>

            <main>
                
<?php
Msg::flush();
}
?>