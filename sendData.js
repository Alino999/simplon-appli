const form = document.querySelector('form');
form.addEventListener('submit', (e) => {
    console.log(e.target);
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'traitement.php', true);
    const data = new FormData(e.target);
    xhr.send(data);

}, false);