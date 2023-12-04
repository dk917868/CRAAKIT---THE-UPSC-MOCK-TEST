<?php
include "./connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-transform: capitalize;
            outline: none;
            border: none;
            text-decoration: none;
        }

        .container {
            background: linear-gradient(#fff 50%, #fff 50.1%);
            min-height: 100vh;
            text-align: center;
        }

        .container .box-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .container .box-container .box {
            background: #fff;
            box-shadow: 0 10px 15px rgba(0, 0, 0, .3);
        }

        .container .box-container .box:nth-child(2) {
            border: 2px solid #000;
        }

        .container .box-container .box:nth-child(2) .btn {
            background: rgb(177, 37, 65);
        }

        .container .box-container .box:nth-child(2) .btn:hover {
            background: #444;
        }

        .container .box-container .box h3 {
            font-size: 25px;
            padding: 17px 0;
            color: #444;
        }

        .container .box-container .box .price {
            color: #fff;
            background: rgb(68 68 68);
            font-weight: bolder;
            font-size: 50px;
        }

        .container .box-container .box .price.year {
            display: none;
        }

        .container .box-container .box .list {
            margin: 20px 0;
        }

        .container .box-container .box .list p {
            padding: 15px 0;
            font-size: 17px;
            color: #666;
        }

        .container .box-container .box .list p i {
            padding-right: 5px;
            color: rgb(177, 37, 65);
        }

        .container .box-container .box .btn {
            margin: 20px;
            display: block;
            font-size: 17px;
            background: #444;
            color: #fff;
            padding: 10px;
        }

        .container .box-container .box .btn:hover {
            background: rgb(177, 37, 65);
        }

        .container .price-toggler {
            margin-top: 20px;
            display: inline-block;
            padding: 5px;
            border: 2px solid #000;
            background: #fff;
        }

        .container .price-toggler span {
            padding: 7px 30px;
            cursor: pointer;
            color: #444;
            font-size: 20px;
            display: inline-block;
        }

        .container .price-toggler span.active {
            background: #444;
            color: #fff;
        }

        @media (max-width:450px) {
            .container .box-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="box">
            <a href="index.php">Go back to Home page</a>
        </div>
        <div class="price-toggler">
            <span class="month active">monthly</span>
            <span class="year">yearly</span>
        </div>

        <div class="box-container">

            <div class="box">
                <h3>basic</h3>
                <div class="price month"><span>$</span>10.<span>00</span></div>
                <div class="price year"><span>$</span>30.<span>00</span></div>
                <div class="list">
                    <p> <i class="fas fa-times"></i> Daily quiz</p>
                    <p> <i class="fas fa-times"></i> Daily Updates </p>
                    <p> <i class="fas fa-check"></i> Mock test </p>
                    <p> <i class="fas fa-times"></i> team support </p>
                    <p> <i class="fas fa-check"></i> maintenance </p>
                </div>
                <a href="https://razorpay.com" class="btn">choose plan</a>
            </div>

            <div class="box">
                <h3>regular</h3>
                <div class="price month"><span>$</span>30.<span>00</span></div>
                <div class="price year"><span>$</span>50.<span>00</span></div>
                <div class="list">
                    <p> <i class="fas fa-times"></i> Daily quiz</p>
                    <p> <i class="fas fa-times"></i> Daily Updates </p>
                    <p> <i class="fas fa-check"></i> Mock test </p>
                    <p> <i class="fas fa-check"></i> team support </p>
                    <p> <i class="fas fa-check"></i> maintenance </p>
                </div>
                <a href="https://razorpay.com" class="btn">choose plan</a>
            </div>

            <div class="box">
                <h3>Premimum</h3>
                <div class="price month"><span>$</span>90.<span>00</span></div>
                <div class="price year"><span>$</span>150.<span>00</span></div>
                <div class="list">
                <p> <i class="fas fa-check"></i> Daily quiz</p>
                    <p> <i class="fas fa-check"></i> Daily Updates </p>
                    <p> <i class="fas fa-check"></i> Mock test </p>
                    <p> <i class="fas fa-check"></i> team support </p>
                    <p> <i class="fas fa-check"></i> maintenance </p>
                </div>
                <a href="https://razorpay.com" class="btn">choose plan</a>
            </div>

        </div>

    </div>

    <script>
        let month = document.querySelector('.price-toggler .month');
        let year = document.querySelector('.price-toggler .year');
        let monthAmount = document.querySelectorAll('.box-container .box .month');
        let yearAmount = document.querySelectorAll('.box-container .box .year');

        year.onclick = () => {
            year.classList.add('active');
            month.classList.remove('active');

            monthAmount.forEach(mo => {
                mo.style.display = 'none'
            });
            yearAmount.forEach(yr => {
                yr.style.display = 'block'
            });
        };

        month.onclick = () => {
            year.classList.remove('active');
            month.classList.add('active');

            monthAmount.forEach(mo => {
                mo.style.display = 'block'
            });
            yearAmount.forEach(yr => {
                yr.style.display = 'none'
            });
        };
    </script>

</body>

</html>