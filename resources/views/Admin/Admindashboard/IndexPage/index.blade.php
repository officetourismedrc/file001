@extends('Admin.index')
@section('sectionC')

<div class="container_section">
    <a href="{{route('index.page.qr-code')}}" class="item_link-container">
        <div class="item-link__icon">
            <i class="ri-qr-code-line"></i>
        </div>
        <div class="item_link__desc">
            <span>site main qr-code </span>
        </div>
    </a>

    <a href="" class="item_link-container">
        <div class="item-link__icon">
            <i class="ri-file-copy-2-line"></i>
        </div>
        <div class="item_link__desc">
            <span>slider</span>
        </div>
    </a>
</div>


@endsection
