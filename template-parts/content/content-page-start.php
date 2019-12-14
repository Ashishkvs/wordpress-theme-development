
<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:16px 16px">
  <h1 class="w3-margin w3-jumbo">Fool's Tutorials</h1>
  <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button>
</header>
<div class="jumbotron">
<h2>Make db conection using global $wpdp in order to fetch data from wp based table</h2>
    <?php 

        global $wpdb;
        // var_dump($wpdb); //extract all post table data by default
        $tableName = $wpdb->prefix . "profile";
        $results = $wpdb->get_results("
            SELECT * FROM " .$tableName 
          );

        foreach ($results as $rs) {
         echo "$rs->name  </br>";
        }

    
    ?>
</div>
<div class="jumbotron">
<h2>Make EXTERNAL db conection using</h2>
    <?php 
        //external_db_fetch
        $mydb = new wpdb('root', '','foolsrwn_java', 'localhost');

            $results = $mydb->get_results("SELECT * FROM javafunctions");

            foreach ($results as $rs) {
                echo "$rs->funcname  </br>";
            }
   
    ?>
