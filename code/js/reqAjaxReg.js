const btnRegister = document.getElementById('btn-register');
const form = document.getElementById('reg-box');

form.onsubmit = (e)=>{
    e.preventDefault();
}

btnRegister.addEventListener('click', ()=>{
    const xhr = new XMLHttpRequest();
    
    xhr.open("POST", "../php/validRegister.php", true);
    console.log(xhr);
    xhr.onload = ()=>{
        if(xhr.readyState === 4 && xhr.status === 200){
            console.log(xhr.response);
        }

    }

    let dataRegister = new FormData(form);
    xhr.send(dataRegister);
});
