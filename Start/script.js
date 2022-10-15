function Reg(){location.href="../Registration/main"}
function Auth(){location.href="../Auth/main"}
function Download(){location.href="../Files/YUKKA.exe"}

function Already()
{
let mess = document.getElementById("mess");
    mess.classList.add('active');
    setTimeout(ADnone, 5 * 1000);
}



function ADnone()
{
    let mess = document.getElementById("mess");
    mess.classList.remove('active');
}



