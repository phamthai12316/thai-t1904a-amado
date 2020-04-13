<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table V05</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<div class="limiter">
    <div class="container-table100">
                {{--					<div class="wrap-table100-nextcols js-pscroll">--}}

                <form class="form-inline" action="/" style="border: 5px solid white;border-radius: 10px;padding: 70px;">
                    <h1 style="color: white; margin-bottom: 20px;">Feedback From</h1>
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="Enter name" id="name" style="border: 10px solid white !important; margin: 15px;">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email" style="border: 10px solid white !important; margin: 15px;">
                    <label for="email">Telephone</label>
                    <input type="number" class="form-control" placeholder="Enter telephone" id="telephone" style="border: 10px solid white !important; margin: 15px;">
                    <label for="feedback">Feedback</label>
                    <textarea name="feedback" id="feedback" cols="30" rows="10" placeholder="Enter feedback" style="border: 10px solid white !important; margin: 15px;"></textarea>
                    <button type="submit" class="btn btn-primary" style="border: 5px solid white !important;  background: white;">Submit</button>
                </form>
                {{--					</div>--}}
    </div>
</div>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
    $('.js-pscroll').each(function(){
        var ps = new PerfectScrollbar(this);

        $(window).on('resize', function(){
            ps.update();
        })

        $(this).on('ps-x-reach-start', function(){
            $(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
        });

        $(this).on('ps-scroll-x', function(){
            $(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
        });

    });




</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
