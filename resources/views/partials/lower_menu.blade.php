@php
    $links = [
        [
            'url' => '#',
            'image' => '../../images/buy-comics-digital-comics.png',
            'text' => 'DIGITAL COMICS',
        ],
        [
            'url' => '#',
            'image' => '../../images/buy-comics-merchandise.png',
            'text' => 'DC MERCHANDISE',
        ],
        [
            'url' => '#',
            'image' => '../../images/buy-comics-subscriptions.png',
            'text' => 'SUBSCRIPTION',
        ],
        [
            'url' => '#',
            'image' => '../../images/buy-comics-shop-locator.png',
            'text' => 'COMIC SHOP LOCATOR',
        ],
        [
            'url' => '#',
            'image' => '../../images/buy-dc-power-visa.svg',
            'text' => 'DC POWER VISA',
        ],
    ];
@endphp

<div class="bg-primary">
    <div class="Menu-container">
        <div class="container d-flex justify-content-around align-items-center py-5">
            @foreach($links as $link)
            <div class="d-flex">
                <a href="{{ $link['url'] }}"> <img src="{{ $link['image'] }}" alt=""></a>
                <p class="text-white p-2">{{ $link['text'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

