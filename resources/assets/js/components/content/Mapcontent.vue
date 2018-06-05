<template>
    <!-- map warpper -->
    <div class="map_wrapper">
        <div id="map"></div>
        
        <div class="map_btn_wrapper" :class="[(show==true)?comment_styles.bottom_show:comment_styles.bottom_hidden]">     
            <input class="map_btn" id="show_waters" @click="comment_styles.btn_active='water',show=false" :class="[(comment_styles.btn_active=='water')?active:null]" type="button" value="水補給站">
            <input class="map_btn" id="show_stays" @click="comment_styles.btn_active='stay',show=false" :class="[(comment_styles.btn_active=='stay')?active:null]" type="button" value="住宿推薦">
            <input class="map_btn" id="show_attractions" @click="comment_styles.btn_active='attractions',show=false" :class="[(comment_styles.btn_active=='attractions')?active:null]" type="button" value="景點地圖">
            <input class="map_btn" id="show_restaurant" type="button" @click="comment_styles.btn_active='restaurant',show=false" :class="[(comment_styles.btn_active=='restaurant')?active:null]" value="餐廳位置">
            <input class="map_btn" type="button" @click="comment_styles.btn_active='beach',show=false" :class="[(comment_styles.btn_active=='beach')?active:null]" value="淨灘資訊">
        </div>
     
        <!-- <div class="map_small_btn" @click="show=!show" :class="[(show==true)?comment_styles.btn_show:comment_styles.btn_hidden]">M</div> -->
        <img v-if="show==false" class="map_small_btn" src="/WuhuMap/resources/assets/img/search.png" @click="show=!show" :class="[(show==true)?comment_styles.btn_show:comment_styles.btn_hidden]">
        <img v-else-if="show==true" class="map_small_btn" src="/WuhuMap/resources/assets/img/cancel.png" @click="show=!show" :class="[(show==true)?comment_styles.btn_show:comment_styles.btn_hidden]">
        <img class="map_small_btn recent_position_mark" id="show_position" :class="[(show==true)?comment_styles.btn_show:comment_styles.btn_hidden]" src="/WuhuMap/resources/assets/img/maps-and-flags.png">
    </div>
    
</template>
<script>
    export default {
        props: ['name'],
        data () {
            return {
                show: false,
                active:'active_self',
                comment_styles:{
                    btn_show:'btn_show' ,
                    btn_hidden:'btn_hidden',
                    bottom_show: 'bottom_show' ,
                    bottom_hidden: 'bottom_hidden',
                    btn_active:'water',
                }
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
.bottom_show {
    bottom: 0 ;
}
.bottom_hidden {
    bottom: -500px ;
}
.btn_show {
    bottom: 240px ;
}
.btn_hidden {
    bottom: 40px ;
}
.active_self {
    background-color: rgba(91, 128, 250, 0.918) !important;
    color: white !important;
}
</style>

