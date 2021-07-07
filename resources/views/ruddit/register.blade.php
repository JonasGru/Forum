<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap Simple Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="login-form">
    <form action="/examples/actions/confirmation.php" method="post">
        <h2 class="text-center">Registracija</h2>
        <label>Privalomi laukai</label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Vartotojo vardas" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Slaptažodis" required="required">
        </div>
        <label>Neprivalomi laukai</label>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Vardas">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Pavardė">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="El. paštas">
        </div>

        <div class="form-group">
            <label>Profilio nuotrauka</label>
            <div class="file-field">
                <div class="btn btn-secondary btn-sm float-left">
                    <span>Choose file</span>
                    <input type="file">
                </div>
            </div>
            <br> <br> <br>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Lytis">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Šalis">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Išsilavinimas">
        </div>
        <div class="form-group">
            <label>Gimimo data</label>
            <input type="date" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Profesija">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Politinės pažiūros">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Kiek Stumi">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Mašina">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Mėgstamiausias gyvūnas">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Apie">
        </div>




        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Registruotis</button>
        </div>
        <div class="clearfix">
            <!-- <label class="float-left form-check-label"><input type="checkbox"> Remember me</label> -->
            <a href="index" class="float-Left">Atgal</a>

        </div>

    </form>
    <p class="text-center"><a href="login">Jau turi paskyrą?</a></p>
</div>
</body>
</html>