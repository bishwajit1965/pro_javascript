<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Javascript</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="blink();">
    <div class="container">
        <div class="row header-area ">
            <div class="col-sm-12">
                <div class="title-header">
                    <h1><img src="images/javascript.png" alt="Javascript">&nbsp; Javascript fundamental and advanced practice</h1>
                </div>
            </div>
        </div>
        <div class="row">
        <?php require_once 'partials/_sidebar.php';?>
            <div class="col-sm-9">
                <!-- Code below -->

                <!-- Blinking text -->
                <script>
                    function blink() {
                        var f = document.getElementById('blink');
                        setInterval(function() {
                        f.style.display = (f.style.display == 'none' ? '' : 'none');
                       }, 1000);
                    }
                </script>
                <div class="blinking-area">
                    <div id="blink"><h2 style="color:#BF0A0A;font-weight: 800;background: #DDD;padding: 10px;">Practicing Javascript is interesting !!!</h2></div>
                </div>
                <!-- ./Blinking text -->
                <!-- <img src="images/parks-mountains-reflection-mountain-decoration-garden.jpg" class="background_image img-responsive" alt="Background"> -->

                <!-- Code above -->
            </div>
        </div>
    <?php require_once 'partials/_footer.php';?>
    </div>
</body>
</html>

