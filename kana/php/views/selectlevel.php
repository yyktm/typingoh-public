<?php 
namespace view\SelectLevel;

function SelectLevel($levelURL) {
    ?>

<div class="bg-white shadow-sm m-5 rounded p-3">
    <div class="mb-3 h5">
        <a href="<?php echo $levelURL; ?>1">漢検1級：大学・社会人レベル</a>
    </div>
    <div class="mb-3 h5">
        <a href="<?php echo $levelURL; ?>2">漢検2級：高校卒業レベル</a>
    </div>
    <div class="mb-3 h5">
        <a href="<?php echo $levelURL; ?>3">漢検3級：中学卒業レベル</a>
    </div>
    <div class="mb-3 h5">
        <a href="<?php echo $levelURL; ?>4">漢検4級：中学在学レベル</a>
    </div>
    <div class="mb-3 h5">
        <a href="<?php echo $levelURL; ?>5">漢検5級：小学校6年生レベル</a>
    </div>

</div>

    <?php
}
?>