//スムーススクロール

const links = document.querySelectorAll('a[href^="#"]');

links.forEach((link) => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const href = link.getAttribute('href');
        const targetSection = document.querySelector(href);

        if (!targetSection) return;

        const sectionTop = targetSection.getBoundingClientRect().top;
        const startPos = window.scrollY;
        const gap = 100;
        const targetPos = sectionTop + startPos - gap;
        const duration = 900;

        smoothScroll(startPos, targetPos, duration);
    });
});

function easeOutQuad(t) {
    return t * (2 - t);
}

function smoothScroll(start, end, duration) {
    const startTime = performance.now();

    function scrollStep(currentTime) {
        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1);
        const easedProgress = easeOutQuad(progress);
        const newPosition = start + (end - start) * easedProgress;

        window.scrollTo(0, newPosition);

        if (elapsedTime < duration) {
            requestAnimationFrame(scrollStep);
        }
    }

    requestAnimationFrame(scrollStep);
}

//フェードアニメーション

const fadeElements = document.querySelectorAll('.fadeUp, .fadeLeft, .fadeRight');

const checkVisibility = () => {
fadeElements.forEach(element => {
    const rect = element.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    if (rect.top < windowHeight && rect.bottom > 0) {
    element.classList.add('visible');
    } else {
      element.classList.remove('visible'); //
    }
});
};

window.addEventListener('scroll', checkVisibility);
window.addEventListener('load', checkVisibility);

//メニュー開閉

document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById("menuBtn");
    const closeBtn = document.getElementById("closeBtn");
    const nav = document.getElementById("jsNav");
    const overlay = document.getElementById("overlay");
    const body = document.body;
    const navItems = document.querySelectorAll(".jsNav__list");

    // メニューを開く
    menuBtn.addEventListener("click", function () {
        nav.classList.add("active");
        overlay.classList.add("active");
        body.style.overflow = "hidden";
        button.style.display = 'none';
    });

    // メニューを閉じる
    function closeMenu() {
        nav.classList.remove("active");
        overlay.classList.remove("active");
        body.style.overflow = "";
    }

    closeBtn.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);

    navItems.forEach(item => {
        item.addEventListener("click", closeMenu);
    });
});

//スワイパー
if (document.body.id === "topPage") {
    // index.htmlだけの処理
    const swiper = new Swiper('.swiper', {
        loop: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        speed: 3000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        }
    });
}


// ボタンの要素を取得
const button = document.querySelector('.float');

// フッターの要素を取得
const footer = document.querySelector('.footer');

// フッターに達したかどうかでボタンの表示・非表示を切り替える
function checkButtonVisibility() {
    const footerRect = footer.getBoundingClientRect();
    const footerTop = footerRect.top + window.scrollY;

    const isOverFooter = window.scrollY + window.innerHeight >= footerTop;

    const screenWidth = window.innerWidth;
    if (screenWidth <= 960) {
        button.style.display = isOverFooter ? 'none' : 'flex';
}
}

// スクロールとリサイズ時にチェック（リサイズで表示位置が変わる可能性があるため）
window.addEventListener('scroll', checkButtonVisibility);
window.addEventListener('resize', checkButtonVisibility);

// 初期チェック
checkButtonVisibility();
