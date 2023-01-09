<?php

namespace view\Result;

function Result($K_results,$count,$result_Mess)
{
?>

<div class = "container m-5 py-1">

    <div class="bg-white p-4 shadow-sm mx-auto rounded">
        <div>
            <h1 class="sr-only">読みがなクイズ、リザルト画面</h1>
            <h2 class="h1">
                ◆結果発表◆
            </h2>
            <span class="mr-1 h5"><?php echo $result_Mess; ?></span>
        </div>

        <div class="row">
            <div class="col">
                <!-- 左側 -->
                <?php Result_main($K_results,$count); ?>
            </div>
            <div class="col my-5">
                <!-- 右側 -->
                <?php Result_chart($count); ?>
            </div>
        </div>
    </div>

    
    
    <!-- 下側 -->
    <?php 
            Result_summary($K_results); 
        ?>
</div>



<?php
}

function Result_main($K_results,$count)
{
?>
    <div class="container text-center my-4">
        <div class="likes-green">
            <div class="h4 mb-0">正解数</div>
            <div class="display-1"><?php echo $count[0]; ?></div>

        </div>
        <div class="likes-blue">
            <div class="h4 mb-0 mt-5">正答率</div>
            <div class="display-1"><?php echo count($K_results) === 0 ? 0 : round(($count[0]/count($K_results))*100); ?>%</div>
        </div>
        <div class="row justify-content-around">
            <!-- <div class="likes-green col-auto">
                <div class="display-4"><?php echo $count[0]; ?></div>
                <div class="h4 mb-0">ポイント</div>
            </div>
            <div class="dislikes-red col-auto">
                <div class="display-1"><?php echo count($K_results); ?></div>
                <div class="h4 mb-0">解答中</div>
            </div> -->
        </div>
        <div class="mt-5 pt-5">
            <div class="h3">結果をツイートする！</div>
            <div class="h1">
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="読みがなクイズで<?php echo $count[0]; ?>点取りました！" data-url="typingoh/kana/" data-hashtags="読みがなタイピング王" data-show-count="false">Tweet</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            
        </div>
    </div>


<?php
}


function Result_chart($count)
{
    ?>

    <canvas id="chart" width="400" height="400" data-true="<?php echo $count[0] ?>" data-false="<?php echo $count[1] ?>" data-un="<?php echo $count[2] ?>"></canvas>
    
<?php
}


function Result_summary($K_results)
{

    if(count($K_results) === 0){
        return;
    }

?>

    <div class="mt-10 pl-4 mx-auto rounded">
        <h2 class="h4 mb-2 row">
            <div class="col-2 ml-5">
                <div class="pt-3 ml-5 text-right">正　誤</div>
            </div>
            <div class="col-4 ml-3 mr-3">
                <div class="col text-center">正しい解答</div>
                <div class="col text-center h3">問題</div>
            </div>
            <div class="col-4 ml-3 row">
                <div class="col d-flex align-items-center">あなたの解答</div>
            </div>
        </h2>
    </div>


    <div class="bg-white mt-3 p-4 shadow-sm mx-auto rounded">
        <ul class="list-unstyled">
        <?php foreach($K_results as $index => $K_result) : ?>
            <?php 
                    if($K_result->flg === 0){
                        $agree_label = '正　解';
                    } else if($K_result->flg === 1){
                        $agree_label = '不正解';
                    } else {
                        $agree_label = 'パ　ス';
                    }

                    if($K_result->flg === 0){
                        $agree_cls = 'badge-success';
                    } else if($K_result->flg === 1){
                        $agree_cls = 'badge-warning';
                    } else {
                        $agree_cls = 'badge-info';
                    }
                ?>
 
        <li class="bg-light shadow-sm mb-3 rounded p-3 pl-4 border">
            <h2 class="h4 mb-2 row">
                <div class="col-3 row">
                    <div class="col-5 h4 mt-2 align-bottom"><?php echo ++$index."．"; ?></div>
                    <div class="col-6 badge pt-3 align-middle <?php echo $agree_cls; ?>"><?php echo $agree_label; ?></div>
                </div>
                <div class="col-4 mr-5">
                    <div class="col text-center"><?php echo $K_result->answer; ?></div>
                    <div class="col text-center h3"><?php echo $K_result->question; ?></div>
                </div>
                <div class="col-5 row">
                    <div class="col d-flex align-items-center"><?php echo "「".$K_result->input."」"; ?></div>
                </div>
            </h2>
        </li>

                <?php endforeach; ?>
    </div>
            

<?php
}
