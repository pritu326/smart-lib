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
        /* librarian img section */
        img {
            width: 400px;
            height: 300px;
            margin-left: 50px;
            padding: 15px;
            box-shadow: 0px 10px 30px 0px gray;
        }

        /* Add new library section */
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
            color: white;
            font-weight: 400;
        }

        .form button:hover {
            background-color: lightpink;
            color: black;
        }

        .form {
            padding-bottom: 10px;
            display: block;
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
        <div class=" p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5" style="background-image: url('library1.webp'); background-position:bottom center;  background-repeat: no-repeat;">
                <h1 class="display-5 fw-bold font-italic">Smart Library</h1>
                <p class="col-md-8 fs-4">Online books for you to study and enjoy.</p>
            </div>
        </div>

        <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-4  py-5  text-white bg-light border rounded-3" style="overflow-x: hidden;">
                    <img src="librarianimg2.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                    <div class="form">
                        <h4>Register Your Library</h4>
                        <form action="partials1/handlelibrary.php" method="post">
                            <div class="name">
                                <label for="libname" style="margin-left:6px;">Library Name:</label>
                                <input type="text" id="libname" name="libname" placeholder="enter your Library name" required>
                            </div>
                            <div class="cat">
                                <label for="libcat" style="margin-left:40px;">category:</label>
                                <select name="libcat" id="libcat" name="libcat" required>
                                    <option>--select--</option>
                                    <option>Children</option>
                                    <option>School Students</option>
                                    <option>university Students</option>
                                    <option>Digital</option>
                                    <option>Business</option>
                                    <option>Classic</option>
                                </select>
                            </div>
                            <div class="desc" style="display:flex">
                                <label for="desc" style="margin-left:19px;">Description:</label>
                                <textarea name="desc" id="desc" name="desc" cols="40" rows="3" placeholder="describe your library" required></textarea>
                            </div>
                            <div class="liblink">
                                <label for="liblink" style="margin-left:17px;">Library Link:</label>
                                <input type="link" id="liblink" name="liblink" placeholder="enter your website link" required>
                            </div>
                            <div class="certi">
                                <label for="certi" style="margin-left:17px;">SSL certificate:</label>
                                <input type="file" id="certi" name="certi" required>
                            </div>
                            <div class="date">
                                <label for="date" style="margin-left:70px;">Date:</label>
                                <input type="date" id="date" name="date" required>
                            </div>
                            <div class="submit" style="margin-left:18px;">
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