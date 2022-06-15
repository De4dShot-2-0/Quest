<?php require('partials/header.php'); ?>
    <div class="container-fluid pb-2">
        <h1 class="text-center mt-5">All Conferences</h1>
            <button class="px-2 py-1 float-right mr-5 btn btn-primary"><a href="/create" class="text-white text-decoration-none">Create Conference</a></button>
    </div>
    
    <div class="ml-5 mt-5">
        <?php foreach($conferences as $conf ) : ?>
            <div class="d-inline-block border border-dark p-5 mr-4 mb-4">
                <h4><a href="/details?show=<?= $conf->id; ?>" class="text-dark"><?= $conf->title; ?></a></h4>
                <h6 class="pt-4 pb-3"><?= date("d M Y H:i", strtotime($conf->date)); ?></h6>
                <form method="POST" action="/delete?id=<?= $conf->id; ?>">
                    <button class="btn btn-danger px-3" type="submit" class="mt-2">Delete</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

<?php require('partials/footer.php'); ?>