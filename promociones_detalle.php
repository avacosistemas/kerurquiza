<?php include("header.php");

$query_promociones = "SELECT * FROM promociones where Id = ".intval($_GET['id']);
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);

?>
<?php if(mysqli_num_rows($promociones)){ ?>        
        
      				
      				
      				
      				
        
        
        <div class="hidden-xs">
        <ul class="bxslider2"><!-- slider -->
		<li><img src="img_urquiza/PROMOCIONES/KER_URQUIZA_PROMOCIONES_banner_01.jpg"></li>
		<li><img src="img_urquiza/PROMOCIONES/KER_URQUIZA_PROMOCIONES_banner_01.jpg"></li>
		</ul><!-- slider -->
		</div>
		
		<div class="hidden-md hidden-lg hidden-sm">
		<ul class="bxslider"><!-- slider -->	
		<li><img src="img_urquiza/PROMOCIONES/KER_URQUIZA_PROMOCIONES_banner_01.jpg"></li>
		<li><img src="img_urquiza/PROMOCIONES/KER_URQUIZA_PROMOCIONES_banner_01.jpg"></li>
		</ul><!-- slider -->
		</div>
		
		
	        
        <div class="habitaciones_detalle">
	        <div class="container">
		        <div class="col-md-12"><h1><?php echo $row_promociones['titulo'.$lengua]; ?></h1></div>
	        <div class="col-md-8 borde">
		        <div class="item"><img src="img_promociones/<?php echo $row_promociones['foto_detalle']; ?>" alt="Classic_00" class="img-responsive"></div>
			        
		        <p style="padding-top:21px;">
			       <?php echo smrFormatStr($row_promociones['texto'.$lengua]); ?>
		        </p>
	        </div>
	        <div class="col-md-4">
		        <?php if($row_promociones['fotoicono']!=''){?><img src="img_promociones/<?php echo $row_promociones['fotoicono'];?>" class="img-responsive" style="margin-bottom:15px;"><?php } ?>
		        <div class="buscador_detalle"><!--  -->
		        <h3>CONSULTAR</span>
        <form action="enviar_promocion.php" method="post">
	        <input type="text" required name="nombre" placeholder="Nombre" style="background-image:none;">
	        <input type="text" placeholder="Teléfono" name="tel" required>
	        <input type="email" required name="email" placeholder="E-mail">
	        <textarea rows="6" placeholder="Mensaje" name="mensaje" ></textarea>
	        <input type="submit" value="ENVIAR">
          <input type="hidden" name="promocion" value="<?php echo $row_promociones['titulo'.$lengua]; ?>" id="hiddenField" />
          <input type="hidden" name="eml" value="<?php echo $row_promociones['Id']; ?>" id="hiddenField" />          
        </form>
        </div><!--  -->
	        </div>
	        <div class="clear"></div>
	        </div>
	        
        </div>
        
        
<?php         
$query_promociones = "SELECT * FROM promociones where Id != '".intval($_GET['id'])."' order by orden";
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);        
?>        
<?php if(mysqli_num_rows($promociones)){ ?>   
      
        <div class="promociones">
	        <div class="container">
		        <div class="promotitulo">M&Aacute;S PROMOCIONES</div>
<?php do{ ?>            
		        <div class="col-md-4">
			        <img src="img_promociones/<?php echo $row_promociones['foto']; ?>" class="img-responsive" />
			        <a href="promociones_detalle.php?id=<?php echo $row_promociones['Id']; ?>">VER M&Aacute;S</a>
		        </div>
<?php } while ($row_promociones = mysqli_fetch_assoc($promociones));  ?>
	        </div>
        </div>
        
        
<?php } ?>        
        
        <?php include("footer.php");?>
<script src="js/jquery.bxslider1/jquery.bxslider.js"></script>
		<link rel="stylesheet" href="js/jquery.bxslider1/jquery.bxslider.css">
        
		
		<script>
	            $(document).ready(function(){
    $('.bxslider2').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: true
  	});
});
    
    $(document).ready(function(){
    $('.bxslider').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: false,
	controls: true
  	});
});

$(document).ready(function(){
    $('.bxslider3').bxSlider({
	pager: true,
	auto: true,
	mode: 'horizontal',
	controls: false,
	controls: true
  	});
});
</script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" media="screen">
<script>
		$(document).ready(function() {
		$('.carousel1').slick({
			
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});});
</script>
    </body>
</html>
<?php } ?>
