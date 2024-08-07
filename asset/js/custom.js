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
document.addEventListener('DOMContentLoaded', function () {
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

    document.addEventListener('click', function (event) {
        if (!menuHeader.contains(event.target) && !openMenu.contains(event.target)) {
            hideMenu();
        }
    });
});

// End modal menu header

// Tab list partner
document.addEventListener('DOMContentLoaded', function () {
    const tabPlatinum = document.getElementById('tab-platinum');
    const tabVip = document.getElementById('tab-vip');
    const tabCooperate = document.getElementById('tab-cooperate');
    const tabMedia = document.getElementById('tab-media');

    const partnerPlatinum = document.getElementById('partner-platinum');
    const partnerVip = document.getElementById('partner-vip');
    const partnerCooperate = document.getElementById('partner-cooperate');
    const partnerMedia = document.getElementById('partner-media');

    tabPlatinum.addEventListener('click', () => {
        setActiveTab(tabPlatinum, partnerPlatinum);
    });

    tabVip.addEventListener('click', () => {
        setActiveTab(tabVip, partnerVip);
    });

    tabCooperate.addEventListener('click', () => {
        setActiveTab(tabCooperate, partnerCooperate);
    });

    tabMedia.addEventListener('click', () => {
        setActiveTab(tabMedia, partnerMedia);
    });


    function setActiveTab(tab, content) {
        // Remove active class from all tabs and contents
        document.querySelectorAll('.list-choose li').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.list-partner .child').forEach(c => c.classList.remove('active'));

        // Add active class to clicked tab and corresponding content
        tab.classList.add('active');
        content.classList.add('active');
    }
});
// End tab list partner

// Tab form subscribe member
document.addEventListener('DOMContentLoaded', function () {
    const tabIndividual = document.getElementById('tab-individual');
    const tabBusiness = document.getElementById('tab-business');

    const formIndividualMember = document.getElementById('form-individual-member');
    const formBusinessMember = document.getElementById('form-business-member');

    const individualMember = document.getElementById('individual-member');
    const businessMember = document.getElementById('business-member');

    if (tabIndividual && tabBusiness && formIndividualMember && formBusinessMember && individualMember && businessMember) {
        tabIndividual.addEventListener('click', () => {
            setActiveTab(tabIndividual, formIndividualMember, individualMember);
        });

        tabBusiness.addEventListener('click', () => {
            setActiveTab(tabBusiness, formBusinessMember, businessMember);
        });

        function setActiveTab(tab, formContent, headerContent) {
            // Remove active class from all tabs and contents
            document.querySelectorAll('.choose-subscribe li').forEach(t => t.classList.remove('active'));
            document.querySelectorAll('.form-subscribe .child').forEach(c => c.classList.remove('active'));
            document.querySelectorAll('.header p').forEach(c => c.classList.remove('active'));

            // Add active class to clicked tab and corresponding content
            tab.classList.add('active');
            formContent.classList.add('active');
            headerContent.classList.add('active');
        }
    } else {
        console.error('One or more elements not found');
    }
});

// End tab form subscribe member


// Tab navigation profile page
document.addEventListener('DOMContentLoaded', function () {
    const tabOverview = document.getElementById('tab-overview');
    const tabProfile = document.getElementById('tab-profile');
    const tabPassword = document.getElementById('tab-password');
    const tabExperience = document.getElementById('tab-experience');
    const tabAddExperience = document.getElementById('tab-add-experience');

    const overview = document.getElementById('overview');
    const profile = document.getElementById('profile');
    const password = document.getElementById('password');
    const experience = document.getElementById('experience');
    const experienceForm = document.getElementById('experience-form');

    tabOverview.addEventListener('click', () => {
        setActiveTab(tabOverview, overview);
    });

    tabProfile.addEventListener('click', () => {
        setActiveTab(tabProfile, profile);
    });

    tabPassword.addEventListener('click', () => {
        setActiveTab(tabPassword, password);
    });

    tabExperience.addEventListener('click', () => {
        setActiveTab(tabExperience, experience);
    });

    tabAddExperience.addEventListener('click', () => {
        setActiveTab(tabAddExperience, experienceForm);
    });

    function setActiveTab(tab, content) {
        // Remove active class from all tabs and contents
        document.querySelectorAll('.left-profile li').forEach(t => t.classList.remove('active'));
        document.querySelectorAll('.right-profile .child').forEach(c => c.classList.remove('active'));

        // Add active class to clicked tab and corresponding content
        tab.classList.add('active');
        content.classList.add('active');
    }
});

// End tab navigation profile page

// Đo chiều rộng của viewport
var viewportWidth = window.innerWidth;

console.log('Chiều rộng của viewport: ' + viewportWidth + 'px');