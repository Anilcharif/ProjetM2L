document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.querySelector("#search-input");
    const searchByNomSelect = document.querySelector("#search-by-nom");
    const searchByCategorieSelect = document.querySelector("#search-by-categorie");

    searchInput.addEventListener("input", () => {
        const searchTerm = searchInput.value.trim().toLowerCase();
        const searchByNom = searchByNomSelect.value;
        const searchByCategorie = searchByCategorieSelect.value;

        const sections = document.querySelectorAll("section[data-uid]");

        sections.forEach(section => {
            const name = section.querySelector(".nom").textContent.toLowerCase();
            const category = section.querySelector(".categorie").textContent.toLowerCase();

            if (searchByNom === "nom") {
                if (name.includes(searchTerm)) {
                    section.style.display = "flex";
                } else {
                    section.style.display = "none";
                }
            } else if (searchByCategorie === "categorie") {
                if (category.includes(searchTerm)) {
                    section.style.display = "flex";
                } else {
                    section.style.display = "none";
                }
            }
        });
    });
});
