<!--produkti START-->
    <div id="produkti" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="page-title text-center">
                    <h1>Нашите продукти</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
                    <hr class="pg-titl-bdr-btm"></hr>
                </div>


                <div class="row">
                    <div class="port-sec">
                        <div class="col-md-5 fil-btn text-center">
                            <h1 class="cat-title"><i class="fa fa-arrow-down" aria-hidden="true"></i>Накит<i class="fa fa-arrow-down" aria-hidden="true"></i></h1>
                            <div class="filter wrk-title active" data-filter=".nakit">Сите</div>
                                @foreach($categories as $cat)
                                    @if($cat->type == 1)
                                        <div class="filter wrk-title" data-filter=".category-{{$cat->id}}-1">{{$cat->name}}</div>
                                    @endif
                                @endforeach
                        </div>
                    </div>
                
                    <div class="col-md-2"></div>
                    <div class="port-sec">
                        <div class="col-md-5 fil-btn text-center">
                            <h1 class="text-center cat-title"><i class="fa fa-arrow-down" aria-hidden="true"></i>Делови<i class="fa fa-arrow-down" aria-hidden="true"></i></h1>
                            <div class="filter wrk-title" data-filter=".delovi">Сите</div>
                                @foreach($categories as $cat)
                                    @if($cat->type == 2)
                                        <div class="filter wrk-title" data-filter=".category-{{$cat->id}}-2">{{$cat->name}}</div>
                                    @endif
                                @endforeach
                        </div>
                    </div>
                </div>

{{--                 <div class="port-sec">
                    <div class="col-md-12 fil-btn text-center">
                            <div class="filter wrk-title active" data-filter="all">Сите</div>
                            @foreach($categories as $cat)
                                <div class="filter wrk-title" data-filter=".category-{{$cat->id}}">{{$cat->name}}</div>
                            @endforeach
 --}}                            {{-- <div class="filter wrk-title" data-filter=".category-1">Монистри</div>
                            <div class="filter wrk-title" data-filter=".category-2">Пердуви</div>
                            <div class="filter wrk-title lst-cld" data-filter=".category-3">Ланчиња</div> --}}
                    {{-- </div> --}}
                    
                    <div id="Container" class="Container">
                                @foreach($products as $product)
                                    <div class="filimg category-{{$product->category->id}}-{{ $product->category->type }} mix {{ $product->category->type == 1 ? 'nakit' : 'delovi' }} col-md-4 col-sm-4 col-xs-12" data-myorder="{{8-($product->category->id % 2) }}">
                                         <img src="{{ asset('/images/product_images/' . $product->slika) }}" alt="{{$product->ime}}" class="img-responsive product-img">
                                        <div id="{{$product->id}}" class="modal product-modal">
                                            <img src="{{ asset('/images/product_images/' . $product->slika) }}" alt="{{$product->ime}}" class="img-responsive product-modal-img">
                                            @if($product->apm || $product->paypal_button)
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 p-detail">
                                                        @if($product->apm)
                                                            <p>{!! $product->apm !!}</p>
                                                        @elseif($product->paypal_button)
                                                            <p>{!! $product->paypal_button !!}</p>
                                                        @endif
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 p-detail">
                                                        <p><span>{{$product->ime}}</span></p>
                                                        <p><span>{{$product->cena}}</span></p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 p-detail">
                                                        @if($product->apm)
                                                            <p class="ppp">{!! $product->paypal_button !!}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            @else
                                                <p><span>{{$product->ime}}</span></p>
                                                <p><span>{{$product->cena}}</span></p>
                                            @endif
                                        </div>
                                        <div class="img_desc">
                                            <p><span>{{$product->ime}}</span></p>
                                            <p><span>{{$product->cena}}</span></p>
                                            <p class="simor"><a href="#{{$product->id}}" rel="modal:open">Види детално</a></p>
                                        </div>

                                    </div>
                                @endforeach

                                {{-- {{ $products->links() }} --}}
                                {{-- <div class="filimg mix category-1 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="2">
                                    <img src="img/fea1.jpg" class="img-responsive"> 
                                    <div class="img_desc">Име<br> Цена</div>
                                </div>
                                <div class="filimg mix category-2 col-md-4 col-sm-4 col-xs-12" data-myorder="4">
                                    <img src="img/fea2.jpg" class="img-responsive">
                                    <div class="img_desc">Име<br> Цена</div>
                                </div>
                                <div class="filimg mix category-1 col-md-4 col-sm-4 col-xs-12" data-myorder="1">
                                    <img src="img/fea3.jpg" class="img-responsive">  
                                    <div class="img_desc">Име<br> Цена</div>                          
                                </div>
                                <div class="filimg mix category-2 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
                                    <img src="img/fea4.jpg" class="img-responsive">
                                    <div class="img_desc">Име<br> Цена</div>                        
                                </div>
                                <div class="filimg mix category-2 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
                                    <img src="img/fea5.jpg" class="img-responsive">
                                    <div class="img_desc">Име<br> Цена</div>
                                </div>
                                <div class="filimg mix category-2 category-3 col-md-4 col-sm-4 col-xs-12" data-myorder="8">
                                    <img src="img/fea6.jpg" class="img-responsive">
                                    <div class="img_desc">Име<br> Цена</div>
                                </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--produkti END