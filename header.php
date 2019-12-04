<!DOCTYPE html>
<html lang="en">
<!-- <title>W3.CSS Template</title> -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<?php wp_head();?>

<body <?php //body_class();?>>

    <!-- Navbar -->
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">FoolsTutorials</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="<?php echo site_url('/java-tutorials-page');?>">Java</a>
            <a class="p-2 text-dark" href="<?php echo site_url('/java-tutorials-page');?>">Python</a>
            <a class="p-2 text-dark" href="<?php echo site_url('/references-page/');?>">References</a>
        </nav>
        <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>
    <hr>