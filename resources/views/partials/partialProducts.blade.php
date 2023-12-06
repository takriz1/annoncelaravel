<div class="product-filter">
    <div class="short-name">
        <span>Showing (1 - 12 products of 7371 products)</span>
    </div>
    <div class="Show-item">
        <span>Show Items</span>
        <form class="woocommerce-ordering" method="post">
            <label>
                <select name="order" class="orderby">
                    <option selected="selected" value="menu-order">49 items</option>
                    <option value="popularity">popularity</option>
                    <option value="popularity">Average ration</option>
                    <option value="popularity">newness</option>
                    <option value="popularity">price</option>
                </select>
            </label>
        </form>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#grid-view"><i class="lni-grid"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#list-view"><i
                    class="lni-list"></i></a>
        </li>
    </ul>
</div>


<div class="adds-wrapper">
    <div class="tab-content">
        <div id="list-view" class="tab-pane fade active show">
            <div class="row">
                @foreach ($products as $p)
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="featured-box">
                            <figure>
                                <span class="price-save">
                                    10% Save
                                </span>
                                <div class="icon">
                                    <span class="bg-green"><i class="lni-heart"></i></span>
                                    <span><i class="lni-bookmark"></i></span>
                                </div>
                                <a href="#"><img class="img-fluid"
                                        src="{{ asset('uploads' . '/products') }}/{{ $p->image }}"
                                        alt=""></a>
                            </figure>
                            <div class="feature-content">
                                <div class="product">
                                    <a href="#"> {{ $p->category->libelle_c }} </a>

                                </div>
                                <h4><a href="ads-details.html">{{ $p->name }}</a></h4>
                                <div class="meta-tag">
                                    <span>
                                        <a href="#"><i class="lni-user"></i>
                                            {{ $p->user->name }}</a>
                                    </span>
                                </div>
                                <p class="dsc">{{ $p->description }}.</p>
                                <div class="listing-bottom">
                                    <h3 class="price float-left">{{ $p->price }} TND</h3>
                                    <a href="ads-details.html"
                                        class="btn btn-common float-right">View
                                        Details</a>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>


<div class="pagination-bar">
    <nav>
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link active" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>
