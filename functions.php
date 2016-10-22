<?php
/**
 * EGchat functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package EGChat
 */

if ( ! function_exists( 'egchat_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function egchat_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on EGchat, use a find and replace
	 * to change 'egchat' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'egchat', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'egchat' ),
		'secondly' => esc_html__( 'Secondly', 'egchat' ),
		'thirdly' => esc_html__( 'Thirdly', 'egchat' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'egchat_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'egchat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function egchat_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'egchat_content_width', 640 );
}
add_action( 'after_setup_theme', 'egchat_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function egchat_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'egchat' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'egchat' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'egchat_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function egchat_scripts() {
	wp_enqueue_style( 'egchat-style', get_stylesheet_uri() );

	wp_enqueue_script( 'egchat-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'egchat-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'egchat_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * management screen url changing
 */
define( 'LOGIN_CHANGE_PAGE', 'wp-management.php' );
add_action( 'login_init', 'login_change_init' );
add_filter( 'site_url', 'login_change_site_url', 10, 4 );
add_filter( 'wp_redirect', 'login_change_wp_redirect', 10, 2 );

if ( ! function_exists( 'login_change_init' ) ) {
	function login_change_init() {
		if ( !defined( 'LOGIN_CHANGE' ) || sha1( 'egchat-key' ) != LOGIN_CHANGE ) {
			status_header( 403 );
			exit;
		}
	}
}

if ( ! function_exists( 'login_change_site_url' ) ) {
	function login_change_site_url( $url, $path, $orig_scheme, $blog_id ) {
		if ( ( $path == 'wp-login.php' || preg_match( '/wp-login\.php\?action=\w+/', $path ) ) &&
			( is_user_logged_in() || strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false ) )
			$url = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $url );
		return $url;
	}
}

if ( ! function_exists( 'login_change_wp_redirect' ) ) {
	function login_change_wp_redirect( $location, $status ) {
		if ( strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false )
			$location = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $location );
		return $location;
	}
}

/**
 * Customizer post
 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'news',
    array(
      'labels' => array(
      'name' => __( '新着情報' ),
      'singular_name' => __( '新着情報' )
      ),
      'public' => true,
      'menu_position' =>5,
      'supports' => array('title','editor','thumbnail',
      'custom-fields','excerpt','author','trackbacks',
      'comments','revisions','page-attributes')
    )
  );
  register_taxonomy(
    'news-cat',
    'news',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => '新着カテゴリー',
      'singular_label' => '新着カテゴリー',
      'public' => true,
      'show_ui' => true
    )
  );
}
/**
 * @param  String  $value  valueの初期値
 * @param  String  $name  name属性値
 */
function my_mwform_value( $value, $name ) {
    // $_GET['email']があったら、name属性がemailの項目の初期値に設定
    if ( $name === 'email' && !empty( $_GET['email'] ) && !is_array( $_GET['email'] ) ) {
        return $_GET['email'];
    }
    return $value;
}
// 管理画面で作成したフォームの場合、フック名の後のフォーム識別子は「mw-wp-form-xxx」
add_filter( 'mwform_value_mw-wp-form-86', 'my_mwform_value', 10, 2 );



/*
 * クラス名: My_Widget_Recent_Posts
 * WP_Widget クラスを継承
*/
class My_Widget_Recent_Posts extends WP_Widget {
    /* ウィジェット管理画面上に表示させるウィジェット名 */
    function My_Widget_Recent_Posts() {
        parent::WP_Widget( false, $name = '最近の投稿 (アイキャッチ画像)' );
    }
    function widget( $args, $instance ) {
        $cache = wp_cache_get( 'widget_recent_posts', 'widget' );
        if ( !is_array( $cache ) ) {
            $cache = array();
        }
        if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }
        if ( isset( $cache[ $args['widget_id'] ] ) ) {
            echo $cache[ $args['widget_id'] ];
            return;
        }
        ob_start();
        extract( $args );
        $title = apply_filters( 'widget_title', empty( $instance['title'] ) ? __( 'Recent Posts' ) : $instance['title'], $instance, $this->id_base );
        if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) ) {
            $number = 10;
        }
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
        $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
        if ( $r->have_posts() ) {
?>
            <?php echo $before_widget; ?>
            <?php if ( $title ) echo $before_title . $title . $after_title; ?>
            <ul>
            <?php while ( $r->have_posts() ) : $r->the_post(); ?>
                <li style="margin-top: 3px;">
                    <a href="<?php echo get_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_post_thumbnail( null, array( 50, 50 ) ); ?></a>
                </li>
                <li>
                    <a href="<?php the_permalink() ?>" title="<?php echo esc_attr( get_the_title() ? get_the_title() : get_the_ID() ); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a>
                <?php if ( $show_date ) : ?>
                    <span class="post-date"><?php echo get_the_date(); ?></span>
                <?php endif; ?>
                </li>
                <li style="clear: both;"></li>
            <?php endwhile; ?>
            </ul>
            <?php echo $after_widget; ?>
<?php
            wp_reset_postdata();
            }
            $cache[ $args['widget_id'] ] = ob_get_flush();
            wp_cache_set( 'widget_recent_posts', $cache, 'widget' );
        }
        function update( $new_instance, $old_instance ) {
            $instance              = $old_instance;
            $instance['title']     = strip_tags($new_instance['title']);
            $instance['number']    = (int) $new_instance['number'];
            $instance['show_date'] = (bool) $new_instance['show_date'];
            $this->flush_widget_cache();
            $alloptions = wp_cache_get( 'alloptions', 'options' );
            if ( isset( $alloptions['widget_recent_entries'] ) ) {
                delete_option( 'widget_recent_entries' );
            }
            return $instance;
        }
        function flush_widget_cache() {
            wp_cache_delete( 'widget_recent_posts', 'widget' );
        }
        /* ウィジェットの設定フォーム */
        function form( $instance ) {
            $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
            $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
            $show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
?>
            <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
            <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
            <input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
            <p><input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
            <label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label></p>
<?php
        }
}
add_action( 'widgets_init', create_function( '', 'return register_widget( "My_Widget_Recent_Posts" );' ) );

/**
 * Replaces the excerpt
 */

function custom_excerpt_length( $length ) {
     return 120; 
}       
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more($more) {
    global $post;
    return '... <a class="moretag" href="'. get_permalink($post->ID) . '"> 続きを読む &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');