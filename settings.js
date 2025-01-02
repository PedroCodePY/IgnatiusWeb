let UserCreds =  JSON.parse(sessionStorage.getItem("user-creds"));
let UserInfo =  JSON.parse(sessionStorage.getItem("user-info"));

let Name = document.getElementById('Names');
let Status = document.getElementById('status');
let checkCred = () =>{
    Status.innerText = `${UserInfo.account_type}`;
}

window.addEventListener('load', checkCred);