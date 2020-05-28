<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<?php if ( have_comments() ) : ?> <div class="title-blog-details-page">
                                      <h3><?php comments_number( esc_html__('0 Comments', 'industrio'), esc_html__(' Comments (1)', 'industrio'), esc_html__('Comments (%)', 'industrio') ); ?></h3>
                                  </div>
                                  <div class="comment-box-wrapper">
                                    <?php wp_list_comments('callback=industrio_theme_comment'); ?>
                                  </div>

                                   <div class="col-md-12"> 
                                        <!-- START PAGINATION -->
                                    <?php
                                        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
                                    ?>
                                        <div class="pagination_area">
                                             <nav>
                                                  <ul class="pagination">
                                                       <li> <?php paginate_comments_links( 
                                                      array(
                                                      'prev_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-left"></i>', 'industrio' ),ENT_QUOTES),
                                                      'next_text' => wp_specialchars_decode(esc_html__( '<i class="fa fa-angle-right"></i>', 'industrio' ),ENT_QUOTES),
                                                      ));  ?>
                                                        </li>
                                                  </ul>
                                             </nav>
                                        </div>
                                        <?php endif; ?>
                                        <!-- END PAGINATION --> 
                                   </div>
                        <?php endif; ?>
                        
<?php
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
        $aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
                'id_form' => 'id-comment-form',        
                'class_form' => 'comment-form contact-form row',                         
                'title_reply'=> wp_specialchars_decode( 'Post A <span>Comment</span>', 'industrio' ),
                'fields' => apply_filters( 'comment_form_default_fields', array(
                    'author' => ' <div class="col-md-4">
                                      <input id="name" type="text" placeholder="'.esc_attr__('Name', 'industrio').'" name="name" required="required" data-error="Name is required."/>                            
                                  </div>',
                    'email' => '  <div class="col-md-4">
                                      <input type="text" id="email"  placeholder="'.esc_attr__('Mail Address', 'industrio').'" name="email" required="required" data-error="Valid email is required." />
                                  </div>',
                    'subject' => '<div class="col-md-4">
                                      <input type="text" placeholder="'.esc_attr__('Website', 'industrio').'" name="website" required="required" data-error="Website is required." />
                                  </div>',

                ) ),   
                'comment_field' => '<div class="col-md-12">
                                <textarea  id="comment" name="comment" '.$aria_req.' placeholder="'.esc_attr__('Comment...', 'industrio').'" data-error="Please,leave us a message."></textarea></div>
                                    ',                
                 'label_submit' => esc_html__( 'Post Comment', 'industrio' ),
                 'comment_notes_before' => '',
                 'comment_notes_after' => '',               
        )
    ?>

                          

    <?php if ( comments_open() ) : ?>
    <?php comment_form($comment_args); ?>
                        <?php endif; ?> 
         