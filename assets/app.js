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

const CopyToClipboard = toCopy => {

    const el = document.createElement(`textarea`)

    el.value = toCopy

    el.setAttribute(`readonly`, ``)

    el.style.position = `absolute`

    el.style.left = `-9999px`

    document.body.appendChild(el)

    el.select()

    document.execCommand(`copy`)

    document.body.removeChild(el)
}