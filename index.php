<?php include("header.php");


/*-------- promocinoes -------

$query_promociones = "SELECT * FROM promociones order by orden";
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);
$totalRows_promociones = mysqli_num_rows($promociones);

do{
	
	} while ($row_promociones = mysqli_fetch_assoc($promociones));

*/





?>
        <div class="bookingboton">BOOK NOW</div>
        <div class="videohome">
	        <div class="volumen" style="right:auto; left:81px;">
	        <span class="vol1"><i class="fa fa-volume-off" aria-hidden="true"></i></span>
	        <span class="vol2"><i class="fa fa-volume-up" aria-hidden="true"></i></span>
        </div>
        <img src="img/KER_HOTELES_BOTON_TAX_FREE_y_AHORA_12.png" class="tax" style="position:absolute; bottom:84px; right:0; width:18%;">
    	<video loop="loop" muted="muted" autoplay="autoplay" width="100%" id="videoreel">
					<source src="img_urquiza/HOME/%20KER_URQUIZA_HOME_video_intro.mp4"/>
      				</video>
      				
      				
      				
      				<div class="botonreservar hidden-lg hidden-sm hidden-md">RESERVAR</div>
      				<div class="buscador"><!--  -->
        <form action="https://reservations.travelclick.com/73742#/guestsandrooms" method="get" target="_blank">
	        <!--<li class="item">
	        <select name="RoomTypeID">
		        <option>Tipo de habitación</option>
		        <option value="484905">Classic</option>
		        <option value="484906">Superior</option>
		        <option value="484907">Executive</option>
		        <option value="484908">Deluxe</option>
	        </select>
	        </li>-->
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
			<li class="item">
				<input type="submit" onclick="stopDefAction(event);" value="BOTÓN DE ARREPENTIMIENTO">
			</li>
	        <input type="hidden" name="languageid" value="2">
        </form>
        </div><!--  -->
        
        
        <div class="bookingform">
	    <div class="x">x</div>
        <form action="https://reservations.travelclick.com/73742#/guestsandrooms" method="get" target="_blank">
	        <div class="checkin fecha dates">
		        <h1>CHECK IN</h1>
		        <h2 id="fecha1"><?php echo date('d');?></h2>
		        <h3 id="mes1"><?php echo substr($str_meses[date('n')],0,3);?></h3>
	        </div>
	        <div class="checkout fecha dates">
		        <h1>CHECK OUT</h1>
		        <h2 id="fecha2"><?php echo date('d', strtotime($Date. ' + 1 days')); ?></h2>
		        <h3 id="mes2"><?php echo substr($str_meses[date('n', strtotime($Date. ' + 1 days'))],0,3); ?></h3>
	        </div>
	        <div class="clear"></div>
	        <div class="">
		        <select name="Adults">
		        <option>Huespedes</option>
		        <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
		        <option value="4">4</option>
	        </select>
	        </div>
	        <div class="clear"></div>
	        <div class=""><input type="submit" value="BOOK NOW"></div>
	        <input type="hidden" id="desde2" name="DateIn" value="<?php echo date('m/d/Y'); ?>">
	        <input type="hidden" id="hasta2" name="DateOut" value="<?php echo date('m/d/Y', strtotime($Date. ' + 1 days')); ?>">
	        <input type="hidden" name="languageid" value="2">
        </form>
        </div>
        
        </div>
        
<?php include("protocolo_covid.php");?>  
        
        <div class="stay">
	        <div class="col-md-6">
		        <div class="pad wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
		        <h1>City of lights</h1>
		        <p>Ker Urquiza ofrece 50 habitaciones con todas las comodidades para que durante su estadía, sólo tenga que preocuparse por disfrutar. Goza de una ubicación estratégica en zona Norte de la Capital Federal, a 10 minutos del barrio de Belgrano y a 5 minutos de las Autopistas Panamericana y General Paz con conexión directa a los aeropuertos internacional y local.

</p>
		        <h2><span>Explore rooms & suites</span></h2>
		        <a href="KER_URQUIZA_FactSheets_Frente-Dorso_BAJA.pdf" target="_blank" class="botonfact">DESCARGAR FACTSHEET</a>
		        <div class="clear"></div>
		        <a href="https://reservations.travelclick.com/73742?languageid=2" target="_blank">RESERV&Aacute;</a>
		        </div>
	        </div>
	        <div class="col-md-6 col2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
		        <img src="img_urquiza/HOME/KER_URQUIZA_HOME_foto_01.jpg" alt="Ker_Recoleta_Foto_Stayawhile" class="img-responsive foto">
	        </div>
	        <div class="clear"></div>
        </div>
        
        <div class="casco" id="ubicacion">
	        <h1>Punto estrátegico de la Ciudad</h1>
	        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.242244035914!2d-58.48822214883145!3d-34.572736563271384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb65dfeac1051%3A0xfaf6106fe85154be!2sKer%20Urquiza%20Hotel%20%26%20Suites!5e0!3m2!1ses!2sar!4v1583424278000!5m2!1ses!2sar" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        
        <div class="trip">
	        <div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s"><img src="img_urquiza/HOME/KER_URQUIZA_HOME_foto_02.jpg" alt="Ker_Recoleta_Foto_Nuestros_huespedes" class="img-responsive"></div>
	        <div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
		        <img src="img/01Home/Ker_Historic_SanTelmo_BsAs_Logo_Tripadvisor.svg" width="61" class="icono">
		        <h1>Nuestros <span></span>huéspedes</h1>
		        <div class="barrita"></div>
		        <div id="TA_selfserveprop419" class="TA_selfserveprop"><ul id="stoeUDo4T" class="TA_links hw46COV"><li id="ZVDBkh" class="NOotI8sIqQMF"><a target="_blank" href="https://www.tripadvisor.com.ar/Hotel_Review-g312741-d1457106-Reviews-Ker_Urquiza_Hotel_Suites-Buenos_Aires_Capital_Federal_District.html"><img src="https://www.tripadvisor.com.ar/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=419&amp;locationId=1457106&amp;lang=es_AR&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2" data-loadtrk onload="this.loadtrk=true"></script>
	        </div>
	        <div class="clear"></div>
        </div>
        
        <div class="banner1">
	        <img src="img_urquiza/HOME/KER_URQUIZA_HOME_come_to_meet_us.jpg" alt="Ker_Recoleta_Aplacetodiscover" class="img-responsive hidden-xs">
	        <img src="img_urquiza/HOME/KER_URQUIZA_HOME_come_to_meet_us.jpg" alt="Ker_Recoleta_Aplacetodiscover_Mobile" class="img-responsive hidden-md hidden-lg hidden-sm">
        </div>
        
        
        
        <div class="hoteles">
	        <h1>KER Hoteles</h1>
	        <p>Cuatro Hoteles, un Mismo Concepto. Calidez, Servicio, Confort.</p>
	        <div class="col-md-4 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
		        <a href="https://kersantelmo.com.ar" target="_blank">
			    <img src="KER_BELGRANO_Website/LOGOS/Home_Ker_San_Telmo_logo.png">
		        
		        
		        </a>
	        </div>
	        
	        <div class="col-md-4 col2 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.6s">
		        <a href="http://kerrecoleta.com.ar/" target="_blank">
			    <img src="KER_BELGRANO_Website/LOGOS/Home_Ker_Recoleta_logo.png">
		        
		        
		        </a>
	        </div>
	        
	        <div class="col-md-4 col1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
		        <a href="http://kerbelgrano.com.ar/" target="_blank">
			    <img src="KER_BELGRANO_Website/LOGOS/Home_Ker_Belgrano_logo.png">
		        
		        
		        </a>
	        </div>	        
	        
	        
	        
	        
	        
	        <div class="clear"></div>
        </div>
        
        <div class="buscador2" style="display:none;"><!--  -->
        <form action="https://reservations.travelclick.com/73742#/guestsandrooms" method="get" target="_blank">
	        <li class="item">
	        <select name="room">
		        <option>Tipo de habitación</option>
		        <option value="Classic Room">Classic</option>
		        <option value="Habitacion Superior">Superior</option>
		        <option value="Executive Room">Executive</option>
		        <option value="Habitacion Deluxe">Deluxe</option>
	        </select>
	        </li>
	        <li class="item"><input type="text" id="from" name="DateIn"/></li>
	        <li class="item"><input type="text" id="to" name="DateOut"/></li>
	        <li class="item">
	        <select name="Adults">
		        <option>Huespedes</option>
		        <option>1</option>
		        <option>2</option>
		        <option>3</option>
	        </select>
	        </li>
	        <li class="item"><input type="submit" value="RESERV&Aacute;"></li>
	        <input type="hidden" name="languageid" value="2">
        </form>
        </div><!--  -->
 
		<?php include("mensaje_whatsapp.php");?>       		

        <?php include("footer.php");?>
        
        
        <?php
	        $query_promociones = "SELECT * FROM promociones WHERE destacado_home = 'Y' order by orden";
$promociones = mysqli_query($kerhistoric, $query_promociones) or die(mysqli_error());
$row_promociones = mysqli_fetch_assoc($promociones);
$totalRows_promociones = mysqli_num_rows($promociones);
?>


<?php if($totalRows_promociones!=0){?>
   <div class="modal fade" id="myModal" style="z-index:99999; width:700px; height:600px; margin:auto; background-color:#fff;">
  <div class="modal-header">
    <a class="close" data-dismiss="modal">×</a>
    <h3></h3>
  </div>
  <div class="modal-body">
	<?php if($row_promociones['Id']==14 || $row_promociones['Id']==16){?>
			        <a href="https://reservations.travelclick.com/73742?room=Tipo+de+habitaci%C3%B3n&DateIn=&DateOut=&Adults=Huespedes&languageid=2#/guestsandrooms" target="_blank"><img src="img_promociones/<?php echo $row_promociones['foto_popup_esp']; ?>" width="100%"></a>
			        <?php } else {?>
			        <a href="promociones_detalle.php?id=<?php echo $row_promociones['Id']; ?>"><img src="img_promociones/<?php echo $row_promociones['foto_popup_esp']; ?>" width="100%"></a>
			        <?php } ?>
   
  </div>
  
</div>
        <script type="text/javascript">
    $('.modal').modal('show');
</script>
<style>
	.modal-backdrop.in{opacity:0;}
	@media (max-width: 500px) {
	.modal-body{max-width:100%; height:400px!important; display:block; margin:auto;}
	.modal{width:100%!important;}
	}
</style>
<?php }?>