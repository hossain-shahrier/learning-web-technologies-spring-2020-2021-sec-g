const username = document.getElementsByClassName('username');
const email = document.getElementByClassName('email');
const email = document.getElementByClassName('email');
const password = document.getElementByClassName('password');
const repassword = document.getElementByClassName('repassword');
const form = document.getElementByClassName('form');
const errorElement = document.getElementByClassName('error');
form.addEventListener('submit',(e)=>{
    let messages=[];
    if(name.value === '' || name.value == null){
        messages.push('Name is required');
    }
    if(messages.length>0){
        e.preventDefault();
        errorElement.innerHTML = messages.join(', ');
    }
})
