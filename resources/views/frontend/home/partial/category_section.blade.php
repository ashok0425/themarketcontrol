
<section class="custom-bg-white">
    <div class="container">
        <div class="title">
            <h2><span>{{Str::upper($category->name)}}</span> NEWS
            </h2>
        </div>
        <div class="splide schemes">
            <div class="splide__track ">
                <ul class="splide__list">
                    @foreach ($category->blogs as $blog)

                    <li class="splide__slide list-style-none">
                        <div class="card_style_4">
                            <div class="img_wrap">
                                <img src="{{getImage($blog->thumbnail)}}" alt="" class="img-fluid">
                            </div>
                            <div class="card_text">
                                <h3>
                                    <a href="#">{{$blog->title}}</a>
                                </h3>

                                <p>
                                   {{$blog->short_description}}
                                </p>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</section>
