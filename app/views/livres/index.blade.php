<style type="text/css">
    form {margin: 0}
    a {text-decoration: none}
    table {
        border: medium solid #6495ed;
        border-collapse: collapse;
    }
    th, td {
        border: thin solid #6495ed;
        padding: 5px;
    }
    th {background-color: #D0E3FA}
    td {background-color: #ffffff}
</style>
@if (Session::has('flash_notice'))
    <p>{{ Session::get('flash_notice') }}</p>
@endif
<table>
    <caption><h2>Livres en stock</h2></caption>
    <tr>
        <th>Titre</th>
        <th>Auteur</th>
        <th colspan=3><a href="{{ url('livres/create')}}"> <input type="button" value="Ajouter un livre">  </a></th>
    </tr>
    @foreach ($livres as $livre)
        <tr>
            <td>{{ $livre->titre }}</td>
            <td>{{ $livre->auteur }}</td>

            <td>
                <a href="{{ url('livres/'.$livre->id)}}"> <input type="button" value="Voir">  </a>
            </td>
            <td>
                <a href="{{ url('livres/'.$livre->id.'/edit')}}"> <input type="button" value="Modifier">  </a>
            </td>
            <td>
                {{ Form::open(array('url' => 'livres/'.$livre->id, 'method' => 'DELETE')) }}
                {{ Form::submit('Supprimer', array('onclick' => 'return confirm(\'Vraiment supprimer ce livre ?\')')) }}
                {{ Form::close() }}
            </td>
        </tr>
    @endforeach
</table>