<?php
    
$url = "https://public-api.wordpress.com/rest/v1.1/sites/109720969/posts?number=10&page=1&format=debug";
$postagens = json_decode(file_get_contents($url));

echo("<PRE>");
print_r($postagens);
exit;


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <!--
  /*************************************************************/
   * Data           : 04/2020
   * @copyright     : VEJA SA
   * Layout         : MB Santiago Jr.
   * Development    : MB Santiago Jr.
   * Módulo         : Teste Front-End
   *************************************************************/
  -->

    <meta charset="UTF-8">
    <meta name="dc.title" content="Teste FRONT-END | Últimas Notícias | VEJA">
    <meta name="dc.creator" content="MB Santiago Jr.">
    <meta name="language" content="pt-br">
    <meta name="description" content="Teste de Front-End">
    <meta name="keywords" content="VEJA + Teste + Lazy Loading + PHP + Mobile First + Grid System">
    <meta name="robots" content="index,follow">
    <meta name="author" content="MB Santiago Jr.">
    <meta name="contact" content="mbsantiago.lab@gmail.com">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="VEJA">
    <meta property="og:url" content="https://veja.abril.com.br/ultimas-noticias/">
    <meta property="og:title" content="Últimas Notícias | VEJA">
    <meta property="og:description" content="">
    <meta property="og:image" content="https://abrilveja.files.wordpress.com/2020/02/zema.jpeg?quality=70&amp;strip=info&amp;w=620">


    <link rel="shortcut icon" href="favicon.ico">


    <title>Últimas Notícias | VEJA</title>

    <!-- CSS -->
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/grid-system.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">

</head>


<body>

    <header>

        <div class="container">

            <div class="row">

                <div class="col-sm-4 col-md-4">
                    <h1>
                        <a href="">
                            <img src="img/veja.svg" alt="">
                        </a>
                    </h1>
                </div>

                <div class="col-sm-6 col-md-8">
                    <nav>
                        <div>
                            <ul>
                                <li>
                                    <a href="">
                                        <span>Diálogos Vazados</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span>Previdência</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span>Radar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span>Páginas Amarelas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span>Revista</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span>Newsletter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <span>Podcasts</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
        </div>

    </header>

    <div class="container">

        <section class="container">
            <header>
                <div class="row">
                    <h1>Últimas Notícias</h1>
                </div>
            </header>

            <div class="row">
                <div class="col-md-8">

                    <section class="cards">

                        <section id="infinite-list">

                            <?php 
                            
                                if (count($postagens->posts)) {
                                    $i=0;
                                    
                                    foreach($postagens->posts as $post) {
                                        $i++;
                                        
                            ?>

                            <div id="post" class="row">

                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="<?=$post->url ?>">
                                            <figure class="media">
                                                <img src="<?=$post->featured_image ?>" data-srcset="" alt="" data-pin-nopin="true" width="360" height="240" srcset="" src-orig="" scale="2">
                                            </figure>
                                        </a>
                                        <span class="category">
                                            <a href=""></a>
                                        </span>
                                        <a href="">
                                            <h2 class="title">Título</h2>
                                        </a>
                                        <a href="">
                                            <span class="author">
                                                <img src="" alt="" class="image" width="24" height="24" srcset="">
                                                <time datetime="" class="hide-s"><?=$post->author->name ?> | 16 set 2019, 17h36</time>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <?php
                                    }
                                    
                                }
                            ?>

                            <div id="post" class="row">

                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="">
                                            <figure class="media">
                                                <img src="" data-srcset="" alt="" data-pin-nopin="true" width="360" height="240" srcset="" src-orig="" scale="2">
                                            </figure>
                                        </a>
                                        <span class="category">
                                            <a href="">Economia</a>
                                        </span>
                                        <a href="">
                                            <h2 class="title">Coronavírus: Transportes e restaurantes lideram acordos coletivos de março</h2>
                                        </a>
                                        <a href="">
                                            <span class="author">
                                                <img src="" alt="" class="image" width="24" height="24" srcset="">
                                                <time datetime="" class="hide-s">22 abr 2020, 14h54</time>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>


                            <div id="post" class="row">

                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="">
                                            <figure class="media">
                                                <img src="" data-srcset="" alt="" data-pin-nopin="true" width="360" height="240" srcset="" src-orig="" scale="2">
                                            </figure>
                                        </a>
                                        <span class="category">
                                            <a href="">Economia</a>
                                        </span>
                                        <a href="">
                                            <h2 class="title">Coronavírus: Transportes e restaurantes lideram acordos coletivos de março</h2>
                                        </a>
                                        <a href="">
                                            <span class="author">
                                                <img src="" alt="" class="image" width="24" height="24" srcset="">
                                                <time datetime="" class="hide-s">22 abr 2020, 14h54</time>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="row">

                                <div id="infinite-handle"><button>Carregar mais</button></div>

                            </div>



                        </section>

                    </section>




                </div>

                <div class="col-xs-12 col-md-3">
                    <div class="ads">
                        <span class="title">Publicidade</span>
                        <div id="" class="" data-ad-sizes="">
                        </div>
                        <div id="" class="" data-ad-sizes="">
                        </div>
                    </div>
                </div>

            </div>


        </section>



    </div>

    <footer>
        <div class="container">
            <p>© Abril Mídia S A. Todos os direitos reservados.</p>
            <p style="text-align: right">Powered by Wordpress.com VIP</p>
        </div>
    </footer>

</body>

</html>
