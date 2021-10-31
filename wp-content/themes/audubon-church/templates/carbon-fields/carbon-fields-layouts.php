<?php
/**
*   The Carbon Field layouts
*
*   See functions.php for the creation of these fields
*
*   https://carbonfields.net/
*
*   These particular fields created by @author Tyler Akin
*/


    $sections = carbon_get_the_post_meta( 'crb_content_fields' );
       foreach ( $sections as $section ) {
       // Page Header output
       if ($section['page_header_reveal'] === true) { ?>
           <div class="layout layout-page-header">
               <div class="contain">
                   <?php $image = $section['page_header_image'];
                   if ($image) : ?>
                       <div class="layout-page-header__image">
                           <img src="<?php echo $image; ?>" alt="">
                       </div>
                   <?php endif; ?>
                   <div class="layout-page-header__content">
                       <?php echo apply_filters('the_content', $section['page_header_content'] ); ?>
                   </div>
               </div>
           </div>
       <?php  }

       // Page Slider output
       if ($section['slider_object_reveal'] === true) { ?>
           <div class="layout layout-slider">
               <?php $slideRows = $section['slider_object_slides'];
               // var_dump($slideRow);
               foreach ( $slideRows as $slideRow ) { ?>
                   <?php $image = $slideRow;
                   $imageSrc = $image["slider_object_image"]; ?>
                   <div class="layout-slider__slide">
                       <img src="<?php echo $imageSrc; ?>" alt="">
                       <div class="layout-slider__content contain">
                           <?php  echo $slideRow['slider_object_content']; ?>
                       </div>
                   </div>
                <?php  } ?>
            </div>
       <?php  }

       // Page Slider output
       if ($section['events_object_reveal'] === true) { ?>
           <div class="layout layout-events contain">
               <div class="layout-events__container contain">
                   <h2 class="red-text"><?php echo $section['events_calendar_title']; ?></h2>
                       <?php $events = $section['single_event'];
                       foreach ( $events as $event ) { ?>
                           <div class="layout-event">
                               <div class="layout-event__date">
                                  <span><?php echo $event['single_event_date']; ?></span>
                               </div>
                               <div class="layout-event__title contain">
                                  <h3><?php  echo $event['single_event_title']; ?></h3>
                               </div>
                               <div class="layout-event__time contain">
                                  <span><?php echo $event['single_event_time']; ?></span>
                               </div>
                               <div class="layout-event__description contain">
                                   <?php  echo $event['single_event_description']; ?>
                               </div>
                               <div class="layout-event__link contain">
                                   <?php  echo $event['single_event_link']; ?>
                               </div>
                           </div>
                        <?php  } ?>
                    </div>
             </div>
       <?php  }

       // Full Width Output
       if ($section['full_width_reveal'] === true) { ?>
           <div class="layout layout-full-width">
               <div class="contain">
                   <div class="layout-full-width__content">
                       <?php echo apply_filters('the_content', $section['full_width_content'] ); ?>
                   </div>
                   <?php $image = $section['full_width_image'];
                   if ($image) : ?>
                       <div class="layout-full-width__image">
                           <img src="<?php echo $image; ?>" alt="">
                       </div>
                   <?php endif; ?>
               </div>
           </div>
       <?php  }

       // Media Object Output
       if ($section['media_object_reveal'] === true) { ?>
           <div class="layout layout-media-object">
               <div class="contain media-object__container">
                   <div class="layout-media-object__content">
                       <?php echo apply_filters('the_content', $section['media_object_content'] ); ?>
                   </div>
                   <?php $image = $section['media_object_image'];
                       if ($image) : ?>
                       <div class="layout-media-object__image">
                           <img src="<?php echo $image; ?>" alt="">
                       </div>
                   <?php endif; ?>
               </div>
           </div>
       <?php  }

       // Media Object Output
       if ($section['partial_reveal'] === true && $section['partials']=== "beliefs-partial") { ?>
           <div class="contain two-column-layout background-overlay">
               <div class="inner-container">
                   <div class="column">
                       <a class="external-link" href="http://www.sbc.net/bfm2000/bfm2000.asp" target="_blank"></a>
                       <div class="column_primary-content">
                           <img class="alignnone size-full wp-image-20" src="https://www.achurchinthepark.org/wp-content/uploads/2018/06/bfm2000.jpg" alt="" width="2000" height="1500" />
                       </div>
                   </div>

                   <div class="column">
                       <a class="external-link" href="http://t4g.org/about/affirmations-and-denials/" target="_blank"></a>
                       <div class="column_primary-content">
                           <img class="alignnone size-full wp-image-27" src="https://www.achurchinthepark.org/wp-content/uploads/2018/06/t4g.jpg" alt="" width="2000" height="1500" />
                       </div>
                   </div>
               </div>
           </div>
       <?php  }

       // Homepage Header Partial
       if ($section['partial_reveal'] === true && $section['partials']=== "homepage-header-partial") { ?>
           <div class="header-content" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID ) ); ?>');">
           </div>
       <?php  }


       // Homepage Slider Partial
       if ($section['partial_reveal'] === true && $section['partials']=== "homepage-slider-partial") { ?>
            <div>
                test
            </div>
    <?php  }


       // Weekly Schedule Partial
       if ($section['partial_reveal'] === true && $section['partials']=== "weekly-schedule-partial") { ?>
           <div class="weekly-schedule">
               <div class="contain">
                   <h2>Weekly Schedule</h2>
               </div>
               <div class="weekly-schedule__container contain">
                   <div class="schedule">
                       <p>Bible study at 9:30am</p>
                       <p>Worship at 10:30am</p>
                   </div>
                   <div class="directions">
                       <p>1046 Hess Lane</p>
                       <p>Lousville, KY 40217</p>
                   </div>
               </div>
           </div>
       <?php  }

       // Homepage Header Partial
       if ($section['partial_reveal'] === true && $section['partials']=== "seventy-fifth-partial") { ?>
           <div class="layout seventy-fifth-partial">
                   <div class="header-content" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID ) ); ?>');">
                       <a href="/seventy-fifth-anniversary/">Get More Information</a>
                   </div>
                   <div class="weekly-schedule">
                       <div class="contain">
                           <h2>Weekly Schedule</h2>
                       </div>
                       <div class="weekly-schedule__container contain">
                           <div class="schedule">
                               <p>Bible study at 9:30am</p>
                               <p>Worship at 10:30am</p>
                           </div>
                           <div class="directions">
                               <p>1046 Hess Lane</p>
                               <p>Lousville, KY 40217</p>
                           </div>
                       </div>
                   </div>
               </div>
       <?php  }


       // Homepage Header Partial
       if ($section['partial_reveal'] === true && $section['partials']=== "our-story-partial") { ?>
           <div class="layout our-story-partial">
               <div class="contain">
                   <div class="site-logo__container">
                       <div class='site-logo--est'>est. 1944</div>
                       <div class='site-logo--reborn'>reborn 2017</div>
                   </div>
                   <a href="/audubon-church/our-church/">Read more about our story</a>
               </div>
           </div>
       <?php  }

       // Homepage Header Partial
       if ($section['partial_reveal'] === true && $section['partials']=== "latest-sermon-partial") { ?>
               <?php
               $args = array(
               'orderby' => 'title',
               'post_type' => 'sermons',
               'posts_per_page' => 1,
               'orderby' => 'date',
               'order' => 'DESC', // Gets the most recent sermon post
               );
               $the_query = new WP_Query( $args );
               ?>

               <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

               <div class="layout latest-sermon sermon">
                    <?php $featured_image = get_the_post_thumbnail_url(); ?>
                    <img class="latest-sermon__image" src="<?php echo $featured_image; ?>"/>

                   <div class="contain">
                       <h2>Latest Sermon</h2>
                       <?php
                           $term_obj_list = get_the_terms( $the_query->ID, 'series' ); ?>
                           <div class="blog-categories">
                               <?php
                               foreach ( $term_obj_list as $term ) {
                                   $term_link = get_term_link( $term ); ?>
                                   <a href="<?php echo $term_link ?>"><?php echo $term->name; ?></a>
                               <?php } ?>
                           </div>
                       <div class="latest-sermon__title">
                           <h3><?php the_title() ?></h3>
                       </div>

                       <div class="latest-sermon__content">
                           <?php the_content() ?>
                        </div>

                       <a class="button" href="/audubon-church/sermons">View More Sermons</a>
                   </div>
               </div>

               <?php endwhile; else: ?> <p>Sorry, there are no posts to display</p> <?php endif; ?>
               <?php wp_reset_query(); ?>
       <?php  }

       // Values Partial
       if ($section['partial_reveal'] === true && $section['partials']=== "values-partial") { ?>

              <div class="three-column-layout background-overlay">
                  <div class="inner-container">
                      <div class="column">
                          <div class="column_primary-content">
                              <h3>Generation to Generation</h3><img class="alignnone size-full wp-image-20" src="https://www.achurchinthepark.org/wp-content/uploads/2018/06/IMG_2224.jpg" alt="" width="2000" height="1500" />
                              <a href="http://localhost:8869/audubon-church/our-church/"><span></span></a>
                          </div>
                          <div class="column_secondary-content">
                              <p>"One generation shall commend Your works to another, and shall declare Your mighty acts.
                                  <br />Psalm 145:4"</p>
                          </div>
                      </div>

                      <div class="column">
                          <div class="column_primary-content">
                              <h3>Missional</h3><img class="alignnone size-full wp-image-27" src="https://www.achurchinthepark.org/wp-content/uploads/2018/06/IMG_2248.jpg" alt="" width="2000" height="1500" />
                              <a href="http://localhost:8869/audubon-church/our-church/"><span></span></a>
                          </div>
                          <div class="column_secondary-content">
                              <p>"Declare his glory among the nations, his marvelous works among all the peoples!
                                  <br />1 Chronicles 16:24"</p>
                          </div>
                      </div>

                       <div class="column">
                           <div class="column_primary-content">
                               <h3>Stewarding</h3><img class="alignnone size-full wp-image-30" src="https://www.achurchinthepark.org/wp-content/uploads/2018/06/IMG_2252.jpg" alt="" width="2000" height="1500" />
                               <a href="http://localhost:8869/audubon-church/our-church/leadership"><span></span></a>
                           </div>
                           <div class="column_secondary-content">
                               <p>"So teach us to number our days that we may get a heart of wisdom.
                                   <br />Psalm 90:12"</p>
                           </div>
                       </div>
                  </div>
              </div>
       <?php  }


       // Values Partial
       if ($section['partial_reveal'] === true && $section['partials']=== "appreciating-partial") { ?>

           <div class="six-column--layout background-overlay">
            <div class="inner-container">
                <div class="column">
                    <a class="external-link" href="https://www.9marks.org/" target="_blank"></a>
                    <div class="column_primary-content">
                        <img class="alignnone size-full wp-image-20" src="https://www.achurchinthepark.org/wp-content/uploads/2018/06/9Marks-logo.png" alt="" width="2000" height="1500" />
                    </div>
                </div>

                <div class="column">
                    <a class="external-link" href="https://www.desiringgod.org/" target="_blank"></a>
                    <div class="column_primary-content">
                        <img class="alignnone size-full wp-image-27" src="https://www.achurchinthepark.org/wp-content/uploads/2018/06/Screen-Shot-2018-06-07-at-1.23.43-PM.png" alt="" width="2000" height="1500" />
                    </div>
                </div>
                <div class="column">
                    <a class="external-link" href="https://cbmw.org/" target="_blank"></a>
                    <div class="column_primary-content">
                        <img class="alignnone size-full wp-image-20" src="https://www.achurchinthepark.org/wp-content/uploads/2018/06/Screen-Shot-2018-06-07-at-3.05.06-PM-1.png" alt="" width="2000" height="1500" />
                    </div>
                </div>

                <div class="column">
                    <a class="external-link" href="http://gospellegacy.org/" target="_blank"></a>
                    <div class="column_primary-content">
                        <img class="alignnone size-full wp-image-27" src="https://www.achurchinthepark.org/wp-content/uploads/2018/06/Screen-Shot-2018-06-07-at-2.58.30-PM.png" alt="" width="2000" height="1500" />
                    </div>
                </div>
                <div class="column">
                    <a class="external-link" href="https://www.imb.org/" target="_blank"></a>
                    <div class="column_primary-content">
                        <img class="alignnone size-full wp-image-20" src="https://www.achurchinthepark.org/wp-content/uploads/2018/06/Screen-Shot-2018-06-07-at-3.02.08-PM.png" alt="" width="2000" height="1500" />
                    </div>
                </div>

                <div class="column">
                    <a class="external-link" href="https://albertmohler.com/" target="_blank"></a>
                    <div class="column_primary-content">
                        <img class="alignnone size-full wp-image-27" src="https://www.achurchinthepark.org/wp-content/uploads/2018/06/Screen-Shot-2018-06-07-at-1.47.38-PM.png" alt="" width="2000" height="1500" />
                    </div>
                </div>
            </div>
        </div>
       <?php  }

    } ?>
