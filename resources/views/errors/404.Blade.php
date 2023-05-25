@extends('layouts.app')

@section('content')
<div class="text container">
    <h2 class="home-title">404</h2>
    <script>
        document.write('<p id="error-text" class="text home-subtitle">' + getMensaje() + '</p>');
    </script>
</div>
    
@endsection