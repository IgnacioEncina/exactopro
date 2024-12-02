let isMenuEventAttached = false;

document.addEventListener('DOMContentLoaded', function () {
    function initMenuToggle() {
        const menuIcon = document.getElementById('menu-icon');
        const navLinks = document.getElementById('nav-links');

        if (menuIcon && navLinks) {
            if (isMenuEventAttached) {
                menuIcon.removeEventListener("click", handleMenuClick);
            }
            menuIcon.addEventListener("click", handleMenuClick);
            isMenuEventAttached = true;
        } else {
            console.error("No se encontraron elementos del menú en el DOM.");
        }
    }

    function handleMenuClick() {
        console.log("Botón de menú clickeado");
        const navLinks = document.getElementById('nav-links');
        navLinks.classList.toggle("active");
    }

    function loadHTML(file, elementId) {
        fetch(file)
          .then(response => {
            if (!response.ok) throw new Error("Error al cargar " + file);
            return response.text();
          })
          .then(data => {
            document.getElementById(elementId).innerHTML = data;
            initMenuToggle();
          })
          .catch(error => console.log(error));
    }

    loadHTML('header.html', 'header');
    loadHTML('footer.html', 'footer');
});
