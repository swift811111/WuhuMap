@extends('layouts.default')

@section('title', '住宿資訊')

@section('content')
    <div class="header">
        <Mapheader></Mapheader>
    </div>
    <div class="content">
       
    </div>
    <div class="footer">
        <!-- <Mapfooter></Mapfooter> -->
    </div>
@endsection

@section('script')
    <!-- script by self -->
    <script src="/WuhuMap/public/js/map.js"></script>
@endsection

@section('style')
<!-- 自己的 css 檔 -->
<link rel="stylesheet" type="text/css" href="/WuhuMap/public/css/map.css">
@endsection