<template>
    <!-- activity warpper -->
    <div class="activity_wrapper">
        <!-- 麵包屑 -->
        <div class="breadcrumb_wrapper">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">首頁</a></li>
                    <li class="breadcrumb-item active" aria-current="page">活動</li>
                </ol>
            </nav>
        </div>
        <!-- 標題 -->
        <div class="activity_title_wrapper">活動資訊</div>
        <div class="activity_search_wrapper">
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="搜尋">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜尋</button>
                </form>
            </nav>
        </div>
        <div class="activity_sort_wrapper"></div>
        <div class="activity_content_wrapper">

        </div>
    </div>
    
</template>
<script>
    export default {
        props: ['name'],
        data () {
            return {
            }
        },
        methods: {
        }
    }
</script>

<style lang="scss">
@mixin size($h:auto, $w:auto) {
    height: $h;
    width: $w;
}

.activity_wrapper {
    .breadcrumb_wrapper{
        .breadcrumb{
            margin-bottom: 0 !important;
        }
    }
    .activity_title_wrapper{
        @include size(45px,100% );
        margin: 0 ;
        display: flex ;
        align-items: center ;
        padding-left: 1rem ;
        font-size: 1rem ;
    }
    .activity_search_wrapper{}
    .activity_sort_wrapper{}
    .activity_content_wrapper{}
}
</style>

