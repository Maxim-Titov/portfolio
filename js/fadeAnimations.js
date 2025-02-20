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

    const lucidSection = document.querySelector('#lucid');
    const personalSection = document.querySelector('#personal');
    if (lucidSection) {
        observer.observe(lucidSection);
    }

    if (personalSection) {
        observer.observe(personalSection);
    }
});