@extends('layouts.main')
@section('title','Blogs')
@section('content')
<div id="kt_content_container">
    <div class="card" id="">
        <div class="card-header border-0">
            <div class="col-md-12 card-title d-flex align-items-center justify-content-center">
            <h2 class="fs-bold fs-1 text-dark ">{{__( 'BLOG LIST')}}</h2>
            </div>
        </div>
        <div class="card-body ">
            <div class="row g-10">
                @foreach ($blogs as $blog)
                    <div class="col-md-4">
                        <div class="card-xl-stretch me-md-6">
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" target="_blank" href="{{ asset('storage/assets/media/blogs/' . $blog->icon) }}">
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('storage/assets/media/blogs/' . $blog->icon) }}')"></div>
                            </a>
                            <div class="mt-5">
                                <p class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">{{ $blog->header }}</p>
                                <div class="fw-semibold fs-5 text-gray-600 text-dark mt-3 blog-description">
                                    {{ Illuminate\Support\Str::limit($blog->description, $limit = 200, $end = '...') }}
                                </div>
                                <a href="#" class="read-more-btn btn btn-sm btn-primary" data-more="{{ $blog->description }}" data-less="{{ Illuminate\Support\Str::limit($blog->description, $limit = 200, $end = '...') }}">Read More</a>
                                <div class="fs-2 fw-bold mt-5 d-flex flex-stack">
                                    <span class="badge border border-dashed fs-2 fw-bold text-dark p-2">
                                        <span class="fs-6 fw-semibold text-gray-400"></span>Category: {{ $blog->category }}</span>
                                     <span class="fs-2 fw-semibold text-gray-400"></span>Author: {{ $blog->author_name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
			</div>
        </div>
    </div>
    <br>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        $('.read-more-btn').on('click', function () {
            var $description = $(this).prev('.blog-description');
            var isExpanded = $description.hasClass('expanded');

            if (isExpanded) {
                $description.text($(this).data('less'));
                $(this).text('Read More');
            } else {
                $description.text($(this).data('more'));
                $(this).text('Read Less');
            }
            $description.toggleClass('expanded');
        });
    });
</script>
@endsection