<?php include 'header.php' ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header"></div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4">Length</label>
                                    <div class="col-md-8">
                                        <input type="number" name="input_length" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="pattern_btn" class="btn btn-outline-success" />
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