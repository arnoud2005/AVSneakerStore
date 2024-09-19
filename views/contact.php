<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Arnoud verloop">
    <title>AV SneakerStore</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <link href="../css/contact.css" rel="stylesheet" />
    
</head>
<body>

    <header class="bg-dark position-sticky top-0">
        <div class="container">
        <?php 
            include('../views/layout/header.php');
        ?>
        </div>
    </header>

    <main class="container mt-5 mb-5">

        <h2><?= ucfirst('contact') ?></h2>

        <form action="contact-post.php" method="POST">

        <div class="wrapper">
    
            <div class="field">
                <label for="firstname"><?= ucfirst('voornaam') ?></label>
                <input type="text" name="firstname" />

                <label for="lastname"><?= ucfirst('achternaam') ?></label>
                <input type="text" name="lastname" />
            </div>

            <div class="field">
                <label for="email"><?= ucfirst('email') ?></label>
                <input type="email" name="email" />

                <label for="phonenumber"><?= ucfirst('phonenumber') ?></label>
                <input type="text" name="phonenumber" pattern="[0-9]{8-16}" />
            </div>
              
        </div>

        <div class="field message">
            <label for="message"><?= ucfirst('message') ?></label>
            <textarea type="text" name="message" cols="20" rows="10"></textarea>
        </div>
        
        <button name="submit"><?= ucfirst('verzend') ?></button>

        </form>
    </main>

    <footer class="bg-light">
        <?php
            include('../views/layout/footer.php');
        ?>
    </footer>

</body>
</html>