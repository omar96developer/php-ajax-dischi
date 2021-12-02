<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Milestone2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="../pngegg.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container py-5" id="root">
            <div class="row row-cols-5 g-4">
                <div class='col' v-for="(disco, i) in dischi" :key="i">
                    <div class='card'>
                        <img :src='disco.poster' class='card-img-top' alt=''>
                        <div class='card-body'>
                            <h5 class='card-title'>{{disco.title}}</h5>
                            <p class='card-text'>{{disco.author}}</p>
                            <p class='card-text'>{{disco.year}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script src="mainvue.js"></script>
</body>

</html>