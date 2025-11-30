document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('copy-btn');

    if (!button) return;

    button.addEventListener('click', function() {
        const ip = document.getElementById('server-ip').innerText;

        navigator.clipboard.writeText(ip).then(() => {
            const feedback = document.getElementById('copy-feedback');
            feedback.style.opacity = '1';
            setTimeout(() => {
                feedback.style.opacity = '0';
            }, 2000);
        });
    });
});
