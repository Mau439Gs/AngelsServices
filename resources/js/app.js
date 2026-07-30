import './bootstrap';

document.addEventListener("DOMContentLoaded", () => {

    console.log("¡Hola, mundo! El DOM está completamente cargado.");
    const vigilante = new IntersectionObserver((entradas, observador) => {
    entradas.forEach(entrada => {
      if (entrada.isIntersecting) {
        entrada.target.classList.add('visible');
        observador.unobserve(entrada.target);
      }
    });
  }, {
    threshold: 0.15
  });

  const elementosAAmar = document.querySelectorAll('.aparicion');
  elementosAAmar.forEach(elemento => vigilante.observe(elemento));

});
