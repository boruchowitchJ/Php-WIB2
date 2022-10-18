
// La recuperation des elements 
const form = document.querySelector(".form_create");
const username = document.querySelector('#inputName');
const email = document.querySelector('#inputEmail');
const password = document.querySelector('#inputPwd');
const password2 = document.querySelector('#inputConfPwd');
 const btnCreate = document.querySelector('#btn_create');

// Evenements
form.addEventListener("submit", (e) => {
    if (!form_verify()) {
      e.preventDefault();//empecher la soumission d formulaire
    } 

    // form_verify()
    // e.preventDefault();  
    
  });
       


// Fonctions
function form_verify() {
    let invalid = false;
    // Obtenir toutes les valeurs des inputs
    const userValue = username.value.trim();
    const emailValue = email.value.trim();
    const pwdValue = password.value.trim();
    const pwd2Value = password2.value.trim();
    
    // Username verify
    if (userValue === "") {
        let message ="Username ne peut pas être vide !";
        setError(username,message);
        invalid = true;
    }else if(!userValue.match(/^[a-zA-Z]/)){
        let message ="Username doit commencer par une lettre !";
        setError(username,message)
        invalid = true;
    }else{
        let letterNum = userValue.length;
        if (letterNum < 3) {
            let message ="Username doit avoir au moins 3 caractères !";
            setError(username,message)
            invalid = true;
        } else {
            setSuccess(username);
        }
    }
    
    // email verify
    if (emailValue === "") {
        let message = "Email ne peut pas être vide !";
        setError(email,message);
        invalid = true;
    }else if(!email_verify(emailValue)){
        let message = "Email non valide !";
        setError(email,message);
        invalid = true;
    }else{
        setSuccess(email)
    }
    
    // password verify
    if (pwdValue ==="") {
        let message ="Le passeword ne peut pas être vide !";
        setError(password,message)
        invalid = true;
    }else if(!password_verify(pwdValue)){
        let message = "Le mot de passe est trop faible (8 à 12 caractères) !";
        setError(password,message)
        invalid = true;
    }else{
        setSuccess(password);
    }
    // pwd confirm
    if (pwd2Value ==="") {
        let message ="Le passeword confirm ne peut pas être vide !";
        setError(password2,message)
        invalid = true;
    }else if( pwdValue !== pwd2Value){
        let message ="Les mot de passes ne correspondent pas !";
        setError(password2,message)
        invalid = true;
    }else{
        setSuccess(password2)
    }
  
    return !invalid
}

function setError(elem,message) {
    const formControl = elem.parentElement;
    const small = formControl.querySelector('small');

    // Ajout du message d'erreur
    small.innerText = message

    // Ajout de la classe error
    formControl.className = "form-control error";
}

function setSuccess(elem) {
    const formControl = elem.parentElement;
    formControl.className ='form-control success'
}

function email_verify(email) {
   
    return /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/.test(email);
}
function password_verify(passeword) {
    return /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,12}$/.test(passeword);
}
