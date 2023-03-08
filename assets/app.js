/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

function copyPageUrl() {
    // Récupérer l'URL de la page
    const pageUrl = window.location.href;

    // Créer un élément temporaire pour stocker l'URL
    const tempElement = document.createElement('textarea');
    tempElement.value = pageUrl;
    tempElement.setAttribute('readonly', '');
    tempElement.style.position = 'absolute';
    tempElement.style.left = '-9999px';

    // Ajouter l'élément temporaire au corps du document
    document.body.appendChild(tempElement);

    // Sélectionner et copier le contenu de l'élément temporaire
    tempElement.select();
    document.execCommand('copy');

    // Supprimer l'élément temporaire
    document.body.removeChild(tempElement);
}
