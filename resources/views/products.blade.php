<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{asset('assets/css/carousel.css')}}>
    <title>Best Cards!</title>
</head>
<body>
          <div class="logo">
                <a href="home">
                   <img src={{asset('assets/images/logo.png')}} alt="#"></a>
                           </div>

    <div class="slide-container">
        <span class="slider-span" id="limited-edition1"></span>
        <span class="slider-span" id="limited-edition2"></span>
        <span class="slider-span" id="slider-span3"></span>
        <span class="slider-span" id="slider-span4"></span>
        <!-- NYAHAHAHHAA ROLDMAR WAS HERE -->
        <div class="image-slider">
            <div class="slides-div" id="slide-1">
                <img src={{asset('assets/images/Products/ltd1.png')}} alt="" class="img" id="img1">
                <a href="#limited-edition1" class="button" id="button-1" ></a>
            </div>
            <div class="slides-div" id="slide-2">
                <img src={{asset('assets/images/Products/ltd2.png')}} alt="" class="img" id="img2">
                <a href="#limited-edition2" class="button" id="button-2"></a>
            </div>
            <div class="slides-div" id="slide-3">
                <img src={{asset('assets/images/Products/trd1.png')}} alt="" class="img" id="img3">
                <a href="#slider-span3" class="button" id="button-3"></a>
            </div>
            <div class="slides-div" id="slide-4">
                <img src={{asset('assets/images/Products/trd2.png')}} alt="" class="img" id="img4">
                <a href="#slider-span4" class="button" id="button-4"></a>
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>