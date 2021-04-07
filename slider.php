<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/slider.css">
    <title>Document</title>
</head>

<body>

    <div class="container1">
        <img name="img" src="img/banner.jpg" alt="">

    </div>

    <script>
        window.addEventListener("load", function() {

            let img = [];

            img[0] = "img/banner.jpg";
            img[1] = "img/ba.jpg";

            let num = 0;

            function slider() {

                document.img.src = img[num]

                if (num < 1) {

                    num++;

                } else {
                    num = 0;
                }



            }
            setInterval(slider, 6000)


        })
    </script>

</body>

</html>