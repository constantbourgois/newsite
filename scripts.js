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