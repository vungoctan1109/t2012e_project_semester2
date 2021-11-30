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
                        <a href="{{route('client.show_phone', $mobile -> id)}}" title="{{$mobile -> name}}">
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
    <div class="row">
        @if(count($mobiles) > 0)
            <div class="col-sm-12 col-md-5">
                <div>
                    <i>Showing {{($mobiles->currentpage()-1)*$mobiles->perpage()+1}} to
                        {{$mobiles->currentpage()*$mobiles->perpage()}} of {{$mobiles->total()}} entries</i>
                </div>
            </div>
        @endif
        <div class="col-sm-12 col-md-7 wrap-pagination-info">
            <div>
                @php
                    $link_limit = 7;
                @endphp
                @if ($mobiles->lastPage() > 1)
                    <ul class="pagination page-numbers">
                        <li class="page-number-item  {{($mobiles->currentPage() == 1) ? 'disabled' : '' }}">
                            <a class="page-number-item" href="{{ $mobiles->url(1) }}">First</a>
                        </li>
                        <li class="page-number-item">
                            <a class="page-number-item" href="{{ $mobiles->url($mobiles->currentPage() - 1) }}">Previous</a>
                        </li>
                        @for ($i = 1; $i <= $mobiles->lastPage(); $i++)
                            @php
                                $half_total_links = floor($link_limit / 2);
                                $from = $mobiles->currentPage() - $half_total_links;
                                $to = $mobiles->currentPage() + $half_total_links;
                                if ($mobiles->currentPage() < $half_total_links) { $to +=$half_total_links - $mobiles->
                                    currentPage();
                                }
                                if ($mobiles->lastPage() - $mobiles->currentPage() < $half_total_links) { $from
                                    -=$half_total_links - ($mobiles->lastPage() - $mobiles->currentPage()) - 1;
                                }
                            @endphp
                            @if ($from < $i && $i < $to)
                                <li class="page-number-item">
                                    <a class="page-number-item {{ ($mobiles->currentPage() == $i) ? 'current' : '' }}" href="{{ $mobiles->url($i) }}">{{ $i }}</a>
                                </li>
                            @endif
                        @endfor
                        @if($mobiles->currentPage() < $mobiles->lastPage())
                            <li class="page-number-item">
                                <a class="page-number-item"
                                   href="{{ $mobiles->url($mobiles->currentPage() + 1) }}">Next</a>
                            </li>
                        @endif
                        <li
                            class="page-number-item {{ ($mobiles->currentPage() == $mobiles->lastPage()) ? ' disabled' : '' }}">
                            <a class="page-number-item"
                               href="{{ $mobiles->url($mobiles->lastPage()) }}">Last</a>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
