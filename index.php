<html>
    <head>
        <title>My class website</title>
        <script>
            console.log("sample javascript")
            var a = 1+2;
        </script>
        <link rel="stylesheet" href="demo.css"/>
    </head>
    <body>
        <p>test code</p>

        <form method="post">
            Search:<input type="text" name="name">
            <input type="text" name="second">
            <input type="submit">

        </form>
        <?php
            if(isset($_POST["name"])){
                echo $_POST["name"];
            }
        ?>

        <button onclick="alert('Alert Box')">Alert Popup</button>


        <h1> first website with edits </h1>
        <hr>
        <h3>Second Heading</h3>
        <br>
        <a href="HW2/problem1.php">Apple website</a>
        <p>This <strong>is a</strong> paragraph</p>
        <button>test</button>
        <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fstore.storeimages.cdn-apple.com%2F4982%2Fas-images.apple.com%2Fis%2Fiphone-15-pro-model-unselect-gallery-2-202309_GEO_US_FMT_WHH%3Fwid%3D1280%26hei%3D492%26fmt%3Dp-jpg%26qlt%3D80%26.v%3D1693010531775&tbnid=GPO3euQj-fCzWM&vet=12ahUKEwiMxtW968uBAxUZA1kFHYOPBoIQMygEegUIARCfAg..i&imgrefurl=https%3A%2F%2Fwww.apple.com%2Fshop%2Fbuy-iphone%2Fiphone-15-pro&docid=qwq9Y9XGznoM1M&w=1280&h=492&q=iphone%2015&ved=2ahUKEwiMxtW968uBAxUZA1kFHYOPBoIQMygEegUIARCfAg" />

        <?php
        echo "testphp\n";
        $test2 = "testphpvariable\n";
        $math= 5+3;
        echo $math;
        echo $test2;

        if ($math==8){
            echo "value is 8";
        }

        ?>



    </body>
</html>