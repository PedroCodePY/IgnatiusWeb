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
    <link rel="stylesheet" href="StyleMain2.css" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <title>Data</title>
    <link rel="icon" type="image/icon" href="Logo.ico" />
    <link rel="stylesheet" href="data.css">
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
                        <a class="nav-link active" aria-current="page" href="#">
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
                            class="nav-link"
                            aria-current="page"
                            href="addfamily.php">
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
            <div class="chart1">
                <canvas id="chart1" class="classChart1"></canvas>
            </div>
            <div class="card">
                <?php
                $conn = mysqli_connect("localhost", "root", "", "ignatius_data");
                $query = "SELECT * FROM statistik_umat";
                $query_run = mysqli_query($conn, $query);
                ?>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Keluarga</th>
                            <th>Ayah</th>
                            <th>Ibu</th>
                            <th>B 1sd/12 L</th>
                            <th>B 1sd/12 P</th>
                            <th>B 13sd/16 L</th>
                            <th>B 13sd/16 P</th>
                            <th>B 16+ L</th>
                            <th>B 16+ P</th>
                            <th>L</th>
                            <th>P</th>
                            <th>Total</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $row) {
                                //echo $row['id'];
                        ?>
                                <td>
                                    <center><?php echo $row['ID']; ?></center>
                                </td>
                                <td><?php echo $row['Nama Keluarga']; ?></td>
                                <td>
                                    <center><?php echo $row['Ayah']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row['Ibu']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row['B 1sd/ 12 L']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row['B 1sd/ 12 P']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row['B 13sd/ 16 L']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row['B 13sd/ 16 P']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row['B 16+ L']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row['B 16+ P']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row['L']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row['P']; ?></center>
                                </td>
                                <td>
                                    <center><?php echo $row['Total']; ?></center>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-success">Edit</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </td>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>No Data Found</tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('chart1').getContext('2d');

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                    datasets: [{
                        label: '# of Votes',
                        data: [12, 19, 3, 5, 2, 3],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>

        <script src="main.js" type="module"></script>
</body>

</html>