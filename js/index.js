function mostrarImagen() {
  let opcion = document.getElementById("opcion").value;
  let imagen = document.getElementById("imgEmoji1");

  if (opcion === "opcion1") {
    imagen.src = "images/emoji1.jpg";
    imagen.style.display = "block";
  } else if (opcion === "opcion2") {
    imagen.src = "images/emoji2.jpg";
    imagen.style.display = "block";
  } else {
    imagen.style.display = "none";
  }
}

function mostrarImagenC() {
  let checkboxes = document.querySelectorAll('input[type="checkbox"]');
  let checkedCount = 0;

  checkboxes.forEach(function(checkbox) {
    if (checkbox.checked) {
      checkedCount++;
    }
  });

  let imagenCam = document.getElementById("imagenCam");

  if (checkedCount >= 2) {
    imagenCam.style.display = "block";
  } else {
    imagenCam.style.display = "none";
  }
}






