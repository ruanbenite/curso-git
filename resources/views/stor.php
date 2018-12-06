@section('conteudo')

<table>
@foreach($user as $data):
<tr>
    <td> {{ $data['name']}}</td> 
    <td> {{ $data['obs'] }}</td> 
    <td> {{ $data['date'] }}</td> 
    <td> {{ $data['desc'] }}</td> 
    <td> {{ $data['nano'] }}</td> 
</tr>      
@endforech
</table>
@stop