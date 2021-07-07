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
        <img src="blank-profile-picture.png" alt="..." class="img-thumbnail">
        <h2 class="text-center">Profilis</h2>
        <label><h5>Pagrindiniai laukai</h5></label>
        <div class="form-group">
            <label>Vartotojo vardas</label>
            <input readonly type="text" class="form-control" value="Vartotojo vardas">
        </div>
        <div class="form-group">
            <label>El. paštas</label>
            <input readonly type="text" class="form-control" placeholder="El. paštas">
            <div class="form-group">
                <button type="submit" class="btn btn-secondary btn-block">Patvirtinti el. paštą</button>
            </div>
        </div>


        <label><h5>Papildomi laukai</h5></label>
        <div class="form-group">
            <label>Vardas</label>
            <input type="text" class="form-control" value="Vardas">
        </div>
        <div class="form-group">
            <label>Pavardė</label>
            <input type="text" class="form-control" value="Pavardė">
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
            <label>Lytis</label>
            <input type="text" class="form-control" value="Lytis">
        </div>
        <!--                 Efkos kampelis taskam                -->
        <div class="">
            <p>Karmos taškai: 0 &emsp;&emsp;&emsp;&emsp;&emsp;<a href="pirktiTaskus.html">Nupirkti taškų</a> </p>
        </div>
        <div class="">
            <p>Viso laiko taškai: 0 </p>
        </div>
        <div>
            <p>Gauti apdovanojimai:</p>
            <ul>

            </ul>
            <p>Turimi apdovanojimai:</p>
            <ul>

            </ul>
            <p><a href="apdovanojimai.html">Nupirkti apdovanojimą</a></p>
        </div>
        <!--                 Efkos kampelis taskam                 -->
        <div class="form-group">
            <label>Šalis</label>
            <input type="text" class="form-control" value="Šalis">
        </div>
        <div class="form-group">
            <label>Išsilavinimas</label>
            <input type="text" class="form-control" value="Išsilavinimas">
        </div>
        <div class="form-group">
            <label>Gimimo data</label>
            <input type="date" class="form-control" value="1999-06-09">
        </div>
        <div class="form-group">
            <label>Profesija</label>
            <input type="text" class="form-control" value="Profesija">
        </div>
        <div class="form-group">
            <label>Politinės pažiūros</label>
            <input type="text" class="form-control" value="Politinės pažiūros">
        </div>
        <div class="form-group">
            <label>Kiek Stumi</label>
            <input type="text" class="form-control" value="Kiek Stumi">
        </div>
        <div class="form-group">
            <label>Mašina</label>
            <input type="text" class="form-control" value="Mašina">
        </div>
        <div class="form-group">
            <label>Mėgstamiausias gyvūnas</label>
            <input type="text" class="form-control" value="Mėgstamiausias gyvūnas">
        </div>
        <div class="form-group">
            <label>Apie</label>
            <input type="text" class="form-control" value="Apie">
        </div>




        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Atnaujinti duomenis</button>
        </div>
        <div class="clearfix">
            <!-- <label class="float-left form-check-label"><input type="checkbox"> Remember me</label> -->
            <a href="index" class="float-Left">Atgal</a>

        </div>

    </form>
</div>
</body>
</html>