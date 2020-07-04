<div class="container">
    <h1>Create new Post</h1>
    <form class="" action="/Blog/public/blog/create" method="post">
        <div class="form-group">
            <label for="title"><strong>Title</strong></label>
            <input type="text" class="form-control" name="title" id="title" value="">
        </div>
        <div class="form-group">
            <label for="">Body: </label>
            <textarea class="form-control" name="body" id="body" cols="10" rows="10"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>