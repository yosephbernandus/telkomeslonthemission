<?php

include 'header.php';

$id = $_GET['id'];
echo $id;


$kueri = "SELECT * FROM events WHERE id=$id";
$hasil = mysqli_query($koneksi, $kueri);
$data = mysqli_fetch_array($hasil);

?>
<section id="about_us">
        <div class="container mt-4 mb-4">
            <div class="row" style="margin-top: 100px;">
				<div class="col-md-12">
					<h3>Event</h3> <hr style="border: 1px solid gray">
					<div class="row box">
                        
                        <div class="col-md-4 col-lg-4 col-sm-4">
                            <img class="image-fluid" src="admin/img/<?php echo $data['gambar']; ?>" width="100%;" alt="">
                        </div>
                        

                        <div class="col-md-8 col-lg-8 col-sm-8">
                            <h5><b><?php echo $data['event_name']; ?></b> </h5>
                            <p><?php echo $data['deskripsi']; ?></p>

                            <p><b> Date & Location :</b></p>
                            <p>Date Start : <?php echo $data['tanggal']; ?>
                            <p>Date End : <?php echo $data['tanggal_selesai']; ?></p>
                            <p>Location : <?php echo $data['event_location']; ?></p>
                            <hr>
                            <p style="font-size: 14px; text-align:right;"> <b></b> <?php $date = substr($data['created'], 0, 10);
                                                                                    echo date('d F Y', strtotime($date));

                                                                                    ?></b></p>
                        </div>

					</div>		
                </div>
                
                <div class="col-md-12" style="margin-top: 100px;">
					<h3><b>Last Event</h3></b> <hr style="border: 1px solid gray">
					<div class="row">
                        <?php
                        $kueri_events = 'SELECT * FROM events ORDER BY tanggal DESC LIMIT 3';
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
        $('#event').addClass('active');
    });
</script>