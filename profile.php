<?php include('header.php') ?>
<main>
    <section class="profile-page">
        <div class="container">
            <div class="title">
                <h2>Hồ sơ cá nhân</h2>
            </div>
            <div class="content">
                <div class="left-profile">
                    <ul>
                        <li onclick="showContent('overview')" class="active">Tổng quan</li>
                        <li onclick="showContent('profile')">Chỉnh sửa hồ sơ</li>
                        <li onclick="showContent('password')">Mật khẩu</li>
                        <li onclick="showContent('experience')">Kinh nghiệm làm việc</li>
                    </ul>
                </div>
                <div class="right-profile">
                    <div id="overview" class="child active">
                        <div class="title">
                            <h3>Thông tin tổng quan</h3>
                        </div>
                        <form action="">
                            <div class="input">
                                <div class="name">
                                    <label for="name">Tên đăng nhập:</label>
                                    <input type="text" id="name" placeholder="Hải Trần">
                                </div>
                                <div class="email">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" placeholder="haitran@gmail.com">
                                </div>
                            </div>
                            <div class="button">
                                <button>Lưu thay đổi</button>    
                            </div>
                        </form>
                    </div>
                    <div id="profile" class="child">
                        <div class="avatar">
                            <img src="asset/image/avatar.png" alt="">
                        </div>
                        <form action="">
                            <div class="title">
                                <h3>Thông tin cá nhân</h3>
                            </div>
                            <div class="input">
                                <div class="name">
                                    <label for="name">Họ và tên <span>*</span></label>
                                    <input type="text" id="name" placeholder="Hải Trần">
                                </div>
                                <div class="nick-name">
                                    <label for="nick-name">Họ và tên <span>*</span></label>
                                    <input type="text" id="nick-name" placeholder="Hải Trần">
                                </div>
                                <div class="birthday">
                                    <label for="birthday">Ngày sinh</label>
                                    <input type="date" id="birthday">
                                </div>
                                <div class="sex">
                                    <label for="sex">Giới tính</label>
                                    <select>
                                        <option value="" selected>Nam</option>
                                        <option value="">Nữ</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="password" class="child">
                        <form action="">
                            <div class="input">
                                <div class="old-password">
                                    <label for="old-password">Mật khẩu cũ</label>
                                    <input type="password" id="old-password" placeholder="********">
                                </div>
                                <div class="new-password">
                                    <label for="new-password">Mật khẩu mới</label>
                                    <input type="password" id="new-password" placeholder="********">
                                </div>
                                <div class="confirm-password">
                                    <label for="confirm-password">Xác nhận</label>
                                    <input type="password" id="confirm-password" placeholder="********">
                                </div>
                            </div>
                            <div class="button">
                                <button>Lưu thay đổi</button>
                            </div>
                        </form>
                    </div>
                    <div id="experience" class="child">
                        Nội dung kinh nghiệm làm việc
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php') ?>