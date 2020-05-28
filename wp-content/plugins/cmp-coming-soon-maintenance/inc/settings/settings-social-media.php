<?php 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

?>

<div class="table-wrapper content" id="social-section">
    <h3><?php _e('Social Media', 'cmp-coming-soon-maintenance');?></h3>
    <table class="content">
    <tbody>

    <?php 
    if ( !isset( $theme_supports['social_title'] ) || (isset( $theme_supports['social_title'] ) && $theme_supports['social_title'] === true ) ) { ?>
    <tr>
        <th><?php _e('Social Section Title', 'cmp-coming-soon-maintenance');?></th>
        <td>
            <fieldset>
                <input type="text" name="niteoCS_soc_title" id="niteoCS_soc_title" value="<?php echo esc_attr( $niteoCS_soc_title); ?>" class="regular-text code">
            </fieldset>
        </td>
    </tr>
    <?php 
    } ?>

    <tr>
        <th><?php _e('Social Media Icons', 'cmp-coming-soon-maintenance');?></th>
        <td>
            <p class="social-description"><?php _e('Click on Social Icons below to enable Social Media settings.', 'cmp-coming-soon-maintenance');?></p>
            <ul class="social-media">
                <?php 
                uasort( $socialmedia, array($this,'sort_social') );

                // render icons
                foreach ( $socialmedia as $social ) {

                    // push soundcloud if missing - pre version 1.13

                    $social_active = '';
                    
                    if ($social['hidden'] == '0') {
                        $social_active = 'active';
                    }

                    switch ($social['name']) {
                        case 'envelope-o':
                            $title = __('Email Address', 'cmp-coming-soon-maintenance');
                            break;
                        case 'phone':
                            $title = __('Phone Number', 'cmp-coming-soon-maintenance');
                            break;
                        case 'whatsapp':
                            $title = __('Phone Number', 'cmp-coming-soon-maintenance');
                            break;
                        default:
                            $title = ucfirst( esc_attr($social['name'] ) );
                            break;
                    } ?>

                    <li>
                        <i class="fa fa-<?php echo esc_attr($social['name']) . ' '. $social_active;?>" title="<?php echo esc_attr($title);?>" data-name="<?php echo esc_attr($social['name']);?>" aria-hidden="true"></i>
                    </li>
                    <?php
                } ?>
            </ul>
        
            <ul class="social-inputs">
                <li class="social-labels"><span class="label"><?php _e('Position', 'cmp-coming-soon-maintenance');?></span><span class="label"><?php _e('Active', 'cmp-coming-soon-maintenance');?></span><span class="label"><?php _e('Website URL', 'cmp-coming-soon-maintenance');?></span></li>
                <?php
                foreach ( $socialmedia as $social ) {

                    ( $social['hidden'] == '0' ) ? $active = 'active ' : $active = '';
                    
                    ( $social['active'] == '0' ) ? $disabled = ' disabled' : $disabled = '';
                    
                    $url = '';

                    switch ( $social['name'] ) {
                        case 'envelope-o':
                            $title 	= __('Email Address', 'cmp-coming-soon-maintenance');
                            $url 	= 'email@example.com';
                            break;
                        case 'youtube':
                            $title 	= 'YouTube';
                            $url 	= 'https://youtube.com/user/username';
                            break;
                        case 'behance':
                            $title 	= ucfirst( $social['name'] );
                            $url 	= 'https://behance.net/profile';
                            break;
                        case 'phone':
                            $title 	= __('Phone Number', 'cmp-coming-soon-maintenance');
                            $url 	= '+123456789';
                            break;
                        case 'whatsapp':
                            $title 	= __('WhatsApp Phone Number', 'cmp-coming-soon-maintenance');
                            $url 	= '+123456789';
                            break;
                        case 'telegram':
                            $title 	= ucfirst( $social['name'] );
                            $url 	= 'https://telegram.me/username';
                            break;
                        case 'spotify':
                            $title 	= ucfirst( $social['name'] );
                            $url 	= 'https://open.spotify.com/user/username';
                            break;
                        default:
                            $title 	= ucfirst( $social['name'] );
                            $url 	= 'https://'.$social['name'].'.com/profile';
                            break;
                    }


                    // if no URL set, change it to default profile
                    if ( $social['url'] && $social['url'] !== ''  ) {
                        $url = $social['url'];
                    } ?>

                    <li class="<?php echo esc_attr( $active . $social['name'] );?>">
                        <p><i class="fa fa-sort" aria-hidden="true"></i>
                            <label for="niteoCS_<?php echo esc_attr( $social['name'] );?>" class="<?php echo esc_attr( $social['name'] );?>"><?php echo esc_html( $title );?></label>
                            <input type="text" id="niteoCS_<?php echo esc_attr( $social['name'] );?>" value="<?php echo esc_attr( $url );?>" class="regular-text code <?php echo esc_attr( $social['name'] );?>" data-name="<?php echo esc_attr( $social['name'] );?>"<?php echo $disabled;?>/>
                            <input type="checkbox" name="niteoCS_<?php echo esc_attr( $social['name'] );?>_checkbox" id="niteoCS_<?php echo esc_attr( $social['name'] );?>_checkbox" class="<?php echo esc_attr( $social['name'] );?>" data-name="<?php echo esc_attr( $social['name'] );?>"<?php checked( '1', $social['active'] ); ?>/>
                        </p>
                    </li>
                    <?php
                } ?>

            </ul>
            
            <fieldset>
            <input type="hidden" name="niteoCS_socialmedia" id="niteoCS_socialmedia" value="<?php echo esc_attr( $niteoCS_socialmedia ); ?>" class="regular-text code active">
            </fieldset>
        </td>
    </tr>

    <?php 
    // include social special settings
    if (file_exists($this->cmp_theme_dir($this->cmp_selectedTheme()).$this->cmp_selectedTheme().'/'.$this->cmp_selectedTheme().'-social_settings.php')) {
        include ( $this->cmp_theme_dir($this->cmp_selectedTheme()).$this->cmp_selectedTheme().'/'.$this->cmp_selectedTheme().'-social_settings.php' );
    }

    echo $this->render_settings->submit(); ?>

    </tbody>
    </table>
</div>