<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h2 class="ml-3">Tutorials</h2>
            <ul class="list-group list-group-flush">
                <?php
                        //external_db_fetch
                        $mydb = new wpdb('root', '', 'foolsrwn_java', 'localhost');
                        $results = $mydb->get_results("SELECT tutorials FROM tut_ref_meta_info");
                        foreach ($results as $rs) {
                            if($rs->tutorials != ''){
                                echo '<li class="list-group-item">'.$rs->tutorials.' Tutorials</li>';
                            }
                        }
                ?>
            </ul>
        </div>
        <div class="col-6 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="pt-2 pb-2 bg-danger mb-2">
                <h2 class=text-center>Java Functions and Methods</h2>
            </div>
            1914 translation by H. Rackham
            "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and
            I will give you a complete account of the system, and expound the actual teachings of the great explorer of
            the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
            because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter
            consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain
            pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can
            procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical
            exercise, except to obtain some advantage from it? But who has any right to find fault with a man who
            chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no
            resultant pleasure?"
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