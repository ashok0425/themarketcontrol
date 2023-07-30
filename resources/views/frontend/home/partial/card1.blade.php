<div class="card_style_1">

    <div class="img-wrap">
        <a href="#">
            <img src="{{getImage($blog->thumbnail)}}" alt="{{$blog->title}}" class="img-fluid ">
        </a>
    </div>
    <div class="card_text">
        <h3>
            <a href="#">

                {{$blog->title}}
            </a>
        </h3>
        <div class="details">

            <div class="date">
                <i class="fas fa-calendar-alt me-1"></i>
                {{Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}}
            </div>
        </div>
        <a href="{{route('detail',['slug'=>$blog->slug])}}" class="btn btn_style_1">Learn more</a>
    </div>

</div>
