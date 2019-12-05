<?php
/**
 * Template Name: Reference  Page
 */

get_header();

?>
<!-- for datatables only  -->

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js">
</script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<h2>References</h2>
<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page-references' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();