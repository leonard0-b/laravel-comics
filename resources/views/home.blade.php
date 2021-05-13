@extends("layout.app")

@section("title")
Home
@endsection

@section("content")
    <div class="container">
    <div class="label flex">
        <p class="uppercase">current series</p>
    </div>
    </div>
    <!-- sezione cards -->
    <section>
    <div class="container">
        <div class="wrapper flex">
            @foreach ($comics as $index => $comic)
            <a href="{{route('detail', ['id' => $index])}}" class="card" target="blank_">
                <div>
                    <div class="thumb">
                        <img src="{{$comic['thumb']}}" alt="">
                        <div class="overlay">
                            
                        </div>
                    </div>
                    <div class="title">
                        <p class="uppercase">{{$comic['series']}}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="load flex">
            <a class="uppercase" href="">load more</a>
        </div>
    </div>
    </section>
    <!-- sezione banner-blue -->
    <section class="blue">
    <div class="container flex">
        <div class="cell flex">
            <div class="img">
                <img src="/img/buy-comics-digital-comics.png" alt="digital-comics">
            </div>
            <div class="cell-txt flex">
                <a href=""><p class="uppercase">digital comics</p></a>
            </div>
        </div>
        <div class="cell flex">
            <div class="img">
                <img src="/img/buy-comics-merchandise.png" alt="digital-comics">
            </div>
            <div class="cell-txt flex">
                <a href=""><p class="uppercase">dc merchandise</p></a>
            </div>
        </div>
        <div class="cell flex">
            <div class="img">
                <img src="/img/buy-comics-subscriptions.png" alt="digital-comics">
            </div>
            <div class="cell-txt flex">
                <a href=""><p class="uppercase">subscription</p></a>
            </div>
        </div>
        <div class="cell flex">
            <div class="img">
                <img src="/img/buy-comics-shop-locator.png" alt="digital-comics">
            </div>
            <div class="cell-txt flex">
                <a href=""><p class="uppercase">comic shop locator</p></a>
            </div>
        </div>
        <div class="cell flex">
            <div class="img">
                <img src="/img/buy-dc-power-visa.svg" alt="digital-comics">
            </div>
            <div class="cell-txt flex">
                <a href=""><p class="uppercase">dc power visa</p></a>
            </div>
        </div>
    </div>
    </section>
@endsection