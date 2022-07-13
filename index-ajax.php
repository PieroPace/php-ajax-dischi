<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>

<body>
    <?php include __DIR__ . '/partials/header.php' ?>
    <main id="app">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-2 text-end text-white">
                    <p>Filtra per genere: </p>
                </div>
                <div class="col-2">
                    <select name="genre" id="genreSelect" v-model="query" @change="getCards">
                        <option value="all">All</option>
                        <option v-for="genre in genres" :value="genre">{{ genre }}</option>
                    </select>
                </div>
            </div>
            <div class="row row-cols-6 justify-content-center">
                <div class="col p-1 mt-3 mx-2 text-center" v-for="card in cards">
                    <img class="img-fluid mb-1 p-3" :src="card.poster" :alt="card.title" />
                    <h1 class="fs-5 text-white text-uppercase">
                        {{ card.title }}
                    </h1>
                    <h2 class="fs-6">
                        {{ card.author }}
                    </h2>
                    <h3 class="fs-6">
                        {{ card.year }}
                    </h3>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/partials/footer.php' ?>

    <script src="js/script.js"></script>
</body>

</html>