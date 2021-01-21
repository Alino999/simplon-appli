const searchBar = document.querySelector('#form');
const searchInput = document.querySelector('#input');
const tablebody = document.querySelector('tbody');
let results = donnees;
let occurrences;

//Prevent Default behavior of the searchbar form

searchBar.addEventListener('submit', (e) => e.preventDefault());

//Function to filter Data when typing in searchbar input

searchInput.addEventListener('input', (Event) => {
    const val = Event.target.value;
    if(val != null) {
            occurrences = results.filter(entry => {
            const regExp = new RegExp(`^${val}`, 'gi');
            return entry.nom.match(regExp) ||
                entry.prenom.match(regExp) ||
                 entry.email.match(regExp) || 
                 entry.ville.match(regExp) || 
                 entry.sexe.match(regExp);
        });
    } else {
        occurrences = results;
    }
    tablebody.innerHTML = returnTd(occurrences);
});

//Append all differents data to HTML TableData Elements

function returnTd (arr) {
    let toDisplay = '';
  arr.forEach(obj => {
    toDisplay += `
    <tr>
      <td>${obj.nom}</td>
      <td>${obj.prenom}</td>
      <td>${obj.email}</td>
      <td>${obj.naissance}</td>
      <td>${obj.ville}</td>
      <td>${obj.sexe}</td>
      <td>${obj.formation}</td>
    </tr>
    `;
  });
  return toDisplay;
}
tablebody.innerHTML = returnTd(results);