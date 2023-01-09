<?php
//header("Location: kana/");
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>読みがなタイピング王</title>
        <meta name="description" content="漢字の読みがなをあてるクイズができます。">
        <link rel="icon" href="kana\images\i02.png">
        <link href="https://fonts.googleapis.com/css2?family=Yuji+Syuku&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="kana\css\style.css">
    </head>

    <body>
        <div id="container">
            <header class="container m-3">
                <nav class="row align-items-center py-2">
                    <a href="kana/" class="d-flex align-items-center mb-3 mb-md-0 ml-3">
                        <img width="400" class="mr-2" src="kana\images\i01.png" alt="読みがなタイピング王　サイトロゴ">
                    </a>
                </nav>
            </header>

            <main>
                <h1 class="sr-only">トップページ</h1>
                <a href="kana/" class="h2 ml-4">サイトはこちら</a>
                <form name="toTop" action="kana" method="GET" novalidate autocomplete="off">
                    <input id="ReTop" type="submit" value="サイトへ移動" class="d-none col btn btn-success shadow-sm">
                </form>
                
                <script>
                    document.toTop.submit();
                </script>
                
            </main>
            <footer class="text-center p-3">
 
            </footer>
 
        </div>
        <script src="<?php echo BASE_JS_PATH ?>play.js"></script>
        <script src="<?php echo BASE_JS_PATH ?>vendor/chart.js"></script>
        <script src="<?php echo BASE_JS_PATH ?>pie-chart.js"></script>
        <script src="<?php echo BASE_JS_PATH ?>form-validate.js"></script>
    </body>
    </html>