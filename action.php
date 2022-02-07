<?php
    require_once 'vendor/autoload.php';
    use  App\classes\Home;
    use App\classes\Product;
    use App\classes\Detail;
    use App\classes\Pattern;
    use App\classes\FileUpload;

    if (isset($_GET['pages']))
    {
        if ($_GET['pages']== 'home')
        {
            include 'pages/home.php';
        }
        elseif ($_GET['pages'] == 'product')
        {
            $product = new Product();
            $products = $product->getAllProduct();
            include 'pages/product.php';
        }
        elseif ($_GET['pages']=='detail')
        {


            $detail = new Detail();
            $details = $detail->getDetail($_GET['id']);
            include 'pages/detail.php';
        }
        elseif ($_GET['pages'] == 'pattern')
        {
            include 'pages/pattern.php';
        }
        elseif ($_GET['pages'] == 'file')
        {
            include 'pages/fileupload.php';
        }

    } elseif (isset($_POST['pattern_btn']))
    {
        $pattern = new Pattern($_POST);
        $result = $pattern->index();
        include 'pages/pattern.php';
    }
 elseif (isset($_POST['img_btn']))
 {
     $fileupload = new FileUpload($_POST);
     $fileupload->index();
     include 'pages/fileupload.php';

 }