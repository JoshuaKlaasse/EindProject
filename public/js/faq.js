// Enhanced FAQ Accordion functionality
document.addEventListener('DOMContentLoaded', function() {
    const faqButtons = document.querySelectorAll('.faq-question');
    
    faqButtons.forEach(button => {
        button.addEventListener('click', function() {
            const answer = this.nextElementSibling;
            const isOpen = this.classList.contains('open');
            
            // Close all other FAQs (optional - remove if you want multiple open)
            faqButtons.forEach(otherButton => {
                if (otherButton !== this) {
                    otherButton.classList.remove('open');
                    otherButton.nextElementSibling.classList.remove('visible');
                }
            });
            
            // Toggle current FAQ
            this.classList.toggle('open');
            answer.classList.toggle('visible');
            
            // Smooth scroll to question if opening
            if (!isOpen) {
                setTimeout(() => {
                    this.scrollIntoView({ 
                        behavior: 'smooth', 
                        block: 'nearest' 
                    });
                }, 200);
            }
        });
        
        // Keyboard accessibility
        button.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.click();
            }
        });
    });
});