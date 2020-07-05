<section>
    <?php 
        $session = \Config\Services::session(); 

        if (isset($session->success)):
    ?>
        <div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
            <?= $session->success ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
    <div class="jumbotron">
        <h1 class="display-4">Scientia Blog</h1>
        <p class="lead">Codeigniter is awesome framework for creating fast web apps</p>
        <hr class="my-4">
        <p>Hey, checkout my first app build with codeigniter 4</p>
        <a class="btn btn-primary btn-lg" href="/Blog/public/blog/create" role="button">Create a new blog</a>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <?php   if ($news):
                    foreach ($news as $newsItem): ?>
                        <h3><a href="/Blog/public/blog/<?= $newsItem['slug'] ?>"> <?= $newsItem['title'] ?> </a></h3>
        <?php       endforeach;
                else: ?>
                    <p class="text-center">No posts have been found</p>
        <?php   endif; ?>
    </div>
</section>