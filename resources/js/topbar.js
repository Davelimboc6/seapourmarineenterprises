// resources/js/topbar.js
document.addEventListener('DOMContentLoaded', () => {
    if (typeof gsap === 'undefined') return;

    const header = document.querySelector('header');
    if (!header) return;

    const tlHeader = gsap.timeline();

    tlHeader.from('header', {
        y: -100,
        duration: 0.8,
        opacity: 0,
        ease: 'power2.out',
    });

    tlHeader.from('header a', {
        y: -20,
        duration: 0.5,
        opacity: 0,
        ease: 'back.out(1.7)',
        stagger: 0.2,
    });
});
