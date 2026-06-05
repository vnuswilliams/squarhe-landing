// ═══════════════════════════════════════════════════
//  SCROLL REVEAL
// ═══════════════════════════════════════════════════

const revealSelectors = [
    'section > div',
    'article',
    'dl > div',
    'li',
    'form',
    '.rounded-lg',
    '.testimonial-marquee > div',
];

const markRevealElements = (scope) => {
    revealSelectors.forEach((selector) => {
        scope.querySelectorAll(selector).forEach((element) => {
            if (
                element.closest('[data-no-scroll-reveal]') ||
                element.hasAttribute('data-scroll-reveal')
            ) {
                return;
            }
            element.setAttribute('data-scroll-reveal', '');
        });
    });

    scope.querySelectorAll('[data-scroll-reveal]').forEach((element, index) => {
        element.style.setProperty('--scroll-reveal-delay', `${Math.min(index % 8, 7) * 25}ms`);
    });
};

const initScrollReveal = () => {
    const scopes = document.querySelectorAll('[data-scroll-reveal-scope]');
    if (!scopes.length) return;
    scopes.forEach(markRevealElements);

    const revealElements = document.querySelectorAll(
        '[data-scroll-reveal]:not([data-scroll-reveal-ready])'
    );

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        revealElements.forEach((el) => {
            el.setAttribute('data-scroll-reveal-ready', '');
            el.setAttribute('data-scroll-reveal-visible', '');
        });
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.setAttribute('data-scroll-reveal-visible', '');
                observer.unobserve(entry.target);
            });
        },
        { rootMargin: '0px 0px -12% 0px', threshold: 0.12 }
    );

    revealElements.forEach((el) => {
        el.setAttribute('data-scroll-reveal-ready', '');
        observer.observe(el);
    });
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initScrollReveal, { once: true });
} else {
    initScrollReveal();
}

document.addEventListener('livewire:navigated', initScrollReveal);


// ═══════════════════════════════════════════════════
//  TESTIMONIAL CAROUSEL (Alpine component)
// ═══════════════════════════════════════════════════

function testimonialCarousel() {
    return {
        current: 0,
        total: 0,
        paused: false,
        visibleCount: 2,
        intervalId: null,
        slideDuration: 4500,

        init() {
            const track = this.$el.querySelector('[data-carousel-track]');
            if (track) this.total = track.children.length;
            this.updateVisibleCount();
            window.addEventListener('resize', () => this.updateVisibleCount());
            this.startAuto();
        },

        updateVisibleCount() {
            this.visibleCount = window.innerWidth >= 1024 ? 3 : 2;
        },

        maxIndex() {
            return Math.max(0, this.total - this.visibleCount);
        },

        next() {
            this.current = this.current >= this.maxIndex() ? 0 : this.current + 1;
            this.resetAuto();
        },

        prev() {
            this.current = this.current <= 0 ? this.maxIndex() : this.current - 1;
            this.resetAuto();
        },

        goTo(i) {
            this.current = Math.min(i, this.maxIndex());
            this.resetAuto();
        },

        togglePause() {
            this.paused = !this.paused;
            this.paused ? clearInterval(this.intervalId) : this.startAuto();
        },

        startAuto() {
            clearInterval(this.intervalId);
            this.intervalId = setInterval(() => {
                if (!this.paused) this.next();
            }, this.slideDuration);
        },

        resetAuto() {
            if (!this.paused) this.startAuto();
        },
    };
}


// ═══════════════════════════════════════════════════
//  FEATURE SHOWCASE (Alpine component)
//  Section #solution — 6 features, progress bar auto
//  x-data="featureShowcase()" sur la <section>
// ═══════════════════════════════════════════════════

function featureShowcase() {
    return {
        active: 0,
        total: 6,
        paused: false,
        progress: 0,
        slideDuration: 5000,  // ms par slide
        tickInterval: 50,     // ms entre chaque tick
        progressTimer: null,

        init() {
            this.startAuto();
        },

        startAuto() {
            this.stopAuto();
            this.progress = 0;

            this.progressTimer = setInterval(() => {
                if (this.paused) return;
                this.progress += (this.tickInterval / this.slideDuration) * 100;
                if (this.progress >= 100) {
                    this.progress = 0;
                    this.active = this.active >= this.total - 1 ? 0 : this.active + 1;
                }
            }, this.tickInterval);
        },

        stopAuto() {
            clearInterval(this.progressTimer);
        },

        goTo(i) {
            this.active = i;
            this.progress = 0;
            if (!this.paused) this.startAuto();
        },

        next() {
            this.active = this.active >= this.total - 1 ? 0 : this.active + 1;
            this.progress = 0;
            if (!this.paused) this.startAuto();
        },

        prev() {
            this.active = this.active <= 0 ? this.total - 1 : this.active - 1;
            this.progress = 0;
            if (!this.paused) this.startAuto();
        },

        togglePause() {
            this.paused = !this.paused;
        },
    };
}


// ═══════════════════════════════════════════════════
//  Enregistrement Alpine global
// ═══════════════════════════════════════════════════

document.addEventListener('alpine:init', () => {
    Alpine.data('testimonialCarousel', testimonialCarousel);
    Alpine.data('featureShowcase', featureShowcase);
});
