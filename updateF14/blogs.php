<?php include('util.php'); ?>
<!DOCTYPE HTML>

<?php getHeading('Blogs'); ?>

<html>

    <body>
        <?php getSidebar(); ?>

        <div class = "content-container">

        <?php addStars(); ?>

    </div>
        <script>
        $(document).ready( function()
        {
            $(".side-container").delay(1500).animate({"left":"-100px"},1000,"easeInOutBack");
            $("#video").animate({"opacity":"1.0"},3000);
        });

        </script>
    </body>
</html>
