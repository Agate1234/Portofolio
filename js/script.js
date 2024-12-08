// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Active State pada Navbar
document.querySelectorAll('nav ul li a').forEach(link => {
    link.addEventListener('click', function() {
        document.querySelectorAll('nav ul li a').forEach(l => l.classList.remove('active'));
        this.classList.add('active');
    });
});

// Preloader dengan Animasi
window.addEventListener('load', function () {
    const preloader = document.getElementById('preloader');
    const preloaderText = document.querySelector('.preloader-text');
    
    preloaderText.style.opacity = '1';
    preloaderText.style.transform = 'translateY(0)';  // Animasi slide dari bawah ke atas
    
    setTimeout(() => {
        document.body.classList.add('loaded');
        preloader.style.display = 'none'; 

        document.getElementById('main-content').classList.add('loaded');
    }, 1500); 
});

// Hide/Show Navbar saat Scroll
let lastScroll = 0;
window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    const currentScroll = window.scrollY;

    if (currentScroll > lastScroll && currentScroll > 50) {
        navbar.classList.remove('visible'); 
    } else {
        navbar.classList.add('visible');
    }
    lastScroll = currentScroll;
});

// Reveal Animation untuk Section "About Me"
document.addEventListener("DOMContentLoaded", function () {
    const aboutSection = document.querySelector('.profile-container');

    function checkVisibility() {
        const rect = aboutSection.getBoundingClientRect();
        const isInViewport = rect.top <= window.innerHeight && rect.bottom >= 0;

        if (isInViewport) {
            aboutSection.classList.add('visible'); 
        } else {
            aboutSection.classList.remove('visible');
        }
    }

    window.addEventListener('scroll', checkVisibility);
    window.addEventListener('resize', checkVisibility);

    checkVisibility();
});

// Modal untuk Deskripsi Skill
// function openModal(title, description) {
//     const modal = document.getElementById('skill-modal');
//     document.getElementById('skill-title').textContent = title;
//     document.getElementById('skill-description').textContent = description;
//     modal.style.display = 'flex';
// }

// document.querySelector('.close').onclick = () => {
//     document.getElementById('skill-modal').style.display = 'none';
// };

// window.onclick = (event) => {
//     const modal = document.getElementById('skill-modal');
//     if (event.target === modal) {
//         modal.style.display = 'none';
//     }
// };

// Intersection Observer untuk Skills
document.addEventListener("DOMContentLoaded", function () {
    const skills = document.querySelectorAll('.skill');

    if (skills.length === 0) {
        console.warn("Tidak ada elemen dengan kelas '.skill' ditemukan.");
        return;
    }

    skills.forEach((skill, index) => {
        skill.style.setProperty('--delay', `${index * 0.075}s`);
    });

    const observerOptions = {
        root: null, 
        rootMargin: '0px',
        threshold: 0.1, 
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible'); 
                entry.target.classList.remove('hidden');
            } else {
                entry.target.classList.remove('visible'); 
                entry.target.classList.add('hidden');
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);

    skills.forEach(skill => {
        observer.observe(skill);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const projectsSection = document.querySelector('.projects-grid');

    if (!projectsSection) return;

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);
    observer.observe(projectsSection);
});
