<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>{{ $data['title'] }}</title>
	<link rel="stylesheet" href="/dist/css/materialize.css">
	<link rel="stylesheet" href="/dist/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="/extras/noUiSlider/nouislider.js">
</head>
<body>



<div class="container">

	<h1>edit barang anjay</h1>


	<div class="row">
		<form class="col s12" action="{{ url('/editupdate') }}" method="POST">


			<td>{{ csrf_field() }}</td>


			


			<div class="row">
				<div class="input-field col s6">
					<input placeholder="Placeholder" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" type="text" class="validate">
					
				</div>
				<div class="input-field col s6">
					<input id="last_name" id="kategori" name="kategori" value="{{ $barang->kategori }}" type="text" class="validate">
					
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input type="text" id="desc" name="desc" value="{{ $barang->desc }}" class="validate">
	
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<input type="text" id="supplier" name="supplier" value="{{ $barang->supplier }}" class="validate">
	 
				</div>
			</div>

				<button type="sumbit" class="btn-large" value="save"> submit</button>
			

			
		</form>
  </div>

	
</div>

	




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
	
</body>
</html>