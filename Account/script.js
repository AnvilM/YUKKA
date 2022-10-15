
function theme()
{
    const main = document.getElementById("main");
    if(main.classList.contains("white"))
    {
        main.classList.remove("white");
    }
    else
    {
    main.classList.add("white");
    }
}

function Replenishment()
{
    const replenish = document.getElementById("replenishment");
    const main = document.getElementById("black");
    main.classList.add('disabled')
    replenish.classList.add('active');
}

function Back()
{
    const replenish = document.getElementById("replenishment");
    const main = document.getElementById("black");
    main.classList.remove('disabled')
    replenish.classList.remove('active');
}



const tel = document.getElementById("value");
tel.oninput = function() {
    let regist = /[^0-9]/g;
    let tgg = document.getElementById("value");
    if (regist.test(tgg.value) == true)
    {
        tgg.value = tgg.value.replace(regist, '');
    }
}