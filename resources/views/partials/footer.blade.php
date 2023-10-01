@php
    $footerLinks = [
        [
            'category' => 'DC COMICS',
            'links' => [
                'Caracters', 'Comics', 'Movies', 'Games', 'Collectibles', 'Videos', 'Fans', 'News'
            ],
        ],
        [
            'category' => 'SHOP',
            'links' => [
                'Shop DC', 'Shop DC Collectibles',
            ],
        ],
        [
            'category' => 'DC',
            'links' => [
                'Term Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Subscriptions', 'Talent Workshops', 'Ratings', 'Shop Help', 'Contact Us',
            ],
        ],
        [
            'category' => 'SITES',
            'links' => [
                'DC', 'Mad Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa',
            ],
        ],
    ];
@endphp

<div class="list-container">
    <div class="container">
        <div class="row p-4">
            <div class="col-5">
                <div class="row">
                    @foreach($footerLinks as $category)
                        <div class="col-4">
                            <p class="text-light">{{ $category['category'] }}</p>
                            <ul class="p-0">
                                @foreach($category['links'] as $link)
                                    <li class="list-unstyled"><a href="#">{{ $link }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-7">
                <img src="../../images/dc-logo-bg.png" alt="" class="bg-logo">
            </div>
        </div>
    </div>
</div>

<div class="footer-nav">
    <div class="container">
        <div class="row">
            <div class="col-6 py-4">
                <button class="btn btn btn-outline-primary rounded-0 text-white">SIGN-UP NOW!</button>
            </div>
            <div class="col-6">
                <div class="row py-4">
                    <div class="col-6 d-flex justify-content-end py-3">
                        <h5 class="text-primary">FOLLOW US</h5>
                    </div>
                    <div class="col-6 d-flex justify-content-end py-2 justify-content-around">
                        <a href="#"><img src="../../images/footer-facebook.png" alt=""></a>
                        <a href="#"><img src="../../images/footer-twitter.png" alt=""></a>
                        <a href="#"><img src="../../images/footer-youtube.png" alt=""></a>
                        <a href="#"><img src="../../images/footer-pinterest.png" alt=""></a>
                        <a href="#"><img src="../../images/footer-periscope.png" alt=""></a>
                    </div>
                </div>


            </div>
        </div>
    </div>