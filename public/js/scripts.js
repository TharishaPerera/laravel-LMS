const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

// SHOW SIDEBAR
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

// CLOSE SIDEBAR
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

// CHANGE THEME
themeToggler.addEventListener('click', () => {
    let blackImg = document.getElementById('logo-img-black');
    let whiteImg = document.getElementById('logo-img-white');

    if (blackImg.style.visibility == 'visible'){
        blackImg.style.visibility = 'hidden';
        whiteImg.style.visibility = 'visible';
    } else if (blackImg.style.visibility == 'hidden'){
        blackImg.style.visibility = 'visible';
        whiteImg.style.visibility = 'hidden';
    }


    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span').className.toggle('active');
})
