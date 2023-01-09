<?php 
namespace view\home;

use function view\InquiryForm\InquiryForm;

function home() {
    ?>


<div class="row bg-white shadow-sm m-5 rounded p-3">
    <a href="<?php the_url('selectlevel'); ?>" class="col-md-auto h5">ゲーム開始</a>
    <a href="<?php the_url('announcement'); ?>" class="col-md-auto h5">お知らせ</a>
    <a href="<?php the_url('inquiryform'); ?>" class="col-md-auto h5">お問い合わせフォーム</a>
    <a href="<?php the_url('privacypolicy'); ?>" class="col-md-auto h5">プライバシーポリシー</a>
</div>


<div class="row bg-white shadow-sm m-5 rounded p-3">
    <div class="h5 text-left">
        <h3 class="mb-3"><b>当サイトについて</b></h3>
        当サイトでは、漢字の読みがなをあてるゲームに挑戦することができます。
        制限時間内にたくさん解答して、高得点を目指してください。<br>
        難易度は、漢検1級レベル～5級レベルまで選択できます。<br>
        無料で遊べますので、暇つぶしや漢字学習にどうぞ。<br>

        <h3 class="mt-5 mb-3"><b>ゲームのルール</b></h3>
        <ul>
            <li class="mb-2">画面中央に漢字が表示されるので、その読みがなを入力ボックスに"ひらがな"で入力し、Enterボタンを押してください。</li>
            <li class="mb-2">Enterを押すと、正解の場合は「せいかい」と表示され、１ポイント入ります。</li>
            <li class="mb-2">不正解の場合は「ふせいかい」と表示されます。</li>
            <li class="mb-2">どうしても答えが分からない場合は、「パス」ボタンを押してください。次の問題が表示されます。</li>
            <li class="mb-2">答えは、送りがなを含めて入力してください。</li>
            <li class="mb-2">制限時間は60秒です。</li>
            <li class="mb-2">制限時間が0秒になると、結果発表画面に移動します。</li>
            <li class="mb-2">正解の数が増えると、正答率が上がります。逆に、不正解やパスが増えると、正答率が下がります。</li>
        </ul>
    </div>
</div>

<?php
}
?>