// Modal forgot password page
document.addEventListener("DOMContentLoaded", () => {
    const openModalBtn = document.getElementById("open-modal-forgot-password");
    const closeModalBtn = document.getElementById("close-modal-forgot-password");
    const forgotPasswordModal = document.getElementById("forgotPasswordModal");
    const backToLoginBtn = document.getElementById("back-to-login");

    openModalBtn.addEventListener("click", (event) => {
        event.preventDefault();
        forgotPasswordModal.style.visibility = "visible";
    });

    closeModalBtn.addEventListener("click", () => {
        forgotPasswordModal.style.visibility = "hidden";
    });

    backToLoginBtn.addEventListener("click", () => {
        forgotPasswordModal.style.visibility = "hidden";
    });
});

// End modal forgot password page

// Modal menu header
document.addEventListener('DOMContentLoaded', function() {
    const openMenu = document.querySelector('#open-menu-header');
    const closeMenu = document.querySelector('#close-menu-header');
    const menuHeader = document.getElementById('menuHeader');
    const backdrop = document.getElementById('backdrop');

    function showMenu() {
        menuHeader.classList.add('show');
        backdrop.classList.add('show');
    }

    function hideMenu() {
        menuHeader.classList.remove('show');
        backdrop.classList.remove('show');
    }

    openMenu.addEventListener('click', showMenu);

    closeMenu.addEventListener('click', hideMenu);

    backdrop.addEventListener('click', hideMenu);

    document.addEventListener('click', function(event) {
        if (!menuHeader.contains(event.target) && !openMenu.contains(event.target)) {
            hideMenu();
        }
    });
});



// End modal menu header

// Tab navigation profile page
function showContent(contentId) {
    // Xóa class .active
    document.querySelectorAll('.left-profile ul li').forEach(function(li) {
        li.classList.remove('active');
    });

    // Thêm class .active vào cái click
    event.target.classList.add('active');

    // Ẩn tất cả class .active
    document.querySelectorAll('.right-profile div').forEach(function(div) {
        div.classList.remove('active');
    });

    // Hiển thị cái đang chọn
    document.getElementById(contentId).classList.add('active');
}
// End tab navigation profile page
// Đo chiều rộng của viewport
var viewportWidth = window.innerWidth;

console.log('Chiều rộng của viewport: ' + viewportWidth + 'px');