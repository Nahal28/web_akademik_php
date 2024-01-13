<?php 
    session_start();
    if(!isset($_SESSION['logged-in']))
    {
        header('location: index.php');
    }
?>
<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width-device-width, initial-scale=1.0">

        <!-- -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="../assets/style/homepage.css">
        <link rel="stylesheet" href="../assets/style/table.css">
        <link rel="stylesheet" href="../assets/style/dashboard.css">
        <link rel="stylesheet" href="../assets/style/modal.css">

        <title>Admin</title>
    </head>
    <body>
        <div class="container">
            <div id="page-h" class="page-header">
                <div class="page-logo">
                    <img class="logo" src="../assets/image/stmik.png"/>
                </div>

                <a href="?page=dosen"><i class="fa fa-user-o fa-icon" aria-hidden="true"></i>Daftar Dosen</a>
                <a href="?page=jadwal-mengajar"><i class="fa fa-calender-o fa-icon" aria-hidden="true"></i>Daftar Jadwal</a>

                <h3 class="menu-heading">Mahasiswa</h3>
                <a href="?page=mahasiswa"><i class="fa fa-user fa-icon" aria-hidden="true"></i>Daftar Mahasiswa</a>
                <a href="?page=nilai"><i class="fa fa-graduation fa-icon" aria-hidden="true"></i>Daftar Nilai</a>

                <h3 class="menu-heading">Mata Kuliah</h3>
                <a href="?page=ruangan"><i class="fa fa-building fa-icon" aria-hidden="true"></i>Daftar ruangan</a>
                <a href="?page=matkul"><i class="fa fa-book fa-icon" aria-hidden="true"></i>Daftar Mata kuliah</a>
            </div>

            <div class="page-content">
                <div class="content-header">
                    <span>Administrator</span>
                    <img src="../assets/image/admin2.png" class="icon" />
                    <div class="admin-icon">
                    <a class="link" href="logout.php">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span>logout</span>
                    </a>
                    </div>

                    <div class="content">
                        <?php 
                        if(isset($_GET['page'])) {
                            $page = $_GET['page'];# code...
                            switch ($page) {
                                case 'dashboard':
                                    include "dashboard.php";
                                    break;
                                case 'dosen':
                                    include "dosen/index.php";
                                    break;
                                case 'mahasiswa':
                                    include "mahasiswa/index.php";
                                    break;
                                case 'matkul':
                                    include "matkul/index.php";
                                    break;
                                case 'ruangan':
                                    include "ruangan/index.php";
                                    break;
                                case 'nilai':
                                    include "nilai/index.php";
                                    break;
                                case 'jadwal_mengajar':
                                    include "jadwal/index.php";
                                    break;
                            }
                        }
                    ?>
                    </div>
                </div>     
            </div>
        </div>

        <script>
            //
            $(document).ready(function() {
                $('#list-data').DataTable();
            });
            $('#list-data').DataTable({
                aaSorting: []
            })
        </script>
        <script type="text/javascript" src="../assets/js/delete.alert.js"></script>
        <script type="text/javascript" src="../assets/js/modal.js"></script>
    </body>
</html>