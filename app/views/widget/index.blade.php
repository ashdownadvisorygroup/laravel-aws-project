<table border="0" cellspacing="5" cellpadding="5">
	<tr><th>Name</th><th>Description</th></tr>
	@foreach($widgets as $widget) 
	<tr><td>{{ $widget->name}}</td><td>{{ $widget->description}}</td></tr>
	@endforeach
</table>