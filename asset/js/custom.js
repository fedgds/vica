// Modal forgot password page
function openModalForgotPassword(event) {
    event.preventDefault();
    document.getElementById("forgotPasswordModal").style.display = "block";
}

function closeModalForgotPassword() {
    document.getElementById("forgotPasswordModal").style.display = "none";
}

window.onclick = function(event) {
    var modal = document.getElementById("forgotPasswordModal");
    if (event.target == modal) {
        closeModalForgotPassword();
    }
}
// End modal forgot password page

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