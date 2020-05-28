 <?php       
        
$size = $this->isMobile() ? 'large' : 'full';
$html = '';

// change background if preview is set
if ( isset( $_GET['background'] ) && !empty($_GET['background']) ) {
    $niteoCS_banner = $_GET['background'] == '1' ? 0 : esc_attr($_GET['background']);
}

if ( file_exists( $this->cmp_theme_dir( $this->cmp_selectedTheme() ).$this->cmp_selectedTheme().'/img/'.$this->cmp_selectedTheme().'_banner_'.$size.'.jpg' ) ) {
    $default_img = $this->cmp_themeURL( $this->cmp_selectedTheme() ).$this->cmp_selectedTheme().'/img/'.$this->cmp_selectedTheme().'_banner_'.$size.'.jpg';
} elseif ( file_exists( $this->cmp_theme_dir( $this->cmp_selectedTheme() ).$this->cmp_selectedTheme().'/img/'.$this->cmp_selectedTheme().'_banner_'.$size.'.png' ) ) {
    $default_img = $this->cmp_themeURL( $this->cmp_selectedTheme() ).$this->cmp_selectedTheme().'/img/'.$this->cmp_selectedTheme().'_banner_'.$size.'.png';
};


switch ( $niteoCS_banner ) {
    // custom media
    case '0':
        $banner_ids = $this->cmp_get_banner_ids();
        
        if ( !empty($banner_ids) ) {
            $banner_url = wp_get_attachment_image_src( $banner_ids[mt_rand(0, count( $banner_ids ) - 1)], $size);

            if ( isset($banner_url[0]) ) {
                $banner_url = $banner_url[0];
            }

        } else {
            // send default image
            $banner_url = $default_img;
        }

        $html = '<div id="background-image" class="image" style="background-image:url(\''.esc_url( $banner_url ).'\')"></div>';
        break;

    case '1':
        // unsplash
        $background_class = 'image';
        $unplash_feed   = get_option('niteoCS_unsplash_feed', '3');

        switch ( $unplash_feed ) {
            // specific photo from id
            case '0':
                $params = array('feed' => '0', 'url' => get_option('niteoCS_unsplash_0', '') );
                $unsplash = $this->niteo_unsplash(  $params );
                break;

            // random from user
            case '1':
                $params = array('feed' => '1', 'custom_str' => get_option('niteoCS_unsplash_1', '') );
                $unsplash = $this->niteo_unsplash(  $params );
                break;

            // random from collection
            case '2':
                $params = array('feed' => '2', 'url' => get_option('niteoCS_unsplash_2', '') );
                $unsplash = $this->niteo_unsplash(  $params );
                break;

            // random photo
            case '3':
                $params = array('feed' => '3', 'url' => get_option('niteoCS_unsplash_3', ''), 'feat' => get_option('niteoCS_unsplash_feat', '0') );
                $unsplash = $this->niteo_unsplash(  $params );
                break;
            default:
                break;
        }
        // get raw url from response
        if ( isset( $unsplash['response'] ) && $unsplash['response'] == '200' ) {
            $body = json_decode ($unsplash['body'], true );

            if ( isset( $body[0] ) ) {
                foreach ( $body as $item ) {
                    $unsplash_download  = $item['links']['download_location'];
                }

            } else {
                $unsplash_download      = $body['links']['download_location'];
            } 

            switch ( $themeslug ) {
                case 'element':
                    $width = 1;
                    $height = 0.6;
                    break;
                
                default:
                    $width = 1;
                    $height = 1;
                    break;
            }

            ob_start(); ?>

            <script>
                var unsplash_download = '<?php echo esc_url( $unsplash_download );?>';

                var width = document.getElementById('background-wrapper').offsetWidth * <?php echo esc_attr( $width );?>;
                var height = document.getElementById('background-wrapper').offsetHeight * <?php echo esc_attr( $height );?>;

                if ( height === 0 ) {
                    var body = document.body,
                    html = document.documentElement;

                    height = Math.max( body.scrollHeight, body.offsetHeight, 
                       html.clientHeight, html.scrollHeight, html.offsetHeight );
                }

                var dimension = 'w=' + width;
                if ( width < height ) {
                    dimension = 'h=' + height;
                }

                var unsplash_url = '<?php echo esc_url( $unsplash_download );?>?client_id=41f043163758cf2e898e8a868bc142c20bc3f5966e7abac4779ee684088092ab';

                fetch(unsplash_url, {
                    method: 'GET',
                })
                .then((res) => {
                    return res.json();
                })
                .then((data) => {

                    var imgContainer  = '<div id="background-image" class="image" style="background-image:url()"></div>'; 

                    var image = document.createElement('div');

                    image.id = 'background-image';


                    var container = document.getElementById("background-wrapper");

                    if ( container == null ) {
                        container = document.getElementById("banner-wrapper");
                    }

                    container.insertAdjacentElement('afterbegin', image);

                    var unsplashImg = new Image();

                    unsplashImg.onload = function() {
                        image.className = 'image loaded';
                        image.style.backgroundImage = `url("${unsplashImg.src}")`;
                    }

                    unsplashImg.src = `${data.url}&fit=crop&${dimension}`;

                })
                .catch(function(error) { console.log(error.message); });
            </script>
            <?php 

            $html = ob_get_clean();
        } 

        break;

    case '2':
        // default image
        $banner_url = $default_img;
        $html = '<div id="background-image" class="image" style="background-image:url(\''.esc_url( $banner_url ).'\')"></div>';
        break;

    case '3':
        // Pattern
        $niteoCS_banner_pattern = get_option('niteoCS_banner_pattern', 'sakura');

        if ( $niteoCS_banner_pattern != 'custom' ) {
            $banner_url =  plugins_url().'/cmp-coming-soon-maintenance/img/patterns/'.esc_attr( $niteoCS_banner_pattern ).'.png';   

        } else {
            $banner_url = get_option('niteoCS_banner_pattern_custom');
            $banner_url = wp_get_attachment_image_src( $banner_url, 'large' );
            if ( isset($banner_url[0]) ){
                $banner_url = $banner_url[0];
            }
        }
        $html = '<div id="background-image" class="pattern" style="background-image:url(\''.esc_url( $banner_url ).'\')"></div>';
        break;

    case '4':
        // Color
        $color = get_option('niteoCS_banner_color', '#e5e5e5');

        $html ='<div id="background-image" class="color loaded" style="background-color:'.esc_url( $color ).'"></div>';
        break;

    case '5':
        $html = '<div id="player" class="video-banner"></div>';
        break;

    case '6':
        // Gradient
        $background_class = 'gradient';
        $niteoCS_gradient = get_option('niteoCS_gradient', '#1A2980:#26D0CE');
        if ( $niteoCS_gradient == 'custom' ) {
            $niteoCS_gradient_one = get_option('niteoCS_banner_gradient_one', '#e5e5e5');
            $niteoCS_gradient_two = get_option('niteoCS_banner_gradient_two', '#e5e5e5');
        } else {
            $gradient = explode(":", $niteoCS_gradient);
            $niteoCS_gradient_one 			= $gradient[0];
            $niteoCS_gradient_two 			= $gradient[1];	
        }

        
        $html = '<div id="background-image" class="gradient loaded" style="background:-moz-linear-gradient(-45deg, '.esc_attr( $niteoCS_gradient_one ).' 0%, '.esc_attr( $niteoCS_gradient_two ).' 100%);background:-webkit-linear-gradient(-45deg, '.esc_attr( $niteoCS_gradient_one ).' 0%, '.esc_attr( $niteoCS_gradient_two ).' 100%);background:linear-gradient(135deg,'.esc_attr( $niteoCS_gradient_one ).' 0%, '.esc_attr( $niteoCS_gradient_two ).' 100%)"></div>';
        break;

    // CHAMELEON BACKGROUND
    case '7': 
        $html ='<div id="background-image" class="color chameleon loaded"></div>';
        break;

    default:
        break;
}

// add overlay to images/videos
if ( $niteoCS_banner != '4' && $niteoCS_banner != '6' && $niteoCS_banner != '7') {
    $overlay = $this->background_overlay( $themeslug );
    $html .= $overlay;
}

// add text overlay
$html .= $this->background_text_overlay( $themeslug );