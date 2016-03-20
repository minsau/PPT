
	<script type="text/javascript" src="includes/js/jquery.js"></script>
	<script type="text/javascript" src="includes/js/bootstrap.js"></script>
	<script type="text/javascript">
	var eleccion;
		$('#tijeras').click(function(){
			alert('Has escogido las tijeras y la computadora escogio: '+computadora());
		});

		$('#roca').click(function(){
			alert('Has escogido piedra y la computadora escogio: '+computadora());
		});

		$('#papel').click(function(){
			alert('Has escogido  papel y la computadora escogio: '+computadora());
		});

		$('#agua').click(function(){
			alert('Has escogido agua y la computadora escogio: '+computadora());
		});

		$('#jaula').click(function(){
			alert('Has escogido la jaula y la computadora escogio: '+computadora());
		});


		function computadora(){
			
			var aleatorio = Math.floor(Math.random() * 11) ;
			if (aleatorio >= 1 && aleatorio <= 2) {
				eleccion = 'roca';
			}

			if (aleatorio >= 3 && aleatorio <= 4) {
				eleccion = 'agua';
			}

			if (aleatorio >= 5 && aleatorio <= 6) {
				eleccion = 'jaula';
			}

			if (aleatorio >= 7 && aleatorio <= 8) {
				eleccion = 'tijeras';
			}

			if (aleatorio >= 9 && aleatorio <= 10) {
				eleccion = 'papel';
			}

			return eleccion;
		}
	</script>
</body>
</html>