const menubtn = document.querySelector('#menu-btn');
const navbar = document.querySelector('.header .navbar');

menubtn.addEventListener('click',()=>{
    navbar.classList.toggle('active');
    menubtn.classList.toggle('fa-times');
})

window.onscroll = ()=>{
    menubtn.classList.remove('fa-times');
    navbar.classList.remove('active');
}

const swiper = new Swiper('.home-slider', {
    loop: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

  });

  // Point de terminaison API pour récupérer les informations de l'utilisateur
const getUserInfoEndpoint = 'api.php?get_user_info';

// Point de terminaison API pour mettre à jour le nom de l'utilisateur
const updateUserNameEndpoint = 'api.php';

// Fonction pour récupérer les informations de l'utilisateur
function getUserInfo() {
    fetch(getUserInfoEndpoint)
        .then(response => response.json())
        .then(data => {
            // Mettez à jour l'affichage des informations de l'utilisateur sur le frontend
            document.getElementById('nom-utilisateur').textContent = data.nom;
            document.getElementById('email-utilisateur').textContent = data.email;
        });
}

// Fonction pour mettre à jour le nom de l'utilisateur
function updateUserName() {
    const nouveauNom = document.getElementById('nouveau-nom').value;
    
    fetch(updateUserNameEndpoint, {
        method: 'POST',
        body: new URLSearchParams({
            update_user_name: true,
            nouveau_nom: nouveauNom
        })
    })
    .then(response => response.json())
    .then(data => {
        // Affichez un message de succès ou une erreur après la mise à jour
        console.log(data.message);
    });
}

// Appelez la fonction pour récupérer les informations de l'utilisateur lors du chargement de la page
getUserInfo();

// Écoutez un événement de clic pour mettre à jour le nom de l'utilisateur
document.getElementById('bouton-maj-nom').addEventListener('click', updateUserName);

// Point de terminaison API pour soumettre un commentaire
const submitCommentEndpoint = 'api.php';

// Point de terminaison API pour récupérer les commentaires
const getCommentsEndpoint = 'api.php?get_comments';

// Fonction pour soumettre un commentaire
function submitComment() {
    const commentaire = document.getElementById('commentaire').value;

    fetch(submitCommentEndpoint, {
        method: 'POST',
        body: new URLSearchParams({
            submit_comment: true,
            commentaire: commentaire
        })
    })
    .then(response => response.json())
    .then(data => {
        // Affichez un message de succès ou une erreur après la soumission
        console.log(data.message);
        // Actualisez la liste des commentaires
        getComments();
    });
}

// Fonction pour récupérer et afficher les commentaires
function getComments() {
    fetch(getCommentsEndpoint)
        .then(response => response.json())
        .then(data => {
            const listeCommentaires = document.getElementById('liste-commentaires');
            listeCommentaires.innerHTML = '';

            data.forEach(commentaire => {
                const li = document.createElement('li');
                li.textContent = commentaire.commentaire;
                listeCommentaires.appendChild(li);
            });
        });
}

// Appelez la fonction pour récupérer et afficher les commentaires lors du chargement de la page
getComments();

// Écoutez un événement de clic pour soumettre un commentaire
document.getElementById('envoyer-commentaire').addEventListener('click', submitComment);
