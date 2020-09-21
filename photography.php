<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/photography-styles.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Name Font for landing -->
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <!-- General Text font -->
    <link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">

    <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
    <title>Michael Permyashkin | About</title>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> -->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest"></head>

<body>
    <div class="layer">
        <section class="page-section portfolio" id="portfolio">
            <div class="header-section">
                <div class="back-arrow">
                    <h1><span><a href="index.html">&lt; Home</a></span></h1>
                </div>
                <h1 class="page-title text-center my-4">&bull; Photography &bull;</h1>
            </div>
        </section>
        <div class="container mt-5 photos-container" id="photo-container">
            <div class="card-columns">
                <?php
                    $dirname = "assets/gallery/";
                    $images = scandir($dirname);
                    shuffle($images);
                    $ignore = Array(".", "..", ".DS_Store");
                    $elementID = 1;
                    foreach($images as $curimg){
                        if(!in_array($curimg, $ignore)) {
                            echo <<<_END
                            <div class="card rounded-0">
                                <button type="button" class='card rounded-0 photograph-card m-0 p-0' name="$elementID" data-toggle="modal" data-target="#1">
                                    <img class='rounded-0' src='$dirname$curimg'>
                                </button>
                            </div>

                            <div class="modal fade" id="$elementID" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <button type="button" class="close" data-dismiss="modal"><i class="fas fa-times" aria-hidden="true"></i><span class="sr-only">Close</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="$dirname$curimg" id="imagepreview">
                                        </div>
                                    </div>
                                </div>
                            </div>
_END;
                        }
                        $elementID++;
                    }
                ?> 
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <script>
        $('button.photograph-card').click(function() { 
            var id = $(this).attr('name');
            console.log('#'+id);
            $('#'+id).modal('show');
        });
    </script>
</body>
</html>