document.addEventListener("DOMContentLoaded", function () {
    let boutons = document.querySelectorAll(".btn-outline-danger");

    boutons.forEach(function (bouton) {
        bouton.addEventListener("click", function (e) {
            const etudiantId = e.target.getAttribute("data-id");
            const etudiantNom = e.target.getAttribute("data-nom");

            // Afficher l'ID et le nom dans l'élément span
            document.querySelector(".etudiantInfoSpan").innerHTML = "Êtes-vous sûr de vouloir supprimer l'étudiant : " + etudiantNom + " - ID(" + etudiantId + ") ?";

            const boutonSupModal = document.querySelector("#boutonSupprimer");
            boutonSupModal.setAttribute(
                "href",
                `etudiant-delete/${etudiantId}`
            );
            
        });
    });
});
