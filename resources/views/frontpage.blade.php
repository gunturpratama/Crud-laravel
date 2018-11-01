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



	<h1 class="h1 center"> Daftar Produk</h1>

<div class="container">

	      <table>
        <thead>
          <tr>
              <th>No</th>
              <th>Nama Barang</th>
              <th>Kategori</th>
              <th>Deskripsi</th>
              <th>Supplier</th>
              <th>Action</th>

          </tr>
        </thead>


        @foreach($barang as $no => $produk)
        <tbody>
          <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $produk->nama_barang }}r</td>
            <td>{{ $produk->kategori }}</td>
            <td>{{ $produk->desc }}</td>
            <td>{{ $produk->supplier }}</td>
            <td><a href="/deldestroy/{{$produk->id_barang}}" class="btn btn-large" title="">Delete</a> <a href="/edit/{{$produk->id_barang}}" class="btn btn-large" title="">Edit</a></td>

          </tr>
          @endforeach
          
        </tbody>
      </table>
	
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