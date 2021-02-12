function validateForm() {
    console.log('validate form');
    let name = document.forms["signupForm"]["name"].value;
    if (!name) {
        alert("Name must be filled out");
        return false;
    }

    let email = document.forms["signupForm"]["email"].value;
    if (!email.includes('@hees.org')) {
        alert("Email is not valid");
        return false;
    }
    let username = document.forms["signupForm"]["username"].value;
if (!username) {
    alert("Username must be filled out");
    return false;
      
    }
  
     let password = document.forms["signupForm"]["password"].value;
    if (!password) {
        alert("Password must be filled out");
        return false;
    }
   
        return true
}

function login() {
    let username = document.forms["loginForm"]["username"].value;
    let password = document.forms["loginForm"]["password"].value;
    let errorBox = document.getElementById('error-message')
    if(username==='admin' && password === 'admin123') {
        window.location.href = '../HomePage.html'
        return true
    } else {
        errorBox.innerHTML = 'Username or password is invalid! Please check credentials.'
        errorBox.style.display = 'block'
    }
}


function changeTab(tab) {
    let sign_up = document.getElementById('sign-up')
    let login = document.getElementById('login')
    if(tab === 'login') {
        sign_up.style.display = 'none'
        login.style.display = 'block'
    } else {
        sign_up.style.display = 'block'
        login.style.display = 'none'
    }
}
