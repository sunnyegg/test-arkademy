<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test Soal 6</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav>
        <div class="container">
            <a href="index.php"><img src="assets/img/logo.png" alt="logo"></a>
        </div>
        <ul>
            <li class="arkademy">
                ARKADEMY BOOTCAMP
            </li>
        </ul>
    </nav>

    <div class="container" style="margin-top:20px">
        <table class="table table-stripped table-hover table-sm table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Work</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = mysqli_query($koneksi, "SELECT n.name,w.name,k.salary FROM name AS n LEFT JOIN work AS w ON n.id=w.id LEFT JOIN kategori AS k ON n.id=k.id") or die(msqli_error($koneksi));
                if(mysqli_num_rows($sql) > 0){
                    $name = 1;
                    while($data = mysqli_fetch_assoc($sql)){
                        echo '
                        <tr>
                            <td>'.$data['name'].'</td>
                            <td>'.$data['work'].'</td>
                            <td>'.$data['salary'].'</td>
                            <td>
                                <a href="edit.php?id='.$data['id'].'" class="badge badge-warning">Edit</a>
                                <a href="delete.php?id='.$data['id'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
                            </td>
                        </tr>
                        ';
                        $no++;
                    }
                }else{
                    echo '
                    <tr>
                        <td colspan="6">Tidak ada data.</td>
                    </tr>
                    ';
                }
                ?>
            </tbody>
        </table>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>