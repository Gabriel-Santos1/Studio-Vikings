window.addEventListener("scroll", function(){
    let logo = document.querySelector("#logo-1")

    if (window.scrollY > 0) {
        logo.setAttribute("src", "../src/svg/logo-4.svg")
    } else {
        logo.setAttribute("src", "../src/svg/logo-2.svg")
    }
    
    let header = document.querySelector('#header')
    header.classList.toggle('scroll', window.scrollY > 0)
})