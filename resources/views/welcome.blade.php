@extends('layouts_frontend._main_frontend')

@section('extra_style')
@endsection

@section('content')
<section class="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="headline">
                            <div class="nav" id="headline-nav">
                                <a class="left carousel-control" role="button" data-slide="prev">
                                    <span class="ion-ios-arrow-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" role="button" data-slide="next">
                                    <span class="ion-ios-arrow-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="owl-carousel owl-theme" id="headline">                          
                                <div class="item">
                                    <a href="#"><div class="badge">Tip!</div> Vestibulum ante ipsum primis in faucibus orci</a>
                                </div>
                                <div class="item">
                                    <a href="#">Ut rutrum sodales mauris ut suscipit</a>
                                </div>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme slide" id="featured">
                            <div class="item">
                                <article class="featured">
                                    <div class="overlay"></div>
                                    <figure>
                                        <img src="{{ asset('assets/images/news/img04.jpg') }}" alt="Sample Article">
                                    </figure>
                                    <div class="details">
                                        <div class="category"><a href="category.html">Computer</a></div>
                                        <h1><a href="single.html">Phasellus iaculis quam sed est elementum vel ornare ligula venenatis</a></h1>
                                        <div class="time">December 26, 2016</div>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="featured">
                                    <div class="overlay"></div>
                                    <figure>
                                        <img src="{{ asset('assets/images/news/img14.jpg') }}" alt="Sample Article">
                                    </figure>
                                    <div class="details">
                                        <div class="category"><a href="category.html">Travel</a></div>
                                        <h1><a href="single.html">Class aptent taciti sociosqu ad litora torquent per conubia nostra</a></h1>
                                        <div class="time">December 10, 2016</div>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="featured">
                                    <div class="overlay"></div>
                                    <figure>
                                        <img src="{{ asset('assets/images/news/img13.jpg') }}" alt="Sample Article">
                                    </figure>
                                    <div class="details">
                                        <div class="category"><a href="category.html">International</a></div>
                                        <h1><a href="single.html">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
                                        <div class="time">October 12, 2016</div>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="featured">
                                    <div class="overlay"></div>
                                    <figure>
                                        <img src="{{ asset('assets/images/news/img05.jpg') }}" alt="Sample Article">
                                    </figure>
                                    <div class="details">
                                        <div class="category"><a href="category.html">Lifestyle</a></div>
                                        <h1><a href="single.html">Mauris elementum libero at pharetra auctor Fusce ullamcorper elit</a></h1>
                                        <div class="time">November 27, 2016</div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="line">
                            <div>POPULAR</div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    @foreach ($data_popular as $element)
                                    <article class="article col-md-3">
                                        <div class="inner">
                                            <figure>
                                                <a href="single.html">
                                                    <img src="{{ asset('storage/app/'.$element->dn_cover ) }}" alt="Sample Article">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h6 style="font-size: 12px"><a href="{{ route('frontend_book',['id'=>str_replace(" ","-",$element->dn_title)]) }}">{{-- {{ substr(strip_tags($element->dn_title), 0,25) }}{{ strlen($element->dn_title) > 2 ?  ".." : "" }} --}}<input type="text" readonly="" style="width: 100%;border: none;cursor: pointer;" value="{{ $element->dn_title }}" name=""></a></h6>
                                                <footer>
                                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1263</div></a>
                                                    <a class="btn btn-primary more" href="{{ route('frontend_book',['id'=>str_replace(" ","-",$element->dn_title)]) }}">
                                                        <div>More</div>
                                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                                    </a>
                                                </footer>
                                            </div>
                                        </div>
                                    </article>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="line">
                            <div>LIKE</div>
                        </div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    @foreach ($data_like as $element)
                                    <article class="article col-md-3">
                                        <div class="inner">
                                            <figure>
                                                <a href="single.html">
                                                    <img src="{{ asset('storage/app/'.$element->dn_cover ) }}" alt="Sample Article">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h6 style="font-size: 12px"><a href="{{ route('frontend_book',['id'=>str_replace(" ","-",$element->dn_title)]) }}">{{-- {{ substr(strip_tags($element->dn_title), 0,25) }}{{ strlen($element->dn_title) > 2 ?  ".." : "" }} --}}<input type="text" style="width: 100%;border: none;cursor: pointer;" value="{{ $element->dn_title }}" name=""></a></h6>
                                                <footer>
                                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1263</div></a>
                                                    <a class="btn btn-primary more" href="{{ route('frontend_book',['id'=>str_replace(" ","-",$element->dn_title)]) }}">
                                                        <div>More</div>
                                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                                    </a>
                                                </footer>
                                            </div>
                                        </div>
                                    </article>
                                    @endforeach
                                </div>
                            </div>
                        <div class="line">
                            <div>LATEST</div>
                        </div>
                          <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    @foreach ($data_latest as $element)
                                    <article class="article col-md-3">
                                        <div class="inner">
                                            <figure>
                                                <a href="single.html">
                                                    <img src="{{ asset('storage/app/'.$element->dn_cover ) }}" alt="Sample Article">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h6 style="font-size: 12px"><a href="{{ route('frontend_book',['id'=>str_replace(" ","-",$element->dn_title)]) }}">{{-- {{ substr(strip_tags($element->dn_title), 0,25) }}{{ strlen($element->dn_title) > 2 ?  ".." : "" }} --}}<input type="text" style="width: 100%;border: none;cursor: pointer;" value="{{ $element->dn_title }}" name=""></a></h6>
                                                <footer>
                                                    <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1263</div></a>
                                                    <a class="btn btn-primary more" href="{{ route('frontend_book',['id'=>str_replace(" ","-",$element->dn_title)]) }}">
                                                        <div>More</div>
                                                        <div><i class="ion-ios-arrow-thin-right"></i></div>
                                                    </a>
                                                </footer>
                                            </div>
                                        </div>
                                    </article>
                                    @endforeach
                                </div>
                            </div>
                        
                    </div>
                    
                </div>
            </div>
            <div class="col-xs-6 col-md-3 sidebar" id="sidebar">
                        <div class="sidebar-title for-tablet">Sidebar</div>
                        
                        <aside>
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="active">
                                    <a href="#recomended" aria-controls="recomended" role="tab" data-toggle="tab">
                                        <i class="ion-android-star-outline"></i> Recomended
                                    </a>
                                </li>
                                <li>
                                    <a href="#comments" aria-controls="comments" role="tab" data-toggle="tab">
                                        <i class="ion-ios-chatboxes-outline"></i> Comments
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="recomended">
                                    <article class="article-fw">
                                        <div class="inner">
                                            <figure>
                                                <a href="single.html">
                                                    <img src="{{ asset('assets/images/news/img16.jpg') }}" alt="Sample Article">
                                                </a>
                                            </figure>
                                            <div class="details">
                                                <div class="detail">
                                                    <div class="time">December 31, 2016</div>
                                                    <div class="category"><a href="category.html">Sport</a></div>
                                                </div>
                                                <h1><a href="single.html">Donec congue turpis vitae mauris</a></h1>
                                                <p>
                                                    Donec congue turpis vitae mauris condimentum luctus. Ut dictum neque at egestas convallis. 
                                                </p>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="line"></div>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="single.html">
                                                    <img src="{{ asset('assets/images/news/img05.jpg') }}" alt="Sample Article">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="category.html">Lifestyle</a></div>
                                                    <div class="time">December 22, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="single.html">
                                                    <img src="{{ asset('assets/images/news/img02.jpg') }}" alt="Sample Article">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="category.html">Travel</a></div>
                                                    <div class="time">December 21, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="article-mini">
                                        <div class="inner">
                                            <figure>
                                                <a href="single.html">
                                                    <img src="{{ asset('assets/images/news/img10.jpg') }}" alt="Sample Article">
                                                </a>
                                            </figure>
                                            <div class="padding">
                                                <h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
                                                <div class="detail">
                                                    <div class="category"><a href="category.html">Healthy</a></div>
                                                    <div class="time">December 20, 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="tab-pane comments" id="comments">
                                    <div class="comment-list sm">
                                        <div class="item">
                                            <div class="user">                                
                                                <figure>
                                                    <img src="{{ asset('assets/images/img01.jpg"') }} alt="User Picture">
                                                </figure>
                                                <div class="details">
                                                    <h5 class="name">Mark Otto</h5>
                                                    <div class="time">24 Hours</div>
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="user">                                
                                                <figure>
                                                    <img src="{{ asset('assets/images/img01.jpg"') }} alt="User Picture">
                                                </figure>
                                                <div class="details">
                                                    <h5 class="name">Mark Otto</h5>
                                                    <div class="time">24 Hours</div>
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="user">                                
                                                <figure>
                                                    <img src="{{ asset('assets/images/img01.jpg"') }} alt="User Picture">
                                                </figure>
                                                <div class="details">
                                                    <h5 class="name">Mark Otto</h5>
                                                    <div class="time">24 Hours</div>
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside>
                            <div class="aside-body">
                                <form class="newsletter">
                                    <div class="icon">
                                        <i class="ion-ios-email-outline"></i>
                                        <h1>Newsletter</h1>
                                    </div>
                                    <div class="input-group">
                                        <input type="email" class="form-control email" placeholder="Your mail">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
                                        </div>
                                    </div>
                                    <p>By subscribing you will receive new articles in your email.</p>
                                </form>
                            </div>
                        </aside>
                        
                    </div>
        </div>
    </div>

        </section>
@endsection

@section('extra_scripts')


<script type="text/javascript">
    
    function link(argument) {
        window.location.assign('www.esensicreative.com');
    }

</script>


@endsection
