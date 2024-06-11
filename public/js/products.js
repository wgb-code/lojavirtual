document.addEventListener('DOMContentLoaded', function () {
    let toast = document.getElementById('toast');
    let progressBar = document.getElementById('progressBar');
    let closeToast = document.getElementById('closeToast');

    if (toast) {
        setTimeout(() => {
            toast.remove();
        }, 3000);

        let timePassed = 0;
        const interval = setInterval(() => {
            timePassed += 100;
            progressBar.value = (timePassed / 3000) * 100;
            if (timePassed >= 3000) {
                clearInterval(interval);
            }
        }, 100);

        closeToast.addEventListener('click', () => {
            toast.remove();
        });
    }
});
