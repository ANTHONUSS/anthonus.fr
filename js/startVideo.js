const video = document.getElementById('rickRollVideo');

window.addEventListener('load', () => {
    video.play().catch(err => {
        console.log('Lecture automatique bloquée par le navigateur :', err);
    });
});

window.addEventListener('touchstart', () => {
    video.muted = false;
    video.play();
}, { once: true });

function enableSound() {
    video.muted = false;
    video.play();
    window.removeEventListener('click', enableSound);
}
window.addEventListener('click', enableSound);