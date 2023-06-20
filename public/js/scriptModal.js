document.addEventListener("DOMContentLoaded", function () {
    let boutons = document.querySelectorAll(".btn-danger");

    boutons.forEach(function (bouton) {
        bouton.addEventListener("click", function (e) {
            const fileId = e.target.getAttribute("data-id");
            const fileTitre = e.target.getAttribute("data-titre");
            const langue = e.target.getAttribute("data-lng");
            let message = "";
            if (langue == "fr")
                message = "Êtes-vous sûr de vouloir supprimer le fichier : ";
            else message = "Are you sure you want to delete the file : ";

            // Afficher l'ID et le nom dans l'élément span
            document.querySelector(".articleInfoSpan").innerHTML =
                message + fileTitre + " ?";

            const boutonSupModal = document.querySelector("#boutonSupprimer");
            boutonSupModal.setAttribute("href", `file-delete/${fileId}`);
        });
    });
});
