import { initializeApp } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-app.js"
import { getDatabase, set, ref } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-database.js"
import { getAuth, createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-auth.js"

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
const auth = getAuth(app);
const adminPass = "yvonne";

let email = document.getElementById('username');
let password = document.getElementById('password');
let fname = document.getElementById('Fname');
let lname = document.getElementById('Lname');
let remail = document.getElementById('Email');
let actype = document.getElementById('atype');
let LoginForm = document.getElementById('LoginForm');
let adminpass = document.getElementById('adminP');

let SignInUser = evt =>{
  if (adminpass.value == adminPass) {
    evt.preventDefault();
  
    createUserWithEmailAndPassword(auth, email.value, password.value)
    .then((credentials)=>{
      set(ref(db, 'UserAuthList/' + credentials.user.uid),{
        firstname: fname.value,
        lastname: lname.value,
        real_email: remail.value,
        account_type: actype.value
      })
      alert("Succesfuly added " + email.value)
      email.innerText = ""
    })
    .catch((error)=>{
      alert(error.message);
      console.log(error.code);
      console.log(error.message);
    })
  }
  else{
    alert("Incorrect Admin Password")
    console.log("Incorrect Admin Password")
  }
}
LoginForm.addEventListener('submit', SignInUser)