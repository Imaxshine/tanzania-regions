<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.rtl.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get all Regions</title>
    <style>
        #dialog{
            width: 300px;
            height: 260px;
        }
    </style>
</head>
<body>
    <dialog id="dialog">
        <div id="getAllRegions"></div>
    </dialog>

    <div class="d-flex justify-content-center align-items-center bg-body-secondary" style="height: 60vh; margin: 30px auto;">
        <form id="myForm" class="bg-light shadow-lg rounded p-3">

        <h5>Demo, <br> All Regions</h5>

            <button class="btn btn-primary" onclick="RequestAllRegions()">Request</button>
        </form>
    </div>
    <script src="/regions/tests/all_regions/js/requestRegions.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>