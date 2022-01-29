@php
    if ($type === 'shops') {
        $path = 'storage/shops/';
    }
    if ($type === 'products') {
        $path = 'storage/products/';
    }
@endphp

<div>
    @if (empty($filename))
        <img src="{{asset('images/no_image (1).jpg')}}" alt="初期設定画像">
    @else
        <img src="{{ asset($path . $filename) }}" alt="店舗画像">
    @endif
</div>
