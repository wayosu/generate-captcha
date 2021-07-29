<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha Generation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="panel">
                    <hr>
                    <div class="panel-heading">
                        <h1>Apakah saya manusia ?</h1>
                    </div>
                    <hr>
                    <form action="getting.php" method="post" autocomplete="off">
                        <div>
                            <img src="captcha.php" alt="Captcha Image"><br><br>
                            <input type="text" name="captcha"><br><br>
                            <input type="submit" value="Submit Form" class="btn btn-danger btn-sm">
                        </div>
                    </form>
                    <br><br><br><br>
                    <p style="font-size: 80%; text-align:center;">Generate Captcha by <a href="https://github.com/wayosu">Wayosu</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>