<div class="container-input p-3 rounded row mx-0">
    <div class="col-6 d-flex flex-column">
        <div class="mb-2">
            <label class="form-label mb-0" for="password-form">Lunghezza password:</label>
            <div class="d-flex">
                <p class="me-1 mb-0">La lunghezza della password massima è:</p>
                <span> <?php echo (isset($_GET['radioValue']) && $_GET['radioValue'] == 'si') ? $qtyLetters : $lunghezzaConFiltri ?> </span>
            </div>
        </div>
        <label class="form-label mb-3" for="password-form">Consenti ripetizioni di uno o più caratteri:</label>
        <label class="form-label mt-3" for="password-form">Consentire solo:</label>
        <div class="col-6 mt-auto">
            <button type="submit" class="btn btn-primary" form="password-form">Invia</button>
            <button type="submit" class="btn btn-secondary" form="password-form">Annulla</button>
        </div>
    </div>
    <form id="password-form" action="password.php" method="GET" class="col-6">
        <div class="row justify-content-between">
            <div class="col-6 mb-3">
                <input type="number" placeholder="Quanti caratteri vuoi" class="form-control" name="lunghezzaCaratteri" min="6" max="100" required>
            </div>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radioValue" value="si">
            <label class="form-check-label" for="flexRadioDefault1">Si</label>
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="radioValue" value="no">
            <label class="form-check-label" for="flexRadioDefault2">No</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name="letters" checked>
            <label class="form-check-label" for="letters">Lettere</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name="numbers" checked>
            <label class="form-check-label" for="numbers">Numeri</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name="symbols" checked>
            <label class="form-check-label" for="symbols">Simboli</label>
        </div>
    </form>
</div>