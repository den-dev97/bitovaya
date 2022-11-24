<div class="columns is-multiline is-centered">
    <div class="column is-4">
        <div class="card p-2">
            <div class="card-image">
                <figure class="image is-square">
                    <img src="assets/pic/<?= $product['img'] ?>" alt="Placeholder image">
                </figure>
            </div>
        </div>
    </div>
    <div class="column is-11 is-7-desktop">
        <div class="card" style="height:100%">
            <div class="pb-2 card-content is-flex is-flex-direction-column is-justify-content-space-between" style="height:100%">
                <div class="content has-text-centered">
                    <p class="title is-6 mb-2 has-text-primary">
                        <?= $product['title'] ?>
                    </p>
                </div>
                <div class="content has-text-centered is-flex-grow-1">
                    <p class="title is-6 mb-2" style="height:55px;">
                        <?= $product['description'] ?>
                    </p>
                </div>
                <div class="content has-text-centered">
                    <p class="title is-6 mb-2">
                    <p class="has-text-info">
                        <?= $product['price'] ?> &#8381;
                    </p>
                    </p>
                </div>
                <div class="content has-text-centered">
                    <button class="button is-danger is-outlined product " data-id="<?= $product['id'] ?>">
                        <span class="icon is-small">
                            <i class="fas fa-shopping-cart"></i>
                        </span>
                        <span>В корзину</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>