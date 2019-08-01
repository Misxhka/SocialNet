@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
     <div class="col-3 pt-3">
     <img src="https://instagram.fkul3-2.fna.fbcdn.net/vp/3a9dc6e6017da6bb6cad5bd2bb2b20d4/5DE2EFE0/t51.2885-19/s320x320/56656363_1620297644773123_8999004628938915840_n.jpg?_nc_ht=instagram.fkul3-2.fna.fbcdn.net" class="rounded-circle" height="150" width="150">
     </div>
    <div class="col-7 pt-5">
        <div class="d-flex justify-content-between">
        <h1>{{ $user->username }}</h1>
        <a href="{{ route('p.create') }}">Add New Post</a>
        </div>

        <div class="d-flex">
            <div class=pr-4><strong>141</strong> posts</div>
            <div class=pr-4><strong>922</strong> followers</div>
            <div class=pr-4><strong>524</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
</div>

<div class="row pt-5">
    @foreach($user->posts as $post)
    <div class="col-4">
        <img src="/storage/{{ $post->image }}" class="w-100">
    </div>
    @endforeach
    </div>
</div>
@endsection
