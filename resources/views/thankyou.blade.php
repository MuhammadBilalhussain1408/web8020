<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Website Questionnaire Form - 8020 Eatery</title>

    <style>

        /*basic reset*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            background-color: #DCD9D4;
            background-image: linear-gradient(to bottom, rgba(255,255,255,0.50) 0%, rgba(0,0,0,0.50) 100%), radial-gradient(at 50% 0%, rgba(255,255,255,0.10) 0%, rgba(0,0,0,0.50) 50%);
            background-blend-mode: soft-light,screen;
            background-repeat: no-repeat;
        }

        body {
            font-family: "Poppins", serif;
            background: transparent;
            height: 100vh;
            width: 100%;
            overflow-x: hidden;
            position: absolute;
        }

        .abr-para{
            text-align: center;
            font-size: 25px;
            padding-top: 14rem;
            padding-left: 5rem;
            padding-right: 5rem;
        }
        .btn {
            height: 50px;
            line-height: 43px;
            text-align: center;
            position: relative;
            left: 50%;
            top: 45px;
            transform: translate(-50%, -50%);
            -webkit-transition: all .3s ease-out;
            -o-transition: all .3s ease-out;
            transition: all .3s ease-out;
        }

        .text {
            padding: 0 50px;
            visibility: hidden;
        }

        .flip-front,
        .flip-back {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            -webkit-transform-style: flat;
            transform-style: flat;
            -webkit-transition: -webkit-transform .3s ease-out;
            -o-transition: -o-transform .3s ease-out;
            transition: transform .3s ease-out;
        }

        .flip-front {
            color: white;
            border: 2px solid #e1612e;
            background-color: #e1612e;
            -webkit-transform: rotateX(0deg) translateZ(25px);
            -ms-transform: rotateX(0deg) translateZ(25px);
            -o-transform: rotateX(0deg) translateZ(25px);
            transform: rotateX(0deg) translateZ(25px);
            font-weight: 600;
            font-size: 18px;
        }

        .flip-back {
            color: #fff;
            background-color: #313131;
            border: 2px solid #313131;
            -webkit-transform: rotateX(90deg) translateZ(25px);
            -ms-transform: rotateX(90deg) translateZ(25px);
            -o-transform: rotateX(90deg) translateZ(25px);
            transform: rotateX(90deg) translateZ(25px);
            font-weight: 600;
            font-size: 18px;
        }

        .btn:hover .flip-front {
            -webkit-transform: rotateX(-90deg) translateZ(25px);
            -ms-transform: rotateX(-90deg) translateZ(25px);
            -o-transform: rotateX(-90deg) translateZ(25px);
            transform: rotateX(-90deg) translateZ(25px);
        }

        .btn:hover .flip-back {
            -webkit-transform: rotateX(0deg) translateZ(25px);
            -ms-transform: rotateX(0deg) translateZ(25px);
            -o-transform: rotateX(0deg) translateZ(25px);
            transform: rotateX(0deg) translateZ(25px);
        }



        @media only screen and (min-width: 360px) and (max-width: 740px),
        only screen and (min-width: 412px) and (max-width: 915px),
        only screen and (min-width: 767px) and (max-width: 991px) {

            .abr-para {
                text-align: center;
                font-size: 22px;
                padding-top: 14rem;
                padding-left: 1rem;
                padding-right: 1rem;
            }

        }



    </style>

</head>
<body>



<div class="row">
    <div class="col-md-12">
        <p class="abr-para">
            <span style="color: #e1612e;font-weight: bold;">"Hi {{$full_name}}",</span><br>
            Thank you for taking the time to fill out our website questionnaire. We’ve received your responses and will review them to better understand your project needs.
            Our team will get in touch with you shortly to discuss the next steps.
        </p>
        <div>
            <a href="/" class="btn">
                <span class="text">Text</span>
                <span class="flip-front">Go Back</span>
                <span class="flip-back">Go Back</span>
            </a>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>


<script>

</script>


</body>
</html>
