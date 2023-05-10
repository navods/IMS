<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;600;700&family=Merriweather+Sans:wght@300;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                outline: none;
                border: none;
                text-decoration: none;
                box-sizing: border-box;
                font-family: "Merriweather Sans", sans-serif;
            }

            body{
                background: #FFFFFF;
            }
            nav{
                position: absolute;
                top: 0;
                bottom: 0;
                height: 100%;
                left: 0;
                background: #9C10EC;
                width: 15%;
                overflow: hidden;
                transition: width 0.2s linear;
                box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1)
            }

            .logo{
                text-align: center;
                display: flex;
                transition: all 0.5s ease;
            }

            .logo img{
                display: block;
                margin-top: 10%;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 20%;
                width: 80%;
            }

            .logo span{
                font-weight: bold;
                padding: 15px;
                font-size: 18px;
            }

            a{
                position: relative;
                color: #FFFFFF;
                font-size: 25px;
                display: table;
                width: 300px;
                padding: 10px;
            }

            .nav-item{
                position: relative;
                top: 12px;
                margin-left: 10%;
            }

            .tab-item{
                position: relative;
                top: 0;
                margin-left: 10px;
            }

            .propic{
                margin-left: 10%;
                width: 50px;
            }
        </style>
    </head>
    <body>
        <?php echo $__env->make('include.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH D:\Projects by Navva\UOC\IMS\IMS\resources\views/welcome.blade.php ENDPATH**/ ?>