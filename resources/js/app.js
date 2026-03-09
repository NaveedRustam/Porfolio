import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar');
    const menuToggle = document.getElementById('menu-toggle');
    const menuToggleIcon = document.getElementById('menu-toggle-icon');
    const logoBadge = document.getElementById('logo-badge');
    const mobileMenu = document.getElementById('mobile-menu');
    const scrollTopButton = document.getElementById('scroll-top-button');
    const scrollProgress = document.getElementById('scroll-progress');
    const preloader = document.getElementById('preloader');
    const reducedMotionQuery = window.matchMedia('(prefers-reduced-motion: reduce)');
    let reducedMotion = reducedMotionQuery.matches;

    const preloaderStart = performance.now();
    const hidePreloader = () => {
        if (!preloader || preloader.dataset.hidden === 'true') {
            document.body.classList.remove('preloading');
            return;
        }

        preloader.dataset.hidden = 'true';
        preloader.classList.add('is-hidden');
        document.body.classList.remove('preloading');

        window.setTimeout(() => {
            preloader.remove();
        }, 700);
    };

    const schedulePreloaderHide = () => {
        const minVisibleMs = reducedMotion ? 220 : 1200;
        const elapsed = performance.now() - preloaderStart;
        const wait = Math.max(0, minVisibleMs - elapsed);

        window.setTimeout(hidePreloader, wait);
    };

    if (document.readyState === 'complete') {
        schedulePreloaderHide();
    } else {
        window.addEventListener('load', schedulePreloaderHide, { once: true });
        window.setTimeout(schedulePreloaderHide, 5000);
    }

    const openMenu = () => {
        if (!mobileMenu || !menuToggle) {
            return;
        }

        mobileMenu.classList.remove('hidden');
        menuToggle.setAttribute('aria-expanded', 'true');
        menuToggleIcon?.classList.remove('fa-bars');
        menuToggleIcon?.classList.add('fa-xmark');
    };

    const closeMenu = () => {
        if (!mobileMenu || !menuToggle) {
            return;
        }

        mobileMenu.classList.add('hidden');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggleIcon?.classList.remove('fa-xmark');
        menuToggleIcon?.classList.add('fa-bars');
    };

    const updateNavbar = () => {
        if (!navbar) {
            return;
        }

        const isScrolled = window.scrollY > 50;
        navbar.classList.toggle('py-2', isScrolled);
        navbar.classList.toggle('py-3', !isScrolled);
        navbar.classList.toggle('glass-dark', isScrolled);
        navbar.classList.toggle('bg-transparent', !isScrolled);
        logoBadge?.classList.toggle('bg-slate-950/90', !isScrolled);
        logoBadge?.classList.toggle('bg-transparent', isScrolled);
        scrollTopButton?.classList.toggle('hidden', window.scrollY <= 300);

        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const progress = docHeight > 0 ? Math.min(window.scrollY / docHeight, 1) : 0;

        if (scrollProgress) {
            scrollProgress.style.transform = `scaleX(${progress})`;
        }
    };

    menuToggle?.addEventListener('click', () => {
        if (!mobileMenu) {
            return;
        }

        if (mobileMenu.classList.contains('hidden')) {
            openMenu();
            return;
        }

        closeMenu();
    });

    mobileMenu?.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    window.addEventListener('scroll', updateNavbar);
    updateNavbar();

    scrollTopButton?.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: reducedMotion ? 'auto' : 'smooth' });
    });

    const revealElements = Array.from(document.querySelectorAll('.reveal'));
    revealElements.forEach((element, index) => {
        const delay = (index % 8) * 70;
        element.style.setProperty('--reveal-delay', `${delay}ms`);
    });

    if (reducedMotion) {
        revealElements.forEach((element) => element.classList.add('show'));
    } else {
        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('show');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.18 },
        );

        revealElements.forEach((element) => revealObserver.observe(element));
    }

    const timelineSection = document.querySelector('.timeline-section');
    const timelineEntries = Array.from(document.querySelectorAll('.timeline-entry'));

    timelineEntries.forEach((entry, index) => {
        entry.style.setProperty('--timeline-delay', `${index * 140}ms`);
    });

    if (timelineSection && timelineEntries.length > 0) {
        if (reducedMotion) {
            timelineSection.classList.add('timeline-active');
            timelineEntries.forEach((entry) => entry.classList.add('timeline-show'));
        } else {
            const timelineSectionObserver = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach((entry) => {
                        if (!entry.isIntersecting) {
                            return;
                        }

                        timelineSection.classList.add('timeline-active');
                        observer.unobserve(entry.target);
                    });
                },
                { threshold: 0.2 },
            );

            timelineSectionObserver.observe(timelineSection);

            const timelineEntryObserver = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach((entry) => {
                        if (!entry.isIntersecting) {
                            return;
                        }

                        entry.target.classList.add('timeline-show');
                        observer.unobserve(entry.target);
                    });
                },
                { threshold: 0.25 },
            );

            timelineEntries.forEach((entry) => timelineEntryObserver.observe(entry));
        }
    }

    const navLinks = Array.from(document.querySelectorAll('#navbar a[href^="#"], #mobile-menu a[href^="#"]'));
    const sections = Array.from(document.querySelectorAll('main section[id]'));

    navLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            const href = link.getAttribute('href');

            if (!href || !href.startsWith('#')) {
                return;
            }

            const target = document.querySelector(href);

            if (!target) {
                return;
            }

            event.preventDefault();
            const navOffset = navbar?.offsetHeight || 0;
            const top = target.getBoundingClientRect().top + window.scrollY - navOffset + 1;

            window.scrollTo({
                top: Math.max(top, 0),
                behavior: reducedMotion ? 'auto' : 'smooth',
            });
        });
    });

    if (sections.length > 0 && navLinks.length > 0) {
        const setActiveLink = (sectionId) => {
            navLinks.forEach((link) => {
                const href = link.getAttribute('href');
                const active = href === `#${sectionId}`;

                link.classList.toggle('text-white', active);
                link.classList.toggle('text-gray-300', !active);
                link.classList.toggle('bg-white/10', active);
            });
        };

        const updateActiveSection = () => {
            const navOffset = navbar?.offsetHeight || 0;
            const marker = window.scrollY + navOffset + window.innerHeight * 0.35;
            let current = sections[0];

            sections.forEach((section) => {
                if (section.offsetTop <= marker) {
                    current = section;
                }
            });

            if (current?.id) {
                setActiveLink(current.id);
            }
        };

        window.addEventListener('scroll', updateActiveSection, { passive: true });
        window.addEventListener('resize', updateActiveSection);
        updateActiveSection();
    }

    const typingRole = document.getElementById('typing-role');

    if (typingRole) {
        let roles = [];

        try {
            const parsed = JSON.parse(typingRole.dataset.roles || '[]');
            roles = Array.isArray(parsed) ? parsed : [];
        } catch {
            roles = [];
        }

        if (roles.length > 0) {
            let wordIndex = 0;
            let charIndex = 0;
            let deleting = false;

            const typeTick = () => {
                const currentWord = roles[wordIndex] || '';
                const displayed = currentWord.slice(0, charIndex);
                typingRole.textContent = displayed;

                if (!deleting && charIndex < currentWord.length) {
                    charIndex += 1;
                    setTimeout(typeTick, 75);
                    return;
                }

                if (!deleting && charIndex === currentWord.length) {
                    deleting = true;
                    setTimeout(typeTick, 1100);
                    return;
                }

                if (deleting && charIndex > 0) {
                    charIndex -= 1;
                    setTimeout(typeTick, 40);
                    return;
                }

                deleting = false;
                wordIndex = (wordIndex + 1) % roles.length;
                setTimeout(typeTick, 300);
            };

            if (!reducedMotion && roles.length > 1) {
                setTimeout(typeTick, 500);
            } else {
                typingRole.textContent = roles[0];
            }
        }
    }

    const homeSection = document.getElementById('home');
    const parallaxItems = Array.from(homeSection?.querySelectorAll('.parallax') || []);

    const resetParallax = () => {
        parallaxItems.forEach((item) => {
            item.style.setProperty('--parallax-x', '0px');
            item.style.setProperty('--parallax-y', '0px');
        });
    };

    if (homeSection && parallaxItems.length > 0 && !reducedMotion) {
        homeSection.addEventListener('pointermove', (event) => {
            const rect = homeSection.getBoundingClientRect();
            const normX = (event.clientX - rect.left) / rect.width - 0.5;
            const normY = (event.clientY - rect.top) / rect.height - 0.5;

            parallaxItems.forEach((item) => {
                const depth = Number(item.getAttribute('data-depth') || 10);
                item.style.setProperty('--parallax-x', `${normX * depth}px`);
                item.style.setProperty('--parallax-y', `${normY * depth}px`);
            });
        });

        homeSection.addEventListener('pointerleave', resetParallax);
    } else {
        resetParallax();
    }

    const counters = Array.from(document.querySelectorAll('.counter[data-counter]'));

    const animateCounter = (counter) => {
        if (counter.dataset.animated === 'true') {
            return;
        }

        counter.dataset.animated = 'true';
        const target = Number(counter.dataset.counter || 0);

        if (!Number.isFinite(target)) {
            counter.textContent = '0';
            return;
        }

        const duration = 1200;
        const startedAt = performance.now();

        const step = (timestamp) => {
            const elapsed = timestamp - startedAt;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - (1 - progress) ** 3;
            const value = Math.round(target * eased);

            counter.textContent = `${value}`;

            if (progress < 1) {
                requestAnimationFrame(step);
            }
        };

        requestAnimationFrame(step);
    };

    if (counters.length > 0) {
        if (reducedMotion) {
            counters.forEach((counter) => {
                const target = Number(counter.dataset.counter || 0);
                counter.textContent = `${Number.isFinite(target) ? target : 0}`;
            });
        } else {
            const counterObserver = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach((entry) => {
                        if (!entry.isIntersecting) {
                            return;
                        }

                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    });
                },
                { threshold: 0.45 },
            );

            counters.forEach((counter) => counterObserver.observe(counter));
        }
    }

    const tiltCards = Array.from(document.querySelectorAll('.tilt-card'));
    const canHover = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

    if (!reducedMotion && canHover) {
        tiltCards.forEach((card) => {
            card.addEventListener('pointermove', (event) => {
                const rect = card.getBoundingClientRect();
                const px = (event.clientX - rect.left) / rect.width;
                const py = (event.clientY - rect.top) / rect.height;
                const rotateX = (0.5 - py) * 8;
                const rotateY = (px - 0.5) * 10;

                card.classList.add('is-tilting');
                card.style.transform = `perspective(900px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });

            card.addEventListener('pointerleave', () => {
                card.classList.remove('is-tilting');
                card.style.transform = 'perspective(900px) rotateX(0deg) rotateY(0deg)';
            });
        });
    }

    const projects = {
        mystic: {
            title: 'Mystic Mall E-Commerce',
            slides: ['/huzaifa.png'],
        },
        library: {
            title: 'Library Management System',
            slides: ['/huzaifa.jpg'],
        },
    };

    const projectModal = document.getElementById('project-modal');
    const projectModalTitle = document.getElementById('project-modal-title');
    const projectModalImage = document.getElementById('project-modal-image');
    const projectModalCounter = document.getElementById('project-modal-counter');
    const projectModalClose = document.getElementById('project-modal-close');
    const projectModalPrev = document.getElementById('project-modal-prev');
    const projectModalNext = document.getElementById('project-modal-next');
    const projectModalPanel = projectModal?.querySelector('.modal-panel');

    let activeProject = null;
    let activeSlide = 0;

    const updateModalSlide = () => {
        if (!activeProject) {
            return;
        }

        projectModalImage.src = activeProject.slides[activeSlide];
        projectModalCounter.textContent = `${activeSlide + 1} / ${activeProject.slides.length}`;
    };

    const closeProjectModal = () => {
        if (!projectModal) {
            return;
        }

        projectModal.classList.add('hidden');
        projectModal.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
        activeProject = null;
        activeSlide = 0;
    };

    const openProjectModal = (projectKey) => {
        const project = projects[projectKey];

        if (!project) {
            return;
        }

        activeProject = project;
        activeSlide = 0;
        projectModalTitle.textContent = project.title;
        updateModalSlide();
        projectModal?.classList.remove('hidden');
        projectModal?.classList.add('flex');
        projectModalPanel?.classList.remove('modal-panel');
        void projectModalPanel?.offsetWidth;
        projectModalPanel?.classList.add('modal-panel');
        document.body.classList.add('overflow-hidden');
    };

    document.querySelectorAll('.open-project-modal').forEach((button) => {
        button.addEventListener('click', () => {
            const key = button.getAttribute('data-project');
            openProjectModal(key);
        });
    });

    projectModalClose?.addEventListener('click', closeProjectModal);

    projectModal?.addEventListener('click', (event) => {
        if (event.target === projectModal) {
            closeProjectModal();
        }
    });

    projectModalPrev?.addEventListener('click', (event) => {
        event.stopPropagation();

        if (!activeProject) {
            return;
        }

        activeSlide = activeSlide === 0 ? activeProject.slides.length - 1 : activeSlide - 1;
        updateModalSlide();
    });

    projectModalNext?.addEventListener('click', (event) => {
        event.stopPropagation();

        if (!activeProject) {
            return;
        }

        activeSlide = activeSlide === activeProject.slides.length - 1 ? 0 : activeSlide + 1;
        updateModalSlide();
    });

    document.addEventListener('keydown', (event) => {
        if (projectModal?.classList.contains('hidden')) {
            return;
        }

        if (event.key === 'Escape') {
            closeProjectModal();
        } else if (event.key === 'ArrowLeft') {
            projectModalPrev?.click();
        } else if (event.key === 'ArrowRight') {
            projectModalNext?.click();
        }
    });

    const contactForm = document.getElementById('contact-form');
    const formStatus = document.getElementById('form-status');
    const contactClickStatus = document.getElementById('contact-click-status');
    const contactEmailLink = document.getElementById('contact-email-link');
    const contactPhoneLink = document.getElementById('contact-phone-link');

    document.querySelectorAll('[data-click-response]').forEach((element) => {
        element.addEventListener('click', () => {
            const response = element.getAttribute('data-click-response');

            if (!contactClickStatus || !response) {
                return;
            }

            contactClickStatus.textContent = response;
            contactClickStatus.classList.remove('hidden');
        });
    });

    contactPhoneLink?.addEventListener('click', (event) => {
        const phoneHref = contactPhoneLink.getAttribute('href') || '';
        const phoneNumber = phoneHref.replace('tel:', '');
        const isDesktop = !/Android|iPhone|iPad|iPod|Windows Phone/i.test(navigator.userAgent);

        if (!isDesktop) {
            return;
        }

        event.preventDefault();

        if (navigator.clipboard?.writeText) {
            navigator.clipboard.writeText(phoneNumber).catch(() => { });
        }

        if (contactClickStatus) {
            contactClickStatus.textContent = `Dialer may not be available on desktop. Number copied: ${phoneNumber}`;
            contactClickStatus.classList.remove('hidden');
        }
    });

    contactForm?.addEventListener('submit', (event) => {
        event.preventDefault();

        const formData = new FormData(contactForm);
        const name = (formData.get('name') || '').toString().trim();
        const email = (formData.get('email') || '').toString().trim();
        const message = (formData.get('message') || '').toString().trim();
        const fallbackEmail = (contactEmailLink?.textContent || '').trim() || 'naveedrustam02@gmail.com';

        const subject = encodeURIComponent(`Contact from ${name}`);
        const body = encodeURIComponent(`${message}\n\nFrom: ${name} (${email})`);

        formStatus.textContent = 'Opening your email client...';
        formStatus.classList.remove('hidden');
        window.location.href = `mailto:${fallbackEmail}?subject=${subject}&body=${body}`;

        window.setTimeout(() => {
            formStatus.textContent = `If nothing opened, email me directly at ${fallbackEmail}`;
        }, 1800);
    });

    const footerNewsletterForm = document.getElementById('footer-newsletter-form');
    const footerNewsletterStatus = document.getElementById('footer-newsletter-status');

    footerNewsletterForm?.addEventListener('submit', (event) => {
        event.preventDefault();

        const formData = new FormData(footerNewsletterForm);
        const email = (formData.get('footer-email') || '').toString().trim();

        if (!email) {
            return;
        }

        if (footerNewsletterStatus) {
            footerNewsletterStatus.textContent = 'Thanks. You are on the list.';
            footerNewsletterStatus.classList.remove('hidden');
        }

        footerNewsletterForm.reset();
    });

    const handleReducedMotionChange = (event) => {
        reducedMotion = event.matches;
    };

    if (typeof reducedMotionQuery.addEventListener === 'function') {
        reducedMotionQuery.addEventListener('change', handleReducedMotionChange);
    } else if (typeof reducedMotionQuery.addListener === 'function') {
        reducedMotionQuery.addListener(handleReducedMotionChange);
    }
});
