<div class="mt-4">
    <a href="<?= url("/share/create") ?>" class="btn btn-primary mb-4">Add New Share</a>
    
    <?php foreach ($viewModel as $item): ?>
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title"><?= $item["title"] ?></h4>
                <small><?= $item["created_at"] ?></small>
                <p class="card-text"><?= $item["body"] ?></p>
                <a href="<?= $item["link"] ?>" class="btn btn-info" target="_blank">Go To Website</a>
            </div>
        </div>
    <?php endforeach ?>
</div>