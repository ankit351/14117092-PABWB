<HTML>
    <HEAD>
        <title>Simpan Buku Tamu</title>
    </HEAD>
    <BODY>
        <h1>Simpan Data MHS</h1>
        <?php
        $conn=mysqli_connect ("localhost","root","")
        or die ("koneksi gagal");
        mysqli_select_db($conn,"tugas");
        $nrp = $_POST["nrp"];
        $nama = $_POST["nama"];
        $jurusan = $_POST["jurusan"];
        $filename=$_POST["filename"];
        $target="images/";
        $target=$target.basename($_FILES["filename"]["name"]);
        echo "NRP : $nrp <br>";
        echo "Nama : $nama <br>";
        echo "Jurusan : $jurusan <br>";
        $sqlstr="insert into mahasiswa (NRP,Nama)
        values ('$nrp','$nama')";
        $hasil = mysqli_query($conn,$sqlstr);
        $q="insert into jurusan (Nama)
        values ('$jurusan')";
        $result = mysqli_query($conn,$q);
        $query="insert into pict (nama)
        values ('$filename')";
        $h = mysqli_query($conn,$query);
        echo "Simpan data berhasil dilakukan";
        ?>
    </BODY>
</HTML>