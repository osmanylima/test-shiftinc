@if(have_rows('cards') )
<div class="list-cards">
@while(have_rows('cards')) 
@php(the_row())
<section id="{{ get_sub_field('id_secao') }}" style="background-color: {{ get_sub_field('background-color') }};">
  <div class="container-lg py-50">
    <div class="row">
      <article class="col-md-6 col-sm-10 text-center text-md-start d-grid align-items-center align-content-center mb-3 mb-md-0 mx-auto mx-md-0">
        <div class="mb-3 text-center d-md-none px-sm-4">
          <h2>{{ get_sub_field('titulo_card') }}</h2>
        </div>

        <figure>
          <img src="{{ get_sub_field('imagem_card') }}" alt="" class="img-fluid">
        </figure>
      </article>

      <article class="col-md-6 col-sm-10 text-center text-md-start d-grid align-items-center align-content-center gap-4 pe-xl-4 mx-auto mx-md-0">
        <div class="d-none d-md-block">
          <h2>{{ get_sub_field('titulo_card') }}</h2>
        </div>

        {!! get_sub_field('subtitulo_card') !!}

        <?php 
          $cta = get_sub_field('cta_card');

          if( $cta ): 
          $link_url = $cta['url'];
          $link_title = $cta['title'];
          $link_target = $cta['target'] ? $cta['target'] : '_self';
        ?>
          <a href="{{ $link_url }}" target="{{ $link_target }}" class="btn btn-hover mx-auto mx-md-0">{{ $link_title }}</a>
        <?php endif; ?>

        <p><small>{!! get_sub_field('descricao_card') !!}</small></p>
      </article>
    </div>
  </div>
</section>
@endwhile
</div>
@endif