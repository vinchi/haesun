<?php 
/**
 * Header Navigation template.
 * 
 * @package HaesunTalk
 */
?>

            <!-- Header (item-1) _ Navbar Start -->
            <div class="item-1">      
                <header class="header" id="header">
                    <input type="checkbox" name="bars" id="bars">
            
                    <div class="site-logo">
                        <a href="#" class="logo-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/해선톡white-2.png" alt="" srcset="">
                            <span></span>
                        </a>
                    </div>
                    <ul class="navigation">
                        <li>
                            <a href="#home" class="active">해외선물</a>
                            <ul class="dropdown">
                                <li><a href="#">이란?</a></li>
                                <li><a href="#">상품</a></li>
                                <li><a href="#">주문유형</a></li>
                                <li><a href="#">거래시간</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </li>
                        <li><a href="#arrival" class="">가이드</a>
                            <ul class="dropdown">
                                <li><a href="#">기본상식</a></li>
                                <li><a href="#">경제지표</a></li>
                                <li><a href="#">시사경제용어</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="#features" class="">먹튀제보</a>
                        </li>
                        <li><a href="#team" class="">뉴스</a>
                            <ul class="dropdown">
                                <li><a href="#">해선톡뉴스</a></li>
                                <li><a href="#">주식리포트</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact" class="">커뮤니티</a>
                            <ul class="dropdown">
                                <li><a href="#">손익인증</a></li>
                                <li><a href="#">자유게시판</a></li>
                                <li><a href="#">유머게시판</a></li>
                            </ul>
                        </li>
                        <li><a href="#contact" class="">고객센터</a>
                            <ul class="dropdown">
                                <li><a href="#">공지사항</a></li>
                                <li><a href="#">문의하기</a></li>
                            </ul>
                        </li>
                        <label for="bars" class="close">
                            <i class="fa fa-close"></i>
                        </label>
                    </ul>
                    <label for="bars" class="bars">
                        <i class="fa fa-bars"></i>
                    </label>
                </header>
            </div>