<?php

namespace view\Play;

function Play($Q_Kanjis)
{
    //$Q_Kanjis = escape($Q_Kanjis);
    $json_Kanjis = json_encode($Q_Kanjis);

?>

<div class = "container m-5 py-1">
    <h1 class="sr-only">漢字タイピング</h1>

    <div class="row">
        <div class="col">
            <span class="h2">計</span>
            <span id="P-Num" class="h2"></span>
            <span class="h2">ポイント</span>
        </div>
        <div class="h2 col-auto">
            <span class="h2">残り</span>
            <span id="K-Time" class="h2"></span>
            <span class="h2">秒</span>
        </div>
    </div>

            
    <div id="white-container" class="bg-white p-4 shadow-sm mx-auto rounded">
        <div>
            <span class="h2">第</span>
            <span id="Q-Num" class="h2"></span>
            <span class="h2">問</span>

        </div>
        <div id="K_Question" class="h1 text-center">
        </div>

        <div class="K_figure">
            <span></span>
            <span></span>
        </div>
        
        <div id="K-output" class="h3 text-center mt-5 pt-5">
            　　　　　　　　　　        
        </div>
            <div class="form-group mt-5">
                <label for=""></label>
                <input type="text" id="K-input" class="h2 form-control-TO" placeholder="ここに解答を入力し、Enterボタンを押してください。"  autofocus maxlength="20">
            </div>

            <div class="text-right">
                <button id="btn-Pass" class="btn btn-danger shadow-sm">パス</button>
            </div>
    </div>

    <form name="resultForm" action="<?php the_url('result'); ?>" method="POST" novalidate autocomplete="off">
        <input id="result_input" type="hidden" name="K_result" value="">
        <input id="K_submit" type="submit" value="回答" class="d-none col btn btn-success shadow-sm">
    </form>


</div>

<script>
    let clean_json_Kanjis = '<?php echo $json_Kanjis; ?>'.replace(/[\u0000-\u001F]+/g, "");
    let js_Kanjis_Origin = JSON.parse(clean_json_Kanjis);
</script>

<?php
}
