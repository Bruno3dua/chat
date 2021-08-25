const form = document.getElementById('form_login')
const btnSubmit = document.getElementById("btn-submit");
form.onsubmit =  (e)=>{
    e.preventDefault();
}

btnSubmit.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/validLogin.php", true);

    xhr.onload = ()=>{
   
        if(xhr.readyState === 4 && xhr.status === 200){
            var resp = xhr.response;
            console.log(resp);
        }
    }       
    
    let formData = new FormData(form);
    xhr.send(formData);
};