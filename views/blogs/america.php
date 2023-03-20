<?php
include_once 'views/blogs/header.php';
?>
<div class="container">

<p class="h1"></p>
<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">America</h6>
                <h1>Latest From Our Blog</h1>
            </div>
            <div class="row pb-3">
            <?php
                foreach ($getAmerica as $america) {
                    
                ?>
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="assets/img/<?=$america['img']?>" alt="">
                            <div class="blog-date">
                                <h6 class="font-weight-bold mb-n1"><?=$america['id']?></h6>
                                <small class="text-white text-uppercase"><?=$america['id']?></small>
                            </div>
                        </div>
                        <div class="bg-white p-4">
                            <div class="d-flex mb-2">
                                <a class="text-primary text-uppercase text-decoration-none" href=""><?=$america['davlat']?></a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-primary text-uppercase text-decoration-none" href="">Tours & Travel</a>
                            </div>
                            <a class="h5 m-0 text-decoration-none" href=""> North America, South America, Europe, Asia, Africa, Australia, and Antarctica. And going by that standard, continents make up the vast majority of land surface area on the planet, 
                                or about 57 million square miles (148 million square kilometers).</a>
                        </div>
                    </div>
                </div>
                
               <?php
             }
            ?>
            </div>
        </div>
    </div>
    <h3>How many people choose this place</h3>
    <p>USA:</p>
    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 95%">95%</div>
</div>
<p>Canada:</p>
    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 75%">75%</div>
</div>

</div>
<?php
include_once 'views/blogs/footer.php';
?>