function toggleQuestions() {
    var yesOption = document.querySelector('input[name="op"][value="yes"]');
    var additionalQuestions = document.getElementById("additional-questions");

    if (yesOption.checked) {
        additionalQuestions.style.display = "block";
    } else {
        additionalQuestions.style.display = "none";
    }
}

function toggleQuestions2() {
    var yesOption = document.querySelector('input[name="op"][value="yes"]');
    var additionalQuestions = document.getElementById("additional-questions2");

    if (yesOption.checked) {
        additionalQuestions.style.display = "block";
    } else {
        additionalQuestions.style.display = "none";
    }
}

const imagenes = [
    "fondo7.jpg",
    "fondo6.avif",
    "fondo4.jpg"
]
let indice = 0;

function cambiarFondo() {
  document.body.style.backgroundImage = `url(${imagenes[indice]})`;
  indice = (indice + 1) % imagenes.length;
}

setInterval(cambiarFondo, 8000); // Cambia cada 10 segundos
cambiarFondo(); // Llama a la función inmediatamente para establecer el primer fondo