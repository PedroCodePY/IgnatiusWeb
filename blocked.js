let timesec = 120;
let Time = document.getElementById('time');

async function countdown() {
    if (timesec > 0){
        console.log(timesec);
        Time.innerText = String(timesec) + "s";
        timesec--;
        setTimeout(countdown, 1000);
        if (timesec == 0) {
            window.location.href = 'index.html';
        }
    }
}

addEventListener('load', countdown);