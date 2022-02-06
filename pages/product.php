<?php include 'header.php';?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>

                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/img/<?php echo isset($product['image'])? $product['image']: ' '; ?>" alt="" class="card-img-top"/>
                            <div class="card-body">
                                <h3 class="card-title"><?php echo isset($product['name'])? $product['name']: ' '; ?></h3>
                                <h4>ID:<?php echo isset($product['id'])? $product['id']: ' '; ?></h4>
                                <h4>Price:<?php echo isset($product['price'])? $product['price']: ' '; ?></h4>
                                <h4>Brand:<?php echo isset($product['brand'])? $product['brand']: ' '; ?></h4>
                                <h4>Category:<?php echo isset($product['category'])? $product['category']: ' '; ?></h4>
                                <h4>Description:<?php echo isset($product['description'])? $product['description']: ' '; ?></h4>


                                <a href="" class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>

<?php include 'footer.php';?>