

let eyeicon = document.getElementById('eyeicon');
let password = document.getElementById('password');

let eyeiconn = document.getElementById('eyeiconn');
let passwordd = document.getElementById('passwordd');

eyeicon.onclick = function(){
    if(password.type == 'password'){
        password.type = 'text';
        eyeicon.classList.replace('fa-eye', 'fa-eye-slash');
    }else{
        password.type = 'password';
        eyeicon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}

eyeiconn.onclick = function(){
    if(passwordd.type == 'password'){
        passwordd.type = 'text';
        eyeiconn.classList.replace('fa-eye', 'fa-eye-slash');
    }else{
        passwordd.type = 'password';
        eyeiconn.classList.replace('fa-eye-slash', 'fa-eye');
    }
}

