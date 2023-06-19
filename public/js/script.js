document.addEventListener("DOMContentLoaded", function () {
    let boutons = document.querySelectorAll(".btn-danger");

    boutons.forEach(function (bouton) {
        bouton.addEventListener("click", function (e) {
            const articleId = e.target.getAttribute("data-id");
            const articleTitre = e.target.getAttribute("data-titre");
            const langue = e.target.getAttribute("data-lng");
            let message = "";
            if(langue == "fr")
             message = "Êtes-vous sûr de vouloir supprimer l'article : ";
            else
             message = "Are you sure you want to delete the article : ";
        
            // Afficher l'ID et le nom dans l'élément span
            document.querySelector(".articleInfoSpan").innerHTML = message  + articleTitre + " ?";

            const boutonSupModal = document.querySelector("#boutonSupprimer");
            boutonSupModal.setAttribute("href", `forum-delete/${articleId}`);
            
        });
    });
});
