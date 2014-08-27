{{ Form::open( array('url' => 'livres', 'method' => 'POST')) }}
{{ Form::label('titre', 'Titre :')}}
{{ Form::text('titre') }}
{{ Form::label('auteur', 'Auteur :')}}
{{ Form::text('auteur') }}
{{ Form::submit('Envoyer') }}
{{ Form::close() }}