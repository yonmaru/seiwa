                    <div class="sidemenu">
                        <dl>
                            <dt>カテゴリー</dt>
                            <?php
                                $args = array(
                                    'orderby' => 'name'
                                );
                                $categories = get_categories( $args );
                                foreach ( $categories as $category ) {
                                    $cat_link = get_category_link($category->cat_ID);
                                    echo '<dd class="arrow arrow3"><a href="' . $cat_link . '">' . $category->name . '</a></dd>';
                                }
                            ?>
                        </dl>
                        <dl>
                            <dt>アーカイブ</dt>
                            <?php 
                            wp_get_archives( array( 
                              'format' => 'custom',
                              'before' => '<dd class="arrow arrow3">',
                              'after' => '</dd> '
                            )); ?>
                        </dl>
                    </div>
