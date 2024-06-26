<!DOCTYPE html>
<html lang="ita">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DISCHI JSON</title>

    <link href="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-download-logo-30.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./styles/style.css" rel="stylesheet">


    <!-- * SCRIPTS JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js" type="text/javascript" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js"
        integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" type="text/javascript" defer></script>
    <script src="js/script.js" type="text/javascript" defer></script>

</head>



<body>
    <div id="app">
        <header class="py-3">
            <div class="container-fluid px-5">
                <a href='#' class="my_img-container ms-5">
                    <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-download-logo-30.png"
                        alt="logo" class="w-100 ms-4">
                </a>
            </div>
        </header>



        <main class="py-3 px-5">
            <div class="container-fluid px-5">
                <div v-if='discsInfos' class="my_cards-container d-flex flex-wrap px-5">
                    <article v-for="discInfos,index in discsInfos" :key='index'
                        class='d-flex flex-column align-items-center rounded rounded-3 p-4' :title="discInfos.genre"
                        @click='showActiveDisc(index)'>
                        <div class=" my_img-container">
                            <img :src="discInfos.poster" alt="" class="w-100">
                        </div>

                        <div class="my_card-info d-flex flex-column align-items-center pt-4 pb-2 text-center">
                            <h3 class="my_title fw-bold">{{discInfos.title}}</h3>
                            <h6>{{discInfos.author}}</h6>
                            <h4 class="my_date fw-bold">{{discInfos.year}}</h4>
                        </div>
                    </article>
                </div>

                <div v-if="isClickedADisc"
                    class="my_card-container position-fixed top-0 start-0 end-0 bottom-0 m-3 rounded rounded-3">
                    <div class="my_btn-container text-end p-4">
                        <span class="my_btn border border-1 rounded rounded-3 py-2 px-3"
                            @click='hideActiveDisc()'>X</span>
                    </div>
                    <article
                        class='d-flex flex-column align-items-center justify-content-center rounded rounded-3 p-4 h-100'
                        :title="discsInfos[discsInfosActiveIndex].genre">
                        <div class=" my_img-container">
                            <img :src="discsInfos[discsInfosActiveIndex].poster" alt="" class="w-100">
                        </div>

                        <div class="my_card-info d-flex flex-column align-items-center pt-4 pb-2 text-center">
                            <h3 class="my_title fw-bold">{{discsInfos[discsInfosActiveIndex].title}}</h3>
                            <h6>{{discsInfos[discsInfosActiveIndex].author}}</h6>
                            <h4 class="my_date fw-bold">{{discsInfos[discsInfosActiveIndex].year}}</h4>
                        </div>
                    </article>
                </div>
            </div>
        </main>
    </div>
</body>

</html>