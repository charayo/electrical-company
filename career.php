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
            <h3 class="" style="color: #dc7614;">Are you <br> a team <br> player?</h3>
            </div>
        </div>
    </div>
    <!--Header section-->
    <div class="container mt-3">
        <div class="section-header text-center">
            <h3>Join Us</h3>
            <img src="images/seprator.png" alt="seprator" />
        </div><!-- Section Header /- -->
        <div class="p-5">
            <form>
                <div class="form-row mb-2">
                    <div class="col">
                        <input type="text" class="form-control" id="email" placeholder="Post Applied for" name="post">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Qualification" name="Qualification">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Firstname" name="Firstname">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Age" name="pswd">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Phone Number" name="phone">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Total Working Experience In Months" name="experience">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Address" name="Address">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Organisation Presently Employed with" name="pswd">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="City" name="pswd">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Area of Specialization" name="pswd">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Pin / Zip" name="pswd">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="If others, please specify" name="pswd">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Country" name="pswd">
                    </div>
                </div>
                <input type="file" name="upload" id="">
                <div class="form-row mb-2 mt-2">
                    <button type="submit" class="btn btn-warning text-white m-2">Submit</button>
                    <button type="reset" class="btn btn-danger m-2">Reset</button>
                </div>
            </form>


        </div>

    </div>
    <!-- Footer Main -->
    <?php
    include("footer.php")
    ?>
</body>

</html>