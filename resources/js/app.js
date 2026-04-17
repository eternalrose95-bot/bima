const onReady = () => {
	const header = document.querySelector('[data-header]');
	const nav = document.querySelector('[data-nav]');
	const navToggle = document.querySelector('[data-nav-toggle]');

	if (header) {
		const syncHeader = () => {
			header.classList.toggle('is-scrolled', window.scrollY > 24);
		};

		syncHeader();
		window.addEventListener('scroll', syncHeader, { passive: true });
	}

	if (nav && navToggle) {
		navToggle.addEventListener('click', () => {
			nav.classList.toggle('is-open');
			navToggle.classList.toggle('is-open');
		});
	}

	const navGroups = document.querySelectorAll('[data-nav-group]');

	if (navGroups.length) {
		navGroups.forEach((group) => {
			const toggle = group.querySelector('[data-nav-group-toggle]');

			toggle?.addEventListener('click', () => {
				const isDesktop = window.matchMedia('(min-width: 1025px)').matches;

				if (isDesktop) {
					return;
				}

				const nextState = !group.classList.contains('is-open');
				group.classList.toggle('is-open', nextState);
				toggle.setAttribute('aria-expanded', nextState ? 'true' : 'false');
			});
		});
	}

	const revealItems = document.querySelectorAll('[data-reveal]');

	if (revealItems.length) {
		const revealObserver = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					entry.target.classList.add('is-visible');
					revealObserver.unobserve(entry.target);
				}
			});
		}, { threshold: 0.12 });

		revealItems.forEach((item) => revealObserver.observe(item));
	}

	const counters = document.querySelectorAll('[data-count]');

	if (counters.length) {
		const counterObserver = new IntersectionObserver((entries) => {
			entries.forEach((entry) => {
				if (!entry.isIntersecting) {
					return;
				}

				const target = Number(entry.target.getAttribute('data-count') || 0);
				const duration = 900;
				const start = performance.now();

				const tick = (now) => {
					const progress = Math.min((now - start) / duration, 1);
					entry.target.textContent = Math.floor(progress * target).toString();

					if (progress < 1) {
						window.requestAnimationFrame(tick);
					}
				};

				window.requestAnimationFrame(tick);
				counterObserver.unobserve(entry.target);
			});
		}, { threshold: 0.5 });

		counters.forEach((counter) => counterObserver.observe(counter));
	}

	const lightbox = document.querySelector('[data-lightbox]');
	const lightboxImage = document.querySelector('[data-lightbox-image]');
	const lightboxCaption = document.querySelector('[data-lightbox-caption]');
	const lightboxClose = document.querySelector('[data-lightbox-close]');
	const triggers = document.querySelectorAll('[data-lightbox-trigger]');

	if (lightbox && lightboxImage && lightboxCaption && triggers.length) {
		const closeLightbox = () => lightbox.classList.remove('is-open');

		triggers.forEach((trigger) => {
			trigger.addEventListener('click', () => {
				lightboxImage.setAttribute('src', trigger.getAttribute('data-lightbox-image') || '');
				lightboxCaption.textContent = trigger.getAttribute('data-lightbox-caption') || '';
				lightbox.classList.add('is-open');
			});
		});

		lightbox.addEventListener('click', (event) => {
			if (event.target === lightbox) {
				closeLightbox();
			}
		});

		lightboxClose?.addEventListener('click', closeLightbox);

		window.addEventListener('keydown', (event) => {
			if (event.key === 'Escape') {
				closeLightbox();
			}
		});
	}
};

document.addEventListener('DOMContentLoaded', onReady);
