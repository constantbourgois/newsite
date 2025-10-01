// Simple scroll animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements for animation
document.querySelectorAll('.service-card, .project-logo').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'all 0.6s ease';
    observer.observe(el);
});

// Animate skill bars on scroll
const skillsSection = document.querySelector('.skills');
const skillBars = document.querySelectorAll('.bar-fill');

const skillsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            skillBars.forEach(bar => {
                bar.style.animation = 'none';
                bar.offsetHeight; // Trigger reflow
                bar.style.animation = 'fillBar 2s ease forwards';
            });
        }
    });
}, { threshold: 0.5 });

//skillsObserver.observe(skillsSection);

// Add CSS animation for skill bars
const style = document.createElement('style');
style.textContent = `
            @keyframes fillBar {
                from { height: 0%; }
                to { height: var(--target-height); }
            }
        `;
document.head.appendChild(style);

// Set custom properties for each bar
skillBars.forEach((bar, index) => {
    const heights = ['95%', '90%', '95%', '65%', '45%'];
    bar.style.setProperty('--target-height', heights[index]);
});



function validateForm(form) {
    let valid = true;
    let name = form.querySelector('input[name="u_name"]');
    let email = form.querySelector('input[name="u_email"]');
    let message = form.querySelector('textarea[name="message"]');
    // Simple validation
    if (!name.value.trim()) {
        name.classList.add('error');
        valid = false;
    } else {
        name.classList.remove('error');
    }
    if (!email.value.trim() || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
        email.classList.add('error');
        valid = false;
    } else {
        email.classList.remove('error');
    }
    if (!message.value.trim()) {
        message.classList.add('error');
        valid = false;
    } else {
        message.classList.remove('error');
    }
    return valid;
}

document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('.contact form');
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (!validateForm(form)) return;
            const formData = new FormData(form);
            fetch('pages/thankyou.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.ok ? response.text() : Promise.reject())
                .then(data => {
                    if (data === "mail_sent") {
                        let thankYouMsg = document.getElementById('thankyou-message');
                        thankYouMsg.style.display = "block";
                        document.getElementById("contactform").style.display = "none";
                        form.reset();
                    }
                    else {
                        alert('There was an error sending your message.');
                    }
                })
                .catch(() => {
                    alert('There was an error sending your message.');
                });
        });
    }
});

function openContact() {
    if (document.querySelector(".contact").style.display = "none") {
        document.querySelector(".contact").style.display = "flex";
    }
}

function closeContact() {
    const contact = document.querySelector(".contact");
    contact.classList.add("fadeout");
    contact.addEventListener("animationend", function handler() {
        contact.style.display = "none";
        contact.classList.remove("fadeout");
        contact.removeEventListener("animationend", handler);
    });
}

function loadThankyou() {

}