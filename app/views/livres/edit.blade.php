{{ Form::open(array('url' => 'livres/' . $livre ->id , 'method' => 'PUT')) }}
{{ Form::label('titre', 'Titre :')}}
{{ Form::text('titre', $livre ->titre) }}
{{ Form::label('auteur', 'Auteur :')}}
{{ Form::text('auteur', $livre ->auteur) }}
{{ Form::submit('Envoyer') }}
{{ Form::close() }}