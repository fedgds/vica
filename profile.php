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
                        Nội dung chỉnh sửa hồ sơ
                    </div>
                    <div id="password" class="child">
                        Nội dung mật khẩu
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