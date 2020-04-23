<?php
    
$url = "https://public-api.wordpress.com/rest/v1.1/sites/109720969/posts?format=debug";
$postagens = json_decode(file_get_contents($url));

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

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
                                    <a href="https://veja.abril.com.br/?s=dialogos+vazados&orderby=date">
                                        <span>Diálogos Vazados</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://veja.abril.com.br/?s=previdencia&orderby=date">
                                        <span>Previdência</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://veja.abril.com.br/radar">
                                        <span>Radar</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://veja.abril.com.br/paginas-amarelas">
                                        <span>Páginas Amarelas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://veja.abril.com.br/edicoes-veja/">
                                        <span>Revista</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://veja.abril.com.br/newsletter">
                                        <span>Newsletter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://veja.abril.com.br/podcasts">
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
                                    $j=0;
                                    $k=0;
                                    $l=0;
                                    
                                    foreach($postagens->posts as $post) {
                                        $i++;
                                    
                                        $data = strftime('%d %B %Y, %Hh%M', strtotime($post->date)); 
                                        
                                        
                                        foreach($post->categories as $categories) {
                                            $categorias[$j] = $categories->name;
                                            $j++;

                                        }  
                                        
                                        foreach($post->categories as $slugs) {
                                            $slug[$l] = $categories->slug;
                                            $l++;

                                        }

                                        
                            ?>

                            <div id="post" class="row">

                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="<?=$post->URL ?>">
                                            <figure class="media">
                                                <img loading="lazy" src="<?=$post->featured_image ?>" data-srcset="" alt="" data-pin-nopin="true" width="360" height="240" srcset="" src-orig="" scale="2">
                                            </figure>
                                        </a>
                                        <span class="category">
                                            <a href="https://veja.abril.com.br/<?=$categorias[$k]?>"><?=$categorias[$k]?></a>
                                        </span>
                                        <a href="<?=$post->URL ?>">
                                            <h2 class="title">
                                                <?=$post->title ?>
                                            </h2>
                                        </a>
                                        <a href="https://veja.abril.com.br/<?=$slug[$k]?>">
                                            <span class="author">
                                                <time datetime="" class="hide-s"><img src="img/relogio.png" alt="" class="relogio">| <?=$data ?></time><br>
                                                <img loading="lazy" src=" <?=$post->author->avatar_URL ?>" alt="<?=$post->author->name ?>" class="image">
                                                <ul>
                                                    <li><big><?=$categorias[$k]?></big></li>
                                                    <li><span><?=$post->author->name ?></span></li>
                                                </ul>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <?php
                                
                                            $k++;
                            
                                        
                                               }
                                    
                                  
                                }
                            ?>

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
