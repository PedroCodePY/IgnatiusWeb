let UserCreds =  JSON.parse(sessionStorage.getItem("user-creds"));
let UserInfo =  JSON.parse(sessionStorage.getItem("user-info"));

let Name = document.getElementById('Names');
let Status = document.getElementById('status');
let TC = document.getElementById('tc');
let About_us = document.getElementById('about_us');

let checkCred = () =>{
    Status.innerText = `${UserInfo.account_type}`;
}

function go1 () {
    window.location.href = 'about_us.html';
}

window.addEventListener('load', checkCred);
About_us.addEventListener('click', go1);