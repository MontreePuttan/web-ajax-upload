<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <form method="post" id="insert-form" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Upload</label>
                    <input type="file" class="form-control" id="title" name="title" placeholder="Title">
                    <br>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                    <br>
                    <input type="submit" id="insert" class="btn btn-success"/>
                </div>
            </form>
        </div>

        <?php //require 'show.php'; ?>

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function () {

                $('#insert-form').on('submit', function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: "insert.php",
                        method: "post",
                        data: $('#insert-form').serialize(),
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend: function () {
                            $('#insert').val("Insert....");
                        },
                        success: function (data) {
                            $('#insert-form')[0].reset();
                        }

                    });
                });



            });
        </script>

    </body>
</html>