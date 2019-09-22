<?php
include 'header.php';
?>
<section id="about_us">
        <div class="container mt-4 mb-4">
            <div class="row" style="margin-top: 100px;">
				<div class="col-md-12">
					<h3>About Us</h3> <hr style="border: 1px solid gray">
					<div class="row box">
                        
                        <div class="col-4">
                            <img src="image/logo.png" width="300px;" alt="">
                        </div>

                        <div class="col-8">
                            <h5><b>Timur Bersuara</b> </h5>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                                The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
                                'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, 
                                sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                        </div>
						
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
        $('#about-us').addClass('active');
    });
</script>