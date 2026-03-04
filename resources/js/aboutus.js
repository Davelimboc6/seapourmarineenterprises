gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
    // Section-level fade in
    const sectionSelectors = [
        ".about-section",
        ".mission-section",
        ".team-section",
        ".cert-section",
    ];

    sectionSelectors.forEach((selector) => {
        gsap.from(selector, {
            scrollTrigger: {
                trigger: selector,
                start: "top 80%",
                toggleActions: "play none none reverse",
            },
            opacity: 0,
            y: 40,
            duration: 0.8,
            ease: "power2.out",
        });
    });

    // Stagger inner elements per section
    gsap.utils
        .toArray(".about-section, .mission-section, .team-section, .cert-section")
        .forEach((section) => {
            const targets = section.querySelectorAll(".about-animate");

            if (!targets.length) return;

            gsap.from(targets, {
                scrollTrigger: {
                    trigger: section,
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                },
                opacity: 0,
                y: 24,
                duration: 0.6,
                ease: "power2.out",
                stagger: 0.08,
            });
        });
});