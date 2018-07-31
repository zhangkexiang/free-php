// unresolved type 提示 可以下载一个vue.js 到本地
// ide 「Preferences」 =>「Languages & Frameworks」 => 「JavaScript」=>「Libraries」=> 「Add...」
var data = {message: 'Hello world!'};
var app = new Vue({
    el: '#app',
    data: data
});

setTimeout(function () {
    data.message = "i'm coming";
}, 3000);


setTimeout(function () {
    app.message = "i'm coming 2";
}, 6000);
