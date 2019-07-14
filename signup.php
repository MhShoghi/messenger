<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup User</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="signup-container">

    <div class="account-left">

        <div class="account-text">
            <h1>Lets Chat</h1>
            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores cum deleniti ducimus eligendi eos eum ex exercitationem expedita facere inventore itaque laudantium nemo nihil non officiis provident quas, temporibus veniam veritatis vero vitae voluptatum. Assumenda dolorem, doloribus eos eveniet in, libero numquam officia perferendis, placeat sed sint tempora velit.</span></p>
        </div>

    </div>
    <div class="account-right">
        <div class="form-area">
            <form action="" method="post">

                <div class="group">
                    <h1 class="form-heading">
                        CREATE NEW ACCOUNT
                    </h1>
                </div><!-- close group -->


                <div class="group">
                    <input type="text" name="full_name" class="control" placeholder="Enter Full name...">
                </div><!-- close group -->
                <div class="group">
                    <input type="email" name="email" class="control" placeholder="Enter Email...">
                </div><!-- close group -->
                <div class="group">
                    <input type="password" name="password" class="control" placeholder="Enter Password...">
                </div><!-- close group -->

                <div class="group">
                    <label for="file" id="file-label">
                        <i class="upload-icon fas fa-cloud-upload-alt"></i>
                        Choose image</label>
                    <input type="file" name="img" id="file" class="file">
                </div>
                <div class="group">
                    <input type="submit" name="submit" class="btn btn-account" value="Create Account">
                </div>

                <div class="group">
                    <a href="" class="link">
                        Already have an account?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://kit.fontawesome.com/d4eed73076.js"></script>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="assets/js/file_label.js"></script>
</html>