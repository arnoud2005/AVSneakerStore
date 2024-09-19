<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Arnoud verloop">
    <title>HOME | AV SneakerStore</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <link href="../css/home.css" rel="stylesheet" />
    <link href="../css/deafult.css" rel="stylesheet" />
    
</head>
<body>

    <header class="bg-dark position-sticky top-0">
        <div class="container">
        <?php 
            include('layout/header.php');
        ?>
        </div>
    </header>

    <main class="mb-5">

        <div class="container-fluid banner-wrapper">

            <div class="banner">
                <img src="../images/banner.webp" alt="" />
            </div>
        </div>

        <div class="container brands-wrapper mt-5">
            <div class="brand">
                <img src="../images/adidas.png" title="Adidas" alt="Adidas" />
                <p>Adidas</p>
            </div>
            <div class="brand">
                <img src="../images/nike.png" title="nike" alt="nike" />
                <p>Nike</p>
            </div>
            <div class="brand">
                <img src="../images/newbalance.png" title="New Balance" alt="New Balance" />
                <p>New Balance</p>
            </div>
            <div class="brand">
                <img src="../images/louis-vouiton.png" title="louis vuitton" alt="louis vuitton" />
                <p>louis vuitton</p>
            </div>
            <div class="brand">
                <img src="../images/asics.png" title="asics" alt="asics" />
                <p>asics</p>
            </div>
            <div class="brand">
                <img src="../images/phillip-plein.png" title="Phillip Plein" alt="Phillip Plein" />
                <p>Phillip Plein</p>
            </div>
        </div>

        <div class="container mt-5">

            <h2 class="mb-5"><?= ucfirst('trends') ?></h2>
    	    <div class="trends-wrapper">
                <div class="trend">
                    <img src="../images/adidas.png" title="Adidas" alt="Adidas" />
                    <p>trend 1</p>
                </div>
                <div class="trend">
                    <img src="../images/nike.png" title="nike" alt="nike" />
                    <p>trend 2</p>
                </div>
                <div class="trend">
                    <img src="../images/newbalance.png" title="New Balance" alt="New Balance" />
                    <p>trend 3</p>
                </div>
                <div class="trend">
                    <img src="../images/louis-vouiton.png" title="louis vuitton" alt="louis vuitton" />
                    <p>trend 4</p>
                </div>
                <div class="trend">
                    <img src="../images/phillip-plein.png" title="Phillip Plein" alt="Phillip Plein" />
                    <p>trend 5</p>
                </div>
            </div>
        
        </div>

        <div class="conatainer-fluid mt-5 mb-3 bg-dark">

            <div class="categories-wrapper">
                <div class="category">
                    <p>Heren</p>
                </div>
                <div class="category">
                    <p>Dames</p>
                </div>
                <div class="category">
                    <p>Kinderen</p>
                </div>
            </div>

        </div>

        <div class="container mt-5">

            <h2 class="mb-5"><?= ucfirst('nieuw') ?></h2>
    	    <div class="new-wrapper">
            <div class="new">
                    <img src="../images/adidas.png" title="Adidas" alt="Adidas" />
                    <p>nieuw 1</p>
                </div>
                <div class="new">
                    <img src="../images/nike.png" title="nike" alt="nike" />
                    <p>nieuw 2</p>
                </div>
                <div class="new">
                    <img src="../images/newbalance.png" title="New Balance" alt="New Balance" />
                    <p>nieuw 3</p>
                </div>
                <div class="new">
                    <img src="../images/louis-vouiton.png" title="louis vuitton" alt="louis vuitton" />
                    <p>nieuw 4</p>
                </div>
                <div class="new">
                    <img src="../images/phillip-plein.png" title="Phillip Plein" alt="Phillip Plein" />
                    <p>nieuw 5</p>
                </div>
            </div>
        
        </div>

    </main>

    <footer class="bg-light">
        <?php
            include('../views/layout/footer.php');
        ?>
    </footer>

</body>
</html>