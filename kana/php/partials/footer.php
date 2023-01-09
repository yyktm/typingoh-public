<?php
namespace partials;

function footer() {
?>
            </main>
            <footer class="text-center p-3">
                <div>
                    <a href="<?php the_url('home'); ?>">ホーム</a>
                </div>
                <span class="text-muted"> 「漢検」「漢字検定」は、公益財団法人日本漢字能力検定協会の登録商標です。</span><br>
                <span class="text-muted"> Copyright &copy; 漢字打鍵王. All Rights Reserved.</span>
 
            </footer>
 
        </div>
        <script src="<?php echo BASE_JS_PATH ?>play.js"></script>
        <script src="<?php echo BASE_JS_PATH ?>vendor/chart.js"></script>
        <script src="<?php echo BASE_JS_PATH ?>pie-chart.js"></script>
        <script src="<?php echo BASE_JS_PATH ?>form-validate.js"></script>
    </body>
    </html>
<?php 
} 
?>