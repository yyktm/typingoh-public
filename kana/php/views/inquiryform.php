<?php 
namespace view\InquiryForm;

function InquiryForm($inquiry) {
    ?>
<div class = "container m-5 py-1">
    <h1 class="h2 mb-3">お問い合わせフォーム</h1>
            
    <div class="bg-white p-4 shadow-sm mx-auto rounded">
        <form action="<?php echo CURRENT_URI; ?>" method="POST" class="validate-form" novalidate>
            <div class="form-group">
                <label for="MailAddress">返信用アドレス（返信が必要な場合のみ）</label>
                <input name="MailAddress" id="MailAddress" type="text" value="<?php echo $inquiry->mailAddress; ?>" class="form-control validate-target" pattern=".+@.+" tabindex="1">
                <div class="invalid-feedback"></div>
            </div>
            <div class="form-group">
                <label for="InquiryType">種別</label>
                <select name="InquiryType" id="InquiryType" class="form-control" tabindex="2">
                    <option value="質問" selected>質問</option>
                    <option value="要望">要望</option>
                    <option value="バグ報告">バグ報告</option>
                    <option value="その他">その他</option>
                </select>
            </div>
            <div class="form-group mt-3 pt-3">
                <label for="body">お問い合わせ内容</label>
                <textarea class="w-100 form-control validate-target" name="body" id="body" value="<?php echo $inquiry->body; ?>" rows="5"  minlength="10" maxlength="400" tabindex="3"></textarea>
                <div class="invalid-feedback"></div>
            </div>
            <div class="d-flex align-items-center">
                <div>
                    <input type="submit" value="送信" class="btn btn-primary shadow-sm mr-3" tabindex="4">
                </div>
                <div>
                    <a href="<?php the_url('/'); ?>" tabindex="5">戻る</a>
                </div>
                
            </div>
        </form>
    </div>
</div>


<?php
}

function InquiryFormPost($bool){
?>
<?php if ($bool) : ?>
<h2 class="h2 ml-4">お問い合わせを送信しました</h2>
<a href="<?php the_url('home'); ?>" class="h2 ml-4">トップページはこちら</a>

<?php else : ?>
<h2 class="h2 ml-4">お問い合わせの送信に失敗しました</h2>
<a href="<?php the_url('home'); ?>" class="h2 ml-4">トップページはこちら</a>
<?php endif; ?>

<form name="InqResult" action="<?php the_url('home'); ?>" method="GET" novalidate autocomplete="off">
    <input id="ReInq" type="submit" value="回答" class="d-none col btn btn-success shadow-sm">
</form>

<script>
    document.InqResult.submit()
</script>

<?php
}