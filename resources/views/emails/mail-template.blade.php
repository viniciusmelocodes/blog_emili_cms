<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .nav {
            color: #fff;
            background-color: #f1b0b7;
            width: 100%;
            line-height: 30px;
        }

        .nav .nav-wrapper {
            position: relative;
            height: 100%;
            text-align: center;
        }

        .img-logo {
            padding-top: 10px;
            width: 20%;
        }

        .title {
            font-size: 1.7em;
        }

        .row {
            margin-left: -3px;
            margin-right: -3px;
        }

        .row .col {
            float: left;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            min-height: 1px;
        }

        .row .col.s12 {
            width: 100%;
            margin-left: auto;
            left: auto;
            right: auto;
        }

        .card {
            position: relative;
            display: flex;
            flex-flow: column;
            justify-content: flex-end;
            line-height: 1.5;
            border-color: #8080802b !important;
            border: solid;
            border-width: 1px;
            background-color: #fde4e6;
        }

        .card .body-card {
            margin-top: 1%;
            margin-left: 15px;
            margin-right: 15px;
            text-align: center;
            color: black;
            width: 50%;
            margin-left: 25%;
            font-size: 20px;
        }

        .name-user {
            color: #0277BD;
            font-weight: bold;
        }

        .mail-website {
            font-size: 15px !important;
            color: #0277BD;
            width: 100%;
        }

        .footer {
            font-size: 12px !important;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row">
        <div class="col s12">
            <div class="nav">
                <div class="nav-wrapper">
                    <span class="title">{{ $title }}</span>
                </div>
            </div>
            <div class="card">
                <div class="body-card">
                    @yield('content-mail')
                    <p class="footer">2021 © Quero Meu E-book Emili Ananias Confeitaria. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>