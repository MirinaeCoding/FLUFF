<!DOCTYPE html>
<html data-theme="valentine" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.45.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
    <title>Sign in</title>
</head>
<body class="font-mono">

<div class="grid grid-cols-3 grid-rows-3 gap-4">

    <div class="01"></div>

    <div class="mt-20">
        <div class="justify-center">
        <img src="../images/logo/fluff-logo.png" alt="">
        

        </div>

        

        <form action="" method="POST">

            <div class="form-control m-12">
                <p class="text-2xl font-bold">LOG IN</p>
                <label class="input-group input-group-vertical mt-5">
                    <span class="font-bold">Username</span>
                    <input type="text" placeholder="Type here" class="input input-bordered" name="id"/>
                </label>

                <label class="input-group input-group-vertical mt-5">
                    <span class="font-bold">Password</span>
                    <input type="text" placeholder="Type here" class="input input-bordered" name="password"/>
                </label>

                <input class="btn mt-7" type="submit" value="Sign in" name="sign_in_button">

            </div>

        </form>

            <?php

            require('../controller/controller.php');
            $controller = new controller();

            if(isset($_POST['sign_in_button'])){
                $controller->sign_in($_POST['id'], $_POST['password']);
            }

            if(isset($_GET["error"])){ ?>
            
                <div class="alert alert-error shadow-lg mt-5">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>That was the wrong username or password. Please try again.</span>
                    </div>
                </div>

            <?php 
            } 
            ?>

    </div>

    <div class="03"></div>

</div>

    
</body>
</html>