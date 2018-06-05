require('./bootstrap');
// 匯入 Hello.vue 檔，不需加副檔名
import Hello from './components/Hello';
import Mapheader from './components/comments/Header';
import Mapfooter from './components/comments/Footer';
import Mapcontent from './components/content/Mapcontent';
import Activitycontent from './components/content/Activitycontent';

new Vue({
    // 找到 hello.blade.php 中指定的掛載點元素
    el: '#app',

    // 使用我們建立的 Hello(.vue) 元件
    components: {
        Hello,
        Mapheader,
        Mapcontent,
        Mapfooter,
        Activitycontent
    },
    data: {

    },
    methods: {
        test: function() {
            console.log('123');
        },
    },
})