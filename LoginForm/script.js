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

// function login() {
//     let username = document.forms["loginForm"]["username"].value;
//     let password = document.forms["loginForm"]["password"].value;
//     let errorBox = document.getElementById('error-message')
//     if(username==='admin' && password === 'admin123') {
//         window.location.href = '../HomePage.html'
//         return true
//     } else {
//         errorBox.innerHTML = 'Username or password is invalid! Please check credentials.'
//         errorBox.style.display = 'block'
//     }
// }


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
// function submission(tab){
//     var name = document.getElementByID = "name";
//     var password = document.getElementByID = "password";
//     var email = document.getElementById = "email";
//     var usrname = document.getElementByID = "usrname";
  
//     var name = new Array();
//     var usrname = new Array();
//     var password = new Array();
//     var email = new Array();
//   }
//   var elementlist=document.getElementsByClassName('login-container');

//   for(var i=0;i<elementlist.length;i++){
//       elementlist[i].addEventListener('keyup',function(event){
//           console.log(event)

//           console.log('username is' + usenrameValue);
//           console.log('password is' + passwordValue);
//       })

//   }
// var usrnameValue="";
// var passwordValue="";

//   var loginObject={
//       username: "",
//       password: "",

//   }


