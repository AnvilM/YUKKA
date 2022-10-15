const tel = document.getElementById("tg");
tel.oninput = function() {
    var err = document.getElementById("errMsg");
    let regist = /[^0-9]/g;
    if (regist.test(tel.value) == true)
    {
        tel.value = tel.value.replace(regist, '');
        err.textContent = 'Telegram ID может содержать только цифры';
    }
}