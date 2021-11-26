<div class="row">
    @if (count($mobiles) > 0 )
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="text-align: center;width: 20px;">Check</th>
                <th style="text-align: center;width: 10px;">ID</th>
                <th style="text-align: center;width: 20px;">name</th>
                <th style="text-align: center;">brandID</th>
                <th style="text-align: center;width: 20px;">quantity</th>
                <th style="text-align: center;width: 20px;">saleOff</th>
                <th style="text-align: center;width: 100px;">price (VND)</th>
                <th style="text-align: center;width: 150px;">thumbnail</th>
                <th style="text-align: center;width: 20px;">color</th>
                <th style="text-align: center;width: 10px;">ram (GB)</th>
                <th style="text-align: center;width: 20px;">memory (GB)</th>
                <th style="text-align: center;width: 20px;">pin (mAh)</th>
                <th style="text-align: center;width: 20px;">camera (pixel)</th>
                <th style="text-align: center;width: 20px;">screenSize (inch)</th>
                <th style="text-align: center;width: 10px;">status</th>
                <th style="text-align: center;width: 30px;">created_at</th>
                <th style="text-align: center;width: 30px;">updated_at</th>
                <th style="text-align: center;width: 50px;">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($mobiles as $mobile)
                <tr>
                    <td style="text-align:center; vertical-align: middle"><input type="checkbox"
                                                                                 style="width: 20px;height:20px;"
                                                                                 value="{{$mobile->id}}"/></td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->id}}</td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->name}}</td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->brand->name}}</td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->quantity}}</td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->saleOff * 100}}%</td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->fPrice}}</td>
                    <td style="text-align:center; vertical-align: middle">
                        <img width="120px" src="{{$mobile->thumbnail}}" alt="">
                    </td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->color}}</td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->ram}}</td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->memory}}</td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->pin}}</td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->camera}}</td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->screenSize}}</td>
                    <td style="text-align:center; vertical-align: middle">{{$mobile->strStatus}}</td>
                    <td style="text-align:center; vertical-align: middle">{{date('d-m-Y', strtotime($mobile->created_at))}}</td>
                    <td style="text-align:center; vertical-align: middle">{{date('d-m-Y', strtotime($mobile->created_at))}}</td>
                    <td style="text-align:center; vertical-align: middle">
                        <a class="btn btn-primary btn-sm m-1" href="admin/mobile/{{$mobile->id}}">
                            <i class="fas fa-folder">View</i>
                        </a>
                        <a class="btn btn-info btn-sm m-1" href="admin/mobile/{{$mobile->id}}/edit">
                            <i class="fas fa-pencil-alt">Edit</i>
                        </a>
                        <a class="btn btn-danger btn-sm delete m-1" href="admin/mobile/{{$mobile->id}}">
                            <i class="fas fa-trash">Delete</i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <thread>
                <tr>
                    <th style="text-align: center;width: 20px;">Check</th>
                    <th style="text-align: center;width: 10px;">ID</th>
                    <th style="text-align: center;width: 20px;">name</th>
                    <th style="text-align: center;">brandID</th>
                    <th style="text-align: center;width: 20px;">quantity</th>
                    <th style="text-align: center;width: 20px;">saleOff</th>
                    <th style="text-align: center;width: 100px;">price (VND)</th>
                    <th style="text-align: center;width: 150px;">thumbnail</th>
                    <th style="text-align: center;width: 20px;">color</th>
                    <th style="text-align: center;width: 10px;">ram (GB)</th>
                    <th style="text-align: center;width: 20px;">memory (GB)</th>
                    <th style="text-align: center;width: 20px;">pin (mAh)</th>
                    <th style="text-align: center;width: 20px;">camera (pixel)</th>
                    <th style="text-align: center;width: 20px;">screenSize (inch)</th>
                    <th style="text-align: center;width: 10px;">status</th>
                    <th style="text-align: center;width: 30px;">created_at</th>
                    <th style="text-align: center;width: 30px;">updated_at</th>
                    <th style="text-align: center;width: 50px;">Action</th>
                </tr>
            </thread>
        </table>
    @else
        <div>
            <strong>There are no records yet!<i class="far fa-frown"></i></strong> </br>
            <i class="fas fa-hand-point-right"></i>
            <a class="btn btn-primary btn-sm" href="{{route('mobile.create')}}">
                <i class="fas fa-create">Create new</i>
            </a>
        </div>
    @endif
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
    <div class="col-sm-12 col-md-7">
        <div>
            @php
                $link_limit = 7;
            @endphp
            @if ($mobiles->lastPage() > 1)
                <ul class="pagination">
                    <li class="page-item  {{($mobiles->currentPage() == 1) ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $mobiles->url(1) }}">First</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="{{ $mobiles->url($mobiles->currentPage() - 1) }}">Previous</a>
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
                            <li class="page-item {{ ($mobiles->currentPage() == $i) ? ' active' : '' }}">
                                <a class="page-link" href="{{ $mobiles->url($i) }}">{{ $i }}</a>
                            </li>
                        @endif
                    @endfor
                    @if($mobiles->currentPage() < $mobiles->lastPage())
                        <li class="page-item">
                            <a class="page-link"
                               href="{{ $mobiles->url($mobiles->currentPage() + 1) }}">Next</a>
                        </li>
                    @endif
                    <li
                        class="page-item {{ ($mobiles->currentPage() == $mobiles->lastPage()) ? ' disabled' : '' }}">
                        <a class="page-link"
                           href="{{ $mobiles->url($mobiles->lastPage()) }}">Last</a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</div>