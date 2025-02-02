let UserCreds =  JSON.parse(sessionStorage.getItem("user-creds"));
let UserInfo =  JSON.parse(sessionStorage.getItem("user-info"));

let greet = document.getElementById('Greet');
let Name = document.getElementById('Name');
let Email = document.getElementById('email');
let signoutbtn = document.getElementById('signoutbtn');
let now = new Date();
let hours = now.getHours();
let greett =  ""

let time = () =>{
    if (hours < 12) {
        greett = "Selamat pagi";
    }
    else if (hours < 17) {
        greett = "Selamat siang";
    }
    else if (hours < 19) {
        greett = "Selamat sore";
    }
    else{
        greett = "Selemat malam";
    }
}
let Signout = () =>{
    sessionStorage.removeItem("user-creds");
    sessionStorage.removeItem("user-info");
    window.location.href = 'index.html';
}
let checkCred = () =>{
    if (!sessionStorage.getItem("user-creds")) {
        window.location.href = 'index.html';
    }
    else{
        Email.innerText = UserCreds.email;
        Email.style.display = 'none';
        Name.innerText = `${UserInfo.firstname + " " + UserInfo.lastname}`;
        greet.innerText = greett + `, ${UserInfo.firstname + " " + UserInfo.lastname}`;
    }
}

window.addEventListener('load', time)
window.addEventListener('load', checkCred);
signoutbtn.addEventListener('click', Signout);