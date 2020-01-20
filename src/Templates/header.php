<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Vape Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="main.php">Inicio</a>
            </li>
        </ul>
        <div class="form-inline mt-2 mt-md-0">
            <?= $cartIcon ?>
            <?= $clientName ?>
            <?= $logButton ?>
        </div>
    </div>
</nav>