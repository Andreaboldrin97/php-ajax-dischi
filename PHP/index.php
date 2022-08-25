<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CCS  -->
    <link rel="stylesheet" href="../style/style.css">
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <header>
        <img class="m-1 mx-3" src="../assets/logo-spotify.png" alt="spotify logo">
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-6">
                <div class="music-card m-3">
                    <img :src="poster" :alt="title">
                    <h6 class="text-center text-white pt-3">{{ title }}</h6>
                    <div class="info-album text-center text-white-50 mb-2"> {{ author }} <br> {{ year }} </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>