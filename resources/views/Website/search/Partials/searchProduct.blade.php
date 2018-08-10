
    <div class="row" style="margin-bottom: 50px;font-size: 11px;">
        <h3 class="text-center">Search Results</h3>
        <div class="text-center">Have a <strong>Great ! </strong> Day :)</div>
    </div>
    <div class="row">
        @if($total==0)
            <h1>No search result</h1>
        @endif

        @foreach($page as $pg)
            <div class="col-md-3">
                <div class="item">

                    <div class="product-item">

                        <div class="item-image">
                            <img src="{{$pg->image}}" alt="test">
                        </div>

                        <div class="item-links">
                            <a href="#" class="links-item">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a id="{{$pg->id}}" style="cursor: pointer" class="links-item links-item-main add-cart">
                                Add to cart
                            </a>
                            <a href="#">
                                <i class="glyphicon glyphicon-heart-empty links-item" aria-hidden="true"></i>
                            </a>
                        </div>

                        <div class="item-sub">
                            <a href="#"><h5>Bag Baggit</h5></a>
                            <p>$100</p>
                        </div>

                    </div>

                </div>
            </div>


        @endforeach















    </div>
    {{$page->setpath('/search?search='.$text)->links()}}


