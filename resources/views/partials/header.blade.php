<header>

    <div class="topHeader  pe-4">
        <div class="container-lg d-flex justify-content-end">
            <ul class="d-flex align-items-center">
                @foreach ($data as $item)
                    @if ($loop->first)
                        <li class="me-5">{{ $item }}</li>
                    @else
                        <li>{{ $item }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="bottomHeader">
        <div class="container-lg h-100 d-flex align-items-center justify-content-center">
            <img class="logo me-5" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc Logo">
            @foreach ($navItems as $item)
                @if ($loop->first)
                    <a class="mx-4" href="{{ $item }}">{{$item}}</a>
                @else
                <a class="me-4" href="{{ $item }}">{{$item}}</a>
                @endif
            @endforeach
            <div class="input-group mb-3 ms-5">
                <input type="text" class="form-control text-end" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2"><i class="fa-solid fa-magnifying-glass"></i></span>
              </div>
        </div>
    </div>
</header>
