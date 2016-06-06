<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	
	<title>Document</title>
</head>
	<style type="text/css">
	table.tableizer-table {
		font-size: 14px;
		border: 1px solid #CCC; 
		font-family: Arial, Helvetica, sans-serif;
	} 
	.tableizer-table td {
		padding: 4px;
		margin: 3px;
		border: 1px solid #CCC;
	}
	.tableizer-table th {
		background-color: #104E8B; 
		color: #FFF;
		font-weight: bold;
	}
	tr{
		text-align: center;
	}
</style>
<body>
	<h3>report data dosen</h3>

<table class="tableizer-table" width="100%">

	<tr class="tableizer-firstrow">
		<th>NIP</th>
		<th>NAMA</th>
		<th>JURUSAN</th>
	</tr>
		@foreach($dataDosen as $data)
		<tr>
			<td>{{$data->nip}}</td>
			<td>{{$data->nama}}</td>
			<td>{{$data->showJurusan->jurusan}}</td>
		</tr>
		@endforeach
</table>

	

	
</body>
</html>