document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    const skillsSection = document.querySelector('#skills');
    const testimonialsSection = document.querySelector('#testimonials');
    const lucidSection = document.querySelector('#lucid');
    const personalSection = document.querySelector('#personal');
    const twiteeSection = document.querySelector('#twitee');
    const contactSection = document.querySelector('#contact');
 
    if (skillsSection) {
        observer.observe(skillsSection);
    }

    if (testimonialsSection) {
        observer.observe(testimonialsSection);
    }

    if (lucidSection) {
        observer.observe(lucidSection);
    }

    if (personalSection) {
        observer.observe(personalSection);
    }

    if (twiteeSection) {
        observer.observe(twiteeSection);
    }

    if (contactSection) {
        observer.observe(contactSection);
    }
});