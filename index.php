
<?php include 'includes/header.php'; ?>
    <!-- Carousel -->
    <div id="home-page-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
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
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="icon-block text-center mb-4">
                    <img src="./assets/images/man-tie.svg" alt="Icon Image" width="100" height="100">
                    <h4>Excellence</h4>
                    <p>All our products are produced, sourced and sold with one thing in mind - Excellence.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-block text-center mb-4">
                    <img src="./assets/images/calender.svg" alt="Icon Image" width="100" height="100">
                    <h4>Punctual</h4>
                    <p>Our processes, ensure that our orders are delivered on time, thus saving your time and money!</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-block text-center mb-4">
                    <img src="./assets/images/jacket.svg" alt="Icon Image" width="100" height="100">
                    <h4>Quality</h4>
                    <p>We ensure that the products sold by us talk for themselves. Quality is the utmost importance!
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="icon-block text-center mb-4">
                    <!-- <i class="fa-regular fa-heart icon-4x"></i> -->
                    <img src="./assets/images/icons/icons8-heart-100.png" alt="Icon Image" width="100" height="100">
                    <h4>Focus</h4>
                    <p>All products are made with love as the super ingredient, thus we get repeat orders!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Products Section -->
    <section id="products" class="bg-light py-5 mx-auto">
        <div class="container mx-auto">
            <h2 class="text-center subhead">Categories</h2>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 product-card">
                <!-- Product Card 1 -->
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="./assets/images/Jewellery.jpg" class="card-img-top" alt="Product 1">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jewellery</h5>
                            <p class="card-text">High Quality Jewellery with modern and contemporary designs</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="col mb-4">
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
                <div class="col mb-4">
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


   


    <!-- Product Range Section -->
    <section id="product-range" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center subhead">Products</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 justify-content-between">
                <!-- Product Card 1 -->
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="./assets/images/products/img1.jpg" class="card-img-top" alt="Product 1">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">Description for Product 1</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 2 -->
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="./assets/images/products/img2.jpg" class="card-img-top" alt="Product 2">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Description for Product 2</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 3 -->
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="./assets/images/products/img3.jpg" class="card-img-top" alt="Product 3">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">Description for Product 3</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 4 -->
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="./assets/images/products/img4.jpg" class="card-img-top" alt="Product 4">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Product 4</h5>
                            <p class="card-text">Description for Product 4</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 5 -->
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="./assets/images/products/img5.jpg" class="card-img-top" alt="Product 5">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Product 5</h5>
                            <p class="card-text">Description for Product 5</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 6 -->
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="./assets/images/products/img6.jpg" class="card-img-top" alt="Product 6">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Product 6</h5>
                            <p class="card-text">Description for Product 6</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 7 -->
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="./assets/images/products/img7.jpg" class="card-img-top" alt="Product 7">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Product 7</h5>
                            <p class="card-text">Description for Product 7</p>
                        </div>
                    </div>
                </div>
                <!-- Product Card 8 -->
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-image-container">
                            <img src="./assets/images/products/img8.jpg" class="card-img-top" alt="Product 8">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Product 8</h5>
                            <p class="card-text">Description for Product 8</p>
                        </div>
                    </div>
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

    <?php include 'includes/footer.php'; ?>