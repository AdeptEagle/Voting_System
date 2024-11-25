const loginForm = document.getElementById('login-form');
const errorMessage = document.getElementById('error-message');

const username = '1';
const password = '2';
const adminUsername = 'admin';
const adminPassword = 'password';

loginForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const inputUsername = document.getElementById('username').value;
    const inputPassword = document.getElementById('password').value;
  
    if (inputUsername === username && inputPassword === password) {
      window.location.href = 'Home.html';
    } else if (inputUsername === adminUsername && inputPassword === adminPassword) {
      window.location.href = 'Dev.html';
    } else {
      errorMessage.textContent = 'Invalid username or password';
      errorMessage.classList.add('error');
    }
  });