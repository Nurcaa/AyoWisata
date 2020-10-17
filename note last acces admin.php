  <?php
             $daftar_wisata = mysqli_query($con, "SELECT * from daftar_wisata");
              while ($row = mysqli_fetch_array($daftar_wisata)) {
             $a = 'a'.$row['id_wisata'];
              echo "
             <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> ".$row['last_acces']." <a href="login.html" class="btn btn-danger square-btn-adjust">Logout</a> </div>";
            }
        ?>