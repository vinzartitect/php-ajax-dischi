<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css link -->
    <link rel='stylesheet' href='css/style.css'>
    <title>Spoti-phyp</title>
</head>
<body>
    <div id="app">
    
        <div class="webapp">
            <div class="header">
                <img src="img/logo-spotify.png" alt="">
            </div>
            <div class="main">
                <!-- strutturo il vfor per ciclare le info delle card -->                
                <div class="card" v-for="elem in arrayDisk">
                    <img :src=elem.poster alt="">
                    <div class="title">{{elem.title}}</div>
                    <div class="author">{{elem.author}}</div>
                    <div class="year">{{elem.year}}</div>
                </div>               
            </div>
        </div>

    </div>

    <!-- vue 2 cdn -->
    <script src='https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js'></script>
    <!-- axios cdn -->
    <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
    <!-- nostro main js -->
    <script src="./js/main.js"></script>
    
</body>
</html>