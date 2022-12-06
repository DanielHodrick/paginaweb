<?php 
    require_once("vendor/autoload.php");
    $listaCat = caleb\Inventario2022\Categoria::listar(new caleb\Inventario2022\Mysql());
    $listaProd= caleb\Inventario2022\Producto::Listar(new caleb\Inventario2022\Mysql());
    $listaPeli= caleb\Inventario2022\Pelicula::Listar(new caleb\Inventario2022\Mysql());
?>

<!DOCTYPE html >
<html >
   <head>
        <title>Sitio web Peliculas </title>
        	

        <link href="peliculalogo.png" rel="icon" type="image/x-icon">
        <link rel="alternate" type="application/rss+xml" title="Jkanime RSS Feed" href="http://localhost/proyecto-final/admproducto.php"/>
        <script src="https://cdn.jkdesu.com/assets2/js/jquery-3.3.1.min.js"></script>
               <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/plyr.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/nice-select.css?=v1.0" type="text/css">
        <link rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/jquery-confirm.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/jquery.toast.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/style.css?=v5.3" type="text/css">

            
            
                <script>

 $(function(){
$('#darkswitch').change(function() {
        if ($(this).is(':checked')) {
         crear_cookie("darkmode","true",43200);
         $('head').append('<link id="darkcss" rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/dark.css?=v3.9" type="text/css" />');
         $(".header__logo img").attr("src", $(".header__logo img").attr("src").replace(".png","-dark.png"));
        } else {
           $('#darkcss').remove();
           crear_cookie("darkmode","false",-1);
           $(".header__logo img").attr("src", $(".header__logo img").attr("src").replace("-dark.png",".png"));
        }
      });

if(leer_cookie("darkmode")) {
$( "#darkswitch" ).prop( "checked", true );
$(".header__logo img").attr("src", $(".header__logo img").attr("src").replace(".png","-dark.png"));

}

    });
 
 function darkmode() {
if(!$("#darkcss").length) {
$('head').append('<link id="darkcss" rel="stylesheet" href="https://cdn.jkdesu.com/assets2/css/dark.css?=v3.9" type="text/css" />');
darkmode();
}
}
if(leer_cookie("darkmode")) {
darkmode();
}
</script>


            
            	
    <style>
    b.red {
    color: #ff7600;
    }
    </style>
                                        

                                
    </head> 
    <body>
        <div id="modal"></div>
    
     <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="/proyecto-final/header.php">
                            <img src="peliculalogo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7">
                   <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            
                            <ul class="addmenu">
                                <li class="active"><a href="">Inicio</a></li>
                                <li class="active"><a href="http://localhost/proyecto-final/admproducto.php">Añadir peliculas</a></li>
                                
                                <li class="active" ><a href="http://localhost/proyecto-final/admpelicula.php">Añadir Series</a></li>
                                <li class="active"><a href="https://www.netflix.com/bo/" target="_blank">Netflix</a></li>
                                <li>
                                    <button data-trigger="#navbar_main" class="d-lg-none btn btn-light navbar-light" type="button">  <span class="navbar-toggler-icon"></span></button>
					
                    
                                </li>
                                
                            </ul>
                            
                            
                        </nav>
						
                    </div>
                </div>
                
                <div class="col-lg-3">
                    <div class="header__right">
					
						
						
						<form role="search" autocomplete="off" id="form_search_ajax" class="form_search2" action="/buscar/q/" method="get">
                             
                                <input type="search" id="buscanime" class="buscanime solopc" name="q" class="form_control" rel="Buscar Anime" placeholder="Buscar Anime..." value="" required/>
                                
<button class="buton-form solopc" id="btn_qsubmit" type="submit"><i class="search"></i></button>
									<div style="display: none;" id="search_results"><div id="qloader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>							
                            </form>
                            
					<b class="screen-overlay"></b>
					<button data-trigger="#navbar_main" class="d-lg-none btn btn-light navbar-light" type="button">  <span class="navbar-toggler-icon"></span></button>
					
							<button class="usr-menu" type="submit"><i class="fa not fa-user-circle"></i></button>	
							<ul style="display: none;" id="authmenu">
							<li class="auth"><a href="/perfil">Mi perfil</a></li>
							<li class="auth"><a href="/guardado">Guardado</a></li>
							<li class="auth"><a class="logdom salir" href="/salir">Salir</a></li>
							<li class="noauth logdom"><a class="logdom entrar" href="#entrar">Entrar</a>
                                
                            </li>
							<li class="noauth logdom"><a  href="http://localhost/proyecto-final/registro.php">Registrarme</a></li>
							</ul>

						<nav id="navbar_main" class="solomovil mobile-offcanvas navbar navbar-expand-lg navbar-dark bg-primary">
						  <div class="offcanvas-header">  
							<form role="search" id="form_search_ajax" class="form_search2 mob" action="/buscar/q/" method="get">
                             
                                <input type="search" id="buscanime" class="buscanime" name="q" class="form_control" rel="Buscar Anime" placeholder="Buscar Anime..." value="" required/>
                                
                                <button class="buton-form" id="btn_qsubmit" type="submit"><i class="search"></i></button>
											
											<div style="display: none;" class="mob" id="search_results"><div id="qloader" class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>				
																
                            </form>
						  </div>
						  
					

					
						</nav>
						                    	

                    </div>
                    

                </div>
                



		
            </div>
			
	


			
			
        </div>

                       </header> 
                    
     <section class="solopc" style="display: none;">
	
        <div class="menupc">
		<div class="row">
						
					<div class="type-list addmenu">
                        <h3>Peliculas por tipo:</h3>
                        <ul>
                           <li><a href="" title="Peliculas estrenos">Estrenos</a></li>
                            <li><a href="" title="Peliculas populares">Populares</a></li>

                        </ul>
                    </div>
					
					<div class="genre-list addmenu">
									
						
                        
                        
                        <h3>Peliculas por Genero:</h3>
                        <ul>
                          
                            <!--<li><a href="/genero/artes-marciales/" title="Animes de Artes Marciales">Artes Marciales</a></li>
                            <li><a href="/genero/autos/" title="Animes de Autos">Autos</a></li>
                            <li><a href="/genero/aventura/" title="Animes de Aventura">Aventura</a></li>
                            <li><a href="/genero/colegial/" title="Animes de Colegial">Colegial</a></li>
                            <li><a href="/genero/comedia/" title="Animes de Comedia">Comedia</a></li>
                            <li><a href="/genero/cosas-de-la-vida/" title="Animes de Cosas de la vida">Cosas de la vida</a></li>
                            <li><a href="/genero/dementia/" title="Animes de Dementia">Dementia</a></li>
                            <li><a href="/genero/demonios/" title="Animes de Demonios">Demonios</a></li>
                            <li><a href="/genero/deportes/" title="Animes de Deportes">Deportes</a></li>
                            <li><a href="/genero/drama/" title="Animes de Drama">Drama</a></li>
                            <li><a href="/genero/ecchi/" title="Animes de Ecchi">Ecchi</a></li>
                            <li><a href="/genero/fantasa/" title="Animes de Fantasia">Fantasia</a></li>
                            <li><a href="/genero/harem/" title="Animes de Harem">Harem</a></li>
                            <li><a href="/genero/historico/" title="Animes de Historico">Historico</a></li>
                            <li><a href="/genero/josei/" title="Animes de Josei">Josei</a></li>
                            <li><a href="/genero/juegos/" title="Animes de Juegos">Juegos</a></li>-->
                            <?php foreach($listaCat as $cat){ ?>
                                <li><a href="https://www.pelisplus.lat/category/<?= $cat->getNombre() ?>/" title="peliculas de "><?= $cat->getNombre() ?></a></li>
                                                                  

                                        
                            <?php } ?>
                            
                        </ul>
                    </div>

                    
                    
	</div>    
                    
	</section>
	

         

       
                
<section class="destacados guardados spad" style="display: none;">
		<div class="container">


					<div class="section-title init">
						<h4>Continuar viendo...</h4>
						
					<div class="init_select"><select id="guardados_orden">
					<option value="1">Orden Personalizado</option>
					<option value="2">Recientes</option>
                </select>
                
                <a class="see_all btn btn-primary" id="mas_recientes" href="/guardado">Ver todo</a>
				</div>
			
				
			</div>
			
			
			<div id="recientes_div">
			<div class="row recientes_div"></div>
			<div id="loader"><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>
			<div id="loadbtn"><div id="loadmore" style="display: none;" data-tipo="recientes">Mostrar m�s</div></div>
			</div>
			
		
	
		</div>
	</section>
	
<section class="hero">
        <div class="container">
			<div class="row">
		
			<div class="col-lg-8">
			
            <div class="hero__slider owl-carousel">                                 
                            
                            <div class="hero__items set-bg" data-setbg="https://panoramicadelasartes.files.wordpress.com/2020/10/avatar2.jpg?w=1024">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="hero__text">

                                            <h2>AVATAR 2</h2>

                                            <a href="https://www.youtube.com/watch?v=QC5eaMNaHLs"><span>VER TRAILER</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            
                            
                            <div class="hero__items set-bg" data-setbg="https://phantom-marca.unidadeditorial.es/2e5e720af410c6fb7705d39993638bc9/resize/1320/f/jpg/assets/multimedia/imagenes/2022/02/11/16445345407827.jpg">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="hero__text">

                                            <h2>JURASSIC WORLD</h2>

                                            <a href="https://www.youtube.com/watch?v=RJ4b1ZQxPmE"><span>VER TRAILER</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            
                            
                            <div class="hero__items set-bg" data-setbg="https://www.melomanodigital.com/wp-content/uploads/2022/05/CINE-284-BATMAN.jpg">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="hero__text">

                                            <h2>THE BATMAN</h2>

                                            <a href="https://www.youtube.com/watch?v=fWQrd6cwJ0A"><span>VER TRAILER</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            
                            
                            <div class="hero__items set-bg" data-setbg="https://i.blogs.es/2e407d/doctor-strange-en-el-multiverso-de-la-locura-cartel-poster/1366_2000.jpeg">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="hero__text">

                                            <h2>DOCTOR STRANGE 2</h2>

                                            <a href="https://www.youtube.com/watch?v=KREBGtEeW9U"><span>VER TRAILER</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            
                            
                            <div class="hero__items set-bg" data-setbg="https://airesdehidalgo.com/wp-content/uploads/2022/05/thor-love-thunder-marvel-studios-trailer-gorr.jpg">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="hero__text">

                                            <h2>THOR 4</h2>

                                            <a href="https://www.youtube.com/watch?v=meNfg26orQI"><span>VER TRAILER</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            
                            
                            <div class="hero__items set-bg" data-setbg="https://i.blogs.es/7307fb/animales-fantasticos-los-secretos-de-dumbledore/1366_2000.jpeg">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="hero__text">

                                            <h2>ANIMALES FANTASTICOS</h2>

                                            <a href="https://www.youtube.com/watch?v=oImEeiCiYTk"><span>VER TRAILER</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            
                            
                            <div class="hero__items set-bg" data-setbg="https://i.ytimg.com/vi/zzBIzYmxatU/maxresdefault.jpg">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="hero__text">

                                            <h2>TOP GUN 2</h2>

                                            <a href="https://www.youtube.com/watch?v=zzBIzYmxatU"><span>VER TRAILER</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            
                            
                            <div class="hero__items set-bg" data-setbg="https://static1.colliderimages.com/wordpress/wp-content/uploads/2021/12/lightyear-what-we-know.jpg">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="hero__text">

                                            <h2>LIGHTYEAR</h2>

                                            <a href="https://www.youtube.com/watch?v=orYSANFnv9M"><span>VER TRAILER</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            
                            
                            <div class="hero__items set-bg" data-setbg="https://i.blogs.es/e54a58/16435651899742/1366_2000.jpg">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="hero__text">

                                            <h2>MONFALL</h2>

                                            <a href="https://www.youtube.com/watch?v=5ZvH_pIq1Oc"><span>VER TRAILER</span> <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        
                        </div>
			
			<div class="solopc">
			
			<div class="row">
			<div class="col-12  pt-3">
				<div class="section-title tituloblanco">
					<h4>Peliculas destacadas</h4>
				</div>
			</div>
			
            
                                
                                
			<?php foreach($listaProd as $prod){ ?>
                                
                                                                  

                                        
                            
			
			
			   <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="anime__item">
                        <a href="https://www.pelisplus.lat"><div class="anime__item__pic homemini set-bg" style="background-image: url(&quot;https://cdn.jkdesu.com/assets/images/animes/image/zuihou-de-zhaohuan-shi.jpg&quot;);"><img src="<?= $prod->getImgweb()?>" height="150px" width="180px">
                            <div class="anime__item__text">
                                
                            </div>
					  
					</div></a>
					<div class="anime__item__text tituloblanco">
						<h5><a href="https://www.pelisplus.lat"><?= $prod->getNombre()?></h5>
					</div>
				</div></div>
            <?php } ?>
				              				              
			
			
			
			</div>
			
			</div>
			
			</div>
			
			<div class="col-lg-4 pt-3">
						<label class="switchBtn">
    <input type="checkbox" id="darkswitch">
    <div class="slidebtn">Modo noche</div>
</label>
			<div class="anime__sidebar__comment">

				<div class="section-title tituloblanco">
					<h5>Series</h5>
				</div>
				<div class="listadoanime-home">
					<div class="maximoaltura">
                        
                        <!--<a href="https://jkanime.net/heroine-tarumono-kiraware-heroine-to-naisho-no-oshigoto/11/" class="bloqq"><div class="anime__sidebar__comment__item">
							<div class="anime__sidebar__comment__item__pic listadohome">
								<img src="https://cdn.jkdesu.com/assets/images/animes/image/heroine-tarumono-kiraware-heroine-to-naisho-no-oshigoto.jpg"  title="Heroine Tarumono! Kiraware Heroine to Naisho no Oshigoto" alt="Heroine Tarumono! Kiraware Heroine to Naisho no Oshigoto">
							</div>
							<div class="anime__sidebar__comment__item__text">
								<h5>Heroine Tarumono! Kiraware Heroine to Naisho no Oshigoto</h5>
								<h6>  Episodio
                                                                                                                             11                                         </h6>
								<span>                                                  Hoy
                                            </span>
								<div class="flechaprogra" s=""><img src="https://cdn.jkdesu.com/assets2/css/img/flecha.png"></div>
							</div>
						</div></a>-->
                        <tbody>
                                    <?php foreach($listaPeli as $pel){ ?>
                                        

                                        <a href="https://www.pelisplus.lat/top-peliculas/0" class="bloqq"><div class="anime__sidebar__comment__item">
                                            <div class="anime__sidebar__comment__item__pic listadohome">
                                                <img src="<?php echo $pel->getImg() ?>" height="120px" width="80px" title="pelculas: Dawn Fall" alt="peliculas: Dawn Fall">
                                            </div>
                                            <div class="anime__sidebar__comment__item__text">
                                                <h5><?= $pel->getNombre() ?></h5>
                                                
                                                <?php 
                                                    foreach ($listaCat as $cat) { 
                                                    if ($cat->getIdCategoria() == $pel->getIdCategoria()) {
                                                        
                                                        echo $cat->getNombre();
                                                        break;
                                                    }
                                                }
                                                ?>
                                                <h6>temporadas  <?= $pel->getTemporadas() ?>
                                                                                                                                                                                </h6>
                                                <span>                                                  capitulos <?= $pel->getCapitulos() ?>
                                                                                                            </span>
                                                <div class="flechaprogra" s=""><img src="https://cdn.jkanime.net/assets2/css/img/flecha.png"></div>
                                            </div>
                                        </div></a>                                    

                                        
                                    <?php } ?>
                                </tbody>
												
						
					</div>
				</div>
			</div>
			</div>
			
			</div>
        </div>
    </section>
    


    <section class="destacados spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h4><b class="red"><i class="fas fa-clock-o"></i> Proximos Estrenos <span class="time" datetime="2022-06-16 21:52:22 UTC"></span></b></h4>
					</div>
				</div>
			
                <script>
           
            </script>
					
						
                    <div class="solopc">
			
            <div class="row">
                <div class="col-12  pt-3">
                    <div class="section-title tituloblanco">
                        <h5 style="text-align: center;">PROXIMOS ESTRENOS</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-9 col-9">
            <div class="anime__item">
                <a href="https://www.youtube.com/watch?v=iIsmHDcG5Kg"><div heigt="600" class="anime__item__pic homemini set-bg" data-setbg="https://pbs.twimg.com/media/Eo6vP_wUYAUBxoI.jpg:large" >
                        
                    </div>
                </a>
                <div class="anime__item__text tituloblanco">
                    <h3 style="text-align: center;"><a href="https://www.youtube.com/watch?v=iIsmHDcG5Kg">SHE HULK</a></h3>
                </div>
            </div>
            <div class="anime__item">
                <a href="https://www.youtube.com/watch?v=gm3ZrE_nE-o"><div heigt="600" class="anime__item__pic homemini set-bg" data-setbg="https://es.web.img3.acsta.net/pictures/20/08/24/09/27/5820559.jpg" >
                        
                    </div>
                </a>
                <div class="anime__item__text tituloblanco">
                    <h3 style="text-align: center;"><a href="https://www.youtube.com/watch?v=gm3ZrE_nE-o">BLACK ADAM</a></h3>
                </div>
            </div>
        </div>
				
			
						
						
										
						
					</div>	</div>	
					
			
				
				
				<div class="col-lg-12 text-center pt-3">
						<h4><a href="#top">? Ver Lista Completa ?</a></h4>
				</div>
				
			</div>
		</div>
	</section>
	
    
    <section id ="top" class="contenido spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__anime">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Ultimos Animes agregados</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                             <!--       <a href="#" class="primary-btn">Ver todo <span class="arrow_right"></span></a> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
						
                              
                	
                            
                            <?php foreach($listaProd as $prod){ ?>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="anime__item">
                                        <a  href="https://www.youtube.com/"><div class="anime__item__pic set-bg" data-setbg="<?= $prod->getImgweb()?>" style="">
                                    
                                        </div></a>
                                        <div class="anime__item__text"><ul><li>Recomendado</li>
                                                <li class="anime"> Pelicula
                                            </li>
                                            </ul>
                                            <h5><a  href="https://www.youtube.com/"><?= $prod->getNombre()?></a></h5>
                                        </div>
                                    </div>
                                </div>	
                            <?php } ?>
                            
                            <?php foreach($listaPeli as $pel){ ?>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="anime__item">
                                        <a  href="https://www.youtube.com/"><div class="anime__item__pic set-bg" data-setbg="<?= $pel->getImg()?>" style="">
                                    
                                        </div></a>
                                        <div class="anime__item__text"><ul><li>Concluido</li>
                                                <li class="anime"> Serie
                                            </li>
                                            </ul>
                                            <h5><a  href="https://www.youtube.com/"><?= $pel->getNombre()?></a></h5>
                                        </div>
                                    </div>
                                </div>	
                            <?php } ?>
					                		
                        </div>
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-md-6 col-sm-8 trending_div">
				
                                <div class="section-title">
                                    <h4>Listado de �ltimos agregados</h4>
                                </div>
								
						<ul class="side-menu">
							
  
                                                                                                                                                      
                                                                                                
                            <?php foreach($listaProd as $prod){ ?>
                                
                                <li class="even">
                                <a href="https://www.netflix.com/bo/" rel="bookmark"><?= $prod->getNombre()?></a>	
                            <?php } ?>
                            <?php foreach($listaPeli as $pel){ ?>
                                <li class="even">
                                <a href="https://www.netflix.com/bo/" rel="bookmark"><?= $pel->getNombre()?></a>
                            <?php } ?>
                                                                                                
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                                    
                                                                                                
					</ul>
				</div>


</div>
</div>
</section>

                                


        </div>
        
        
                 <!--   adnum 1 -->


            


 
 











<!-- Global site tag (gtag.js) - Google Analytics -->


        

<script src="https://cdn.jkdesu.com/assets2/js/bootstrap.min.js"></script>
<script src="https://cdn.jkdesu.com/assets2/js/player.js"></script>
<script src="https://cdn.jkdesu.com/assets2/js/jquery.nice-select.min.js"></script>
<script src="https://cdn.jkdesu.com/assets2/js/mixitup.min.js"></script>
<script src="https://cdn.jkdesu.com/assets2/js/jquery.slicknav.js"></script>
<script src="https://cdn.jkdesu.com/assets2/js/owl.carousel.min.js"></script>
<script src="https://cdn.jkdesu.com/assets2/js/jquery.simplemodal.js"></script>
<script src="https://cdn.jkdesu.com/assets2/js/jquery.toast.js"></script>
<script src="https://cdn.jkdesu.com/assets2/js/jquery-confirm.js"></script>
<script src="https://cdn.jkdesu.com/assets2/js/main.js?=v5.7"></script>


<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
		
            <div class="col-lg-9">
                <div class="footer__nav">
                    <ul>
                    <li class="active"><a href="">Inicio</a></li>
                                <li class="active"><a href="http://localhost/proyecto-final/admproducto.php">Añadir peliculas</a></li>
                                <li class="active"><a href="http://localhost/proyecto-final/admproducto.php">Añadir Peliculas</a></li>
                                <li class="active" ><a href="http://localhost/proyecto-final/admpelicula.php">Añadir Series</a></li>
                                <li class="active"><a href="https://www.netflix.com/bo/" target="_blank">Netflix</a></li>
                        <li><a href="https://discord.otakudesho.net/">Chat</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="./index.html"><img src="img/logo.png" alt=""></a>
                </div>
            </div>
          </div>
      </div>
  </footer>

    </body>
    
</html>
