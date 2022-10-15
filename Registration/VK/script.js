let err1 = false;
let err2 = false;
let err3 = false;

const nicknamec = document.getElementById("nickname");
nicknamec.oninput = function(){
    var err = document.getElementById("errMsg");
    let reg2 = /[^0-9A-Za-z]/g;
    let n = document.getElementById("nickname");
    nick();
    if (reg2.test(n.value) == true)
    {
        n.value = n.value.replace(reg2, '');
        err.textContent = 'Никнейм может содержать только цифры и латинские буквы';
    }

    
}


const tel = document.getElementById("telegram");
tel.oninput = function() {
    var err = document.getElementById("errMsg");
    let regist = /[^0-9]/g;
    let tgg = document.getElementById("telegram");
    if (regist.test(tgg.value) == true)
    {
        tgg.value = tgg.value.replace(regist, '');
        err.textContent = 'VK ID может содержать только цифры';
    }
}



const pass1c = document.getElementById("password");
pass1c.oninput = function(){
    pass();
}

const pass2c = document.getElementById("rePassword");
pass2c.oninput = function(){
    pass2();
}
pass2c.onpaste = function(){
    event.preventDefault();
    var err = document.getElementById("errMsg");
    err.textContent = 'Введите пароль вручную, так будет надежнее';
}









function nick()
{
    var err = document.getElementById("errMsg");
    var nick = document.getElementById("nickname").value;
    if(nick.length < 3 || nick.length > 16)
    {
        err1 = true;
        err.textContent = 'Длина никнейма должна быть не менее трёх и не более шестнадцати символов';
    }
    else
    {
        err1 =false;
        if (err2 == false && err3 == false)
        {
            err.textContent = '';
        }
        else if (err2 == true){err.textContent = 'Длина пароля должна быть не менее восьми символов';}
        else{err.textContent = 'Пароли не совпадают';}
    }
}








function pass()
{
    var err = document.getElementById("errMsg");
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("rePassword").value;
    if(pass1.length < 8)
    {
        err2 = true;
        err.textContent = 'Длина пароля должна быть не менее восьми символов';
    }
    else
    {
        err2 = false;
        if(err1 == false && err3 == false) {err.textContent = '';}
        else if (err1 == true){err.textContent = 'Длина никнейма должна быть не менее трёх и не более шестнадцати символов';}
        else{err.textContent = 'Пароли не совпадают';}

    }


    if(pass1 != pass2)
    {
        err3 = true;
        err.textContent = 'Пароли не совпадают';
    }
    else
    {
        err3 =false;
        if(err1 == false && err2 == false){err.textContent = '';}
        else if (err1 == true) {err.textContent = 'Длина никнейма должна быть не менее трёх и не более шестнадцати символов';}
        else{err.textContent = 'Длина пароля должна быть не менее восьми символов';}

    }
}

function pass2()
{
    var err = document.getElementById("errMsg");
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("rePassword").value;
    if(pass1.length < 8)
    {
        err2 = true;
        err.textContent = 'Длина пароля должна быть не менее восьми символов';
    }
    else
    {
        err2 = false;
        if(err1 == false && err3 == false) {err.textContent = '';}
        else if (err1 == true){err.textContent = 'Длина никнейма должна быть не менее трёх и не более шестнадцати символов';}
        else{err.textContent = 'Пароли не совпадают';}

    }


    if(pass1 != pass2)
    {
        err3 = true;
        err.textContent = 'Пароли не совпадают';
    }
    else
    {
        err3 =false;
        if(err1 == false && err2 == false){err.textContent = '';}
        else if (err1 == true) {err.textContent = 'Длина никнейма должна быть не менее трёх и не более шестнадцати символов';}
        else{err.textContent = 'Длина пароля должна быть не менее восьми символов';}

    }
}


let form = document.getElementById("form");

form.onsubmit = function(event)
{
    var reg = /[0-9]/g;
    var err = document.getElementById("errMsg");
    var nick = document.getElementById("nickname").value;
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("rePassword").value;
    var tg = document.getElementById("telegram").value;
    errr1 = false;
    errr2 = false;
    errr3 = false;
    errr4 = false;

    if(nick.length < 3 || nick.length > 16){err.textContent = 'Длина никнейма должна быть не менее трёх и не более шестнадцати символов'; errr1 = true;}
    else{errr1 = false;}
    if(tg.length==0){err.textContent = 'Некорректное значение ID'; errr4=true;}
    else{errr4 == false}
    if(pass1.length<8){err.textContent = 'Длина пароля должна быть не менее восьми символов'; errr2 = true;}
    else{errr2= false}
    if(pass1 != pass2){err.textContent = 'Пароли не совпадают'; errr3 = true;}
    else{errr3 = false;}

    if(errr1 == true || errr2 == true || errr3 == true || errr4 == true)
    {
        event.preventDefault();
    }

}

function ID()
{
    let mess = document.getElementById("mess");
    mess.classList.add('active');
    setTimeout(IDnone, 5 * 1000);
}

function IDnone()
{
    let mess = document.getElementById("mess");
    mess.classList.remove('active');
}

