<?php $page_title = "Home";
$nome = "admin";
include '../header.php';
include 'admin-dashboard.php';

?>

    <div class="background-home">

        <div class="wrapper">
            <div class="content">
              <style>

              .background-home {
  background-image: url(http://glowproducoes.com.br/sites/glow2017/admin/portfolio-pattern.jpg)!important;
}

#portfolio-form {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding: 20px 0px;
  margin: 0px;
}

#portfolio-form input {
  width: 300px;
  height: 30px;
  padding: 5px;
  margin: 5px;
}

.title {
  margin: 0px!important;
}

#portfolio-form p {
  margin: 5px 10px;
}

#portfolio-form select {
  background: #ececec;
  border: 0px;
  margin: 5px;
  padding: 5px;
  width: 300px;
  height: 30px;
}

#portfolio-form span {
  margin: 10px;
}

#dashboard {
  background-image: none;
  background-color: #ee165d;
}

.portfolio-preview {
  width: 800px;
  background: black;
  height: 450px;
  margin: 60px 0px;
  border: 3px solid #606060;
}

              </style>

                <div id="home-servicos-bg">
                  <br/>

                </br/>
                  <div class="title">
                      <h2 class="content-title">+</h2> <div class="content-title-bar"></div> <h3 class="content-sub-title">Adicionar vídeos em portfolio</h3>
                  </div>
                  

                  <form id="portfolio-form" action="addvideo.php" method="post">
                    <div style="width:400px;height: auto;display:flex;flex-wrap:wrap;">

                      <p><span>ID do vídeo (vimeo):</span><br /><input type="text" name="video_string" /></p>
                       <p><span>Nome do cliente:</span><br /><input type="text" name="cliente_string" /></p>
                       <p><span>Título do vídeo:</span><br /><input type="text" name="producao_string" /></p>
                        <p><span>Ano do vídeo:</span><br /><input type="text" name="ano_string" /></p>
                          <p><span>Categoria do vídeo:</span><br /><select name="categoria_string">
                        <option value="0">Videoclipe</option>
                        <option value="1">Ao Vivo</option>
                        <option value="2">Institucional</option>
                        <option value="3">Eventos</option>
                        <option value="4">Youtuber</option>
                        <option value="5">Imagens Aéreas</option>
                      </select></p>

                        <p>
                          <span>Thumbnail:</span><br /><input type="file" name="image_string" id="imgInp">
                        </p>

                      <p><input type="submit" /></p>
                        </div>

                        <div class="portfolio-preview">
                          <img style="object-fit: cover;" width="100%" height="100%" id="blah" src="portfolio-preview.jpg" alt="your image" />
                        </div>

                    </form>

              </div>
            </div>
        </div>
    </div>

<?php include '../footer.php' ;?>
