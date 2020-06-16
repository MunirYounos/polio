<?php get_header(); ?>
    <div class="container-fluid"> 
            <div class="hero" style="background-image:url(<?php echo get_theme_file_uri("assets/images/poHero.jpg")?>);">
            <h1>
                <?php include_once "inc/svg/name.php"?> Ambitious<strong class="dots">:</strong><a href="" class="typewrite" data-period="2000" data-type='[ "Frontend Developer", "UI & UX Designer" ]'>
                    <span class="wrap"></span>
                </a>
                </h1>
            </div>
<?php 

$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
 
foreach( $categories as $category ) {
    $category_link = sprintf( 
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );
     
    echo '<p>' . sprintf( esc_html__( 'Category: %s', 'textdomain' ), $category_link ) . '</p> ';
    echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
    echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
}



?>
            
    </div>
<?php get_footer(); ?>