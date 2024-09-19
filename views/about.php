<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Arnoud verloop">
    <title>AV SneakerStore</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <link href="assets/css/about.css" rel="stylesheet" />
    
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
        
        <h2><?= ucfirst('over ons') ?></h2>
        <p>Bij AVSneakerstore bieden we je de <i>meest exculisieve</i> en <i>zelzame sneakers</i> die je nergens anders zult vinden.</p>
        <p>Ontdek de ultieme limited editions en maak je sneaker collectie echt uniek!</p>

        <img src="../images/avsneakerstore.png" alt="" title="AVSneakerstore" />
    </main>

    <footer class="bg-light">
        <?php
            include('../views/layout/footer.php');
        ?>
    </footer>

</body>
</html>