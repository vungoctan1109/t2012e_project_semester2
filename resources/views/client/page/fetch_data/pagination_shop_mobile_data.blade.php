<div id='fetchData'>
    <div class="row">
        <ul class="product-list grid-products equal-container">
            @foreach ($mobiles as $mobile)
            @php
            $price = number_format($mobile -> price, 0, '', ','); // 1,000,000
            @endphp
            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                <div class="product product-style-3 equal-elem ">
                    <div class="product-thumnail">
                        <a href="detail.html" title="{{$mobile -> name}}">
                            <figure><img src="{{$mobile -> mainThumbnail}}" alt="{{$mobile -> name}}">
                            </figure>
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name"><span>{{$mobile -> name}}</span></a>
                        <div class="wrap-price"><span class="product-price">{{$price}} (VND)</span>
                        </div>
                        <form id="formCart">
                            @csrf
                            <input type="hidden" value="{{$mobile -> id}}" name="id"/>
                            <input type="hidden" value="{{$mobile -> price}}" name="price"/>
                            <input type="hidden" value="{{$mobile -> name}}" name = "name">                            
                            <input type="hidden" value="{{$mobile -> mainThumbnail}}" name="image">
                            <input type="hidden" value="1" name="quantity">                                                                                               
                            <a href="#" class="btn add-to-cart" id="btnAddToCart">Add To Cart</a>
                        </form>                        
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="wrap-pagination-info">
        <ul class="page-numbers">
            <li><span class="page-number-item current">1</span></li>
            <li><a class="page-number-item" href="#">2</a></li>
            <li><a class="page-number-item" href="#">3</a></li>
            <li><a class="page-number-item next-link" href="#">Next</a></li>
        </ul>
        <p class="result-count">Showing 1-8 of 12 result</p>
    </div>
</div>