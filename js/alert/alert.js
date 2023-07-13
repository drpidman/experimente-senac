const alert = document.querySelector("div[data-alert='alert-card']");

function showAlert() {
    alert.style.animationName = 'alert-show'

    setTimeout(() => {
        alert.style.animationName = '';
    }, 10000)
}