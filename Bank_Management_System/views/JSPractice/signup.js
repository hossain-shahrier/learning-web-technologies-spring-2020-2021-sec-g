const username = document.getElementsByName('username');
const password = document.getElementsByTagName('password');
const email = document.getElementsByName('email');

const from = document.getElementById('form');
const errorElement = document.getElementById('error');

from.addEventListener('submit',(e)=>{
    let massages=[]

    if(username===''||username == null){
        massages.push("Cannot be empty")
    }
    else if(username.length <2){
        massages.push("Contains at least two words.")
    }
    if(email===''||email== null){
        massages.push("Cannot be empty");
    }
    if(massages.length>0){
        e.preventDefault();
        errorElement.innerText = massages.join(', ');
    }
    
})

