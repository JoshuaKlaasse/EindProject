document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('.form-box.login');
    const registerForm = document.querySelector('.form-box.register');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    
    // Function to show register form
    function showRegister(e) {
        e.preventDefault();
        
        // Add slide-out animation to login form
        loginForm.classList.add('slide-out');
        
        // After animation completes, hide login and show register
        setTimeout(() => {
            loginForm.style.display = 'none';
            loginForm.classList.remove('slide-out');
            
            registerForm.style.display = 'block';
            registerForm.classList.add('slide-in');
            
            // Reset the register form
            const registerFormElement = registerForm.querySelector('form');
            if (registerFormElement) {
                registerFormElement.reset();
            }
        }, 300);
    }
    
    // Function to show login form
    function showLogin(e) {
        e.preventDefault();
        
        // Add slide-out animation to register form
        registerForm.classList.add('slide-out');
        
        // After animation completes, hide register and show login
        setTimeout(() => {
            registerForm.style.display = 'none';
            registerForm.classList.remove('slide-out', 'slide-in');
            
            loginForm.style.display = 'block';
            loginForm.classList.add('slide-in');
            
            // Reset the login form
            const loginFormElement = loginForm.querySelector('form');
            if (loginFormElement) {
                loginFormElement.reset();
            }
        }, 300);
    }
    
    // Event listeners
    if (registerLink) {
        registerLink.addEventListener('click', showRegister);
    }
    
    if (loginLink) {
        loginLink.addEventListener('click', showLogin);
    }
    
    // Form submission loading states
    const forms = document.querySelectorAll('.form-box form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('.btn');
            if (submitBtn) {
                submitBtn.classList.add('loading');
                submitBtn.disabled = true;
                
                // Re-enable after 5 seconds (in case of errors)
                setTimeout(() => {
                    submitBtn.classList.remove('loading');
                    submitBtn.disabled = false;
                }, 5000);
            }
        });
    });
    
    // Input validation and animations
    const inputs = document.querySelectorAll('.form-box .input-box input');
    inputs.forEach(input => {
        // Clear validation states on input
        input.addEventListener('input', function() {
            const inputBox = this.parentElement;
            if (this.value.trim() === '') {
                inputBox.classList.remove('success', 'error');
            }
        });
        
        // Validate on blur
        input.addEventListener('blur', function() {
            const inputBox = this.parentElement;
            
            if (this.checkValidity() && this.value.trim() !== '') {
                inputBox.classList.remove('error');
                inputBox.classList.add('success');
            } else if (this.value.trim() !== '') {
                inputBox.classList.remove('success');
                inputBox.classList.add('error');
            } else {
                inputBox.classList.remove('success', 'error');
            }
        });
    });
    
    // Enhanced validation functions
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
    
    function validatePassword(password) {
        return password.length >= 6;
    }
    
    // Real-time validation for email inputs
    const emailInputs = document.querySelectorAll('.form-box input[type="email"]');
    emailInputs.forEach(input => {
        input.addEventListener('input', function() {
            const inputBox = this.parentElement;
            if (this.value.trim() !== '') {
                if (validateEmail(this.value)) {
                    inputBox.classList.remove('error');
                    inputBox.classList.add('success');
                } else {
                    inputBox.classList.remove('success');
                    inputBox.classList.add('error');
                }
            }
        });
    });
    
    // Real-time validation for password inputs
    const passwordInputs = document.querySelectorAll('.form-box input[type="password"]');
    passwordInputs.forEach(input => {
        input.addEventListener('input', function() {
            const inputBox = this.parentElement;
            if (this.value.trim() !== '') {
                if (validatePassword(this.value)) {
                    inputBox.classList.remove('error');
                    inputBox.classList.add('success');
                } else {
                    inputBox.classList.remove('success');
                    inputBox.classList.add('error');
                }
            }
        });
    });
    
    // Smooth label animations
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            if (this.value.trim() === '') {
                this.parentElement.classList.remove('focused');
            }
        });
    });
});