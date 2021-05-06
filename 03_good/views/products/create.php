<h1>Create new Product</h1>
<?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error) : ?>
            <div><?php echo $error ?></div>
        <?php endforeach; ?>
    </div>
<?php endif ?>

<form action="" method="POST" enctype="multipart/form-data">

    <?php if ($product['image']) : ?>
        <img src="/<?php echo $product['image'] ?>" class="update-image" alt="">
    <?php endif; ?>

    <div class="mb-3">
        <label>Product Image</label>
        </br>
        <input type="file" name="image">
    </div>
    <div class="mb-3">
        <label>Product Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $product['title'] ?>">
    </div>
    <div class="mb-3">
        <label>Product Description</label>
        <textarea class="form-control" name="description"><?php echo $product['description'] ?></textarea>
    </div>
    <div class="mb-3">
        <label>Product Price</label>
        <input type="number" step=".01" name="price" class="form-control" value="<?php echo $product['price'] ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>