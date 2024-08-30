<div class="appHeader">
    <div class="left">
        <a href="{{ url()->previous() }}" class="headerButton">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">
        @isset($header)
            {{ $header }}
        @endisset
    </div>
</div>
