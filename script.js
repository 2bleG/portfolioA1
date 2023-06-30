const light = document.querySelector('.light');
const container = document.querySelector('.container');
let scroll = document.querySelector('body');

container.addEventListener('mousemove', moveLight);

function moveLight(e) {
  const scrollY = document.documentElement.scrollTop;
  light.style.left = `${e.clientX}px`;
  light.style.top = `${e.clientY + scrollY}px`;
}


document.getElementById('myForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Empêche le rechargement de la page

  var formData = new FormData(this);

  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'gestionnaire.php', true);
  xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
          // Réinitialiser les valeurs des champs du formulaire
          document.getElementById('prenom').value = '';
          document.getElementById('nom').value = '';
          document.getElementById('email').value = '';
          document.getElementById('sujet').selectedIndex = 0;
          document.getElementById('message').value = '';

      }
  };
  xhr.send(formData);
});