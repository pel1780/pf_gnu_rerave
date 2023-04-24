<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<main>
            <section class="mainVisual">
                <div class="inner">
                    <h2>REVIVE YOUR YOUTH <br />
                        AND BEAUTIFUL MOMENT</h2>
                    <p>푸른 바다와 깊이 있는 연구가 만나 만드는 경이로운 가치</p>
                    <a href="<?php echo G5_THEME_URL ?>/doc/products.php">View more</a>
                </div>
                <div class="scrolldown">
                    <a href="#mp">
                        <button class="btn_o">SCROLL DOWN</button>
                    </a>
                </div>
            </section>
            <section class="mainProduct sec" id="mp">
                <div class="inner">
                    <div class="main_product_slide">
                        <div class="itm itm01">
                            <div class="flex">
                                <div class="img_case">
                                    <img src="<?php echo G5_THEME_URL ?>/image/mainProduct01.jpg" alt="">
                                </div>
                                <div class="text_case">
                                    <span>#불가사리 마스크 #재생 #회복</span>
                                    <h3>Rerave PENELLAGEN <br />
                                        Lifting Mask</h3>
                                    <strong class="font_sans">리라브 페넬라겐 리프팅 마스크</strong>
                                    <p>리라브가 제안 하는 트리플 락킹(Triple - Locking) <br />
                                        리프팅 에너지 마스크</p>
                                    <a href="<?php echo G5_THEME_URL ?>/doc/pro_itm01.php">View more</a>
                                </div>
                            </div>
                        </div>
                        <div class="itm itm02">
                            <div class="flex">
                                <div class="text_case">
                                    <span>#페넬라겐 #재생 #회복</span>
                                    <h3>Rerave PENELLAGEN <br />
                                        Cream</h3>
                                    <strong class="font_sans">리라브 페넬라겐 크림</strong>
                                    <p>효과를 보증하는 에스테틱 관리 크림</p>
                                    <a href="<?php echo G5_THEME_URL ?>/doc/pro_itm02.php">View more</a>
                                </div>
                                <div class="img_case">
                                    <img src="<?php echo G5_THEME_URL ?>/img/mainProduct02.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="itm itm03">
                            <div class="flex">
                                <div class="img_case">
                                    <img src="<?php echo G5_THEME_URL ?>/img/mainProduct03.jpg" alt="">
                                </div>
                                <div class="text_case">
                                    <span>#불가사리 마스크 #보습 #탄력</span>
                                    <h3>Rerave Starfish <br />
                                        Mask</h3>
                                    <strong class="font_sans">리라브 스타피쉬 마스크</strong>
                                    <p>불가사리 추출물 함유 마스크팩</p>
                                    <a href="<?php echo G5_THEME_URL ?>/doc/pro_itm03.php">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mainTechnology sec">
                <div class="inner">
                    <h2>Rerave Technology</h2>
                    <p>리라브는 나를, 우리를 그리고 더 나아가 세상을
                        모두 건강하고 아름답게 하기 위한 고민에서 시작하였습니다.</p>
                    <ul class="flex">
                        <li class="list01 on">
                            <strong>01. PENELLAGEN</strong>
                            <p class="font_sans">페넬라겐(Penellagen) 은 브랜드의 핵심 기술 요소인 피부 침투(Penetration)기술과 콜라겐(collagen)의
                                합성어로서 자체 연구・개발한
                                기술력에 대한 자신감을 담고 있습니다.</p>
                        </li>
                        <li class="list02">
                            <strong>02. Triple Locking Sheet</strong>
                            <p class="font_sans">확실하게 잠궈주고, 확실하게 올려주고, 확실하게 살려주는 트리플-락킹(triple-locking) 시트. 뛰어난 밀착력으로
                                유효성분 증발은 차단하고 피부는
                                편하게 숨쉴수 있는 리라브 독점 시트입니다.</p>
                        </li>
                        <li class="list03">
                            <strong>03. Ingredient</strong>
                            <p class="font_sans">죽지않는 불가사리 재생의 원천 성분으로써 항산화성, 미백효과와 주름 억제능력이 매우 뛰어나고 독성과 피부자극이 없어 믿고 사용할
                                수 있는 안전한 성분입니다.
                            </p>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="mainAbout sec">
                <span>Brand Story</span>
                <h2>About Rerave</h2>
                <p>리라브는 나를, 우리를 그리고 더 나아가 세상을
                    모두 건강하고 아름답게 하기 위한 고민에서 시작하였습니다.</p>
                <a href="<?php echo G5_THEME_URL ?>/doc/brand.php">View more</a>
                <!-- brand story -->
            </section>
        </main>




<?php
include_once(G5_THEME_PATH.'/tail.php');