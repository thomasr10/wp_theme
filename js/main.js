// color mode

const iconContainer = document.getElementById('color-mode');
const pageBody = document.body;

const savedTheme = localStorage.getItem('data-theme');

if(savedTheme){
    pageBody.setAttribute('data-theme', savedTheme);
    updateIcon(savedTheme);
} else {
    pageBody.setAttribute('data-theme', 'dark')
}


function toggleMode(){
    const currentTheme = pageBody.getAttribute('data-theme');
    let newTheme = (currentTheme === 'dark') ? 'light' : 'dark';

    pageBody.setAttribute('data-theme', newTheme);
    localStorage.setItem('data-theme', newTheme);

    updateIcon(newTheme);
}


function updateIcon(theme){
    if(theme === 'dark') {
        iconContainer.innerHTML = '<i class="fa-solid fa-moon"></i>';
    } else {
        iconContainer.innerHTML = '<i class="fa-solid fa-sun"></i>';
    }
}

iconContainer.addEventListener('click', toggleMode);