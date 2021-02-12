// const styleinput =document.getElementById('styleinput')
// const styleinput2 =document.getElementById('styleinput2')
// const form =document.getElementById('form1')
// const errorElement = document.getElementById('error')
// form.addEventListener('submit', (e) =>
// {
//     let messages= []
//     if(styleinput.value === ' ' || styleinput.value == null){
//         messages.push('Name is Required')
//     }

//         if(styleinput2.length <=3){
//             messages.push('Write Your full Surname Please')
//         }





//     if(messages.length>0){
//         e.preventDefault()
//         errorElement.innerText = messages.join (', ')
//     }
   
// })

function validation(){
  var name12 = document.getElementById('name12').value;
   var surname = document.getElementById('surname').value;
   var email = document.getElementById('email').values;
   var subject =document.getElementById('subject').values;
   var textareas = document.getElementById('textareas').values;
   var error_message = document.getElementById('error_message');
   var text;


   error_message.style.padding = '10px';
   error_message.style.margin = '0px 20%';
   error_message.style.border = ' 1px solid red';
   error_message.style.fontFamily='Oswald, sans-serif';
   error_message.style.backgroundColor='red';
   if(name12.length<2){
       text = " Please Enter a Valid Name ";
       error_message.innerHTML = text;
       return false;
   }
if(surname<2){
   text = " Please Enter a Valid SurName ";
   error_message.innerHTML = text;
   return false;
}
   if(subject.length<10){
       text="Please Enter a Valid Subject";
       error_message.innerHTML= text;
       return false;
   }
   let email = document.forms["form"]["email"].value;
   if (!email.includes('@hees.org')) {
       alert("Email is not valid");
       return false;
   }
   if(textareas.length<=60){
       text="Please Enter more then 60 characters";
       error_message.innerHTML= text;
       return false;
   }
   alert("Form Submitted Successfuly");
   return true;




}