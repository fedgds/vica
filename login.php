<?php include('header.php') ?>
<main>
    <section class="login-page">
        <div id="backdrop-forgot-password" class="backdrop"></div>
        <div class="left">
            <div class="background"></div>
            <div class="container">
                <h2 class="title">
                    Đăng nhập
                </h2>
                <div class="description">
                    <p>Torem ipsum dolor sit amet, consectetur adipiscing.</p>
                </div>
                <form action="">
                    <div class="idOrEmail">
                        <label for="idOrEmail">Mã hội viên hoặc Email</label>
                        <input type="text" id="idOrEmail" placeholder="abcd1234@gmail.com">
                    </div>
                    <div class="password">
                        <label for="password">Mật khẩu</label>
                        <input type="password" id="password" placeholder="123456789">
                    </div>
                    <div class="login-options">
                        <div class="remember-me">
                            <input type="checkbox" id="remember-me" checked>
                            <label for="remember-me">Ghi nhớ đăng nhập</label>
                        </div>
                        <p class="forgot-password" id="open-modal-forgot-password">Quên mật khẩu</p>
                    </div>
                    <div class="button">
                        <button class="login">Đăng nhập</button>
                        <button class="loginWithGoogle">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M23.0005 12.2336C23.0005 11.3702 22.9291 10.7402 22.7744 10.0869H12.7148V13.9835H18.6196C18.5006 14.9519 17.8577 16.4102 16.4291 17.3902L16.4091 17.5206L19.5897 19.9354L19.8101 19.9569C21.8338 18.1252 23.0005 15.4302 23.0005 12.2336Z" fill="#4285F4"/>
                                <path d="M12.714 22.4996C15.6068 22.4996 18.0353 21.5662 19.8092 19.9562L16.4282 17.3895C15.5235 18.0078 14.3092 18.4395 12.714 18.4395C9.88069 18.4395 7.47596 16.6079 6.61874 14.0762L6.49309 14.0866L3.18583 16.595L3.14258 16.7128C4.90446 20.1428 8.5235 22.4996 12.714 22.4996Z" fill="#34A853"/>
                                <path d="M6.62095 14.0765C6.39476 13.4232 6.26386 12.7231 6.26386 11.9998C6.26386 11.2764 6.39476 10.5765 6.60905 9.92313L6.60306 9.78398L3.25435 7.23535L3.14478 7.28642C2.41862 8.70977 2.00195 10.3081 2.00195 11.9998C2.00195 13.6915 2.41862 15.2897 3.14478 16.7131L6.62095 14.0765Z" fill="#FBBC05"/>
                                <path d="M12.714 5.55997C14.7259 5.55997 16.083 6.41163 16.8569 7.12335L19.8807 4.23C18.0236 2.53834 15.6069 1.5 12.714 1.5C8.52353 1.5 4.90447 3.85665 3.14258 7.28662L6.60686 9.92332C7.47598 7.39166 9.88073 5.55997 12.714 5.55997Z" fill="#EB4335"/>
                            </svg>
                            <p>Đăng nhập bằng Google</p>
                        </button>
                    </div>
                    <div class="register">
                        <p>Bạn chưa có tài khoản?</p>
                        <a href="http://localhost/project-vica/signup.php">Đăng ký ngay</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="right">
            <div class="background"></div>
            <div class="card">
                <div class="sologan">
                    <h3>"Chúng tôi đã được sử dụng để khởi động mọi dự án và có thể tưởng tượng làm việc mà không cần nó"</h3>
                </div>
                <div class="infor">
                    <div class="row-1">
                        <div class="name">
                            <h2>Nguyễn Văn A</h2>
                        </div>
                        <div class="star">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="white"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="white"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="white"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="white"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" fill="white"/>
                            </svg>
                        </div>             
                    </div>

                    <div class="child-1">
                        <p>Người sáng lập, Danh mục</p>
                    </div>
                    <div class="child-2">
                        <p>Đầu bếp, Quản lý nhà hàng</p>
                    </div>
                </div>
                <div class="vica">
                    <h3>VICA</h3>
                </div>
            </div>
        </div>
        <div id="forgotPasswordModal" class="section-forgot-password">
            <div class="container">
                <div class="slider">
                    <img src="asset/image/slide-forgot-password1.png" alt="">
                </div>
                <div class="form">
                    <span class="close" id="close-modal-forgot-password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                            <path d="M30.5 30L10.5 10" stroke="#160042" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.5 30L30.5 10" stroke="#160042" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <form action="">
                        <div class="title">
                            <h2>Quên mật khẩu</h2>
                        </div>
                        <div class="input">
                            <div class="step-1">
                                <label for="email-forgot-password">Nhập e-mail</label>
                                <input type="text" id="email-forgot-password" placeholder="abcd1234@gmail.com">
                            </div>
                            <div class="step-2">
                                <div class="new-password">
                                    <label for="new-password">Nhập mật khẩu mới</label>
                                    <input type="text" id="new-password" placeholder="abcd1234@gmail.com">
                                </div>
                                <div class="confirm-password">
                                    <label for="confirm-password">Xác nhận</label>
                                    <input type="password" id="confirm-password" placeholder="abcd1234@gmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="button">
                            <button class="forgot-password">Quên mật khẩu</button>
                            <span class="back" id="back-to-login">Quay lại đăng nhập</span>
                        </div>
                        <div class="register">
                            <p>Bạn chưa có tài khoản?</p>
                            <a href="">Đăng ký ngay</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php') ?>