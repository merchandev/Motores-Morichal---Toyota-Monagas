<?php get_header(); ?>

<main id="site-main">
  <!-- Slider de videos -->
  <div id="custom-slider" class="custom-slider swiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 (video 1) -->
      <div class="swiper-slide cs-slide" data-index="0" data-type="video">
        <video class="cs-video-bg" autoplay muted playsinline loop preload="metadata" crossorigin="anonymous">
          <source src="<?php echo esc_url( get_theme_mod('home_video_1', 'https://arturomerchan.com/wp-content/uploads/2025/09/MOTORES-MORICHAL-VIDEO-SLIDE-1.mp4') ); ?>" type="video/mp4">
        </video>
        <div class="cs-slide-content cs-left animate-in">
          <h2>Necesitas una Fortuner SW4</h2>
          <p>Es la fusi&oacute;n perfecta entre un todoterreno deportivo, utilitario y elegante.</p>
          <a href="#" class="cs-btn-slide">Ver m&aacute;s</a>
        </div>
      </div>

      <!-- Slide 2 (video 2) -->
      <div class="swiper-slide cs-slide" data-index="1" data-type="video">
        <video class="cs-video-bg" autoplay muted playsinline loop preload="metadata" crossorigin="anonymous">
          <source src="<?php echo esc_url( get_theme_mod('home_video_2', 'https://arturomerchan.com/wp-content/uploads/2025/09/MOTORES-MORICHAL-VIDEO-SLIDE-2.mp4') ); ?>" type="video/mp4">
        </video>
        <div class="cs-slide-content cs-left animate-in">
          <h2>Nuevo Yaris Cross</h2>
          <p>Nuevo dise&ntilde;o moderno y sofisticado</p>
          <a href="#" class="cs-btn-slide">Explorar</a>
        </div>
      </div>

      <!-- Slide 3 (video 3) -->
      <div class="swiper-slide cs-slide" data-index="2" data-type="video">
        <video class="cs-video-bg" autoplay muted playsinline loop preload="metadata" crossorigin="anonymous">
          <source src="<?php echo esc_url( get_theme_mod('home_video_3', 'https://arturomerchan.com/wp-content/uploads/2025/09/MOTORES-MORICHAL-VIDEO-SLIDE-3.mp4') ); ?>" type="video/mp4">
        </video>
        <div class="cs-slide-content cs-left animate-in">
          <h2>Corolla 2025</h2>
          <p>Innovaci&oacute;n y estilo, ahora m&aacute;s cerca de ti.</p>
          <a href="#" class="cs-btn-slide">Descubrir</a>
        </div>
      </div>

      <!-- Slide 4: AGYA 2025 (video 4) -->
      <div class="swiper-slide cs-slide" data-index="3" data-type="video">
        <video class="cs-video-bg" autoplay muted playsinline loop preload="metadata" crossorigin="anonymous">
          <source src="<?php echo esc_url( get_theme_mod('home_video_4', 'https://arturomerchan.com/wp-content/uploads/2025/09/AGYA-TOYOTA-MONAGAS.mp4') ); ?>" type="video/mp4">
        </video>
        <div class="cs-slide-content cs-left animate-in">
          <h2>AGYA 2025</h2>
          <p>El Toyota Agya est&aacute; dise&ntilde;ado priorizando la ergonom&iacute;a, ofreciendo un amplio espacio interior y una posici&oacute;n de conducci&oacute;n enfocada en comodidad que te permitir&aacute; hacer los viajes que necesites sin sentirte fatigado.</p>
          <a href="#" class="cs-btn-slide">Con&oacute;celo</a>
        </div>
      </div>

    </div>

    <!-- Flechas -->
    <div class="cs-swiper-button-prev swiper-button-prev" aria-label="Anterior"></div>
    <div class="cs-swiper-button-next swiper-button-next" aria-label="Siguiente"></div>

    <!-- Barras de progreso -->
    <div class="cs-progress-bars">
      <div class="cs-progress-bar"><span></span></div>
      <div class="cs-progress-bar"><span></span></div>
      <div class="cs-progress-bar"><span></span></div>
      <div class="cs-progress-bar"><span></span></div>
    </div>
  </div>

  <!-- Veh&iacute;culos por categor&iacute;as -->
  <section id="vehiculos" class="toyota-section">
    <header class="section-header">
      <span class="kicker">Modelos</span>
      <h2>Descubre la línea Toyota</h2>
      <p>Explora por categoría el Toyota ideal para ti</p>
    </header>
    <nav class="toyota-nav" aria-label="Categor&iacute;as de veh&iacute;culos">
      <div class="toyota-tabs" role="tablist">
        <button class="toyota-tab is-active" data-cat="all" aria-selected="true">Todos</button>
        <button class="toyota-tab" data-cat="cars" aria-selected="false">Camioneta</button>
        <button class="toyota-tab" data-cat="trucks" aria-selected="false">Pasajero</button>
        <button class="toyota-tab" data-cat="crossovers" aria-selected="false">Pick Ups</button>
        <button class="toyota-tab" data-cat="electrified" aria-selected="false">Comercial</button>
        <span class="toyota-tab-indicator"></span>
      </div>
    </nav>

    <div class="toyota-slider swiper">
      <div class="swiper-wrapper"></div>
      <div class="toyota-arrow swiper-button-prev"></div>
      <div class="toyota-arrow swiper-button-next"></div>
    </div>

    <div class="toyota-templates" hidden aria-hidden="true">
      <template data-cat="cars crossovers">
        <article class="toyota-card">
          <figure class="toyota-imgbox">
            <img src="https://arturomerchan.com/wp-content/uploads/2025/09/748df8d8-a697-4619-a38c-6d4b6a8910c6.jpeg" alt="2025 Toyota Yaris Cross" decoding="async" loading="lazy" referrerpolicy="no-referrer">
          </figure>
          <div class="toyota-info">
            <header class="toyota-info-text">
              <span class="toyota-year">2025</span>
              <h3>Toyota Yaris Cross</h3>
              <p>SUV compacto, vers&aacute;til y eficiente para la ciudad.</p>
            </header>
            <div class="toyota-buttons">
              <a href="#" class="toyota-btn">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-right"></i></a>
              <span class="toyota-contact"><a href="#contacto">Cont&aacute;ctanos &gt;</a></span>
            </div>
          </div>
        </article>
      </template>
      <!-- Pasajero: YARIS 2025 -->
      <template data-cat="trucks">
        <article class="toyota-card">
          <figure class="toyota-imgbox">
            <img src="https://arturomerchan.com/wp-content/uploads/2025/09/d71b2b40-43c5-40ea-9b9b-2131b6b91838.jpeg" alt="2025 Toyota Yaris" decoding="async" loading="lazy" referrerpolicy="no-referrer">
          </figure>
          <div class="toyota-info">
            <header class="toyota-info-text">
              <span class="toyota-year">2025</span>
              <h3>Toyota Yaris</h3>
              <p>Dise&ntilde;o moderno, eficiencia y tecnolog&iacute;a para el d&iacute;a a d&iacute;a.</p>
            </header>
            <div class="toyota-buttons">
              <a href="#" class="toyota-btn">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-right"></i></a>
              <span class="toyota-contact"><a href="#contacto">Cont&aacute;ctanos &gt;</a></span>
            </div>
          </div>
        </article>
      </template>
      <template data-cat="cars">
        <article class="toyota-card">
          <figure class="toyota-imgbox">
            <img src="https://tmna.aemassets.toyota.com/is/image/toyota/toyota/vehicles/2026/corollacross/mlp/left-right-feature/CCH_MY26_0005_V001.png?fmt=jpeg&qlt=90&dpr=on,3&wid=1024" alt="2025 Toyota Corolla Cross" decoding="async" loading="lazy" referrerpolicy="no-referrer">
          </figure>
          <div class="toyota-info">
            <header class="toyota-info-text">
              <span class="toyota-year">2025</span>
              <h3>Toyota Corolla Cross</h3>
              <p>SUV familiar con espacio, confort y eficiencia.</p>
            </header>
            <div class="toyota-buttons">
              <a href="#" class="toyota-btn">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-right"></i></a>
              <span class="toyota-contact"><a href="#contacto">Cont&aacute;ctanos &gt;</a></span>
            </div>
          </div>
        </article>
      </template>
      <template data-cat="crossovers">
        <article class="toyota-card">
          <figure class="toyota-imgbox">
            <img src="https://arturomerchan.com/wp-content/uploads/2025/09/265e56de-b97e-47fb-91f8-c02e332f9251.jpeg" alt="2025 Toyota Hilux" decoding="async" loading="lazy" referrerpolicy="no-referrer">
          </figure>
          <div class="toyota-info">
            <header class="toyota-info-text">
              <span class="toyota-year">2025</span>
              <h3>Toyota Hilux</h3>
              <p>Potencia y durabilidad para trabajo pesado.</p>
            </header>
            <div class="toyota-buttons">
              <a href="#" class="toyota-btn">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-right"></i></a>
              <span class="toyota-contact"><a href="#contacto">Cont&aacute;ctanos &gt;</a></span>
            </div>
          </div>
        </article>
      </template>
      <!-- Pasajero: AGYA 2025 -->
      <template data-cat="trucks">
        <article class="toyota-card">
          <figure class="toyota-imgbox">
            <img src="https://arturomerchan.com/wp-content/uploads/2025/09/d0c4a468-d12a-49e4-b38b-6b959d16b818.jpeg" alt="2025 Toyota Agya" decoding="async" loading="lazy" referrerpolicy="no-referrer">
          </figure>
          <div class="toyota-info">
            <header class="toyota-info-text">
              <span class="toyota-year">2025</span>
              <h3>Toyota Agya</h3>
              <p>Compacto, &aacute;gil y dise&ntilde;ado para la ciudad.</p>
            </header>
            <div class="toyota-buttons">
              <a href="#" class="toyota-btn">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-right"></i></a>
              <span class="toyota-contact"><a href="#contacto">Cont&aacute;ctanos &gt;</a></span>
            </div>
          </div>
        </article>
      </template>
      
      
      <!-- Comercial: HIACE 2025 -->
      <template data-cat="electrified">
        <article class="toyota-card">
          <figure class="toyota-imgbox">
            <img src="https://acnews.blob.core.windows.net/imgnews/large/NAZ_ac155851ad334dd99d15d748410acf1d.webp" alt="2025 Toyota Hiace" decoding="async" loading="lazy" referrerpolicy="no-referrer">
          </figure>
          <div class="toyota-info">
            <header class="toyota-info-text">
              <span class="toyota-year">2025</span>
              <h3>Toyota Hiace</h3>
              <p>Comercial vers&aacute;til: capacidad, eficiencia y confiabilidad Toyota.</p>
            </header>
            <div class="toyota-buttons">
              <a href="#" class="toyota-btn">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-right"></i></a>
              <span class="toyota-contact"><a href="#contacto">Cont&aacute;ctanos &gt;</a></span>
            </div>
          </div>
        </article>
      </template>
      <template data-cat="trucks crossovers">
        <article class="toyota-card">
          <figure class="toyota-imgbox">
            <img src="https://media.toyota.com.ve/aa4f7882-55a4-423d-8038-c8b0c4816a46.jpeg" alt="2025 Toyota Fortuner SW4" decoding="async" loading="lazy" referrerpolicy="no-referrer">
          </figure>
          <div class="toyota-info">
            <header class="toyota-info-text">
              <span class="toyota-year">2025</span>
              <h3>Toyota Fortuner SW4</h3>
              <p>Robustez y confort para cualquier terreno.</p>
            </header>
            <div class="toyota-buttons">
              <a href="https://www.toyota.com.ve/modelos/fortuner-sw4" class="toyota-btn" target="_blank" rel="noopener">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-right"></i></a>
              <span class="toyota-contact"><a href="#contacto">Cont&aacute;ctanos &gt;</a></span>
            </div>
          </div>
        </article>
      </template>
    </div>
  </section>

  <!-- Accesorios -->
  <section id="accesorios-mm" class="accesorios-mm">
    <div class="accesorios-overlay">
      <div class="accesorios-content">
        <h2>Accesorios Originales Toyota</h2>
        <p>Equipa tu Toyota con accesorios dise&ntilde;ados para potenciar estilo, comodidad y seguridad, siempre con la calidad original.</p>
        <a href="https://www.toyota.com.ve/mi-toyota/accesorios" class="accesorio-btn" target="_blank" rel="noopener">Explorar Accesorios <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- Servicios -->
  <section id="info-mm" class="info-mm">
    <header class="section-header">
      <span class="kicker">Servicios</span>
      <h2>Cuidado total para tu Toyota</h2>
      <p>Mantenimiento, repuestos y atención especializada</p>
    </header>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-car"></i></div>
        <h3>Veh&iacute;culos</h3>
        <p>Descubre toda la gama de veh&iacute;culos disponibles, pensados para tu estilo de vida.</p>
        <a href="#" class="service-btn">Explorar <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-cogs"></i></div>
        <h3>Repuestos</h3>
        <p>Solicita repuestos originales Toyota con garant&iacute;a y confianza asegurada.</p>
        <a href="#" class="service-btn">Pedir repuestos <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fas fa-tools"></i></div>
        <h3>Servicios</h3>
        <p>Mantenimiento, revisi&oacute;n y asistencia t&eacute;cnica especializada para tu Toyota.</p>
        <a href="#" class="service-btn">Agendar cita <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="service-card">
        <div class="service-icon"><i class="fab fa-whatsapp"></i></div>
        <h3>Citas</h3>
        <p>Agenda tu cita de forma r&aacute;pida y sencilla, estamos a un clic de distancia.</p>
        <a href="#" class="service-btn">Cont&aacute;ctanos <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- Sobre nosotros -->
  <section id="sobre-nosotros" class="sobre-nosotros">
    <header class="section-header">
      <span class="kicker">Nuestra historia</span>
      <h2>Excelencia y confianza Toyota</h2>
      <p>Comprometidos con tu movilidad y seguridad</p>
    </header>
    <div class="sobre-nosotros-container">
      <div class="sobre-nosotros-text">
        <h2>Sobre Nosotros</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec elit in urna bibendum interdum. Nulla facilisi. Morbi tincidunt, urna sit amet tincidunt pharetra, lacus nunc egestas ligula, ac vehicula magna felis ut erat. </p>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sagittis nulla a turpis ornare, nec fermentum sapien gravida. </p>
        <a href="#" class="sobre-nosotros-btn">M&aacute;s informaci&oacute;n <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="sobre-nosotros-images">
        <div class="img img1">
          <img src="https://arturomerchan.com/wp-content/uploads/2025/09/MOTORES-MORICHAL-MATURIN.png" alt="Imagen Principal" width="400" height="500" loading="lazy" referrerpolicy="no-referrer">
        </div>
        <div class="img img2">
          <img src="https://arturomerchan.com/wp-content/uploads/2025/09/Motores-Morichal-tu-concesionario-Toyota-en-Maturin-%F0%9F%9A%98%40toyotavenezuelaoficial-%F0%9F%93%8DVisitanos-Av.-Al.jpg" alt="Imagen Secundaria 1" width="400" height="300" loading="lazy" referrerpolicy="no-referrer">
        </div>
        <div class="img img3">
          <img src="https://arturomerchan.com/wp-content/uploads/2025/09/Encuentra-en-Motores-Morichal-el-vehiculo-de-tus-suenos-%F0%9F%A4%A9%F0%9F%9A%98Ademas-disfruta-del-servicio-%F0%9F%91%87%F0%9F%8F%BB%E2%9C%85-M-1.jpg" alt="Imagen Secundaria 2" width="300" height="400" loading="lazy" referrerpolicy="no-referrer">
        </div>
      </div>
    </div>
  </section>

  <!-- Productos -->
  <section id="productos-mm" class="productos-mm">
    <header class="section-header">
      <span class="kicker">Repuestos</span>
      <h2>Originales Toyota al mejor precio</h2>
      <p>Calidad garantizada para el rendimiento de tu vehículo</p>
    </header>
    <div class="productos-grid">
      <div class="producto-card">
        <div class="producto-icon"><i class="fas fa-filter"></i></div>
        <h3>Filtro de Aceite</h3>
        <p>Filtro original Toyota para mantener el motor en &oacute;ptimas condiciones.</p>
        
        <a href="#" class="producto-btn">A&ntilde;adir al carrito <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="producto-card">
        <div class="producto-icon"><i class="fas fa-car-battery"></i></div>
        <h3>Bater&iacute;a Original</h3>
        <p>Bater&iacute;a Toyota de alto rendimiento y larga duraci&oacute;n.</p>
        
        <a href="#" class="producto-btn">A&ntilde;adir al carrito <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="producto-card">
        <div class="producto-icon"><i class="fas fa-car-side"></i></div>
        <h3>Pastillas de Freno</h3>
        <p>Juego de pastillas delanteras originales Toyota, m&aacute;xima seguridad.</p>
        
        <a href="#" class="producto-btn">A&ntilde;adir al carrito <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="producto-card">
        <div class="producto-icon"><i class="fas fa-wind"></i></div>
        <h3>Filtro de Aire</h3>
        <p>Filtro de aire Toyota para mayor eficiencia y consumo optimizado.</p>
        
        <a href="#" class="producto-btn">A&ntilde;adir al carrito <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- Blog -->
  <section id="whatsapp-mm" class="whatsapp-mm">
    <header class="section-header">
      <span class="kicker">Contacto</span>
      <h2>Solicita información por WhatsApp</h2>
      <p>Resolvemos tus dudas rápidamente</p>
    </header>
    <div class="whatsapp-wrap">
      <?php echo do_shortcode('[formulario_mmorichal]'); ?>
    </div>
  </section>

  <section id="blog-mm" class="blog-mm">
    <header class="section-header">
      <span class="kicker">Noticias</span>
      <h2>Historias y novedades Toyota</h2>
      <p>Tendencias, consejos y lanzamientos destacados</p>
    </header>
    <div class="blog-grid">
      <?php
      $blog_query = new WP_Query(array(
        'post_type'           => 'post',
        'posts_per_page'      => 3,
        'ignore_sticky_posts' => true,
      ));
      if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();
      ?>
        <article class="blog-card">
          <?php
            $has_thumb = has_post_thumbnail();
            $img_alt   = esc_attr(get_the_title());
          ?>
          <div class="blog-img">
            <a href="<?php the_permalink(); ?>">
              <?php if ($has_thumb) {
                the_post_thumbnail('large', array('alt' => $img_alt));
              } else {
                $seed = get_the_ID();
                $ph   = sprintf('https://picsum.photos/seed/%d/600/400', (int)$seed);
              ?>
                <img src="<?php echo esc_url($ph); ?>" alt="<?php echo $img_alt; ?>" />
              <?php } ?>
            </a>
          </div>
          <div class="blog-content">
            <span class="blog-meta"><?php echo esc_html( get_the_date() ); ?></span>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo wp_kses_post( wp_trim_words( get_the_excerpt(), 24, '…' ) ); ?></p>
            <a href="<?php the_permalink(); ?>" class="blog-btn">Leer m&aacute;s</a>
          </div>
        </article>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <p class="no-posts">No hay art&iacute;culos publicados a&uacute;n.</p>
      <?php endif; ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
