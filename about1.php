<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>smartlib</title>
    <style>
        img {
            width: 400px;
            height: 300px;
            margin-left: 50px;
            padding: 15px;
            box-shadow: 0px 10px 30px 0px gray;
        }
        .form h4 {
            text-align: center;
            font-weight: 800;
            font-style: italic;
        }

        .form label {
            font-weight: 500;
        }

        .form input:hover,
        textarea:hover,
        select:hover {
            background-color: lightblue;
        }

        .form button {
            background-color: green;
            margin-bottom:10px;
            color: white;
            font-weight: 400;
        }

        .form button:hover {
            background-color: lightpink;
            color: black;
        }

        .form {
            border: 2px solid grey;
            box-shadow: 0px 10px 30px 0px gray;
        }

        .form input {
            margin: 5px;
        }

        .form textarea {
            margin: 10px;
        }

        .form select {
            margin: 5px;
        }
    </style>
</head>

<body>
    <!-- main page of the smart lib -->
    <?php include 'partials/_dbconnect.php'; ?>
    <?php include 'partials/_header.php'; ?>

    <div class="container py-4">
        <div class=" p-3 mb-2 bg-light rounded-3">
            <div class="container-fluid py-5" style="background-image: url('aboutimg1.jpg'); background-position:right bottom;  background-repeat: no-repeat;">
                <h1 class="display-5 fw-bolder font-italic">LIBRARY SHARE</h1>
                <p class="col-lg-8 fs-4 fw-bold">This is online library management system which help you to monitor and control the transaction in the smart lib.
            It is used to find libraries, store detailed information of the users and libraries database.
            also libraries are sperating in categories like children,school students,university student etc.</p>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-6 my-2">
                <div class="h-100 p-4  py-5  text-white bg-light border rounded-3" style="overflow-x: hidden;">
                    <img src="aboutimg2.png" alt="">
                </div>
            </div>
            <div class="col-md-6 my-2">
                <div class="h-100 p-5 mb-3 bg-light border rounded-3">
                    <div class="form">
                        <h4>Library's Issue Form</h4>
                        <form action="handleabout1.php" method="post">
                            <div class="name">
                                <label for="name" style="margin-left: 24px;">Name:</label>
                                <input type="text" id="name" name="name" placeholder="enter your name" required>
                            </div>
                            <div class="email">
                                <label for="email" style="margin-left: 30px;">Email:</label>
                                <input type="email" id="email" name="email" placeholder="enter your email" required>
                            </div>
                            <div class="cat">
                                <label for="cat" style="margin-left:8px;">category:</label>
                                <select name="cat" id="cat" name="cat" required>
                                    <option>--select--</option>
                                    <option>Children</option>
                                    <option>School Students</option>
                                    <option>university Students</option>
                                    <option>Digital</option>
                                    <option>Business</option>
                                    <option>Classic</option>
                                </select>
                            </div>
                            <div class="issue" style="display:flex">
                                <label for="issue" style="margin-left: 35px;">Issue:</label>
                                <textarea name="issue" id="isssue" name="issue" cols="40" rows="3" required></textarea>
                            </div>
                            <div class="date" style="margin-left: 7px;">
                                <label for="date">Issue Date:</label>
                                <input type="date" id="date" name="date" required>
                            </div>
                            <div class="submit" style="margin-left: 9px;">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'partials/_footer.php'; ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</body>

</html>