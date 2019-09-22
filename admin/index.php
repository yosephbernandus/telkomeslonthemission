<?php
include 'header.php';
?>

<a class="btn btn-primary" href="insert-blog.php">Insert Blog</a>
<br>
<br>

<table class="table table-bordered table-striped" id="dataTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Blog Name</th>
            <th>Description</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    <?php

    $no = 1;
    $kueri = 'SELECT * FROM blog ORDER BY id DESC'; // sesuaikan kueri dengan kebutuhan Anda
    $hasil = mysqli_query($koneksi, $kueri);

    while ($data = mysqli_fetch_array($hasil)) {
        ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['blog_name']; ?></td>
        <td><?php if (strlen($data['deskripsi']) > 50) {
                echo substr($data['deskripsi'], 0, 200) . "...";
            } else {
                echo $data['deskripsi'];
            }; ?></td>
        <td><?php echo $data['created']; ?></td>

        <!-- Tombol aksi -->
        <td>
            <a class="btn btn-warning" href="update-blog.php?id=<?php echo ($data['id']); ?>">
                <i class="fa fa-pencil"></i> Edit
            </a>
            <a class="btn btn-danger" href="hapus-blog.php?id=<?php echo ($data['id']); ?>"
            onClick="javascript: return confirm('Yakin hapus data ini?');">
                <i class="fa fa-trash"></i> Delete
            </a>
        </td>
    </tr>

    <?php 
} ?>
    
    </tbody>
</table>

<?php
include 'footer.php';
?>
<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#blog').addClass('active');
    });
</script>