<template>
    <div class="header_wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/WuhuMap/public/">澎湖旅遊地圖</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="/WuhuMap/public/">旅遊地圖</a>
                    <a class="nav-item nav-link" href="/WuhuMap/public/activity">活動資訊</a>
                    <a class="nav-item nav-link" href="/WuhuMap/public/stays">住宿資訊</a>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
    export default {
        props: ['name'],
        data () {
            return {
                msg: 'This is a Laravel with Vue Demo.',
                active: 'sdfjsd'
            }
        },
        methods: {
            test: function() {
                console.log('123');
        },
    },

    }
</script>
<style lang="scss">

@mixin size($h:auto, $w:auto) {
    height: $h;
    width: $w;
}
.header_wrapper {
    @include size(50px,100% );
    background-color: red ;
}
</style>