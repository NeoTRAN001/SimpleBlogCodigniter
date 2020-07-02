<section>
    <div class="jumbotron">
        <h1 class="display-4">Scientia Blog</h1>
        <p class="lead">Codeigniter is awesome framework for creating fast web apps</p>
        <hr class="my-4">
        <p>Hey, checkout my first app build with codeigniter 4</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <?php   if ($news):
                    foreach ($news as $newsItem): ?>
                        <h3><?= $newsItem['title'] ?></h3>
        <?php       endforeach;
                else: ?>
                    <p class="text-center">No posts have been found</p>
        <?php   endif; ?>
    </div>
</section>