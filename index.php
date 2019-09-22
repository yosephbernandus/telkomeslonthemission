<?php 
include 'header.php';
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" class="image-fluid" src="image/banner1.png" width="1020px" height="720" alt="First slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" class="image-fluid" src="image/banner2.jpg" width="1020px" height="720" alt="Second slide">
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" class="image-fluid" src="image/banner3.jpg" width="1020px" height="720" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section id="top_article">
        <div class="container mt-4 mb-4">
            <div class="row">
				<div class="col-md-12">
					<h3><b>Top Article</h3></b> <hr style="border: 1px solid gray">
					<div class="row">
                        <?php
                        $kueri_blog = 'SELECT * FROM blog ORDER BY id DESC LIMIT 6';
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
                                                        }; ?></p></p>
                                    <a href="blog-detail.php?id=<?php echo ($data['id']); ?>" class="btn btn-outline-dark">Read More</a>
                                </div>		
                            </div>
                        </div>
                        <?php 
                    } ?>
                </div>
                
                <div class="col-md-12">
					<h3><b>Event's Headline</h3></b> <hr style="border: 1px solid gray">
					<div class="row">
                        <?php
                        $kueri_events = 'SELECT * FROM events ORDER BY tanggal DESC LIMIT 6';
                        $hasil_events = mysqli_query($koneksi, $kueri_events);

                        while ($data = mysqli_fetch_array($hasil_events)) {
                            ?>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="card">
                                <img class="card-img-top" src="admin/img/<?php echo $data['gambar']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><b><?php echo $data['event_name']; ?></b></h5>
                                    <p class="card-text"><?php if (strlen($data['deskripsi']) > 50) {
                                                            echo substr($data['deskripsi'], 0, 400) . "...";
                                                        } else {
                                                            echo $data['deskripsi'];
                                                        }; ?></p></p>
                                    <a href="blog-detail.php?id=<?php echo ($data['id']); ?>" class="btn btn-outline-dark">Read More</a>
                                </div>		
                            </div>
                        </div>
                        <?php 
                    } ?>
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
        $('#home').addClass('active');
    });
</script>
