<?php include("header.php");?>
        
        
      				
      				
      				
      				
        
        
        <?php include("habitacionesheader.php");?>
		
		
	        
        <div class="habitaciones_detalle">
	        <div class="container">
		        <div class="col-md-12"><h1><span>APART SUITE JUNIOR</span></h1></div>
	        <div class="col-md-8 borde">
		        <div class="carousel1">
				        <div class="item"><img src="img_urquiza/HABITACIONES/KER_URQUIZA_HABITACIONES_Appart_Suite_Junior_01.jpg" alt="KER_BELGRANO_HABITACIONES_standard_01" /></div>
				        <div class="item"><img src="img_urquiza/HABITACIONES/KER_URQUIZA_HABITACIONES_Appart_Suite_Junior_02.jpg" alt="KER_BELGRANO_HABITACIONES_standard_01" /></div>
				        <div class="item"><img src="img_urquiza/HABITACIONES/KER_URQUIZA_HABITACIONES_Appart_Suite_Junior_03.jpg" alt="KER_BELGRANO_HABITACIONES_standard_01" /></div>
				        <div class="item"><img src="img_urquiza/HABITACIONES/KER_URQUIZA_HABITACIONES_Appart_Suite_Junior_04.jpg" alt="KER_BELGRANO_HABITACIONES_standard_01" /></div>
			        </div>
			        <h2><span>APART SUITE JUNIOR</span></h2>
		        <p>
			        Dos ambientes de 50 m2, living comedor, confortable dormitorio con cama Queen y balcón con protección para infantes. Totalmente equipado con kitchenette, pava eléctrica y refrigerador; combinado con un profesional servicio al huésped.<br><br>

<strong>Disfrute de:</strong><br><br>

·       TV LCD 32”<br>

·       Internet WI FI<br>

·       Aire acondicionado Frío/Calor individual<br>

·       Refrigerador/Frigobar<br>



·       Kitchenette con Microondas y Pava eléctrica<br>

·       Vajilla<br>

·       Caja de Seguridad<br>

·       Teléfono DDI-DDN<br>

·       Secador de cabello<br>

·       Vidrios dobles con cámara de aire (DVH)<br>

·       Vista Exterior<br>

·       Balcón<br>
· Hotel No Fumador
<br><br><strong>Servicios Ker:</strong><br><br>
· Desayuno Buffet Continental <br>
· Room Service<br>
· Health Club<br>
· Salones para Eventos<br>
· Internet Wi Fi en todas las areas del hotel<br>
· Lavandería y Tintorería<br>
· Asistencia médica para emergencias<br>
· Grupo electrógeno
		        </p>
	        </div>
	        <div class="col-md-4">
		        
		        <div class="buscador_detalle"><!--  -->
		        <h3>RESERVAR <span>AHORA</span>
        <form action="https://reservations.travelclick.com/73742#/guestsandrooms" method="get" target="_blank">
	        <li class="item">
	        <select name="RoomTypeID">
		        <option>Tipo de habitación</option>
		        <option value="">Classic</option>
		        <option value="261975">Executive</option>
		        <option value="261984">Family</option>
		        <option value="261977">Suite</option>
	        </select>
	        </li>
	        <li class="item"><input type="text" id="from" name="DateIn"/></li>
	        <li class="item"><input type="text" id="to" name="DateOut"/></li>
	        <li class="item">
	        <select name="Adults">
		        <option>Huespedes</option>
		        <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
		        <option value="4">4</option>
	        </select>
	        </li>
	        <li class="item"><input type="submit" value="RESERV&Aacute;"></li>
	        <input type="hidden" name="languageid" value="2">
        </form>
        </div><!--  -->
	        </div>
	        <div class="clear"></div>
	        </div>
	        <img src="img_urquiza/KER_URQUIZA_Website_HABITACIONES_Fichas_AP_SUITE_JUNIOR.jpg" alt="01Standard_Banner_inferior_Standard" class="foto img-responsive">
        </div>
        
 <!--  SE AGREGA BOTON DE WHATSAPP   -->

<div >
        <a href="https://api.whatsapp.com/send?phone=5491130174497&text=Hola!%20Me%20contacto%20a%20través%20de%20la%20web%20y%20me%20gustaría%20realizar%20una%20consulta" target="_blank">
            <img class="btn-whatsapp" src="img/icons/icon-wsp.png" alt="">
        </a>
    </div>

<!--  SE AGREGA BOTON DE WHATSAPP   -->       
        
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
