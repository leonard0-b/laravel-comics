@extends("layout.app")

@section("title")
Comic Details
@endsection

@section("content")
<section>
    <div class="blue-banner">
        <div class="container">
            <div class="comic-demo">
                <img src="{{$comic['thumb']}}" alt="comic cover">
                <span class="up uppercase">comic book</span>
                <span class="down uppercase">view gallery</span>
            </div>
        </div>
    </div>
    <div class="comic-details">
        <div class="container flex">
            <div class="det-left">
                <div class="comic-title">
                    <h1 class="uppercase">{{$comic['title']}}</h1>
                </div>
                <div class="green flex">
                    <div class="price flex">
                        <span>U.S Price: <span style="color:#fff">{{$comic['price']}}</span></span>
                        <span class="uppercase">available</span>
                    </div>
                    <div class="available">
                        <span>Check Availability <i class="fas fa-caret-down"></i></span>
                    </div>
                </div>
                <div class="description">
                    <p>{{$comic['description']}}</p>
                </div>
            </div>
            <div class="det-right">
                <div class="advertising">
                    <img src="/img/boh.jpg" alt="advertising">
                    <p class="uppercase">advertisement</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="comic-specs">
    <div class="container flex">
        <div class="col-50 flex lef">
            <div class="col-100 title">
                <h4>Talent</h4>
            </div>
            <div class="col-100 flex">
                <div class="col-left">
                    <p>Art by:</p>
                </div>
                <div class="col-right">
                    <div class="artists flex">
                    @foreach ($comic['artists'] as $artist)
                    <a href="">
                        <span>
                            {{$artist}}
                        </span>
                        <span>
                            @if (!$loop->last)
                            ,
                            @endif 
                        </span>
                    </a>
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="col-100 flex">
                <div class="col-left">
                    <p>Written by:</p>
                </div>
                <div class="col-right">
                    <div class="artists flex">
                    @foreach ($comic['writers'] as $writers)
                    <a href="">
                        <span>
                        {{$writers}}
                        </span>
                        <span>
                            @if (!$loop->last)
                            ,
                            @endif
                        </span>
                    </a>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-50 flex rig">
            <div class="col-100 title">
                <h4>Specs</h4>
            </div>
            <div class="col-100 flex">
                <div class="col-left">
                    <p>Series:</p>
                </div>
                <div class="col-right">
                    <div class="flex">
                        <a href=""><p class="uppercase">{{$comic['series']}}</p></a>
                    </div>
                </div>
            </div>
            <div class="col-100 flex">
                <div class="col-left">
                    <p>U.S Price:</p>
                </div>
                <div class="col-right">
                    <p class="uppercase">{{$comic['price']}}</p>
                </div>
            </div>
            <div class="col-100 flex">
                <div class="col-left">
                    <p>On Sale Date:</p>
                </div>
                <div class="col-right">
                    <p class="uppercase">{{$comic['sale_date']}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="digital-shop">
    <div class="container flex">
        <div class="modules">
            <div>
                <p class="uppercase">digital comics</p>
            </div>
            <div>
                <img src="/img/buy-comics-digital-comics.png" alt="digital-comics">
            </div>
        </div>
        <div class="modules">
            <div>
                <p class="uppercase">shop dc</p>
            </div>
            <div>
                <img src="/img/buy-comics-subscriptions.png" alt="digital-comics">
            </div>
        </div>
        <div class="modules">
            <div>
                <p class="uppercase">comic shop locator</p>
            </div>
            <div>
                <img src="/img/buy-comics-shop-locator.png" alt="digital-comics">
            </div>

        </div>
        <div class="modules">
            <div>
                <p class="uppercase">subscriptions</p>
            </div>
            <div>
                <img src="/img/buy-comics-merchandise.png" alt="digital-comics">
            </div>

        </div>
    </div>
</section>
@endsection