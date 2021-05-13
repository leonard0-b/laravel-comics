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
                <div class="advertisement">
                    <img src="/img/pubblicita.png" alt="advertising">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="comic-specs">
    <div class="container flex">
        <div class="col-50 flex">
            <div class="col-100">
                <h4>Talent</h4>
            </div>
            <div class="col-100 flex">
                <p>Art by:</p>
                @foreach ($comic['artists'] as $artist)
                <p>{{$artist}}</p>
                @endforeach
            </div>
        </div>
        <div class="col-50 flex"></div>
    </div>
</section>
@endsection