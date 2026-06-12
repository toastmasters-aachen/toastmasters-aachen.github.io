(function () {
    // --- Mobile Menu Toggle ---
    var toggle = document.querySelector('.nav-toggle');
    var nav = document.querySelector('#site-nav');

    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var isOpen = nav.classList.toggle('is-open');
            toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    }

    // --- Mobile Flip Cards Tap & Key Handler ---
    var flipCards = document.querySelectorAll('.flip-card');
    flipCards.forEach(function (card) {
        card.addEventListener('click', function () {
            card.classList.toggle('flipped');
        });

        card.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                card.classList.toggle('flipped');
            }
        });
    });

    // --- Home Page 3D Cards Carousel ---
    var carouselTrack = document.querySelector('.cards-carousel-track');
    if (carouselTrack) {
        var items = carouselTrack.querySelectorAll('.cards-carousel-item');
        var dots = document.querySelectorAll('.carousel-dot');
        var prevBtn = document.querySelector('.carousel-nav-btn.prev-btn');
        var nextBtn = document.querySelector('.carousel-nav-btn.next-btn');
        var currentIndex = 0;
        var slideInterval;

        function updateCarousel(index) {
            var total = items.length;
            items.forEach(function (item, idx) {
                item.className = 'cards-carousel-item'; // Reset classes
                
                if (idx === index) {
                    item.classList.add('active');
                } else if (idx === (index - 1 + total) % total) {
                    item.classList.add('prev');
                } else if (idx === (index + 1) % total) {
                    item.classList.add('next');
                } else {
                    item.classList.add('hidden');
                }
            });

            dots.forEach(function (dot, idx) {
                if (idx === index) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });

            currentIndex = index;
        }

        function nextSlide() {
            var nextIndex = (currentIndex + 1) % items.length;
            updateCarousel(nextIndex);
        }

        function prevSlide() {
            var prevIndex = (currentIndex - 1 + items.length) % items.length;
            updateCarousel(prevIndex);
        }

        // Click on items: slide if not active, or open lightbox if already active
        items.forEach(function (item, idx) {
            item.addEventListener('click', function () {
                if (idx !== currentIndex) {
                    updateCarousel(idx);
                    stopAutoPlay();
                    startAutoPlay();
                } else {
                    // Open in Lightbox Modal
                    var img = item.querySelector('img');
                    var title = item.querySelector('.carousel-item-caption h3');
                    var desc = item.querySelector('.carousel-item-caption p');
                    var lightbox = document.getElementById('gallery-lightbox');
                    var lightboxImg = document.getElementById('lightbox-img');
                    var lightboxCaption = document.getElementById('lightbox-caption');
                    
                    if (img && lightbox && lightboxImg && lightboxCaption) {
                        lightboxImg.src = img.src;
                        lightboxImg.alt = img.alt;
                        lightboxCaption.innerHTML = "<strong>" + (title ? title.textContent : "") + "</strong><br><small>" + (desc ? desc.textContent : "") + "</small>";
                        lightbox.classList.add('active');
                        lightbox.setAttribute('aria-hidden', 'false');
                        document.body.style.overflow = 'hidden';
                    }
                }
            });
        });

        if (prevBtn) {
            prevBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                prevSlide();
                stopAutoPlay();
                startAutoPlay();
            });
        }

        if (nextBtn) {
            nextBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                nextSlide();
                stopAutoPlay();
                startAutoPlay();
            });
        }

        dots.forEach(function (dot) {
            dot.addEventListener('click', function (e) {
                e.stopPropagation();
                var slideIndex = parseInt(dot.getAttribute('data-index'), 10);
                updateCarousel(slideIndex);
                stopAutoPlay();
                startAutoPlay();
            });
        });

        function startAutoPlay() {
            if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                slideInterval = setInterval(nextSlide, 5000);
            }
        }

        function stopAutoPlay() {
            if (slideInterval) {
                clearInterval(slideInterval);
            }
        }

        // Touch swipe support for mobile
        var startX = 0;
        var endX = 0;
        carouselTrack.addEventListener('touchstart', function (e) {
            startX = e.changedTouches[0].screenX;
        }, { passive: true });

        carouselTrack.addEventListener('touchend', function (e) {
            endX = e.changedTouches[0].screenX;
            var threshold = 50;
            if (startX - endX > threshold) {
                nextSlide();
                stopAutoPlay();
                startAutoPlay();
            } else if (endX - startX > threshold) {
                prevSlide();
                stopAutoPlay();
                startAutoPlay();
            }
        }, { passive: true });

        // Initial render
        updateCarousel(0);
        startAutoPlay();
    }

    // --- CSS Grid Gallery Lightbox ---
    var galleryItems = document.querySelectorAll('.gallery-item');
    var lightbox = document.getElementById('gallery-lightbox');
    var lightboxImg = document.getElementById('lightbox-img');
    var lightboxCaption = document.getElementById('lightbox-caption');
    var lightboxClose = document.querySelector('.lightbox-close');

    if (galleryItems.length > 0 && lightbox && lightboxImg && lightboxCaption && lightboxClose) {
        galleryItems.forEach(function (item) {
            item.addEventListener('click', function () {
                var img = item.querySelector('.gallery-thumb');
                var title = item.querySelector('.overlay-title');
                var desc = item.querySelector('.overlay-desc');

                if (img) {
                    lightboxImg.src = img.src;
                    lightboxImg.alt = img.alt;
                    lightboxCaption.innerHTML = "<strong>" + (title ? title.textContent : "") + "</strong><br><small>" + (desc ? desc.textContent : "") + "</small>";
                    
                    lightbox.classList.add('active');
                    lightbox.setAttribute('aria-hidden', 'false');
                    document.body.style.overflow = 'hidden'; // Lock background scroll
                }
            });
        });

        function closeLightbox() {
            lightbox.classList.remove('active');
            lightbox.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = ''; // Unlock background scroll
            lightboxImg.src = "";
        }

        lightboxClose.addEventListener('click', closeLightbox);
        
        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox || e.target.classList.contains('lightbox-content')) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && lightbox.classList.contains('active')) {
                closeLightbox();
            }
        });
    }
})();
