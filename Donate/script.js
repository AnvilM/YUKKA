function Buye1()
{
    const replenish = document.getElementById("buye1");
    const main = document.getElementById("black");
    main.classList.add('disabled')
    replenish.classList.add('active');
}

function Buye2()
{
    const replenish = document.getElementById("buye2");
    const main = document.getElementById("black");
    main.classList.add('disabled')
    replenish.classList.add('active');
}

function Buye3()
{
    const replenish = document.getElementById("buye3");
    const main = document.getElementById("black");
    main.classList.add('disabled')
    replenish.classList.add('active');
}

function Buye4()
{
    const replenish = document.getElementById("buye4");
    const main = document.getElementById("black");
    main.classList.add('disabled')
    replenish.classList.add('active');
}

function Buye5()
{
    const replenish = document.getElementById("buye5");
    const main = document.getElementById("black");
    main.classList.add('disabled')
    replenish.classList.add('active');
}

function Buye6()
{
    const replenish = document.getElementById("buye6");
    const main = document.getElementById("black");
    main.classList.add('disabled')
    replenish.classList.add('active');
}




function Back()
{
    const replenish = document.getElementById("buye1");
    const replenish2 = document.getElementById("buye2");
    const replenish3 = document.getElementById("buye3");
    const replenish4 = document.getElementById("buye4");
    const replenish5 = document.getElementById("buye5");
    const replenish6 = document.getElementById("buye6");
    const main = document.getElementById("black");
    main.classList.remove('disabled')
    replenish.classList.remove('active');
    replenish2.classList.remove('active');
    replenish3.classList.remove('active');
    replenish4.classList.remove('active');
    replenish5.classList.remove('active');
    replenish6.classList.remove('active');
}



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