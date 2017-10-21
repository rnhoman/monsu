<!DOCTYPE html>
<html>
<head>
    <title>Sistem Monitoring dan Kontrol</title>
    <meta charset="utf-8">
    <!-- refresh selama 10 detik -->
    <meta http-equiv="refresh" content="10">

    <!-- css bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- javascrip bootstrap -->
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#setting").on("click", function(){
                $("#setting").hide(650);
                $("#demo").show(650);
            });
            $("#batal").on("click", function(){
                $("#setting").show(650);
                $("#demo").hide(650);
            });
        });
    </script>

    <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
      return true;
    }
  </script>
</head>
<body>
<nav class="navbar navbar-invest">
    <div class="container-fluid">
        <div class="container-header">
            <!-- <a class="container-brand text-color" href="#">
                <img src="...">
                
            </a> -->
            <h4 style="color: #ffffff;">
                <?php 
                $tanggal = mktime(date('m'), date("d"), date('Y'));
                echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
                date_default_timezone_set("Asia/Jakarta");
                $jam = date ("H:i:s");
                echo " | Pukul : <b> " . $jam . " " ." </b> ";
                $a = date ("H");
                if (($a>=6) && ($a<=11)) {
                    echo " <b>, Selamat Pagi !! </b>";
                }else if(($a>=11) && ($a<=15)){
                    echo " , Selamat  Siang !! ";
                }elseif(($a>15) && ($a<=18)){
                    echo ", Selamat Sore !!";
                }else{
                    echo ", <b> Selamat Malam </b>";
                }
                ?>
            </h4>
        </div>
    </div>
</nav>

<div class="col-md-12">
    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading panel-blue">
                <h4>Sistem Monitoring dan Kontrol</h4>
            </div>
            <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></br>
                <h3 style="text-align: right;">ADMIN</h3>
            </div>
            <div class="panel-footer panel-blue">
                
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading panel-blue">
                <h1 style="text-align: center; font-size: 30px;">Ruang T1</h1>
            </div>
            <div class="panel-body with-border">
                <h4><b>Suhu Ruangan</b></h4>
                <h1 style="text-align: center; color: #ffb600; font-size: 90px;">20&#176;c</h1>
            </div>
            <div id="panel-footer">
                <h4><b>Status Lampu Ruangan</b></h4><h4 style="text-align: right;"><b>Status Lampu Luar</b></h4>
                <?php 

                    // Status Lampu ruangan
                    $light1 = 'OFF';
                    if ($light1 == "ON") 
                    {
                        echo "<p style='color: #ffb600; font-size: 30px;'><i><b>ON</b></i></p>";
                    }
                    else
                    {
                        echo "<p style='color: #ffb600; font-size: 30px;'><i><b>OFF</b></i></p>";
                    }


                    // status lampu luar
                    $light2 = 'OFF';
                    if ($light2 == "ON") 
                    {
                        echo "<p style='text-align: right; color: #ffb600; font-size: 30px;'><i><b>ON</b></i></p>";
                    }
                    else
                    {
                        echo "<p style='text-align: right; color: #ffb600; font-size: 30px;'><i><b>OFF</b></i></p>";
                    }
                ?>
                <!-- <h3 style="text-align: center; color: #ffb600;"><i><b>Aktif</b></i></h3> -->
            </div>
            <div class="panel-footer panel-blue">
                <h3 style="font-size: 18px; color: #ffb600;"><i>Jadwal</i></h3>
                <ul>
                    <li><h4 style="color: #ffffff; font-size: 18px;">Senin, 4 September 2017</h4></li>
                    <li><h4 style="color: #ffb600; font-size: 20px;">Komunikasi Seluler, 3 SKS</h4></li>
                    <li><p style="font-size: 18px; color: #ffffff;"><i>Jam 14.00 s/d 16.00</i></p></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading panel-blue">
                <h1 style="text-align: center; font-size: 30px;">Setting</h1>
            </div>
            <div class="panel-body">

                <form class="form-group" method="POST">
                    <center><button name="create_suhu" type="submit" class="btn btn-default btn-lg" aria-label="center Align" />
                        <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
                    </button>
                    <input style="width: 90px; height: 70px; font-size: 50px; text-align: center;" type="text" name="temp1" class="form-control" oninput="input()" id="" onkeypress="return hanyaAngka(event)">
                    <!-- <button name="update_suhu" type="button" class="btn btn-default btn-lg" aria-label="center Align">
                        <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
                    </button> --></center>
                </form>

                <?php 
                    include 'koneksi.php';
                    // Tambah data
                    if (isset($_POST['create_suhu'])) 
                    {
                        $suhuudara = $_POST['temp1'];

                        $query_tambah = mysqli_query($koneksi, "INSERT INTO allsensor (temp1) VALUES('$suhuudara')")or die ("Could not execute the insert query.");

                        // $querytambah = mysqli_query($mysqli, "INSERT INTO user(nama_lengkap, username, password, level_user) VALUES('$nama_lengkap', '$username', md5('$pass'), '$level_user')")or die("Could not execute the insert query.");

                        if ($query_tambah) 
                        {
                            echo "<script>alert('Suhu telah ditambah');</script>";
                            echo "<script>location='index.php';</script>";
                        }
                        else
                        {
                            echo "<script>alert('Suhu gagal ditambah');</script>";
                        }
                    }
                ?>

                <table class="table table-striped table-bordered" id="setting">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Hardware</th>
                            <th>Temp 1</th>
                            <th>Temp 2</th>
                            <th>Light 1</th>
                            <th>Light 2</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            include 'koneksi.php';
                            $no = 0;
                            $query = mysqli_query($koneksi, "SELECT * FROM allsensor");
                            while ($row = mysqli_fetch_assoc($query))
                            {
                                $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $row['hardware']; ?></td>
                            <td><?php echo $row['temp1']; ?></td>
                            <td><?php echo $row['temp2']; ?></td>
                            <td><?php echo $row['light1']; ?></td>
                            <td><?php echo $row['light2']; ?></td>
                            <td>
                            <a href="ubahsuhu.php?id_sensor=<?php echo $row['id_sensor']; ?>"><span data-placement='top' data-toggle='tooltip' title='Edit'><button class="btn btn-primary btn-xs" onclick="" data-title='Edit' data-toggle='modal' data-target='#edit'><span class='glyphicon glyphicon-pencil'></span></button></a>

                            <a href="hapussuhu.php?id_sensor=<?php echo $row['id_sensor']; ?>" onClick='return confirm("Apakah anda yakin ingin menghapusnya?")'><span data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button><span></a>
                            </td>
                        </tr>
                        <?php 
                            //endwhile
                            }
                         ?>
                    </tbody>
                </table>

                <?php 

                    // tambah suhu
                    include 'koneksi.php';

                    if (isset($_POST['update_suhu']))
                    {
                        $temp1 = $_POST['inp_suhu'];

                        $query = mysqli_query($koneksi, "UPDATE allsensor SET temp1='$inp_suhu' WHERE id_sensor='$id_sensor'");

                        if ($query_update)
                        {
                            echo "<script>alert='berhasil dirubah';</script>";
                            echo "<script>location='index.php';</script>";
                        }
                        else
                        {
                            echo "<script>alert='gagal dirubah';</script>";
                            // echo "<script>location='index.php';</script>";
                        }
                    }

                ?>
            </div>
            <div class="panel-footer panel-blue">
                
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <!-- <div class="col-md-6 col-md-offset-3"> -->
        <p style="text-align: center;">copyright</p>
    </div>
</footer>
</body>
</html>