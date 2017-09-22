<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table>
		<thead>
			<th>email</th>
			<th>nome</th>
			<th>ip</th>
			<th>tipo</th>
			<th>data_hora</th>
		</thead>
		@foreach($leads as $lead)
			<tr>
				<td>{{ $lead->email }}</td>
				<td>{{ $lead->nome }}</td>
				<td>{{ $lead->ip }}</td>
				<td>{{ $lead->tipo }}</td>
				<td>{{ $lead->data_hora }}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>