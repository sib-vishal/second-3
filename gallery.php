<?php $page = 'gallery'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery | Second Bloom</title>
    <?php include 'include/header-script.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.thumbs.css" />
    <style>
        #myCarousel {
            max-width: 80%;
            margin: 0 auto;
            background-color: #333;
        }

        #myCarousel .f-carousel__slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .f-carousel__slide a {
            display: block;
            width: 100%;
            height: 400px;

        }

        .f-carousel__slide a img {
            width: 100%;
            height: 100%;
            object-fit: contain;

        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <div class="pages_banner">
            <div class="content">
                <h1 class="heading fontHeading fontWeight600 text_primary">
                    Our Gallery
                </h1>
                <p class=" text_primary title fontWeight500">
                    Home Healthcare Agencies in Pennsylvania
                </p>
            </div>
        </div>
        <div style="background:#f6f6f6">
            <div class="containerFull">
                <div class="py-3">
                    <h5 class="">
                        <a class="text_primary" href="index.php">Home</a> <i class="fa-solid fa-angle-right"></i>
                        Our Gallery
                    </h5>
                </div>
            </div>
        </div>

        <section>
            <div class="containerFull">
                <div>
                    <div class="f-carousel" id="myCarousel">
                        <div class="f-carousel__slide"
                            data-thumb-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg">
                            <a href="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg"
                                data-fancybox="gallery">
                                <img alt=""
                                    data-lazy-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg" />
                            </a>
                        </div>
                        <div class="f-carousel__slide"
                            data-thumb-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-0.jpg">
                            <a href="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-0.jpg"
                                data-fancybox="gallery">
                                <img alt=""
                                    data-lazy-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-0.jpg" />
                            </a>
                        </div>
                        <div class="f-carousel__slide"
                            data-thumb-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-1.jpg">
                            <a href="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-1.jpg"
                                data-fancybox="gallery">
                                <img alt=""
                                    data-lazy-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-1.jpg" />
                            </a>
                        </div>
                        <div class="f-carousel__slide"
                            data-thumb-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg">
                            <a href="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg"
                                data-fancybox="gallery">
                                <img alt=""
                                    data-lazy-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg" />
                            </a>
                        </div>
                        <div class="f-carousel__slide"
                            data-thumb-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg">
                            <a href="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg"
                                data-fancybox="gallery">
                                <img alt=""
                                    data-lazy-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg" />
                            </a>
                        </div>
                        <div class="f-carousel__slide"
                            data-thumb-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg">
                            <a href="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg"
                                data-fancybox="gallery">
                                <img alt=""
                                    data-lazy-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg" />
                            </a>
                        </div>
                        <div class="f-carousel__slide"
                            data-thumb-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg">
                            <a href="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg"
                                data-fancybox="gallery">
                                <img alt=""
                                    data-lazy-src="https://www.diversifiedsupportiveservices.org/wp-content/uploads/2019/03/img-18.jpg" />
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </section>




        <?php include 'include/footer.php'; ?>
        <?php include 'include/footer-script.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.thumbs.umd.js"></script>

        <script>
            const container = document.getElementById("myCarousel");
            const options = { Dots: false };

            new Carousel(container, options, { Thumbs });

            Fancybox.bind("[data-fancybox]", {
                // Your custom options
            });
        </script>




</body>

</html>