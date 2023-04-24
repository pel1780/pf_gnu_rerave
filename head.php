<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>


<?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
<?php
include G5_THEME_PATH.'/doc/assets.php';
?>
<div class="Wrap">
        <header class="header mainH">
            <div class="inner flex">
                <h1>
                    <a href="/">
                        Rerave
                    </a>
                </h1>
                <nav class="gnb">
                    <ul class="flex">
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/products.php">PRODUCTS</a>
                            <ul>
                                <li><a href="<?php echo G5_THEME_URL ?>/doc/products.php">전체보기</a></li>
                                <li><a href="<?php echo G5_THEME_URL ?>/doc/pro_itm01.php">페넬라겐® 리프팅 마스크</a></li>
                                <li><a href="<?php echo G5_THEME_URL ?>/doc/pro_itm02.php"> 페넬라겐® 크림</a></li>
                                <li><a href="<?php echo G5_THEME_URL ?>/doc/pro_itm03.php">스타피쉬 마스크</a></li>
                                <li><a href="<?php echo G5_THEME_URL ?>/doc/pro_itm04.php">모이스처라이징 마스크</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/penellagen.php">PENELLAGEN</a>
                            <ul>
                                <li><a href="<?php echo G5_THEME_URL ?>/doc/penellagen.php">페넬라겐</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/tested.php">CLINICALLY TESTED</a>
                            <ul>
                                <li><a href="<?php echo G5_THEME_URL ?>/doc/tested.php">임상시험</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo G5_THEME_URL ?>/doc/brand.php">BRAND STORY</a>
                            <ul>
                                <li><a href="<?php echo G5_THEME_URL ?>/doc/brand.php">브랜드 스토리</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <button class="menu_bar btn_o"><span>bar</span></button>
            </div>
        </header>
