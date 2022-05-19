const formulario = document.querySelector('#formulario');
//console.log(formulario);

formulario.addEventListener('submit', (event) => {
    event.preventDefault();

    const data = new FormData(formulario);

    fetch('templates/insertar.php', {
        method: 'post',
        body: data
    })
    .then(res => res.text())
    .then(datos => {
        console.log(datos);
    })
    .catch(error => console.log(error));

    formulario.reset();
})