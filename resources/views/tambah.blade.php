<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="/dist/css/materialize.css">
	<link rel="stylesheet" href="/dist/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="/extras/noUiSlider/nouislider.js">

</head>
<body>




<h1 class="h1 center">Silahkan Tambah Barang</h1>


<section class="container">


	<div class="container">

				<div class="row">
			<form class="col s12" action="{{ url('/insert') }}" method="POST">

				<div class="row">
					<div class="input-field col s6">
						<input placeholder="Nama Barang"  id="nama_barang" name="nama_barang" type="text" class="validate">
						
					</div>
					<div class="input-field col s6">
						<input  placeholder="kategori" id="kategori" name="kategori" type="text" class="validate">
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="desc" placeholder="deskripsi" name="desc" type="text" class="validate">
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input id="supplier" type="text" name="supplier" placeholder="suplierrrrrr" class="validate">
	
					</div>
				</div>
				<td>{{csrf_field()}}</td>
				<button type="submit" class="btn-large" value="save">Submit</button>
			</form>
		</div>

		
	</div>
	


		




	</section>













	<script type="text/javascript" link="/dist/css/materialize.js"></script>
	<script type="text/javascript" link="/dist/css/materialize.min.js"></script>
	<script type="text/javascript" link="/extras/noUiSlider/nouislider.js"></script>
	<script type="text/javascript" link=/js/app.js></script>
	<script type="text/javascript" link=/js/autocomplete.js></script>
	<script type="text/javascript" link=/js/button.js></script>
	<script type="text/javascript" link=/js/cards.js></script>
	<script type="text/javascript" link=/js/characterCounter.js></script>
	<script type="text/javascript" link=/js/chips.js></script>
	<script type="text/javascript" link=/js/collapsible.js></script>
	<script type="text/javascript" link=/js/component.js></script>
	<script type="text/javascript" link=/js/datepicker.js></script>
	<script type="text/javascript" link=/js/dropdown.js></script>
	<script type="text/javascript" link=/js/forms.js></script>
	<script type="text/javascript" link=/js/global.js></script>
	<script type="text/javascript" link=/js/materialbox.js></script>
	<script type="text/javascript" link=/js/modal.js></script>
	<script type="text/javascript" link=/js/parallax.js></script>
	<script type="text/javascript" link=/js/pushpin.js></script>
	<script type="text/javascript" link=/js/scrollspy.js></script>
	<script type="text/javascript" link=/js/select.js></script>
	<script type="text/javascript" link=/js/sidenav.js></script>
	<script type="text/javascript" link=/js/slider.js></script>
	<script type="text/javascript" link=/js/tabs.js></script>
	<script type="text/javascript" link=/js/tapTarget.js></script>
	<script type="text/javascript" link=/js/timepicker.js></script>
	<script type="text/javascript" link=/js/toasts.js></script>
	<script type="text/javascript" link=/js/tooltip.js></script>
	<script type="text/javascript" link=/js/waves.js></script>


	<script type="text/javascript">
	
	$(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
  });
      
	</script>
	
</body>
</html>