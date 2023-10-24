<main class="pt-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-3 py-4">
                    <!-- card -->
                    <div class="card">
                        <!-- card header -->
                        <div class="card-header bg-light">
                            <!-- product image -->
                            <img src="<?= $product->image ?>" alt="" class="img-fluid rounded py-2">
                            <!-- product name and category -->
                            <div class="py-3">
                                <a href="#" class="text-black link-underline-info">
                                    <h4>
                                        <?= $product->getName() ?>
                                    </h4>
                                </a>
                                <a href="#">
                                    <p class="text-end text-black m-0 text-decoration-underline">
                                        <?= $product->category ?>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body bg-dark d-flex justify-content-between">
                            <!-- price and details -->
                            <div id="infos_left" class="pb-5">
                                <h6 class="text-success">
                                    <?= $product->price ?>€
                                </h6>
                                <h6 class="text-light">
                                    <?= $product->getInfos() ?>
                                </h6>
                            </div>
                            <!-- animal category -->
                            <div id="infos_right" class="text-info align-self-end pb-1">
                                <?= $product->animal->getIcon() ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</main>