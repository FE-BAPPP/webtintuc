@extends('layouts.app')

@section('title', 'Tất cả danh mục - BlogTFT')

@section('content')

@include('components.header')

<main>
    <div class="container all_container">
        <h2 class="title_head">Tất cả danh mục</h2>
        <ul class="all_categories_menu">
            @foreach($categories as $category)
                <li class="all_categories_item">
                    <a href="{{ route('category.posts', $category->id) }}" class="all_categories_link">{{ $category->name }}</a>
                    <span>- {{ $category->posts_count }} bài viết</span>
                </li>
            @endforeach
        </ul>
    </div>
</main>

@include('components.footer')
@endsection
