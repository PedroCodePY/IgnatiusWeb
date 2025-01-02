import { initializeApp } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-app.js"
import { getDatabase, get, ref, child } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-database.js"
import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-auth.js"

const firebaseConfig = {
  apiKey: "AIzaSyAb1xRd3slM15iFW8ZfwzInVgNTspuCWaU",
  authDomain: "ignatiushosting.firebaseapp.com",
  databaseURL: "https://ignatiushosting-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "ignatiushosting",
  storageBucket: "ignatiushosting.firebasestorage.app",
  messagingSenderId: "904430935300",
  appId: "1:904430935300:web:d8903500d022ce91f04451",
  measurementId: "G-86J7EZK6Y5"
};

const app = initializeApp(firebaseConfig);
const db = getDatabase();
const auth = getAuth(app)
const dbref = ref(db);

let email = document.getElementById('username');
let password = document.getElementById('password');
let LoginForm = document.getElementById('LoginForm');
let hideshow = document.getElementById('ShowHide');


let SignInUser = evt => {
  evt.preventDefault();
  
  signInWithEmailAndPassword(auth, email.value, password.value)
  .then((credentials)=>{
    get(child(dbref, 'UserAuthList/' + credentials.user.uid)).then((snapshot)=>{
      if(snapshot.exists){
        sessionStorage.setItem("user-info", JSON.stringify({
          firstname: snapshot.val().firstname,
          lastname: snapshot.val().lastname,
          real_email: snapshot.val().real_email,
          account_type: snapshot.val().account_type
        }))
        sessionStorage.setItem("user-creds", JSON.stringify(credentials.user));
        if (snapshot.val().account_type != "admin") {
          window.location.href = 'user.html'
        }
        else{
          window.location.href = 'main.php'
        }
      }
    })
  })
  .catch((error)=>{
    alert(error.message);
    console.log(error.code);
    console.log(error.message);
  })
}
function showhidepass() {
  if (password.type === "password") {
    password.type = "text";
    hideshow.src='hidden.png';
  } else {
    password.type = "password";
    hideshow.src='eye.png';
  }
}
LoginForm.addEventListener('submit', SignInUser);
hideshow.addEventListener('click', showhidepass)