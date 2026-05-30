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
            if (element.closest('[data-no-scroll-reveal]') || element.hasAttribute('data-scroll-reveal')) {
                return;
            }

            element.setAttribute('data-scroll-reveal', '');
        });
    });

    scope.querySelectorAll('[data-scroll-reveal]').forEach((element, index) => {
        element.style.setProperty('--scroll-reveal-delay', `${Math.min(index % 8, 7) * 45}ms`);
    });
};

const initScrollReveal = () => {
    const scopes = document.querySelectorAll('[data-scroll-reveal-scope]');

    if (!scopes.length) {
        return;
    }

    scopes.forEach(markRevealElements);

    const revealElements = document.querySelectorAll('[data-scroll-reveal]:not([data-scroll-reveal-ready])');

    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        revealElements.forEach((element) => {
            element.setAttribute('data-scroll-reveal-ready', '');
            element.setAttribute('data-scroll-reveal-visible', '');
        });

        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) {
                return;
            }

            entry.target.setAttribute('data-scroll-reveal-visible', '');
            observer.unobserve(entry.target);
        });
    }, {
        rootMargin: '0px 0px -12% 0px',
        threshold: 0.12,
    });

    revealElements.forEach((element) => {
        element.setAttribute('data-scroll-reveal-ready', '');
        observer.observe(element);
    });
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initScrollReveal, { once: true });
} else {
    initScrollReveal();
}

document.addEventListener('livewire:navigated', initScrollReveal);
