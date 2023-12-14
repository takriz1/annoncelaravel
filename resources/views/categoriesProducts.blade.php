
<div class="row">
    @foreach ($products as $product)
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="featured-box">
            <figure>
                <span class="price-save">
                    {{$product->price}} TND
                </span>
                <div class="icon">
                    <span class="bg-green"><i class="lni-heart"></i></span>
                    <span><i class="lni-bookmark"></i></span>
                </div>
                <a href="#"><img class="img-fluid" src="{{ asset('uploads/products') }}/{{ $product->image }}"
                        alt=""></a>
            </figure>
            <div class="feature-content">
                <div class="product">
                    <a href="#">{{$product->category->libelle_c}}</a>
                </div>
                <h4><a href="ads-details.html">{{ $product->name }}</a></h4>
                <div class="meta-tag">
                    <span>
                        <a href="#"><i class="lni-user">{{ $product->user->name }}</i></a>
                    </span>
                </div>
                <p class="dsc">{{$product->description = Str::limit($product->description, 80)}}.</p>
                <div class="listing-bottom">
                    <h3 class="price float-left">{{$product->price}} TND</h3>
                    <a href="ads-details.html" class="btn btn-common float-right">View
                        Details</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
{{ $products->links() }}
