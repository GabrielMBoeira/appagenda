<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gp</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/login.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.html">Gp<span>.</span></a></h1>

            <div class="buttons-header">
                <a href="{{ url('/') }}" class="get-started-btn scrollto btn-login">Home</a>
                <a href="#" class="get-started-btn scrollto">Contato</a>
            </div>


        </div>
    </header>
    <main>
        <section id="hero" class="d-flex justify-content-center align-items-center">
            <div class="box-hero" style="z-index: 100;">
                <div class="content-form">
                    <h3 class="title-form text-center">Login</h3>
                    <hr>
                    <form action="{{ route('agenda.index') }}" method="post">
                        @csrf
                        @method('GET')
                        <div class="row group-row">
                            <div class="form-group col-md-12 mt-3">
                                <label for="email">E-mail:</label>
                                <input type="text" class="form-control" name="email" >
                            </div>
                            <div class="form-group col-md-12 mt-3">
                                <label for="password">Senha:</label>
                                <input type="password" class="form-control" name="password" >
                            </div>
                        </div>
                        <div class="button-form">
                            <button type="submit" class="btn btn-success">Recuperar senha</button>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>
                </div>
        </section>
    </main>
</body>

</html>
