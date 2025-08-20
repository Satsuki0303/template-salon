document.addEventListener('DOMContentLoaded', function () {
    new Splide('#image-carousel', {
        type: 'loop',
        perPage: 1,
        autoplay: true,
        arrows: true,
        pagination: true,
    }).mount();
});

function toggleMenu() {
    var nav = document.getElementById('main-nav');
    var menuIcon = document.getElementById('menu-icon');
    var closeIcon = document.getElementById('close-icon');

    // 画面の幅をチェックし、768px以上（モバイルモード以外）であれば操作を行わない
    if (window.innerWidth > 768) {
        nav.style.display = '';
        menuIcon.style.display = '';
        closeIcon.style.display = '';
        return;
    }

    // モバイルモードでのみメニューの切り替え操作を行う
    if (nav.style.display === 'block') {
        nav.style.display = 'none';
        menuIcon.style.display = 'block';
        closeIcon.style.display = 'none';
    } else {
        nav.style.display = 'block';
        menuIcon.style.display = 'none';
        closeIcon.style.display = 'block';
    }
}

// ウィンドウのサイズが変更されたとき、デスクトップモードに切り替わると初期状態に戻す
window.addEventListener('resize', function () {
    var nav = document.getElementById('main-nav');
    var menuIcon = document.getElementById('menu-icon');
    var closeIcon = document.getElementById('close-icon');

    if (window.innerWidth > 768) {
        nav.style.display = '';
        menuIcon.style.display = '';
        closeIcon.style.display = '';
    } else {
        // スマホモードに切り替わるとき、menu-iconを表示し、close-iconを隠す
        nav.style.display = 'none';
        menuIcon.style.display = 'block';
        closeIcon.style.display = 'none';
    }
});


