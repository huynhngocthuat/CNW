<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
</head>
<body>
    <div class="col-5 offset-4 mt-4">
        <form name="form" action="xulitimkiemver2.php" method='post'>
            <div class="card">
                <div class="card-header">
                    <b>Tìm kiếm nhân viên </b>
                </div>
                <div class="card-body">
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="check" id="check" value="id" checked> ID
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="check" id="check" value="hoTen" checked> Họ Tên
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="check" id="check" value="diaChi" checked> Địa Chỉ
                      </label>
                    </div>
                    <div class="form-group">
                        <label for="text">Text:</label>
                        <input type="text" class="form-control" name="text" id="text">
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