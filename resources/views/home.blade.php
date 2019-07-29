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
        <a href="">Add New Post</a>
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
    <div class="col-4">
        <img src="https://instagram.fkul2-2.fna.fbcdn.net/vp/0e1f3289ec97fcc79a2f0e942ba0f9fc/5DD7A271/t51.2885-15/sh0.08/e35/s640x640/64728516_405882150278613_4669694902477982295_n.jpg?_nc_ht=instagram.fkul2-2.fna.fbcdn.net" class=w-100 >
    </div>
    <div class="col-4">
        <img src="https://instagram.fkul2-2.fna.fbcdn.net/vp/d93cd287527e4591ba06c7af8af54ae1/5DD5E86D/t51.2885-15/sh0.08/e35/c0.135.1080.1080a/s640x640/64408646_165253127842099_7195953756662611165_n.jpg?_nc_ht=instagram.fkul2-2.fna.fbcdn.net" class=w-100>
    </div>
    <div class="col-4">
        <img src="https://instagram.fkul2-2.fna.fbcdn.net/vp/5feca10cd59ee9f19c57626eaa10f104/5DEEC95C/t51.2885-15/sh0.08/e35/s640x640/61469837_299984977572310_588401057788564196_n.jpg?_nc_ht=instagram.fkul2-2.fna.fbcdn.net" class=w-100>
    </div>
</div>
@endsection
