<?php

include_once("admin/conecta.php");
$query = "SELECT * FROM slides ORDER BY id";
$slides = mysqli_query($conexao, $query);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
   <!-- Cor da barra do navegador -->
    <meta name="theme-color" content="#002b4c">
    <meta name="msapplication-navbutton-color" content="#002b4c">
    <meta name="apple-mobile-web-app-status-bar-style" content="#002b4c">
    
    <meta name="Description" content="Fabricante de invólucros metálicos, painéis, gabinetes, cubículos, mesas de comando, CCM e racks, além de equipamentos para laboratório têxtil e químico. Também produz peças conforme projeto e necessidade do cliente.">

    <!-- Favicon -->
    <link rel="icon" href="imagens_frontend/Kimak-icon2-16.png" sizes="16x16">
    <link rel="icon" href="imagens_frontend/Kimak-icon2-32.png" sizes="32x32">
    <link rel="icon" href="imagens_frontend/Kimak-icon2-72.png" sizes="72x72">
    <link rel="icon" href="imagens_frontend/Kimak-icon2-192.png" sizes="192x192">
    
    <!-- Bootstrap, jQuery -->
    <link rel="stylesheet" href="plugins/bootstrap-kimak.css">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Heebo:100" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
    
    <title>Kimak - Metalúrgica de Brusque/SC</title>
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <nav class="navbar navbar-inverse navbar-fixed-top sticky" >
        <div class="container-fluid">
            <div class="navbar-header container-fluid">
                <button onclick="collapseClick()" class="navbar-toggle" data-toggle="collapse" data-target="#menu-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand scrollTo" href="#topo">Kimak</a>
            </div>
            <ul class="nav navbar-nav navbar-right collapse navbar-collapse border-xs-left-only border-sm-bottom-only" id="menu-collapse">
                <li class="active"><a href="#topo"class="scrollTo">Home</a></li>
                <li><a href="#produtos"class="scrollTo">Produtos</a></li>
                <li><a href="#sobre"class="scrollTo">Sobre</a></li>
                <li><a href="#footer"class="scrollTo">Contato</a></li>
            </ul>
        </div>
    </nav>
    <div id="topo">
        <div id="topo-info" class="col-xs-12 col-sm-5">
            <h1 class="col-xs-9 col-sm-7 col-sm-offset-1 text-right">Kimak</h1>
            <p id="subtitle" class="col-xs-9 col-sm-7 col-sm-offset-1 text-right">Soluções metálicas</p>
            <img src="imagens_frontend/k-prata.png" alt="Kimak logo" class="image-responsive">
        </div>
        <div class="clearfix visible-xs"></div>
        <div id="carousel" class="col-xs-12 col-sm-6">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2820">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php
                $first = true;
                while($linha = mysqli_fetch_assoc($slides)){
                    if ($first){
                        echo '<div class="item active"><img src="imagens_produtos/'.$linha['imagem'].'" alt="'.$linha['alt'].'" class="image-responsive"></div>';
                        $first = false;
                    } else {
                        echo '<div class="item"><img src="imagens_produtos/'.$linha['imagem'].'" alt="'.$linha['alt'].'" class="image-responsive"></div>';
                    }
                }
                ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="produtos">
        <div class="painel slideIn col-sm-4 text-center " >
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 painel-quadrado" id="paineis" onclick="window.location.replace('paineis/')">
                <div class="icon">
                    <span class="glyphicon glyphicon-modal-window"></span>
                </div>
                <div class="painel-texto col-xs-12">
                    <h2>Painéis</h2>
                    <p>Gabinetes seriados e personalizados</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="painel slideIn3 col-sm-4 text-center">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 painel-quadrado" id="servicos" onclick="window.location.replace('servicos/')">
                <div class="icon">
                    <span class="glyphicon glyphicon-compressed"></span>
                </div>
                <div class="painel-texto col-xs-12">
                    <h2>Serviços</h2>
                    <p>Fabricação de peças e partes sob projeto</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="painel slideIn2 col-sm-4 text-center ">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 painel-quadrado" id="lab" onclick="window.location.replace('maquinas-laboratorio/')">
                <div class="icon">
                    <span class="glyphicon glyphicon-filter"></span>
                </div>
                <div class="painel-texto col-xs-12">
                    <h2>Máquinas de Laboratório</h2>
                    <p>Para segmentos têxtil e químico</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="sobre">
        <h3 class="slideIn">Um pouco sobre nós</h3>
        <p id="sobre-texto" class="col-xs-12 col-sm-8 slideIn">
        </br>Localizada em Brusque, Santa Catarina, a Kimak foi fundada em 1988, prestando serviços de manutenção mecânica em equipamentos e máquinas das indústrias têxteis, contando unicamente com a experiência de anos no ramo de manutenção dos sócios-fundadores. Hoje, conta com mais de 5000 m² de área construída e uma equipe de profissionais qualificados em cada um de seus trê segmentos, além de uma equipe para desenvolver projetos exclusivos e personalizados de acordo com as necessidades de seus clientes. Desde 2015 segue a resolução ISO 9001:2015 que atesta a qualidade e segurança dos produtos, bem como o atendimento e suporte aos clientes. "Soluções" é o que define o compromisso com nossos clientes.</br></br><strong>Nossa Política de Qualidade</strong> envolve atender aos requisitos de seus clientes, fornecendo produtos e serviços com a mais alta qualidade, por meio da melhoria contínua dos processos, capacitação e desenvolvimento de seus colaboradores e aperfeiçoando continuamente seu sistema de gestão da qualidade.</p></br>
        <div class="clearfix"></div>
    </div>
    <footer id="footer">
        <div id="contato-left" class="col-xs-12 col-sm-6 slideIn2">
            <h4>Contate-nos</h4>
            <address>
                <div class="row">
                    <dl class="col-xs-12 col-sm-6">
                        <dt>Geral</dt>
                            <dd>(47) 3251 - 7000</dd>
                            <dd><a href="mailto:kimak@kimak.com.br" title="Enviar e-mail">kimak@kimak.com.br</a></dd>
                            <br>
                        <dt>Painéis</dt>
                            <dd>(47) 3251 - 7016</dd>
                            <dd><a href="mailto:comercial@kimak.com.br" title="Enviar e-mail">comercial@kimak.com.br</a></dd>
                    </dl>
                    <dl class="col-xs-12 col-sm-6">
                        <dt>Máquinas de Laboratório</dt>
                            <dd>(47) 3251 - 7000</dd>
                            <dd><a href="mailto:kimak@kimak.com.br" title="Enviar e-mail">kimak@kimak.com.br</a></dd>
                            <br>
                        <dt>Serviços</dt>
                            <dd>(47) 3251 - 7024</dd>
                            <dd><a href="mailto:consulta@kimak.com.br" title="Enviar e-mail">consulta@kimak.com.br</a></dd>
                    </dl>
                </div>
                <p id="endereco"><strong>Endereço:</strong> Rua Joaquim Zucco, 697 - Bairro Nova Brasília - Brusque/SC - 88352-195 <a href="https://www.google.com/maps/place/Kimak+Ind%C3%BAstria+E+Com%C3%A9rcio+M%C3%A1quinas+Knihs/@-27.0852052,-48.8939256,16z/data=!4m5!3m4!1s0x94df47e61be85b55:0x57a3b2727567bc22!8m2!3d-27.0895979!4d-48.8886586" target="_blank" title="Abrir no Google Maps"><small>(Ver no mapa <span class="glyphicon glyphicon-globe"></span>)</small></a></p>
                <a href="https://www.google.com/maps/@-27.0898295,-48.8887051,3a,75y,100.05h,83.23t/data=!3m6!1e1!3m4!1sk3rc4pgE4PZnj-Gl-TIT6Q!2e0!7i13312!8i6656" target="_blank" title="Abrir no Google Street View"><img id="img-footer" class="slideIn image-responsive col-xs-10" src="imagens_frontend/kimak-frente2-8.jpg" alt="Metalúrgica Kimak - Frente"></a>
            </address>
        </div>
        <div class="clearfix visible-xs"></div>
        <div id="map" class="slideIn col-xs-12 col-sm-6">
            <a href="https://www.google.com/maps/place/Kimak+Ind%C3%BAstria+E+Com%C3%A9rcio+M%C3%A1quinas+Knihs/@-27.0852052,-48.8939256,16z/data=!4m5!3m4!1s0x94df47e61be85b55:0x57a3b2727567bc22!8m2!3d-27.0895979!4d-48.8886586" target="_blank" title="Abrir no Google Maps"><img src="imagens_frontend/kimak-mapa.jpg" class="image-responsive" alt="Metalúrgica Kimak - Mapa"></a>
        </div>
        <div class="clearfix"></div>
        <br>
        <div id="footer-bottom">
            <ul class="list-unstyled">
                <a href="#topo" class="scrollTo"><li>Home <span class="glyphicon glyphicon-home visible-xs"> </span></li></a>
                <a href="paineis/"><li>Painéis <span class="glyphicon glyphicon-modal-window visible-xs"> </span></li></a>
                <a href="servicos/"><li>Serviços <span class="glyphicon glyphicon-compressed visible-xs"> </span></li></a>
                <a href="maquinas-laboratorio/"><li>Laboratório <span class="glyphicon glyphicon-filter visible-xs"> </span></li></a>
                <a href="#footer"><li>Info <span class="glyphicon glyphicon-info-sign visible-xs"> </span></li></a>
            </ul>
        </div>
        <div class="clerafix"></div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="script.js"></script>
</html>