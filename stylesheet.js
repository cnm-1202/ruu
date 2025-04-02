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