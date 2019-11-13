<!-- <h2>Contetn-page-start</h2> -->

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:16px 16px">
  <h1 class="w3-margin w3-jumbo">Fool's Tutorials</h1>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Python Functions</h1>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Function Name</th>
                <th>Syntax</th>
                <th>Example</th>
                <th>More Examples</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>abs()</td>
                <td>abs(n) <br>n = integer OR float OR complex number</td>
                <td>abs(-2.36) <br>Result: 2.36 </td>
                <td> <a href="abs_example.html" target="_blank">abs() Examples</a> </td>
            </tr>
            <tr>
                <td>all()</td>
                <td>all(iterable) <br>Where iterable is an iterable object (list, tuple, dictionary)</td>
                <td>mylist = [1, 2.5, 'A'] x = all(mylist) print(x) <br> >>True</td>
                <td><a href="all_example.html" target="_blank">all() Examples</a></td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
            </tr>
    </tbody>
            <tfoot>
            <tr>
                <th>Function Name</th>
                <th>Syntax</th>
                <th>Example</th>
                <th>More Examples</th>
            </tr>
        </tfoot>
</table>

    </div>

    <div class="w3-third w3-center">
    <!--  <i class="fa fa-anchor w3-padding-64 w3-text-red"></i> -->
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Lorem Ipsum</h1>
      <h5 class="w3-padding-32">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint
        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
        laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div>
 <!-- custom post  -->
<div class="w3-container-fluid  w3-center  w3-padding-64">
  <h2>Wordpress Ui based content can be Posted here</h2>
  <div class="">
    <?php
    the_content();

    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
        'after'  => '</div>',
      )
    );
    ?>
  </div><!-- .entry-content -->
</div>
<h2>Php Connection  mysql query based data</h2>
<?php include('connection.php') ?>
