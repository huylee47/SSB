<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @foreach ($configs as $config)
        <p>{{$config->title}}</p>
        <p>{{$config->description}}</p>
        <p>{{$config->address}}</p>
        <p>{{$config->email}}</p>
        <p>{{$config->hotline}}</p>
    @endforeach
</div>



