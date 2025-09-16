<?php
function toyota_monagas_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'toyota-monagas'),
    ));
}
add_action('after_setup_theme', 'toyota_monagas_setup');

function toyota_monagas_scripts() {
    // Google Fonts (Inter para títulos y texto)
    wp_enqueue_style('toyota-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap', array(), null);

    // Hoja de estilos principal del tema
    wp_enqueue_style('toyota-style', get_stylesheet_uri(), array('toyota-google-fonts'), wp_get_theme()->get('Version'));

    // Front page assets
    if (is_front_page()) {
        $dist_dir = get_template_directory() . '/dist';
        $has_dist_css = file_exists( $dist_dir . '/style.css' );
        $has_dist_js  = file_exists( $dist_dir . '/app.js' );

        if ($has_dist_css && $has_dist_js) {
            // Carga compilados (Vite/Tailwind/TS)
            wp_enqueue_style('toyota-front', get_template_directory_uri() . '/dist/style.css', array('toyota-style'), filemtime($dist_dir . '/style.css'));
            wp_enqueue_script('toyota-front', get_template_directory_uri() . '/dist/app.js', array(), filemtime($dist_dir . '/app.js'), true);
        } else {
            // Fallback: assets actuales + librerías mínimas
            wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0');
            wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11');
            $front_css_path = get_template_directory() . '/assets/css/front.css';
            $front_js_path  = get_template_directory() . '/assets/js/front.js';
            $front_css_ver  = file_exists($front_css_path) ? filemtime($front_css_path) : '1.2';
            $front_js_ver   = file_exists($front_js_path) ? filemtime($front_js_path) : '1.2';
            wp_enqueue_style('toyota-front', get_template_directory_uri() . '/assets/css/front.css', array('toyota-style'), $front_css_ver);

            wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11', true);
            wp_enqueue_script('toyota-front', get_template_directory_uri() . '/assets/js/front.js', array('swiper'), $front_js_ver, true);
        }
    }
}
add_action('wp_enqueue_scripts', 'toyota_monagas_scripts');

// Título personalizado del documento
add_filter('pre_get_document_title', function($title){
    return 'Motores Morichal - Consesionario Toyota en Maturín';
});

// Crea página de Inicio y menú básico al activar el tema
function toyota_monagas_on_activate() {
    // Crear página "Inicio" si no existe
    $home = get_page_by_path('inicio');
    if (!$home) {
        $home_id = wp_insert_post(array(
            'post_title'   => 'Inicio',
            'post_name'    => 'inicio',
            'post_type'    => 'page',
            'post_status'  => 'publish',
            'post_content' => '',
        ));
    } else {
        $home_id = $home->ID;
    }

    // Crear páginas vacías adicionales si no existen
    $to_create = array(
        'vehiculos'      => 'Vehiculos',
        'sobre-nosotros' => 'Sobre Nosotros',
        'contactanos'    => 'Contactanos',
        'mundo-toyota'   => 'Mundo Toyota',
        'blog'           => 'Blog',
    );
    $created_pages = array();
    foreach ($to_create as $slug => $title) {
        $page = get_page_by_path($slug);
        if (!$page) {
            $id = wp_insert_post(array(
                'post_title'   => $title,
                'post_name'    => $slug,
                'post_type'    => 'page',
                'post_status'  => 'publish',
                'post_content' => '',
            ));
            if ($id && !is_wp_error($id)) { $created_pages[$slug] = $id; }
        } else {
            $created_pages[$slug] = $page->ID;
        }
    }

    // Definir la portada estática si aún no está configurada
    if ($home_id && 'page' !== get_option('show_on_front')) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $home_id);
    }

    // Asignar la página de entradas al "Blog" si existe
    if (!empty($created_pages['blog'])) {
        update_option('page_for_posts', (int)$created_pages['blog']);
    }

    // Crear menú Principal si no existe y asignarlo a la ubicación
    $menu_name = 'Principal';
    $menu_obj = wp_get_nav_menu_object($menu_name);
    if (!$menu_obj) {
        $menu_id = wp_create_nav_menu($menu_name);
    } else {
        $menu_id = $menu_obj->term_id;
    }

    // Asignar el menú a la ubicación registrada
    $locations = get_theme_mod('nav_menu_locations');
    if (!is_array($locations)) { $locations = array(); }
    if (!isset($locations['menu-principal']) || (int)$locations['menu-principal'] !== (int)$menu_id) {
        $locations['menu-principal'] = (int)$menu_id;
        set_theme_mod('nav_menu_locations', $locations);
    }

    // Si el menú está vacío, añadir enlaces a las páginas
    $items = wp_get_nav_menu_items($menu_id);
    if (empty($items)) {
        // Inicio
        wp_update_nav_menu_item($menu_id, 0, array(
            'menu-item-title'  => 'Inicio',
            'menu-item-url'    => home_url('/'),
            'menu-item-status' => 'publish',
        ));
        // Páginas creadas
        foreach (array('vehiculos','sobre-nosotros','contactanos','mundo-toyota','blog') as $slug) {
            if (!empty($created_pages[$slug])) {
                wp_update_nav_menu_item($menu_id, 0, array(
                    'menu-item-title'  => $to_create[$slug],
                    'menu-item-url'    => get_permalink($created_pages[$slug]),
                    'menu-item-status' => 'publish',
                ));
            }
        }
    }
}
add_action('after_switch_theme', 'toyota_monagas_on_activate');

// Personalizador: URLs de videos de la portada
function toyota_monagas_customize_register($wp_customize) {
    $wp_customize->add_section('toyota_home_media', array(
        'title'       => __('Inicio: Videos del slider', 'toyota-monagas'),
        'priority'    => 30,
        'description' => __('Configura las URLs de los videos del slider en la portada. Sube los videos a la Librería de Medios y pega aquí las URLs.', 'toyota-monagas'),
    ));

    $defaults = array(
        'home_video_1' => 'https://arturomerchan.com/wp-content/uploads/2025/09/MOTORES-MORICHAL-VIDEO-SLIDE-1.mp4',
        'home_video_2' => 'https://arturomerchan.com/wp-content/uploads/2025/09/MOTORES-MORICHAL-VIDEO-SLIDE-2.mp4',
        'home_video_3' => 'https://arturomerchan.com/wp-content/uploads/2025/09/MOTORES-MORICHAL-VIDEO-SLIDE-3.mp4',
        'home_video_4' => 'https://arturomerchan.com/wp-content/uploads/2025/09/AGYA-TOYOTA-MONAGAS.mp4',
    );

    foreach ($defaults as $key => $default_url) {
        $wp_customize->add_setting($key, array(
            'default'           => $default_url,
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        ));
        $wp_customize->add_control($key, array(
            'label'       => sprintf(__('Video %s (URL)', 'toyota-monagas'), str_replace('home_video_', '', $key)),
            'section'     => 'toyota_home_media',
            'type'        => 'url',
            'input_attrs' => array('placeholder' => 'https://tusitio.com/wp-content/uploads/archivo.mp4'),
        ));
    }
}
add_action('customize_register', 'toyota_monagas_customize_register');

// Shortcode: [formulario_mmorichal]
// Formulario de contacto a WhatsApp adaptado al tema
add_shortcode('formulario_mmorichal', function () {
    ob_start();
    $wa_number = apply_filters('mmorichal_whatsapp_number', '584241234567');
    ?>
    <form class="mmorichal-form" onsubmit="return mmorichalEnviarWhatsApp(this);">
        <div class="mf-row">
            <label for="m_nombre">Nombre completo</label>
            <input type="text" id="m_nombre" name="m_nombre" placeholder="Ej: Juan Gómez" required>
        </div>

        <div class="mf-row">
            <label for="m_servicio">Servicio a solicitar</label>
            <select id="m_servicio" name="m_servicio" required>
                <option value="Servicios generales">Servicios generales</option>
                <option value="Servicio escaner">Servicio escaner</option>
                <option value="Mantemineto periodicos">Mantemineto periodicos</option>
                <option value="Cambio de aceite y filtro">Cambio de aceite y filtro</option>
                <option value="Entonacion de motor">Entonacion de motor</option>
                <option value="Servicio de lavado">Servicio de lavado</option>
            </select>
        </div>

        <div class="mf-row">
            <label for="m_modelo">Modelo de vehículo</label>
            <input type="text" id="m_modelo" name="m_modelo" placeholder="Ej: Toyota Hilux 2025" required>
        </div>

        

        <div class="mf-row">
            <label for="m_mensaje">Mensaje</label>
            <textarea id="m_mensaje" name="m_mensaje" rows="4" placeholder="Cuéntanos brevemente tu solicitud..."></textarea>
        </div>

        <button type="submit" class="mf-submit">
            <span class="mf-icon" aria-hidden="true">
                <img src="https://arturomerchan.com/wp-content/uploads/2025/09/icon-whatsapp-merchan_dev.webp" alt="WhatsApp" width="24" height="24" loading="lazy" />
            </span>
            Enviar a WhatsApp
        </button>
    </form>
    <script>
    function mmorichalEnviarWhatsApp(form){
      try {
        var nombre  = form.querySelector('#m_nombre').value.trim();
        var servicio= form.querySelector('#m_servicio').value;
        var modelo  = form.querySelector('#m_modelo').value.trim();
        var mensajeLibre = (form.querySelector('#m_mensaje').value || '').trim();
        if(!nombre || !servicio || !modelo){ return false; }
        var mensaje = 'Hola Motores Morichal, me gustaría recibir información:%0A' +
                      '· Nombre: ' + encodeURIComponent(nombre) + '%0A' +
                      '· Servicio: ' + encodeURIComponent(servicio) + '%0A' +
                      '· Modelo: ' + encodeURIComponent(modelo);
        if(mensajeLibre){ mensaje += '%0A· Mensaje: ' + encodeURIComponent(mensajeLibre); }
        var numero = '<?php echo esc_js($wa_number); ?>';
        var url = 'https://wa.me/' + numero + '?text=' + mensaje;
        window.open(url, '_blank');
      } catch(e) {}
      return false;
    }
    </script>
    <?php
    return ob_get_clean();
});
