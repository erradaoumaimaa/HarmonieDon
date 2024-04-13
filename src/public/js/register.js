const roleInput = document.getElementById('role')
const roleButtons = document.getElementsByClassName('role')
const changeRole = (event) => {
  [...roleButtons].forEach(element => {
    element.classList.remove('border-[#D00000]', 'border-2')
  });
  const button = event.target.closest('button')
  button.classList.add('border-[#D00000]', 'border-2')
  const role = button.getAttribute('data-id')
  // console.log(event.target.getAttribute('data-id'))
  roleInput.value = role
}

function displayImage(onlabel, inInput) {
    var input = document.getElementById(inInput);
    var label = document.getElementById(onlabel);

    var file = input.files[0];

    if (file) {
        var reader = new FileReader();

        reader.onload = function(e) {
            label.style.backgroundImage = 'url(' + e.target.result + ')';
            label.style.backgroundSize = 'cover';
            label.style.backgroundPosition = 'center';
            label.style.border = 'none';
            document.getElementById('plusIcon').style.display = 'none';
        };

        reader.readAsDataURL(file);
    }
}

fetch('{{ asset("json/villes.json") }}')
    .then(response => response.json())
    .then(data => {
        const citySelect = document.getElementById('city');

        data.forEach(city => {
            const option = document.createElement('option');
            option.value = city.name;
            option.textContent = city.name;
            citySelect.appendChild(option);
        });
    })
    .catch(error => console.error('Erreur lors du chargement du fichier JSON :', error));
