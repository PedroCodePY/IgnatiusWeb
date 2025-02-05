<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="StyleMain.css" />
    <link rel="stylesheet" href="addfamilystyle.css" />
    <link rel="stylesheet" href="signup.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <title>AddFamily</title>
    <link rel="icon" type="image/icon" href="Logo.ico" />
</head>

<body>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <div class="Main">
        <div class="Menu">
            <center>
                <img src="Logo.png" alt="" class="logo" />
                <br />
                <ul class="nav" style="border-radius: 0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="main.php">
                            <i><img src="home.png" /></i>
                            HOME
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="data.php">
                            <i><img src="data-analytics.png" /></i>
                            DATA
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="settings.html">
                            <i><img src="settings.png" /></i>
                            SETTINGS
                        </a>
                    </li>
                    <br />
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="addUser.html">
                            <i><img src="add-user.png" /></i>
                            Add User
                        </a>
                    </li>
                    <br />
                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            aria-current="page"
                            href="#">
                            <i><img src="join.png" /></i>
                            Add Family
                        </a>
                    </li>
                    <br />
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="addUser.html">
                            <i><img src="remove.png" /></i>
                            Remove Family
                        </a>
                    </li>
                    <br />
                    <br />
                    <br />
                    <li class="nav-item logout" type="button" id="signoutbtn">
                        <a class="nav-link">
                            <i><img src="sign-out-alt.png" /></i>
                            Log Out
                        </a>
                    </li>
                </ul>
            </center>
        </div>
        <div class="display2">
            <label class="custum-file-upload" for="file">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24">
                        <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                        <g
                            stroke-linejoin="round"
                            stroke-linecap="round"
                            id="SVGRepo_tracerCarrier"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                fill=""
                                d="M10 1C9.73478 1 9.48043 1.10536 9.29289 1.29289L3.29289 7.29289C3.10536 7.48043 3 7.73478 3 8V20C3 21.6569 4.34315 23 6 23H7C7.55228 23 8 22.5523 8 22C8 21.4477 7.55228 21 7 21H6C5.44772 21 5 20.5523 5 20V9H10C10.5523 9 11 8.55228 11 8V3H18C18.5523 3 19 3.44772 19 4V9C19 9.55228 19.4477 10 20 10C20.5523 10 21 9.55228 21 9V4C21 2.34315 19.6569 1 18 1H10ZM9 7H6.41421L9 4.41421V7ZM14 15.5C14 14.1193 15.1193 13 16.5 13C17.8807 13 19 14.1193 19 15.5V16V17H20C21.1046 17 22 17.8954 22 19C22 20.1046 21.1046 21 20 21H13C11.8954 21 11 20.1046 11 19C11 17.8954 11.8954 17 13 17H14V16V15.5ZM16.5 11C14.142 11 12.2076 12.8136 12.0156 15.122C10.2825 15.5606 9 17.1305 9 19C9 21.2091 10.7909 23 13 23H20C22.2091 23 24 21.2091 24 19C24 17.1305 22.7175 15.5606 20.9844 15.122C20.7924 12.8136 18.858 11 16.5 11Z"
                                clip-rule="evenodd"
                                fill-rule="evenodd"></path>
                        </g>
                    </svg>
                </div>
                <div class="text">
                    <span>Click to upload excel file</span>
                </div>
                <input type="file" id="file" filetype(.xlsx) />
            </label>
            <br />
            <br />
            <center>
                <div class="loginplace">
                    <img src="Logo.png" alt="" class="logos" />
                    <h1 class="title">Sign UP</h1>
                    <form id="LoginForm">
                        <div class="user">
                            <img src="profile-user.png" alt="" class="userimg" />
                            <input
                                type="email"
                                placeholder="IgnatiusMail"
                                name="user"
                                class="usernamedesing"
                                id="username" />
                        </div>
                        <br />
                        <div class="user">
                            <img src="padlock.png" alt="" class="passimg" />
                            <input
                                type="password"
                                placeholder="Password"
                                name="pass"
                                class="passworddesing"
                                id="password" />
                        </div>
                        <br />
                        <div class="user">
                            <img src="id-card.png" alt="" class="passimg" />
                            <input
                                type="text"
                                placeholder="First name"
                                name="Fname"
                                class="passworddesing"
                                id="Fname" />
                        </div>
                        <br />
                        <div class="user">
                            <img src="id-card.png" alt="" class="passimg" />
                            <input
                                type="text"
                                placeholder="Last name"
                                name="Lname"
                                class="passworddesing"
                                id="Lname" />
                        </div>
                        <br />
                        <div class="user">
                            <img src="arroba.png" alt="" class="userimg" />
                            <input
                                type="email"
                                placeholder="Email"
                                name="user"
                                class="usernamedesing"
                                id="Email" />
                        </div>
                        <br />
                        <div class="user">
                            <img src="pictures.png" alt="" class="passimg" />
                            <select
                                name="atype"
                                class="passworddesing"
                                id="atype"
                                required>
                                <option value="">Select account type</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        <br />
                        <div class="user">
                            <img src="padlock.png" alt="" class="passimg" />
                            <input
                                type="password"
                                placeholder="Admin Password"
                                name="pass"
                                class="passworddesing"
                                id="adminP" />
                        </div>
                        <button type="submit" class="Loginbtn">Sign UP</button>
                    </form>
                    <p class="Copyright">&copy;Skydome 2024</p>
                </div>
            </center>
        </div>
        <script src="main.js" type="module"></script>
</body>

</html>