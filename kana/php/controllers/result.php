<?php 
namespace controller\Result;

use function view\Result\Result;

function get(){
    redirect('home');
}

function post() {

    $K_Jresults = get_param('K_result',null);
    $K_results = json_decode($K_Jresults);
    
    $count = [0,0,0];
    $result_Mess = "お疲れ様でした！";


    foreach($K_results as $K_result){
        if($K_result -> flg === 0){
            $count[0]++;
        } else if($K_result ->flg === 1){
            $count[1]++;
        } else {
            $count[2]++;
        }
    }

    if($count[0] < 6){
        $result_Mess ="ざんねん！まずは基礎固めから";
    }else if($count[0] < 11){
        $result_Mess ="おしい！次回も頑張りましょう";
    }else if($count[0] < 21){
        $result_Mess ="なかなかやりますね！さらなるレベルアップを期待しています";
    }else if($count[0] < 31){
        $result_Mess ="すごい！漢字もタイピングも一流ですね";
    }else if($count[0] >= 31){
        $result_Mess ="素晴らしい！あなたこそが漢字打鍵王です。";
    } else {
        return;
    }

    
    Result($K_results,$count,$result_Mess);
    
}