function agregarDiv() {
    let comentario = document.getElementById('miInput').value; // Cambia 'miInput' por el id de tu input
    // Crear un nuevo elemento div
    const nuevoDiv = document.createElement('div');
    nuevoDiv.className = 'comentario';
    nuevoDiv.textContent = comentario;

    // Agregar el div al final del body o a un contenedor específico
    document.body.appendChild(nuevoDiv);
}