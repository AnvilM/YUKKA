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