@extends("layout.app")

@section("content")
<main>
    <!-- sezione cards -->
    <section>
        <div class="container">
            <div class="wrapper flex">
                <div class="card">
                    <div class="img">qui ci va la copertina</div>
                    <div class="title">qui ci va il titolo</div>
                </div>
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
                    <p class="uppercase">digital comics</p>
                </div>
            </div>
            <div class="cell flex">
                <div class="img">
                    <img src="/img/buy-comics-merchandise.png" alt="digital-comics">
                </div>
                <div class="cell-txt flex">
                    <p class="uppercase">dc merchandise</p>
                </div>
            </div>
            <div class="cell flex">
                <div class="img">
                    <img src="/img/buy-comics-subscriptions.png" alt="digital-comics">
                </div>
                <div class="cell-txt flex">
                    <p class="uppercase">subscription</p>
                </div>
            </div>
            <div class="cell flex">
                <div class="img">
                    <img src="/img/buy-comics-shop-locator.png" alt="digital-comics">
                </div>
                <div class="cell-txt flex">
                    <p class="uppercase">comic shop locator</p>
                </div>
            </div>
            <div class="cell flex">
                <div class="img">
                    <img src="/img/buy-dc-power-visa.svg" alt="digital-comics">
                </div>
                <div class="cell-txt flex">
                    <p class="uppercase">dc power visa</p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection