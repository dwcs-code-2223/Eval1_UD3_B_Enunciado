<div class="row"> 
    <?php
    if (count($dataToView["data"]) > 0) {
        foreach ($dataToView["data"] as $prod) {
            ?>
            <div class="col-md-3 card border border-secondary rounded m-2">
               
                <img src="" class="card-img-top" title="" alt="" height="300">
                <div class="card-body ">

                    <h5 class="card-title">Nombre producto</h5>

                    <div class="card-text">€</div>
                    <hr class="mt-1"/>
                </div>
            </div>
        <?php
    }
} else {
    ?>
        <div class="alert alert-info">
            Actualmente no existen productos.
        </div>
    <?php
}
?>
</div>