function validateForm() {
    let name = document.forms["signupForm"]["name"].value;
    if (!name) {
        alert("Name must be filled out");
        preventDefault()
    }
    
    let email = document.forms["signupForm"]["email"].value;
    if (!email.includes('@hees.org')) {
        alert("Email is not valid");
        preventDefault()
    }
    let username = document.forms["signupForm"]["username"].value;
    if (!username) {
        alert("Username must be filled out");
        preventDefault()
    }
    let password = document.forms["signupForm"]["password"].value;
    if (!password) {
        alert("Password must be filled out");
        preventDefault()
    }
   

    return true
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



