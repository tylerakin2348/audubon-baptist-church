 <?php if ($section['two_thirds_layout_format_selector'] === 
    'aligned_left') { ?>
    <div class="layout two-thirds aligned-left">
        <div class="contain two-thirds__container bg-dark">
            <div class="two-thirds__content">
                <?php echo wpautop($section['aligned_left_two_thirds_content']); ?>
            </div>
            
        </div>
    </div>

    <?php } else if ($section['two_thirds_layout_format_selector'] === 
        'aligned_right') { ?>
        <div class="layout two-thirds aligned-right">
            <div class="contain two-thirds__container bg-dark">
                <div class="two-thirds__content">
                    <?php echo wpautop($section['aligned_right_two_thirds_content']); ?>
                </div>
            </div>
        </div>
    <?php }?>