<section>
    <div class="container">
        <article class="blog-post">
            <h1> <?= $post['title'] ?> </h1>
            <div class="details">
                Posted on: <?=  date('M d y', strtotime($post['created_at'])) ?> by Neo
            </div><br>
            <?= $post['body'] ?>
        </article>
    </div>
</section>