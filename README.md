# fishcar專案

D1 安裝 Jetstream 選擇 Livewire

遇到
laravel 安裝內存不足
-- update composer

D2 加入git init 遷移migration

使用sqlite

D3 加入git remote

D4 - [x]
加一個Dashboard
製作admin會員table
--table list後面有修改刪除功能--
改成blog介紹

1. 在Jet的 Dashboard旁邊加上一個Aboutme
在view加入 屬性href="{{ route('aboutme') }}"沒有加到函式(.index)
所以route一直顯示找不到

2. laravel8 路由寫法與以往的不同
laravel8裡 沒有自動命名空間前綴 使用使用完全域名
但無法解決我的問題
後來到app\providers\routeserviceprovider中加入
protected $namespace = 'App\Http\Controllers';

[從零開始學習php+Laravel 8系列 第 7 篇](https://ithelp.ithome.com.tw/articles/10269856)

[Target class controller does not exist - Laravel 8](https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8)

[Target class does not exist. problem in laravel 8 [duplicate]](https://stackoverflow.com/questions/63882034/target-class-does-not-exist-problem-in-laravel-8)

BY way
php artisan route:list
也會出現 target class does not exite
但成功的話就會出現所有路由

D5 - [x]
加入按鈕
按下後製作會員匯出成csv utf8檔

D6 - D8 沒做事

D9 php artisan route:list --name=(resourceName|resourceControllerName)

