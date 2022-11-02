<?php

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="min-vh-100 bg-light">
    <header>
        <!-- place navbar here -->
    </header>
    <main class="min-vh-100 bg-light">
        <div class="vh-100 d-flex justify-content-center align-items-center">

            <form class="shadow p-3 rounded bg-white" action="index.php" method="get">
                <div class="mb-3 text-center">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            List Part
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <ul class="list-group list-group-horizontal" id="get">
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="mb-3 text-center">
                    <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Send Order
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                            <p>New PO Submitted - ID 32</p>
                        </div>
                    </div>
                </div>
                <!-- <div>

                </div> -->
                <div class="text-center">
                <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Get Status
                        </a>
                    </p>
                    <div class="collapse" id="collapseExample3">
                        <div class="card card-body">
                            <p>Status for PO is 0</p>
                        </div>
                    </div>                </div>
                <!-- <div>

                </div> -->
            </form>

        </div>
    </main>

    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    <script>
        $(function getData() {
            var $datas = $("#get");

            $.ajax({
                type: "GET",
                url: "./config.php",
                dataType: "json",

                success: function(datas) {
                    $.each(datas, function(data) {
                        $datas.append(
                            '<li class="list-group-item">' +
                            "Part Number: " +
                            datas[data]["partNo923"] +
                            "</br>" +
                            "Part Name: " +
                            datas[data]["partName923"] +
                            "</br>" +
                            "Current Price: " +
                            datas[data]["currentPrice923"] +
                            "</br>" +
                            "Quality On Hand: " +
                            datas[data]["qoh923"] +
                            "</li>"
                        );
                    });
                },
                error: function() {
                    alert("errors");
                },
            });
        });
    </script>

    <script>

    </script>
</body>

</html>