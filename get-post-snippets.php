<?php
// boilerplate index
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лаптопи</title>
    <!-- Bootstrap 5.3 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="#">Лаптопи</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Начало</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Продукти</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Контакти</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container py-4" style="min-height:80vh;">

    </main>
    <footer class="bg-dark text-center py-5 mt-auto">
        <div class="container">
            <span class="text-light">© <?php echo date("Y"); ?> All rights reserved</span>
        </div>
    </footer>
</body>
</html>

<?php
// homepage
?>
<div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Най-добрите оферти за лаптопи!</h1>
        <p class="lead">Изберете от широката ни продуктова гама лаптопи. Богато разнообразие от ценови класове и хардуерни конфигурации. Намерете своя нов лаптоп днес.</p>
    </div>
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <img class="rounded-lg-3" src="https://cdn.thewirecutter.com/wp-content/media/2024/07/laptopstopicpage-2048px-3685-2x1-1.jpg" alt="" width="720">
    </div>
</div>

<?php
    // products page
    $products = [
        [
            'image' => 'https://images.unsplash.com/photo-1593642632823-8f785ba67e45?auto=format&fit=crop&w=600&q=80',
            'title' => 'Dell XPS 13',
            'price' => '$999.99'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?auto=format&fit=crop&w=600&q=80',
            'title' => 'Apple MacBook Air',
            'price' => '$1199.99'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1544731612-de7f96afe55f?auto=format&fit=crop&w=600&q=80',
            'title' => 'HP Spectre x360',
            'price' => '$1099.99'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?auto=format&fit=crop&w=600&q=80',
            'title' => 'Lenovo ThinkPad X1 Carbon',
            'price' => '$1299.99'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=600&q=80',
            'title' => 'Asus ZenBook 13',
            'price' => '$899.99'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=600&q=80',
            'title' => 'Microsoft Surface Laptop 4',
            'price' => '$999.99'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?auto=format&fit=crop&w=600&q=80',
            'title' => 'Acer Swift 3',
            'price' => '$699.99'
        ],
        [
            'image' => 'https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=600&q=80',
            'title' => 'Razer Blade 15',
            'price' => '$1599.99'
        ]
    ];
?>

<div class="row">
    <form class="mb-4">
        <div class="input-group">
            <input type="hidden" name="page" value="products">
            <input type="text" class="form-control" placeholder="Търси продукт">
            <button class="btn btn-primary" type="submit">Търсене</button>
        </div>
    </form>
</div>
<div class="d-flex flex-wrap justify-content-between">
    <div class="card mb-4" style="width: 18rem;">
        <img src="https://ardes.bg/uploads/original/dell-xps-13-plus-9320-393691.jpg" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <p class="card-text">$10.00</p>
        </div>
    </div>
    <div class="card mb-4" style="width: 18rem;">
        <img src="https://ardes.bg/uploads/original/dell-xps-13-plus-9320-393691.jpg" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Product 2</h5>
            <p class="card-text">$20.00</p>
        </div>
    </div>
    <div class="card mb-4" style="width: 18rem;">
        <img src="https://ardes.bg/uploads/original/dell-xps-13-plus-9320-393691.jpg" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Product 3</h5>
            <p class="card-text">$30.00</p>
        </div>
    </div>
    <div class="card mb-4" style="width: 18rem;">
        <img src="https://ardes.bg/uploads/original/dell-xps-13-plus-9320-393691.jpg" class="card-img-top" alt="Product Image">
        <div class="card-body">
            <h5 class="card-title">Product 4</h5>
            <p class="card-text">$40.00</p>
        </div>
    </div>
</div>

<?php
// contacts page
?>
<h1>Свържете се с нас</h1>
<form>
    <div class="mb-3">
        <label for="name" class="form-label">Имена</label>
        <input type="text" class="form-control" id="name" placeholder="Your Name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Имейл</label>
        <input type="email" class="form-control" id="email" placeholder="Your Email">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Съобщение</label>
        <textarea class="form-control" id="message" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Изпрати</button>
</form>

<?php
// 404 not found page
http_response_code(404);
?>

<div class="d-flex justify-content-center align-items-center pt-5">
    <div class="text-center">
        <h1 class="display-1">Грешка 404</h1>
        <p class="lead">Страницата не е намерена ;(</p>
    </div>
</div>
