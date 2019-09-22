<?php
include 'header.php';
?>

<section id="event" style="margin-top: 100px">
    <div class="container mt-4 mb-4">
        <div class="row " >
            <div class="col-md-12">
                <h3>Blog</h3> <hr style="border: 1px solid gray">
                <div class="row">
                     <?php
                    $kueri_blog = 'SELECT * FROM blog ORDER BY id DESC';
                    $hasil_blog = mysqli_query($koneksi, $kueri_blog);

                    while ($data = mysqli_fetch_array($hasil_blog)) {
                        ?>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card box">
                                <img class="card-img-top" src="admin/img/<?php echo $data['gambar']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b><?php echo $data['blog_name']; ?></b></h5>
                                    <p class="card-text"><?php if (strlen($data['deskripsi']) > 50) {
                                                            echo substr($data['deskripsi'], 0, 400) . "...";
                                                        } else {
                                                            echo $data['deskripsi'];
                                                        }; ?></p>
                                    <a href="blog-detail.php?id=<?php echo ($data['id']); ?>" class="btn btn-outline-dark">Read More</a>
                                </div>		
                            </div>
                        </div>
                        <?php 
                    } ?>
                </div>		
            </div>
        </div>
    </div>
    </section>
<?php

include 'footer.php';
?>

<script>
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $('#blog').addClass('active');
    });
</script>