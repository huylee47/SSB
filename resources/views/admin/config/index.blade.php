<link rel="stylesheet" href="{{ asset('assets/css/config.css') }}">
<div class="config-container">
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    @foreach ($configs as $config)
        <div class="config-item">
            <h2 class="config-title">{{$config->title}}</h2>
            <p class="config-description">{{$config->description}}</p>
            <p class="config-address"><strong>Address:</strong> {{$config->address}}</p>
            <p class="config-email"><strong>Email:</strong> {{$config->email}}</p>
            <p class="config-hotline"><strong>Hotline:</strong> {{$config->hotline}}</p>
            <a href="{{route('config.show', ['config' => $config->id])}}">
                <button>Detail</button>
            </a>


        </div>
    @endforeach
</div>
