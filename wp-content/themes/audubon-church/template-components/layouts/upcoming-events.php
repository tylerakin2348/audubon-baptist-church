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