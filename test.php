<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Example</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <style>
        /* Slider Container Style */
        .swiper {
            width: 100%;
            height: 100vh; /* Full height */
            position: relative;
        }
        .swiper-slide {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            background-size: cover;
            background-position: center;
        }
        .swiper-slide h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .swiper-slide p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .discover-button {
            padding: 10px 20px;
            font-size: 1rem;
            color: white;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <!-- Slider Container -->
    <div class="swiper">
        <div class="swiper-wrapper">
            <!-- Slide 1 -->
            <div class="swiper-slide" style="background-image: url('https://via.placeholder.com/1920x1080?text=Slide+1');">
                <h1>Title 1</h1>
                <p>Body text for the first slide.</p>
                <button class="discover-button">Discover More</button>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide" style="background-image: url('https://via.placeholder.com/1920x1080?text=Slide+2');">
                <h1>Title 2</h1>
                <p>Body text for the second slide.</p>
                <button class="discover-button">Discover More</button>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide" style="background-image: url('https://via.placeholder.com/1920x1080?text=Slide+3');">
                <h1>Title 3</h1>
                <p>Body text for the third slide.</p>
                <button class="discover-button">Discover More</button>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.swiper', {
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>
