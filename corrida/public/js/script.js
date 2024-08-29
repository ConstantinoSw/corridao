ddocument.addEventListener("DOMContentLoaded", function () {
    const links = document.querySelectorAll(".nav-link");
    const sections = document.querySelectorAll(".content-section");

    links.forEach(link => {
        link.addEventListener("click", function (event) {
            event.preventDefault();  // Evita que o link abra uma nova página

            const target = this.getAttribute("data-target");

            sections.forEach(section => {
                section.classList.remove("active");
                if (section.id === target) {
                    section.classList.add("active");
                }
            });
        });
    });
});
