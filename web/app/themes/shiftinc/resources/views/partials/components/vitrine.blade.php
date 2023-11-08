<section id="hero">
  <div class="container-lg">
    <div class="row">
      <div class="col-md-6 col-sm-10 text-center text-md-start order-md-2 d-grid align-items-center align-content-center mb-4 mb-md-0 mx-auto mx-md-0">
        <div class="mb-3 text-center d-md-none px-sm-4">
          <h1>{{ get_field('titulo_hero', $page_home) }}</h1>
        </div>

        <figure>
          <img src="{{ get_field('imagem_hero', $page_home) }}" alt="" class="img-fluid">
        </figure>
      </div>
      <div class="col-md-6 col-sm-10 text-center text-md-start order-md-1 d-grid align-items-center align-content-center gap-4 pe-xl-4 mx-auto mx-md-0">
        <div class="d-none d-md-block">
          <h1>{{ get_field('titulo_hero', $page_home) }}</h1>
        </div>

        <h4>{{ get_field('subtitulo_hero', $page_home) }}​</h4>

        <?php 
          $cta = get_field('cta_hero');

          if( $cta ): 
          $link_url = $cta['url'];
          $link_title = $cta['title'];
          $link_target = $cta['target'] ? $cta['target'] : '_self';
        ?>
          <a href="{{ $link_url }}" target="{{ $link_target }}" class="btn btn-white mx-auto mx-md-0">{{ $link_title }}</a>
        <?php endif; ?>
        
        {!! get_field('descricao_hero', $page_home) !!}
      </div>
    </div>
  </div>
</section>