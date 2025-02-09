document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll('.navbar a');

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navLinks.forEach(nav => nav.classList.remove('active'));
            link.classList.add('active');
        });
    });

    console.log("Portafolio interactivo cargado correctamente 🎉");
});
// Selección de elementos
const btnCV = document.getElementById("btn-cv");
const modal = document.getElementById("cv-modal");
const btnCD = document.getElementById("btn-cd");
const CDmodal = document.getElementById("CDmodal");
const closeBtns = document.querySelectorAll(".close");

// Abrir el Modal al hacer clic en el botón "CV"
btnCV.addEventListener("click", (e) => {
    e.preventDefault();  // Evita que la página recargue
    modal.style.display = "flex"; // Muestra el modal (flex para centrar)

});

// Cerrar el Modal al hacer clic en la "X"
closeBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        modal.style.display = "none";
        CDmodal.style.display = "none";
    });
});
// Abrir el Modal al hacer clic en el botón "CD"
btnCD.addEventListener("click", (e) => {
    e.preventDefault();  // Evita que la página recargue
    CDmodal.style.display = "flex"; // Muestra el modal (flex para centrar)
});


// Cerrar el Modal al hacer clic fuera del contenido
window.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.style.display = "none";
    }
    if (e.target === CDmodal) {
        CDmodal.style.display = "none";
    }
});

// Selección de todos los sliders
const sliders = document.querySelectorAll('.slider');

sliders.forEach((slider) => {
    const slides = slider.querySelectorAll('.slide');
    const prevBtn = slider.querySelector('.prev');
    const nextBtn = slider.querySelector('.next');
    let currentSlide = 0;

    // Función para mostrar la diapositiva actual
    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
        });
    }

    // Mostrar la primera diapositiva
    showSlide(currentSlide);

    // Botón "Anterior"
    prevBtn.addEventListener('click', () => {
        currentSlide = (currentSlide === 0) ? slides.length - 1 : currentSlide - 1;
        showSlide(currentSlide);
    });

    // Botón "Siguiente"
    nextBtn.addEventListener('click', () => {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    });
});


// Cambiar automáticamente cada 5 segundos
setInterval(nextSlide, 5000);

showSlide(slideIndex);
