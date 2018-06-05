@extends('layouts.default')

@section('title', '活動資訊')

@section('content')
    <div class="header">
        <Mapheader></Mapheader>
    </div>
    <div class="content">
       <Activitycontent></Activitycontent>
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
<!-- <link rel="stylesheet" type="text/css" href="/WuhuMap/public/css/activitys.css"> -->
@endsection