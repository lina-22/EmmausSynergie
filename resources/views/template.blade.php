<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMMAÜS SYNERGIE : @yield("titre")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    @include("fragments.navbar")
<div class="container min-vh-100">
    @yield("contenu")

    @if (session('success'))
    <div id="notif"
        class="fixed-bottom rounded-pill bg-primary border border-1 border-dark mx-2 my-3 col-6 col-lg-3">
        <div class="fs-5 col align-center m-2">
            <i class="bi bi-bell px-2"></i>
            {{ session('success') }}
        </div>
    </div>
@endif

</div>
     @include("fragments.footer")
<script src="{{asset("js/notif.js")}}"></script>
</body>
</html>
