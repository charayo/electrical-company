<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <?php
    include("headmeta.php");
    ?>
</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <!--Header section-->

    <div class="h-wrap">
        <div class="container-fluid my-header">

        </div>
        <div class="h-overlay">
            <div class="container p-3">
                <h1 class="">Need more info?</h1>
                <h3>Contact Us</h3>
            </div>
        </div>
    </div>
    <!--Header section-->
    <div class="container mt-3">
        <div class="title text-center mb-3 p-4">
            <h2>Let's Start a Conversation</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h1>Contact Us</h1>


                <strong class="text-left">
                    Tel : 817-909-0836 <br>
                    Email : jwelectricals@usa.com
                </strong>
            </div>
            <div class="col-md-8">
                <form class="">
                    <div class="form-group">
                        <input type="text" class="form-control mb-2" id="email" placeholder="Enter email" name="email">
                        <input type="text" class="form-control mb-2" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="40" rows="10" class="form-control" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning text-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!-- Footer Main -->
    <?php
    include("footer.php");
    ?>
</body>

</html>