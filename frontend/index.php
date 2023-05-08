<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- VUE CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div id="app">
        <div class="mc-wrapper">
            <div class="header">
                <i class="fa-brands fa-spotify logo"></i>
            </div>
            <div class="main">
                <div class="ms_container">
                    <div class="container">
                        <!-- CARD -->
                        <div class="row row-cols-3 ms_row">
                            <div v-for="(disk, index) in disks_array " class="col pb-5" :key="index">
                                <div @click="handle_overlay(disk)" class="card ms_card">
                                    <img class="card-img-top" :src="disk.poster" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ disk.title }}</h5>
                                        <p class="card-text">{{ disk.author }}</p>
                                        <h5 class="card-title">{{ disk.year }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /CARD -->

                        <!-- OVERLAY -->
                        <div v-if="overlay_show && item_overlay.title" class="disk-overlay rounded-2">
                            <div class="card ms_card">
                                <img class="card-img-top" :src="item_overlay.poster" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ item_overlay.title }}</h5>
                                    <p class="card-text">{{ item_overlay.author }}</p>
                                    <h5 class="card-title">{{ item_overlay.year }}</h5>
                                </div>
                            </div>
                            <button @click="overlay_show = false" class="ms_btn btn btn-outline-light"> X </button>
                        </div>
                        <!-- /OVERLAY -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>