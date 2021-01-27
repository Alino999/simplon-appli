const form = document.querySelector('form');
const errorBtn = document.querySelector('.error button');
const currentDirName = document.location.pathname.split('/');
const possiblePaths = {
    'signIn.php': 'congrat.html',
    'logIn.php': 'liste.php'
}
form.addEventListener('submit', (e) => {
    document.querySelectorAll('input').value = '';
    const xhr = new XMLHttpRequest();
    const data = new FormData(e.target);
    xhr.open('POST','authentification.php', true);
    xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest');
    xhr.onloadend = () => {
        if(xhr.status == 200) {
            document.location = `${possiblePaths[currentDirName]}`;
        } else if(xhr.status == 400) {
            errorBtn.parentElement.style.display = 'block';
            errorBtn.parentElement.firstElementChild.innerHTML = `${JSON.parse(xhr.response)['nom']}`;
        }
    }
    xhr.send(data);
});
errorBtn.addEventListener('click', (e) => {
    e.target.parentElement.style.display = 'none';
})