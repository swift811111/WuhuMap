require('./bootstrap');
// 匯入 Hello.vue 檔，不需加副檔名
import Hello from './components/Hello';
import Mapheader from './components/comments/Header';
import Mapcontent from './components/content/Mapcontent';
import Mapfooter from './components/comments/Footer';

new Vue({
    // 找到 hello.blade.php 中指定的掛載點元素
    el: '#app',

    // 使用我們建立的 Hello(.vue) 元件
    components: {
        Hello,
        Mapheader,
        Mapcontent,
        Mapfooter
    },
    data: {

    },
    methods: {
        test: function() {
            console.log('123');
        },
    },
})