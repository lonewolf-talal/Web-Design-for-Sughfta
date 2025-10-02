// Mobile Menu Functionality
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');
const menuClose = document.getElementById('menu-close');
const menuOverlay = document.getElementById('menu-overlay');

menuToggle.addEventListener('click', function() {
    mobileMenu.classList.add('active');
    menuOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';
});

function closeMenu() {
    mobileMenu.classList.remove('active');
    menuOverlay.classList.remove('active');
    document.body.style.overflow = 'auto';
}

menuClose.addEventListener('click', closeMenu);
menuOverlay.addEventListener('click', closeMenu);

// Video Controls
const video = document.getElementById('hero-video');
const muteBtn = document.getElementById('mute-btn');
const pauseBtn = document.getElementById('pause-btn');

muteBtn.addEventListener('click', function() {
    if (video.muted) {
        video.muted = false;
        muteBtn.innerHTML = '<i class="fas fa-volume-up"></i>';
    } else {
        video.muted = true;
        muteBtn.innerHTML = '<i class="fas fa-volume-mute"></i>';
    }
});

pauseBtn.addEventListener('click', function() {
    if (video.paused) {
        video.play();
        pauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
    } else {
        video.pause();
        pauseBtn.innerHTML = '<i class="fas fa-play"></i>';
    }
});

// Column Slides Functionality
const slides = document.querySelectorAll('.column-slide');
const indicators = document.querySelectorAll('.indicator');
let currentSlide = 0;

function showSlide(index) {
    // Hide all slides
    slides.forEach(slide => {
        slide.classList.remove('active');
    });
    
    // Remove active class from all indicators
    indicators.forEach(indicator => {
        indicator.classList.remove('active');
    });
    
    // Show the selected slide
    slides[index].classList.add('active');
    indicators[index].classList.add('active');
    currentSlide = index;
}

// Add click events to indicators
indicators.forEach(indicator => {
    indicator.addEventListener('click', function() {
        const slideIndex = parseInt(this.getAttribute('data-slide'));
        showSlide(slideIndex);
    });
});

// Auto slide change
setInterval(() => {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}, 5000);

// Countdown Timer
function updateCountdown() {
    const days = document.getElementById('days');
    const hours = document.getElementById('hours');
    const minutes = document.getElementById('minutes');
    const seconds = document.getElementById('seconds');
    
    let daysVal = parseInt(days.innerText);
    let hoursVal = parseInt(hours.innerText);
    let minutesVal = parseInt(minutes.innerText);
    let secondsVal = parseInt(seconds.innerText);
    
    secondsVal--;
    
    if (secondsVal < 0) {
        secondsVal = 59;
        minutesVal--;
        
        if (minutesVal < 0) {
            minutesVal = 59;
            hoursVal--;
            
            if (hoursVal < 0) {
                hoursVal = 23;
                daysVal--;
                
                if (daysVal < 0) {
                    // Countdown finished
                    daysVal = 0;
                    hoursVal = 0;
                    minutesVal = 0;
                    secondsVal = 0;
                }
            }
        }
    }
    
    days.innerText = daysVal.toString().padStart(2, '0');
    hours.innerText = hoursVal.toString().padStart(2, '0');
    minutes.innerText = minutesVal.toString().padStart(2, '0');
    seconds.innerText = secondsVal.toString().padStart(2, '0');
}

setInterval(updateCountdown, 1000);

// Fade-in animation on scroll
function checkFade() {
    const fadeElements = document.querySelectorAll('.fade-in');
    
    fadeElements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        
        if (elementTop < windowHeight - 100) {
            element.classList.add('visible');
        }
    });
}

window.addEventListener('scroll', checkFade);
window.addEventListener('load', checkFade);

// Add to cart functionality
const addToCartButtons = document.querySelectorAll('.add-to-cart');
addToCartButtons.forEach(button => {
    button.addEventListener('click', function() {
        const productName = this.parentElement.querySelector('.product-name').textContent;
        alert(`${productName} has been added to your cart!`);
    });
});