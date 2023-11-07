<?php include 'includes/header.php'; ?>
<!-- Carousel -->
<div id="home-page-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <!-- <video class="img-fluid" autoplay loop muted>
        <source src="assets/textil_video1.mp4" type="video/mp4" />
      </video> -->
            <img src="./assets/images/slide1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>First slide label</h1>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./assets/images/slider2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Second slide label</h1>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="./assets/images/slider3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>Third slide label</h1>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#home-page-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#home-page-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Hero Section -->
<section class="hero bg-light text-black py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center subhead">Welcome to ANH</h2>
                <p class="text-center">
                    Welcome to our company, where we specialize in exporting a wide range of high-quality products.
                    We take pride in offering a diverse selection that includes textiles, garments, millets, and
                    exquisite artificial jewelry. With a commitment to excellence, we bring you the finest in each
                    category, crafted to meet the highest standards. Explore our offerings and experience the
                    perfect blend of craftsmanship, style, and elegance. We're here to serve your needs and provide
                    you with the best that the world of textiles, millets, and jewelry has to offer.
                </p>
                <!-- <div class="text-center">
                        <a href="#products" class="btn btn-theme btn-lg">View Products</a>
                    </div> -->
            </div>
        </div>
    </div>
</section>

<!-- Icons -->
<section id="icon-section">
    <div class="icon-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <!-- <i class="fa-icon fa-solid fa-trophy fa-5x"></i> -->
                        <i class="bi-icon bi bi-trophy"></i>
                        <div class="title">
                            <h4>Excellence</h4>
                        </div>
                        <div class="box-text">
                            <span>All our products are produced, sourced and sold with one thing in mind - Excellence.</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="bi-icon bi bi-award"></i>
                        <div class="title">
                            <h4>Quality</h4>
                        </div>
                        <div class="box-text">
                            <span>We ensure that the products sold by us talk for themselves. Quality is the utmost importance!</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="box-part text-center">
                        <i class="bi-icon bi bi-clock"></i>
                        <div class="title">
                            <h4>Punctual</h4>
                        </div>
                        <div class="box-text">
                            <span>Our processes, ensure that our orders are delivered on time, thus saving your time and money!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Section -->
<section id="categories-section" class="bg-light py-5 mx-auto">
    <div class="container mx-auto">
        <h2 class="text-center subhead">Categories</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 product-card">
            <!-- Product Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-image-container">
                        <img src="./assets/images/category-garment.webp" class="card-img-top" alt="Product 2">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">garments</h5>
                        <p class="card-text">Latest, Modern dresses for<br>Men, Women and Kids</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-image-container">
                        <img src="./assets/images/moringa.jpg" class="card-img-top" alt="Product 1">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Moringa</h5>
                        <p class="card-text">Farm Fresh Moringa Products packed with Nutrients</p>
                    </div>
                </div>
            </div>
            <!-- Product Card 3 -->
            <!-- <div class="col mb-4">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="./assets/images/yellow-material.jpg" class="card-img-top" alt="Product 3">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Textile</h5>
                            <p class="card-text">High quality textile for garments, sheets and various other purposes
                            </p>
                        </div>
                    </div>
                </div> -->
            <!-- Product Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-image-container">
                        <img src="./assets/images/millet1.jpg" class="card-img-top" alt="Product 4">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Millets</h5>
                        <p class="card-text">All kinds of Millets based products<br>sourced directly from farms.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image gallery Section -->
<section id="gallery-section">
    <div class="container">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="text-center subhead">Gallery</h2>
            </div>

            <div align="center">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="textile">Textile</button>
                <button class="btn btn-default filter-button" data-filter="jewellery">Jewellery</button>
                <button class="btn btn-default filter-button" data-filter="millets">Millets</button>
            </div>
            <br />



            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter textile">
                <img src="assets/images/gallery/textile1.png" class="img-responsive port-image">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter jewellery">
                <img src="assets/images/gallery/jewellery1.png" class="img-responsive port-image">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter textile">
                <img src="assets/images/gallery/textile2.png" class="img-responsive port-image">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter millets">
                <img src="assets/images/gallery/millet1.png" class="img-responsive port-image">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter textile">
                <img src="assets/images/gallery/textile3.png" class="img-responsive port-image">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter millets">
                <img src="assets/images/gallery/millet2.png" class="img-responsive port-image">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter textile">
                <img src="assets/images/gallery/textile4.png" class="img-responsive port-image">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter millets">
                <img src="assets/images/gallery/millet3.png" class="img-responsive port-image">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter jewellery">
                <img src="assets/images/gallery/jewellery2.png" class="img-responsive port-image">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter textile">
                <img src="assets/images/gallery/textile5.png" class="img-responsive port-image">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter jewellery">
                <img src="assets/images/gallery/jewellery3.png" class="img-responsive port-image">
            </div>

            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter textile">
                <img src="assets/images/gallery/textile6.png" class="img-responsive port-image">
            </div>
        </div>
    </div>
</section>




<div class="container">

    <div class="client">
        <h2 class="text-center">Registered with</h2>
        <hr />
        <ul>
            <li>
                <img src="assets/images/logos/apeda_logo.svg" alt="apeda">
            </li>
            <li>
                <img src="assets/images/logos/dgft.png" alt="dgft">
            </li>
            <li>
                <img src="assets/images/logos/gst.png" alt="gst">
            </li>
            <li>
                <img src="assets/images/logos/msme1.png" alt="msme">
            </li>
        </ul>
    </div>
</div>
<script>
    $(document).ready(function() {

        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');

            if (value == "all") {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
            } else {
                //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
                //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');

            }
        });

        if ($(".filter-button").removeClass("active")) {
            $(this).removeClass("active");
        }
        $(this).addClass("active");

    });


</script>

<?php include 'includes/footer.php'; ?>