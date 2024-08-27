const signInTab = document.getElementById('sign-in-tab');
const registerTab = document.getElementById('register-tab');
const signInForm = document.getElementById('sign-in-form');
const registerForm = document.getElementById('register-form');

signInTab.addEventListener('click', function() {
    signInForm.classList.add('active');
    registerForm.classList.remove('active');
    signInTab.classList.add('active');
    registerTab.classList.remove('active');
});

registerTab.addEventListener('click', function() {
    registerForm.classList.add('active');
    signInForm.classList.remove('active');
    registerTab.classList.add('active');
    signInTab.classList.remove('active');
});
