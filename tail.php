<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>



<footer class="footer">
            <div class="inner flex">
                <div class="logo">
                    <a href="/"><img src="<?php echo G5_THEME_URL ?>/image/foot_logo.svg" alt=""></a>
                </div>
                <div class="foot_content flex">
                    <div class="info">
                        <strong>INFO</strong>
                        <ul>
                            <li>대표이사 : 양승찬</li>
                            <li>사업자 등록번호 : 853-87-00953</li>
                            <li>통신판매업신고 : 제2021-서울구로-2322호</li>
                            <li>(주) 스타스테크 서울특별시 구로구 디지털로 30길 28 마리오타워 1203호 스타스테크</li>
                            <li> FAX : +82-70-4334-8255</li>
                        </ul>
                    </div>
                    <div class="cs">
                        <strong>CS CENTER</strong>
                        <ul>
                            <li><a href="tel:051-123-1234">고객상담센터 1544-9166</a></li>
                            <li>평일 : 10:00~17:00</li>
                            <li>점심 : 12:00~13:00</li>
                        </ul>
                    </div>
                    <div class="copy"> &copy; 2022 rerave. All Rights Reserved.</div>
                </div>
            </div>
        </footer>
    </div>
    <div class="toTop">
        <button class="btn_o"><i class="xi-angle-up-thin"></i></button>
    </div>

     


    <script src="<?php echo G5_THEME_URL ?>/js/slick.min.js"></script>
    <script src="<?php echo G5_THEME_URL ?>/js/main.js"></script>



<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");