@extends('web.layouts.app')
@section('title', 'Blogs - Moving truck services in dubai - OneMove')
@section('description', 'Onemove offers moving truck services in dubai where people can get free furniture movings and shifting services from us.In our blog section read some tips while moving out the furniture.')
@section('content')
<style>
   .pagination{
    text-align: center;
   }
   .pagination .page-item {
    display: inline-block;
    margin-right: 5px;
}

.pagination .page-link {
    color: #3366CC;
    border: 1px solid #3366CC;
    padding: 5px 10px;
    text-decoration: none;
}

.pagination .page-link:hover {
    background-color: #3366CC;
    color: #fff;
}

.pagination .page-item.active .page-link {
    background-color: #3366CC;
    color: #fff;
    border-color: #3366CC;
}

</style>
<!-- Banner -->
<div class="bg-contact min-h-[25rem] h-[25rem]">
    <div class="grid lg:grid-cols-2 gap-6 container md:w-[80%] mx-auto px-[2rem] h-full lg:py-0 py-[2rem]">
        <div class="flex items-center">
            <div class="flex flex-col font-outfit">
                <h1 class="text-[#23272C] text-[2.5rem] md:text-[3.5rem] font-bold">Blog post</h1>
                <p class="">Be updated with our latest blogs and announcements.
                </p>
            </div>
        </div>
        <div class="flex items-end">
            <img src="./assets/images/blog-bg.png" class="h-[23rem] mx-auto">
        </div>
    </div>
</div>
<!-- Banner -->

<!-- Section -->
<section>
    <div class="bg-[#fff] py-[5rem]">
        <div class="container xl:w-[75%] md:w-[80%] mx-auto px-[2rem]">
            <div class="flex flex-col gap-5">
                <div class="flex items-center gap-3 justify-between">
                    <div class="flex items-center gap-3 text-sm">
                        <!-- <div class="hover:bg-[#007AFE] text-[#007AFE] transition-all ease-in cursor-pointer hover:text-white border border-[#007AFE] rounded-full px-4 py-2 text-center">
                            Cargo
                        </div>
                        <div class="hover:bg-[#007AFE] text-[#007AFE] transition-all ease-in cursor-pointer hover:text-white border border-[#007AFE] rounded-full px-4 py-2 text-center">
                            Place an Order
                        </div>
                        <div class="hover:bg-[#007AFE] text-[#007AFE] transition-all ease-in cursor-pointer hover:text-white border border-[#007AFE] rounded-full px-4 py-2 text-center">
                            Junk Removal
                        </div>
                        <div class="hover:bg-[#007AFE] text-[#007AFE] transition-all ease-in cursor-pointer hover:text-white border border-[#007AFE] rounded-full px-4 py-2 text-center">
                            Start a trip to pickup
                        </div> -->
                    </div>
                    <div>
                        <div class="flex items-center gap-2 border rounded-full px-4 py-2 text-sm w-fit">
                            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10.2698" cy="9.7659" r="8.98856" stroke="#A9B3C5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.5234 16.4844L20.0475 19.9992" stroke="#A9B3C5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <form action="{{ route('blogs') }}" method="GET" class="flex gap-2">
                            <input type="text" placeholder="Search..." name="search" class="outline-none border-none w-full" value="{{ $searchTerm }}" onkeydown="if(event.keyCode === 13) this.form.submit()">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="mt-[2rem]">
                    <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-6">
                    @if ($blogs->isEmpty())
                    <h1 class="font-bold text-2xl text-center not-found-grid">No results found</h1>
                            @endif
                        @foreach($blogs as $blog)
                        <a href="{{route('single.blog', $blog->slug)}}">
                            <div class="flex flex-col gap-3">
                                @if(isset($blog->images->first()->url))
                                <img src="{{ $blog->images->first()->url }}" alt="" class="rounded-xl h-[20rem] border w-full object-cover">
                                @endif
                                <h1 class="font-bold text-2xl">{{$blog->title}}</h1>
                                <p class="text-[#676972] text-sm">{!! \Illuminate\Support\Str::limit($blog->content, 100, '...') !!}</p>
                                <div class="flex items-center gap-3">
                                    <button class="bg-[#007AFE] px-4 text-white py-2 text-sm rounded-lg">View</button>
                                    <div class="flex items-center gap-2">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4375 8C15.4375 11.8318 12.3318 14.9375 8.5 14.9375C4.66825 14.9375 1.5625 11.8318 1.5625 8C1.5625 4.16825 4.66825 1.0625 8.5 1.0625C12.3318 1.0625 15.4375 4.16825 15.4375 8Z" stroke="#007AFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M11.0736 10.2068L8.24609 8.52002V4.88477" stroke="#007AFE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <p class="text-sm">{{$blog->created_at->diffforhumans()}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<!-- Code For Paginating blogs as (12 per page) -->
                       

@if ($blogs->lastPage() > 1)
    <ul class="pagination pb-[3rem]">
        @if ($blogs->onFirstPage())
            <li class="page-item disabled">
                <span class="page-link">&laquo;</span>
            </li>
        @else
            <li class="page-item">
                <a href="{{ $blogs->previousPageUrl() }}" class="page-link">&laquo;</a>
            </li>
        @endif

        @for ($i = 1; $i <= $blogs->lastPage(); $i++)
            @if ($i == $blogs->currentPage())
                <li class="page-item active">
                    <span class="page-link">{{ $i }}</span>
                </li>
            @else
                <li class="page-item">
                    <a href="{{ $blogs->url($i) }}" class="page-link">{{ $i }}</a>
                </li>
            @endif
        @endfor

        @if ($blogs->hasMorePages())
            <li class="page-item">
                <a href="{{ $blogs->nextPageUrl() }}" class="page-link">&raquo;</a>
            </li>
        @else
            <li class="page-item disabled">
                <span class="page-link">&raquo;</span>
            </li>
        @endif
    </ul>
@endif



<!-- Section -->
@endsection