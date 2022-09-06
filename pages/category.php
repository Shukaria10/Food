<?php include 'header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach( $products_info as $product) {
            ?>
            <div class="col-md-3">
                <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top" style="height: 250px;">
                <div class="card-body">
                    <h5><?php echo $product['name']; ?></h5>
                    <p><?php  echo $product['price']; ?></p>
                    <hr/>
                    <a href="action.php?page=detail&&id=<?php echo $product['id'] ; ?>" class="btn btn-success">Detail</a>
                </div>
            </div>
    <?php }  ?>
        </div>
    </div>
</section>
<?php include 'footer.php';?>