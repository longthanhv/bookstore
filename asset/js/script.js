let userBox = document.querySelector('.header .header-2 .user-box');
let navbar = document.querySelector('.header .header-2 .navbar');
document.querySelector('#user-btn').onclick = () => {
    userBox.classList.toggle('active');
    navbar.classList.remove('active');

}

let search = document.querySelector('.banner-expan.top');
let searchbasic = document.querySelector('.banner-content');
let formsearch = document.querySelector('.banner-content.advance-search')
search.onclick = () => {
    formsearch.classList.toggle('active');
    searchbasic.style.display = 'none';
    document.querySelector('.banner img').style.height = '80vh'
}
let btnreset = document.querySelector('.banner-form-btn.btn-reset')
btnreset.onclick = () => {
    formsearch.remove('active');
    searchbasic.style.display = 'block';
    document.querySelector('.banner img').style.height = '40vh'
}
window.onscroll = () => {
        userBox.classList.remove('active');
        navbar.classList.remove('active');
        // navbar.classList.add('blue')
        if (window.scrollY > 60) {
            document.querySelector('.header .header-2').classList.add('active');
        } else {
            document.querySelector('.header .header-2').classList.remove('active');
        }
    }
    // document.querySelector('#menu-btn').onclick = () => {
    //     navbar.classList.toggle('active');
    //     userBox.classList.remove('active');
    // }