export function businessHours() {
    return {
        open: false,
        isOpen: false,
        todayIndex: null,
        todayLabel: '',
        todayHours: '',
        days: [
            { label: 'Sunday',    open: false, from: null,     to: null     },
            { label: 'Monday',    open: true,  from: '08:00',  to: '17:00'  },
            { label: 'Tuesday',   open: true,  from: '08:00',  to: '17:00'  },
            { label: 'Wednesday', open: true,  from: '08:00',  to: '17:00'  },
            { label: 'Thursday',  open: true,  from: '08:00',  to: '17:00'  },
            { label: 'Friday',    open: true,  from: '08:00',  to: '17:00'  },
            { label: 'Saturday',  open: true,  from: '08:00',  to: '17:00'  },
        ],

        init() {
            const now = new Date();
            const dayIndex = now.getDay();
            this.todayIndex = dayIndex;

            this.days = this.days.map((d) => {
                d.display = d.open ? this.formatRange(d.from, d.to) : 'Closed';
                return d;
            });

            const today = this.days[dayIndex];

            this.todayLabel = today.label;
            this.todayHours = today.open ? today.display : '';

            this.isOpen = this.checkOpen(now, today);
        },

        parseTime(timeStr) {
            const [h, m] = timeStr.split(':').map(Number);
            return { h, m };
        },

        checkOpen(now, day) {
            if (!day.open) return false;

            const { h: fromH, m: fromM } = this.parseTime(day.from);
            const { h: toH, m: toM } = this.parseTime(day.to);

            const minutesNow   = now.getHours() * 60 + now.getMinutes();
            const minutesStart = fromH * 60 + fromM;
            const minutesEnd   = toH * 60 + toM;

            return minutesNow >= minutesStart && minutesNow <= minutesEnd;
        },

        formatRange(from, to) {
            const format = (t) => {
                const [h, m] = t.split(':').map(Number);
                const suffix = h >= 12 ? 'PM' : 'AM';
                const hour12 = ((h + 11) % 12) + 1;
                return `${hour12}:${m.toString().padStart(2, '0')} ${suffix}`;
            };
            return `${format(from)} – ${format(to)}`;
        },
    };
}

export function initHeroAnimation() {
    if (typeof gsap === 'undefined') {
        console.warn('GSAP not loaded');
        return;
    }

    const hero = document.querySelector('#hero');
    if (!hero) return;

    const tlHero = gsap.timeline();

    tlHero.from('#hero', {
        opacity: 0,
        duration: 0.6,
        ease: 'power2.out',
    });

    tlHero.from('#hero .absolute', {
        scale: 1.05,
        opacity: 0,
        duration: 0.8,
        ease: 'power3.out',
    }, '-=0.4');

    tlHero.from(
        ['.hero-kicker', '.hero-title', '.hero-subtitle', '.hero-info'],
        {
            y: 30,
            opacity: 0,
            duration: 0.8,
            ease: 'power3.out',
            stagger: 0.1,
        },
        '-=0.4'
    );
}

export function initAccreditations() {
    if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') return;

    gsap.registerPlugin(ScrollTrigger);

    // Mobile-simple
    gsap.matchMedia().add("(max-width: 767px)", () => {
        gsap.from("#accred-text", {
            scrollTrigger: {
                trigger: "#accreditations",
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            opacity: 0,
            y: 30,
            duration: 0.6,
            ease: "power2.out"
        });

        gsap.from(".accred-item", {
            scrollTrigger: {
                trigger: "#accred-list",
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            opacity: 0,
            y: 30,
            duration: 0.5,
            stagger: 0.15,
            ease: "power2.out"
        });
    });

    // Desktop: left/right split
    gsap.matchMedia().add("(min-width: 768px)", () => {
        gsap.from("#accred-text", {
            scrollTrigger: {
                trigger: "#accred-text",
                start: "top 80%",
                end: "bottom 20%",
                scrub: 0.3  // Smooth scrub
            },
            x: -50,
            opacity: 0,
            duration: 0.8,
            ease: "power2.out",
            force3D: true
        });

        gsap.from(".accred-item", {
            scrollTrigger: {
                trigger: "#accred-list",
                start: "top 80%",
                end: "bottom 20%",
                scrub: 0.3
            },
            x: 50,
            opacity: 0,
            scale: 0.95,
            duration: 0.8,
            stagger: 0.2,
            ease: "power2.out",
            force3D: true
        });
    });
}
