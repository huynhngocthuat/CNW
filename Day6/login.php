<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>

<body>
    <div class="col-5 offset-4 mt-4">
        <form name="form" action="xulilogin.php" method='post'>
            <div class="card">
                <div class="card-header">
                    <b>LOGIN </b>
                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <input type="reset" class="float-right btn btn-primary ml-2" value="Reset">
                    <input type="submit" class="float-right btn btn-primary" value="OK" onclick="check()">
                </div>
            </div>
        </form>
    </div>
    <script>
        function check(){
            var username = document.form.username.value;
            var password = document.form.password.value;
            if(username===""){
                alert("Bạn chưa nhập username !");
            }
            if(password===""){
                alert("Bạn chưa nhập password !");
            }
        }
    </script>
</body>

</html>