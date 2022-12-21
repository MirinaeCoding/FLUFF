<?php require('../components/navbar.php') ?>

<!DOCTYPE html>
<html data-theme="valentine" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.45.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>FLUFF - Home</title>
</head>


<!-- Put this part before </body> tag -->
<input type="checkbox" id="my-modal" class="modal-toggle" />
<div class="modal">
  <div class="modal-box">
    <h3 class="font-bold text-lg">SHOP</h3>
    <p class="py-4">Welcome to the shop ! Choose a category for searching what you need</p>
    <div class="modal-action">
      <label for="my-modal" class="btn">Yay!</label>
    </div>
  </div>
</div>



<body>

    <div class="grid grid-cols-3 gap-4">

        <div class="01 flex justify-end">
            <div class="flex flex-col w-24">
            <button class="btn m-2 rounded-full h-20 w-20 bg-white"><img src="../images/food/bread.png" alt=""></button>
            <button class="btn m-2 rounded-full h-20 w-20 bg-white"><img src="../images/food/broccoli.png" alt=""></button>
            <button class="btn m-2 rounded-full h-20 w-20 bg-white"><img src="../images/food/cheese.png" alt=""></button>
            <button class="btn m-2 rounded-full h-20 w-20 bg-white"><img src="../images/food/icecream.png" alt=""></button>
            </div>
        </div>
        <div class="02">

            <div class="artboard-demo w-auto bg-white">
                <h1 class="font-bold text-3xl my-4">Name</h1>
                <img class="m-12"src="../images/pet/rabbit/gray.png" width="400" alt="">
                <div class="flex flex-col w-full">
                    <div class="grid h-auto card bg-white rounded-box p-7 m-4">
                            <div class="flex justify-items-center w-full bg-base-100 rounded-lg"><p class="font-bold justify-self-center m-1">NAME'S STATUS</p></div>
                            <div><p class="font-bold mt-4">Hunger</p><progress class="progress w-56" value="0" max="100"></progress></div>
                            <div><p class="font-bold">Thirst</p><progress class="progress w-56" value="10" max="100"></progress></div>
                            <div><p class="font-bold">Hapiness</p><progress class="progress w-56" value="40" max="100"></progress></div>
                            <div><p class="font-bold">Health</p><progress class="progress w-56" value="70" max="100"></progress></div>
                            <div><p class="font-bold">Energy</p><progress class="progress w-56" value="100" max="100"></progress></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="03">

                <div class="btn-group btn-group-vertical mt-10">
                <label for="my-modal" class="btn rounded-full h-32 w-32">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                        <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                    </svg>
                </label>
                    <button class="btn" name="living_room"><a href="home.php?living_room">Living Room</button></a>
                    <button class="btn" name="kitchen"><a href="home.php?kitchen">Kitchen</button></a>
                    <button class="btn" name="bathroom"><a href="home.php?bathroom">Bathroom</button></a>
                    <button class="btn" name="dressing"><a href="home.php?dressing">Dressing</button></a>
                </div>
        </div>

    </div>

    <?php

    if(isset($_GET['living_room'])){
        ?> <button class="btn btn-active" name="living_room">Living Room</button> <?php
    } else {
        ?> <button class="btn" name="living_room">Living Room</button> <?php
        
    }

    
    ?>
    

</body>
</html>