@extends('web.layouts.app')
@section('title', $blog->title . ' - OneMove')
@section('content')

<!-- Banner -->
<div class="bg-contact min-h-[28rem] h-[28rem]">
    <div class="container md:w-[80%] mx-auto px-[2rem] h-full lg:py-0 py-[2rem]">
        <div class="h-full translate-y-[15%]">
        @foreach ($blog->images as $image)
        @if ($image->type == 'banner')
        <img src="{{ $image->url }}" alt="" class="rounded-xl h-[20rem] w-full object-cover">
        @endif
        @endforeach
        </div>
    </div>
</div>
<!-- Banner -->


@php
$previousUrl = URL::previous();
$previousQueryParams = parse_url($previousUrl, PHP_URL_QUERY);
parse_str($previousQueryParams, $queryParams);
$pageParam = isset($queryParams['page']) ? $queryParams['page'] : null;
$targetUrl = url('/blogs');
if ($pageParam) {
$targetUrl .= "?page=" . $pageParam;
}
@endphp
<!-- Section -->
<section>
    <div class="bg-[#fff] py-[5rem]">
        <div class="container xl:w-[75%] md:w-[80%] mx-auto">
            <div class="flex flex-col gap-5">
                <div class="mt-[2rem] relative">
                    <div class="absolute top-0 left-5 md:left-0">
                        <a href="{{$targetUrl}}">
                            <svg width="3rem" height="3rem" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="35" cy="35" r="35" fill="#C4DBF4" />
                                <path d="M47.71 35.0003C47.71 34.2972 47.1951 33.716 46.5271 33.6241L46.3414 33.6114L24.9724 33.6121L32.9747 26.1729C33.5103 25.6317 33.5121 24.7523 32.9788 24.2087C32.494 23.7146 31.7338 23.6681 31.1971 24.0703L31.0433 24.2045L20.693 34.0153L20.6659 34.0446C20.6379 34.0746 20.6111 34.1058 20.5858 34.1383L20.693 34.0153C20.6398 34.0691 20.5918 34.1262 20.5492 34.1859C20.5234 34.2235 20.4984 34.2624 20.4753 34.3027C20.4231 34.3923 20.3827 34.486 20.3529 34.5824C20.3429 34.6164 20.3335 34.6511 20.3255 34.6863C20.319 34.7132 20.3136 34.7405 20.3091 34.768C20.3045 34.7977 20.3006 34.8274 20.2975 34.8575C20.2941 34.8876 20.292 34.9184 20.2909 34.9492C20.2907 34.9663 20.2904 34.9833 20.2904 35.0003L20.2908 35.0464C20.2919 35.0806 20.2943 35.1148 20.2979 35.1489L20.2904 35.0003C20.2904 35.0796 20.2969 35.1574 20.3095 35.2331C20.3151 35.2675 20.3223 35.3022 20.3307 35.3365C20.3375 35.3638 20.3449 35.3906 20.3531 35.4171C20.3628 35.4486 20.3738 35.4803 20.386 35.5116C20.3987 35.5439 20.4124 35.5755 20.4273 35.6065C20.4385 35.6302 20.4511 35.6546 20.4644 35.6788C20.4896 35.724 20.5162 35.7665 20.545 35.8073C20.5495 35.8137 20.5546 35.8207 20.5597 35.8277C20.6053 35.8897 20.6526 35.9444 20.7039 35.9951L31.0433 45.7964C31.5788 46.3377 32.4454 46.3359 32.9787 45.7923C33.4636 45.2982 33.5062 44.5265 33.1076 43.9836L32.9747 43.8281L24.974 36.3905L46.3414 36.3892C47.0972 36.3892 47.71 35.7674 47.71 35.0003Z" fill="black" />
                            </svg>
                        </a>
                    </div>
                    <div class="w-[80%] mx-auto">
                        <div class="flex items-center gap-3 md:ml-0 ml-[3rem]">
                            <!-- <button class="bg-[#007AFE] px-4 text-white py-2 text-sm rounded-lg">Place an
                                order</button> -->
                            <div class="flex items-center gap-2">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4375 8C15.4375 11.8318 12.3318 14.9375 8.5 14.9375C4.66825 14.9375 1.5625 11.8318 1.5625 8C1.5625 4.16825 4.66825 1.0625 8.5 1.0625C12.3318 1.0625 15.4375 4.16825 15.4375 8Z" stroke="#007AFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M11.0736 10.2068L8.24609 8.52002V4.88477" stroke="#007AFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <p class="text-sm">{{ $blog->created_at->diffforhumans() }}</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 font-outfit mt-[2rem]">
                            <h1 class="font-bold text-[2.2rem]">{{ $blog->title }}</h1>
                            <div class="render_html">{!! $blog->content !!}</div>
                            @foreach ($blog->images as $image)
                            @if ($image->type == 'image')
                            <img src="{{ $image->url }}" alt="" class="rounded-xl h-[20rem] w-full object-cover">
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Section -->

<!-- Section -->
<section>
    @if(count($latestPosts) > 0)
    <div class="bg-[#e8f3ff] py-[5rem]">
        <div class="flex flex-col gap-5 container md:w-[80%] mx-auto">
            <h1 class="font-bold text-[2rem]">Latest Post</h1>
            <div class="grid md:grid-cols-3 gap-5">
               @foreach ($latestPosts as $lp)
                    <div class="flex flex-col gap-3">
                        @if(isset($lp->images->first()->url))
                        <a href="{{ route('single.blog', $lp->slug) }}" class="bg-white rounded-xl">
                        <img src="{{ $lp->images->first()->url }}" alt="" class="rounded-xl h-[15rem] w-full object-cover">
                        </a>
                        @endif
                        <div class="flex flex-col gap-3 p-4">
                            <h1 class="font-bold text-2xl">{{ $lp->title }}</h1>
                            <div class="text-[#676972] text-sm">{!! \Illuminate\Support\Str::limit($lp->content, 100, '...') !!}</div>
                            <div class="flex items-center gap-3 rounded-b-xl">
                                <a href="{{ route('single.blog', $lp->slug) }}" class="bg-white rounded-xl">
                                <button class="bg-[#007AFE] px-4 text-white py-2 text-sm rounded-lg">View</button>
                                </a>
                                <div class="flex items-center gap-2">
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4375 8C15.4375 11.8318 12.3318 14.9375 8.5 14.9375C4.66825 14.9375 1.5625 11.8318 1.5625 8C1.5625 4.16825 4.66825 1.0625 8.5 1.0625C12.3318 1.0625 15.4375 4.16825 15.4375 8Z" stroke="#007AFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M11.0736 10.2068L8.24609 8.52002V4.88477" stroke="#007AFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </svg>
                                    <p class="text-sm">{{ $lp->created_at->diffforhumans() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            </div>
        </div>
    </div>
    @endif
</section>
<!-- Section -->
@endsection