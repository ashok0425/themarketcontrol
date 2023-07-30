 <!-- Header section  -->
 <section class="top_bar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-lg">
            <a class="navbar-brand">{{Carbon\Carbon::parse(now())->format('d M, Y G:i:A')}}</a>
        </div>
    </nav>
</section>
<section class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="{{route('/')}}">
                <img src="{{getImage($setting->logo)}}" alt="" class="img-fluid">
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    @php
    $categories = App\Models\PropertyType::where('status',1)->get();
@endphp
                   @foreach ($categories as $category)
                   <li class="nav-item">
                    <a class="nav-link" href="{{route('category',['slug'=>$category->slug])}}">{{$category->name}}</a>
                </li>
                   @endforeach

                </ul>

            </div>

        </div>
    </nav>
</section>
