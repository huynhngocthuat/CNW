
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
        <form name="form" action="Controller_Student.php?update=1" method='post'>
            <div class="card">
                <div class="card-header">
                    <b>Cập nhập thông tin </b>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id">Mã sinh viên</label>
                        <input type="text" class="form-control" name="id" id="id" value="<?php echo $student->id ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sinh viên</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $student->name ?>">
                    </div>
                    <div class="form-group">
                        <label for="age">Ngày sinh</label>
                        <input type="text" class="form-control" name="age" id="age" value="<?php echo $student->age ?>">
                    </div>
                    <div class="form-group">
                        <label for="university">Trường đại học</label>
                        <input type="text" class="form-control" name="university" id="university" value="<?php echo $student->university ?>">
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <input type="reset" class="float-right btn btn-primary ml-2" value="Reset">
                    <input type="submit" class="float-right btn btn-primary" value="OK">
                </div>
            </div>
        </form>
    </div>
</body>

</html>