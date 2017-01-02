<div class="author-info d-inline-flex">
                <?php foreach( get_coauthors() as $coauthor ) : ?>
                    <div class="avatar-nom d-inline-flex">
                        <figure class="avatar-container rounded-circle">
                            <?php echo get_wp_user_avatar( $coauthor->user_email, '35' ); ?>
                        </figure>
                        <address class="entry-author small author" itemprop="author" itemscope itemptype="http://schema.org/Person"><a href="<?php  echo get_author_posts_url( $coauthor->ID, $coauthor->user_nicename ) ?>"><?php echo $coauthor->display_name; ?></a></address></div>
                    <?php endforeach; ?>
            </div>
