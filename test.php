<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fancybox Carousel</title>
    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.thumbs.css" />
    <style>
        /* Carousel Container */
        #myCarousel {
            max-width: 640px;
            margin: 0 auto;
        }

        #myCarousel .f-carousel__slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div>
        <div class="f-carousel" id="myCarousel">
            <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/31/192x144">
                <a href="https://lipsum.app/id/31/1920x1280" data-fancybox="gallery"><img width="640" height="480"
                        alt="" data-lazy-src="https://lipsum.app/id/31/640x480" /></a>
            </div>
            <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/35/192x144">
                <a href="https://lipsum.app/id/35/1920x1280" data-fancybox="gallery"><img width="640" height="480"
                        alt="" data-lazy-src="https://lipsum.app/id/35/640x480" /></a>
            </div>
            <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/34/192x144">
                <a href="https://lipsum.app/id/34/1920x1280" data-fancybox="gallery"><img width="640" height="480"
                        alt="" data-lazy-src="https://lipsum.app/id/34/640x480" /></a>
            </div>
            <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/60/192x144">
                <a href="https://lipsum.app/id/60/1920x1280" data-fancybox="gallery"><img width="640" height="480"
                        alt="" data-lazy-src="https://lipsum.app/id/60/640x480" /></a>
            </div>
            <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/33/192x144">
                <a href="https://lipsum.app/id/33/1920x1280" data-fancybox="gallery"><img width="640" height="480"
                        alt="" data-lazy-src="https://lipsum.app/id/33/640x480" /></a>
            </div>
            <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/59/192x144">
                <a href="https://lipsum.app/id/59/1920x1280" data-fancybox="gallery"><img width="640" height="480"
                        alt="" data-lazy-src="https://lipsum.app/id/59/640x480" /></a>
            </div>
            <div class="f-carousel__slide" data-thumb-src="https://lipsum.app/id/37/192x144">
                <a href="https://lipsum.app/id/37/1920x1280" data-fancybox="gallery"><img width="640" height="480"
                        alt="" data-lazy-src="https://lipsum.app/id/37/640x480" /></a>
            </div>
        </div>
    </div>


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