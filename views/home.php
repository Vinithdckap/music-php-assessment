<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        body{
            font-style: italic;
        }
        .btn-outline-success:hover{
            background-color: white;
            color: black;
            border-color: white;
        }
        .btn-outline-success{
            border-color:#d7d7d7;
            color: black;
        }
        p{
            padding-left: 53px;
            font-size: 21px;
            position: relative;
            top: 20px;
        }
        span{
            color: black;
            font-weight: bolder;
        }
        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, .55);
            padding-left: 74px;
            font-weight: 500;
            font-style: italic;
            font-size: 21px;
        }
        .navbar-brand{
            font-size: 24px;
            font-weight: bolder;
        }
        input::placeholder{
            font-style: italic;
        }
        button{
            font-style: italic;
        }
        button.subBtn {
            position: relative;
            right: 84px;
            top: 49px;
            height: 45px;
            width: 132px;
            border-radius: 5px;
            border: none;
            font-size: 24px;
            font-weight: 700px;
            background-color: lightblue;
        }
        button.logout {
            position: relative;
            left: 1200px;
            top: -16px;
            height: 45px;
            width: 132px;
            border-radius: 5px;
            border: none;
            font-size: 24px;
            font-weight: 700px;
            background-color: lightblue;
        }
        .bg-light {
            background-color: #b5b5b5!important;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Music application</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/views/addPlaylist.php">Add playlist</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Add artist</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="login">

    <?php if (isset($_SESSION['name'])) :?>
<!--        <p class="user">--><?php //echo $_SESSION['name']?><!--</p>-->
        <p>Welcome back <span><?php echo $_SESSION['name']?> </span></p>
        <form action="/logout" method="post" enctype="multipart/form-data">
            <button class="logout" type="submit">Log out</button>
        </form>
    <?php else : ?>
        <form style="float: right" action="/login" method="post" enctype="multipart/form-data">
            <button class="subBtn" type="submit">Log in</button>
        </form>
    <?php endif; ?>

</div>









</body>

</html>
