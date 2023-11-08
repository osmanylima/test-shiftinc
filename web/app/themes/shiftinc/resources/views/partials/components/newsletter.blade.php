<section id="newsletter">
  <div class="container-lg py-70">
    <div class="col-xl-8 col-lg-9 col-md-8 col-sm-9 mx-auto gap-3 d-grid mb-4">
      <h2>{{ get_field('titulo_news', $page_home) }}​</h2>

      <p>{{ get_field('subtitulo_news', $page_home) }}</p>
    </div>

    <form id="form-news">
      <div class="d-flex gap-lg-4 gap-md-2 gap-4 justify-content-between flex-column flex-md-row">
        <div class="col form-group ginput_container_text">
          <img src="@asset('images/ico-name.svg')" alt="" class="img-fluid svg">
          <input type="text" value="" class="form-control" placeholder="Nome completo">
        </div>

        <div class="col form-group ginput_container_email">
          <img src="@asset('images/ico-mail.svg')" alt="" class="img-fluid svg">
          <input type="email" value="" class="form-control" placeholder="E-mail">
        </div>
    
        <div class="col form-group ginput_container_text">
          <img src="@asset('images/ico-pass.svg')" alt="" class="img-fluid svg">
          <input type="password" value="" class="form-control" placeholder="Crie sua senha">
        </div>
    
        <div class="col form-group ginput_container_text">
          <button type="submit" class="btn btn-primary mw-100 w-100">TESTE GRÁTIS</button>
        </div>
      </div>
    </form>
  </div>
</section>