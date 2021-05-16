<html>
    <head>
        <title>Phillip Navarrete | Gallery</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Keywords" content="">
        <meta name="Description" content="">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <link rel="stylesheet" href="styles/stylesheet.css" type="text/css">
    </head>
    <body>
        <?php require 'header.php'; ?>
        <div class = "spacer">&nbsp;</div>
        <div class = "gallery-container">
            <!-- Image and buttons -->
            <div class = "image-container">
                <div class="slideshow-container">
                    <!-- Image 1 -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="images/img1.jpg" style="width:100%">
                    </div>
                    <!-- Image 2 -->
                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="images/img2.jpg" style="width:100%">
                    </div>
                    <!-- Image 3 -->
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="images/img3.jpg" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
                <div class ="dot-bar" style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>

            <!-- Descriptions -->
            <div class = "image-description-container">
                <!-- ITEM 1 -->
                <div class = "sub-image-container content-container">
                    <h3 class="image-title">ITEM TITLE #1</h3>
                    <p class = "about-me-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <img src = "images/parts/seperator_small_green.png">
                    <div class = "button-container">
                        <button class = "about-button" onclick="window.open('images/img1.jpg')">
                            <img src ="images/icons/icon_pdf_grey.png"><p><b>DOWNLOAD JPG</b></p>
                        </button>
                    </div>
                </div>
                <!-- ITEM 2 -->
                <div class = "sub-image-container content-container">
                    <h3 class="image-title">ITEM TITLE #2</h3>
                    <p class = "about-me-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <img src = "images/parts/seperator_small_green.png">
                    <div class = "button-container">
                        <button class = "about-button" onclick="window.open('images/img2.jpg')">
                            <img src ="images/icons/icon_pdf_grey.png"><p><b>DOWNLOAD JPG</b></p>
                        </button>
                    </div>
                </div>
                <!-- ITEM 3 -->
                <div class = "sub-image-container content-container">
                    <h3 class="image-title">ITEM TITLE #3</h3>
                    <p class = "about-me-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <img src = "images/parts/seperator_small_green.png">
                    <div class = "button-container">
                        <button class = "about-button" onclick="window.open('images/img3.jpg')">
                            <img src ="images/icons/icon_pdf_grey.png"><p><b>DOWNLOAD JPG</b></p>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        <script src = "gallery-script-min.js"></script>

    </body>
</html>