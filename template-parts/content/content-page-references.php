<!-- datatables -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="ml-3">References</h2>
            <ul class="list-group list-group-flush">
                <?php
                        //external_db_fetch
                        $mydb = new wpdb('root', '', 'foolsrwn_java', 'localhost');
                        $results = $mydb->get_results("SELECT references_name FROM tut_ref_meta_info");
                        foreach ($results as $rs) {
                        if($rs->references_name != ''){
                            echo '<li class="list-group-item"><a href="'.$rs->references_name.'">'.$rs->references_name.' References </a></li>';
                        }
                        }
                ?>
            </ul>
        </div>
        <div class="col-7 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="pt-2 pb-2 bg-danger mx-0">
                <h2 class="text-center text-white-color"><?php the_title();?></h2>
            </div>
            <div class="col-xs-2 mt-2">
        
                <table id="example" class="display w3-large" style="width:100%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Function Name</th>
                            <th>Purpose</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th></th>
                            <th>Function Name</th>
                            <th>Purpose</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="col">
            <h2 class="float-right">Advertisement</h2>
            What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
        </div>
    </div>
</div>
