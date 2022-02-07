<?php include ("header.php")?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($details as $element) {?>
                    <div class="col-md-6">
                        <img src="assets/img/<?php echo $element['image']  ?>" alt="" class="card-img-top" />
                    </div>
                            <div class="col-md-6">
<!--                        <div class="card">-->
<!--                            <img src="assets/img/--><?php //echo $element['image']  ?><!--" alt="" class="card-img-top" />-->
<!--                            <div class="card-body">-->
                                <h2 class="card-title"><?php echo $element['title'] ?></h2>
                                <h3> <?php echo  $element['price'] ?></h3>
                                <p><?php echo  $element['brand'] ?></p>
                                <p><?php echo  $element['category'] ?></p>
                                <p><?php echo  $element['description'] ?></p>
<!--                            </div>-->
<!--                        </div>-->
                    </div>
                <?php }?>
            </div>
        </div>

    </section>

<?php include ("footer.php")?>