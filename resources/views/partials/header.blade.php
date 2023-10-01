

<?php
$navLinks = [
                [ "name" => "CARACTERS"],
                [ "name" => "COMICS"],
                [ "name" => "MOVIES"],
                [ "name" => "GAMES"],
                [ "name" => "COLLECTIBLES"],
                [ "name" => "VIDEOS"],
                [ "name" => "FANS"],
                [ "name" => "NEWS"],
                [ "name" => "SHOP"]
]
?>

<header class="">
 
    <div class="top-header bg-primary">
        <div class="container ">
            <div class=" d-flex gap-2 justify-content-end ">
                <a href="#" class="link-top">
                    DC POWER VISA
                </a>
                <a href="#" class="link-top">
                    ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i>
                </a>
            </div>
        </div>
    </div>

  
    <div>
        <div class="container p-3">
            <div class="d-flex justify-content-around">
                        <img src="{{ asset('images/dc-logo.png') }}" alt="logo">
                  
                
                <div class="h-100">
                    <ul class="list-unstyled d-flex gap-2">
                        @foreach($navLinks as $link)
                           
                                <li class="active">
                                    <a href="#" class="text-black link">{{ $link['name'] }}</a>
                                </li>
                        @endforeach
                    </ul>
                </div>
              
                <div>
                    <form action="">
                        <div class="input-block">
                            <input class="border-top-0 border-start-0 border-end-0" type="text" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>