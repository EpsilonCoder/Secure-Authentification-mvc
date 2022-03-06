<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div id="register">
        <h3 class="text-center text-white pt-5">
            Register Form
        </h3>

        <div class="container">
            <div id="register-row" class="row justify-content-center align-items-center">
                <div class="col-md-6" id="register-column">
                    <div id="register-box" class="col-md-12">
                        <form action="" id="register-form" method="POST">
                            <h3 class="txt-center text-info">register</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">password</label>
                                <input type="password" name="password" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="registerSubmit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <div class="text-right" id="reg_link">
                                <a href="?login=true" class="text-info"> login here</a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>