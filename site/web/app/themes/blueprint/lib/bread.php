<?php
/**
 * Yoast Breadcrumbs on Twitter Bootstrap
 *
 * @author Novrian <me@novrian.info>
 * @copyright (c) 2013. Novrian Y.F.
 * @license MIT License
 * @param string $sep Your custom separator
 */
function novrian_breadcrumbs($sep = '') {
  if (!function_exists('yoast_breadcrumb')) {
    return null;
  }
  // Default Yoast Breadcrumbs Separator
//  $old_sep = '\&raquo\;';
  $old_sep = '»';
  // Get the crumbs
  $crumbs = yoast_breadcrumb(null, null, false);
  // Hilangkan wrapper <span xmlns:v />
  $output = preg_replace("/^\<span xmlns\:v=\"http\:\/\/rdf\.data\-vocabulary\.org\/#\"\>/", "", $crumbs);
  $output = preg_replace("/\<\/span\>$/", "", $output);
  // Ambil Crumbs
  $crumb = preg_split("/\40(" . $old_sep . ")\40/", $output);
  // Manipulasi string output tiap crumbs
  $crumb = array_map(
    create_function('$crumb', '
      if (preg_match(\'/\<span\40class=\"breadcrumb_last\"/\', $crumb)) {
        return \'<li class="active">\' . $crumb . \'</li>\';
      }
      return \'<li>\' . $crumb . \' <span class="divider">' . $sep . '</span></li>\';
      '),
    $crumb
    );
  // Bangun output HTML
  $output = '<div class="breadcrumbs-container text-right" xmlns:v="http://rdf.data-vocabulary.org/#"\><ul class="breadcrumb">' . implode("", $crumb) . '</ul></div>';
  // Print
  echo $output;
}
/*

function awp_the_breadcrumbs() {
  global $post ;
  if ( ! isset( $post ) ) {
    return ;
  }
  else if ( awp_current_post_has_parent() ) {
    awp_echo_breadcrumbs() ;
  }
}

function awp_current_post_has_parent() {
  global $post ;
  $parent_title = get_the_title( $post->post_parent ) ;
  return ( $parent_title != the_title( "" , "" , false ) ) ;
}

function awp_echo_breadcrumbs() {
  global $post ;
  ?>
    <ol class="breadcrumb">
      <li><a href="<?php echo home_url() ; ?>">Home</a></li>
      <li><?php awp_echo_post_parent_for_breadcrumb() ; ?></li>
      <li class="active"><?php the_title() ; ?></li>
    </ol>
  <?php
}

function awp_echo_post_parent_for_breadcrumb() {
  global $post ;
  $post_parent = get_post( $post->post_parent ) ;

  if ( awp_post_is_only_a_placeholder_and_has_no_content( $post_parent ) ) {
    echo get_the_title( $post_parent ) ;
  } else {
    awp_echo_post_title_wrapped_in_a_link( $post_parent ) ;
  }
}

function awp_post_is_only_a_placeholder_and_has_no_content( $post_parent ) {
  return ( "" == $post_parent->post_content ) ;
}

function awp_echo_post_title_wrapped_in_a_link( $post_parent ) {
  $parent_title = get_the_title( $post_parent ) ;
  $parent_link = get_permalink( $post_parent ) ;
  echo "<a href='{$parent_link}' title='{$parent_title}'>{$parent_title}</a>\n" ;
}
*/