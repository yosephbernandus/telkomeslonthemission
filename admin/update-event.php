<?php
include 'header.php';

$id = $_GET['id'];

// $kueri = "SELECT product.nama, product.harga, product.deskripsi, kategori.nama as kategori_nama, karyawan.nama as karyawan_nama FROM product INNER JOIN kategori ON product.kategori_id=kategori.id INNER JOIN karyawan ON product.karyawan_id=karyawan.id WHERE product.id=$id";
$kueri = "SELECT * FROM events WHERE id=$id"; // sesuaikan kueri dengan kebutuhan Anda
$hasil = mysqli_query($koneksi, $kueri);
$data = mysqli_fetch_array($hasil);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $event_name = mysqli_real_escape_string($koneksi, $_POST['event_name']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
    $tanggal = mysqli_real_escape_string($koneksi, $_POST['date']);
    $tanggal_selesai = mysqli_real_escape_string($koneksi, $_POST['date_end']);
    $waktu_mulai = mysqli_real_escape_string($koneksi, $_POST['waktu_mulai']);
    $location = mysqli_real_escape_string($koneksi, $_POST['location']);

    $updated = date("Y-m-d H:i:s");

    $gambar = rand(10, 100) . $_FILES['gambar']['name']; // kurung siku pertama name, siku ke dua 
    $gambar_tmp = $_FILES['gambar']['tmp_name'];
    $gambar_ext = strtolower(pathinfo($gambar, PATHINFO_EXTENSION));


    $target_file = 'img/' . $gambar; // ubah img dengan nama folder gambar Anda
    $upload_gambar = true;

    if ($gambar_ext != 'bmp' &&
        $gambar_ext != 'gif' &&
        $gambar_ext != 'jpg' &&
        $gambar_ext != 'png' &&
        $gambar_ext != 'jpeg') {
        $upload_gambar = false;
        $gambar = $data['gambar'];
    }




    $kueri = "UPDATE events SET 
              event_name='$event_name', 
              tanggal='$tanggal',
              deskripsi='$deskripsi',
              event_location='$location',
              tanggal_selesai='$tanggal_selesai',
              waktu_mulai='$waktu_mulai',
              updated='$updated',
              gambar='$gambar'
              WHERE id=$id";  // sesuaikan kueri dengan kebutuhan Anda

    $hasil = mysqli_query($koneksi, $kueri);

    if ($hasil == true) {
        if ($upload_gambar == true) {
            move_uploaded_file($gambar_tmp, $target_file); // upload gambar
        }

        header('Location: event.php?'); // kembali ke index.php bila berhasil. Ubah index.php sesuai kebutuhan Anda

    } else {
        $error = 'Error ' . mysqli_error($koneksi);
    }
}

?>

<a href="index.php" class="btn btn-outline-dark">Kembali</a>
<br>
<br>

<?php if (isset($error)) { ?>
    <div class="alert alert-danger"><?php echo $error; ?></div>
<?php 
} ?>

<form action="" method="POST" enctype="multipart/form-data">

    <div class="form-group">
        <label>Event Name</label>
        <input type="text" name="event_name" class="form-control" value="<?php echo $data['event_name']; ?>">
    </div>

    <div class="form-group">
        <label>Date</label>
        <input type="text" name="date" class="form-control" id="datepicker" value="<?php echo $data['tanggal']; ?>">
    </div>

    <div class="form-group">
        <label>Date End</label>
        <input type="text" name="date_end" id="datepicker2" class="form-control" value="<?php echo $data['tanggal_selesai']; ?>">
    </div>

    <div class="form-group">
        <label>Time</label>
        <input type="text" name="waktu_mulai" id="timepicker" class="form-control" value="<?php echo $data['waktu_mulai']; ?>">
    </div>

    <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control" value="<?php echo $data['event_location']; ?>">
    </div>

    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" id="editor" class="form-control"><?php echo $data['deskripsi']; ?></textarea>
    </div>

    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>

    <div class="form-group">
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>

</form>

<?php
include 'footer.php';
?>

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#event').addClass('active');
    });
</script>