$query = new WP_Query( array(
'post_type' => 'gd_place',
'tax_query' => array(
array (
'taxonomy' => 'gd_place_tags',
'field' => 'term_id', // term_id, slug or name or I can say tag id
'terms' => 187,
)
),
) );
while ( $query ->have_posts() ) :
$query ->the_post();
the_title();
endwhile;
