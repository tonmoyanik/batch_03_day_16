<?php include 'header.php' ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form action="action.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="img_btn" class="btn btn-outline-success" value="Submit" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<?php include 'footer.php' ?>