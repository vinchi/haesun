<?php 
/**
 * Main template file
 * 
 * @package HaesunTalk
 */
get_header();
?>
            <!-- Main (item-2) _ Start -->
            <div class="item-2">
                <div class="main-content">
                    <div class="content-01">
                        01
                    </div>
                    <div class="content-02">
                        02
                    </div>
                    <div class="content-03">
                        03
                    </div>
                </div>
            </div>



            <!-- Side bar(item-3) _ Login, Chat Start -->

            <div class="item-3">
                <!-- <h2>Login</h2> -->
                <div class="log-in">
                    <form action="">
                        <!-- <h2><span class="entypo-login"><i class="fa fa-sign-in"></i></span> Login</h2> -->
                        <button class="submit"><span class="entypo-lock">로그인</span></button>
                        <span class="entypo-user inputUserIcon">
                            <i class="fa fa-user"></i>
                        </span>
                        <input type="text" class="user" placeholder="아이디를 입력해주세요" />
                        <span class="entypo-key inputPassIcon">
                            <i class="fa fa-key"></i>
                        </span>
                        <input type="password" class="pass" placeholder="비밀번호를 입력해주세요" />

                        <input type="checkbox" class="checkbox" id="remember_me">
                        <label for="remember_me">로그인 상태유지</label>
                    </form>

                    <button class="btn-join-us"><span class="join-us">회원가입</span></button>
                    <button class="btn-forgot"><span class="forgot">비밀번호찾기</span></button>

                </div>
            



                    <!-- <div class="btn-wrap">
                        <div class="btn-h active" >해외선물</div>
                        <div class="btn-k">국내주식</div>
                    </div> -->


                <div class="tab_content chat">

                    <!-- Chat Tap -->
                    <input type="radio" name="tabmenu" id="tab01" checked>
                    <label class="tap01-label" for="tab01">해외선물</label>
                    <input type="radio" name="tabmenu" id="tab02">
                    <label class="tap02-label" for="tab02">국내주식</label>
                    
                    <!-- Chat Room -->
                    <div class="conbox con1">
                        <div class="chat-wrap">
                            <div class="master-msg">
                                오픈챗규정<br><br>
    
                                오픈챗 페널티 부여 사유<br>
                                - 상대 비방 또는 욕설 및 비매너 채팅<br>
                                - 회원간 분란 조장<br>
                                - 운영진 및 사이트 비방<br>
                                - 거짓 중계<br><br>
                                
                                회원 탈퇴 사유<br>
                                - 불법 사이트 링크 및 불법적인 언급<br>
                                - 카페, 블로그, 카톡, 링크 공유<br>
                                - 타 커뮤티에 관한 언급<br><br>
                                *엔트리카피글 수정필요
                            </div>
                            <div class="user-chat-wrap">
                                <div class="chat-user">
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/doodle/48/user.png" alt="user"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/artist-female.png" alt="artist-female"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/account-skin-type-3.png" alt="account-skin-type-3"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/user.png" alt="user"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/businesswoman.png" alt="businesswoman"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/artist-female.png" alt="artist-female"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/account-skin-type-3.png" alt="account-skin-type-3"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/user.png" alt="user"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/businesswoman.png" alt="businesswoman"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/businesswoman.png" alt="businesswoman"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="log-msg">로그인 후 이용이 가능합니다.
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow.png">
                        </div>

                    </div>
	                <div class="conbox con2">
                        <div class="chat-wrap">
                            <div class="master-msg">
                                오픈챗규정<br><br>
    
                                오픈챗 페널티 부여 사유<br>
                                - 상대 비방 또는 욕설 및 비매너 채팅<br>
                                - 회원간 분란 조장<br>
                                - 운영진 및 사이트 비방<br>
                                - 거짓 중계<br><br>
                                
                                회원 탈퇴 사유<br>
                                - 불법 사이트 링크 및 불법적인 언급<br>
                                - 카페, 블로그, 카톡, 링크 공유<br>
                                - 타 커뮤티에 관한 언급<br><br>
                                *엔트리카피글 수정필요
                            </div>
                            <div class="user-chat-wrap">
                                <div class="chat-user">
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/doodle/48/user.png" alt="user"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">국내선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/artist-female.png" alt="artist-female"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/account-skin-type-3.png" alt="account-skin-type-3"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/user.png" alt="user"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/businesswoman.png" alt="businesswoman"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/artist-female.png" alt="artist-female"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/account-skin-type-3.png" alt="account-skin-type-3"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/user.png" alt="user"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/businesswoman.png" alt="businesswoman"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/businesswoman.png" alt="businesswoman"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                                <div class="chat-user">    
                                    <div class="chat-user-img">
                                        <img width="32" height="32" src="https://img.icons8.com/color/48/old-man-skin-type-7.png" alt="old-man-skin-type-7"/>
                                    </div>
                                    <div class="chat-user-msg">
                                        <span class="chat-user-id">나라고</span>
                                        <!-- <span class="chat-user-time">23.11.16 23:23 </span> -->
                                        <span class="chat-user-text">해외선물에 대해 궁금해요</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="log-msg">로그인 후 이용이 가능합니다.
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/arrow.png">
                        </div>

                    </div>

                </div>

            </div>
<?php
get_footer();
?>

    