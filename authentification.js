const form = document.querySelector('form');
const errorBtn = document.querySelector('.error button');
const currentDirName = document.location.pathname.split('/')[2];
const possiblePaths = {
    '': 'liste.php',
    'signIn.php': 'congrat.php'
}
form.addEventListener('submit', (e) => {
    e.preventDefault();
    document.querySelectorAll('input').value = '';
    const xhr = new XMLHttpRequest();
    const data = new FormData(e.target);
    xhr.open('POST','authentification.php', true);
    xhr.setRequestHeader('X-Requested-With', 'xmlhttprequest');
    xhr.onreadystatechange = () => {
        if (xhr.status == 400) {
            errorBtn.parentElement.style.display = 'block';
            errorBtn.parentElement.firstElementChild.innerHTML = `${JSON.parse(xhr.response)['nom']}`;
            
        } else {
            document.location = `${possiblePaths[currentDirName]}`;
        }
    }
    xhr.send(data);
});
errorBtn.addEventListener('click', (e) => {
    e.target.parentElement.style.display = 'none';
    })