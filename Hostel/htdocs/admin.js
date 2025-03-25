function showOption(optionNumber) {
    document.querySelectorAll('.form').forEach(form => {
        form.classList.remove('active');
    });

    document.getElementById(`option${optionNumber}`).classList.add('active');

    document.querySelectorAll('.option').forEach(option => {
        option.classList.remove('selected');
    });

    document.querySelector(`.option:nth-child(${optionNumber})`).classList.add('selected');
}


const menu = document.querySelector('#mobile-menu');
const menulinks = document.querySelector('.nav-menu');

menu.addEventListener('click',function() {
    menu.classList.toggle('is-active');
    menulinks.classList.toggle('active');
})