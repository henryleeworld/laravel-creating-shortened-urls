# Laravel 10 建立短網址

引入 ashallendesign 的 short-url 套件來擴增建立短網址，讓使用者能將冗長的網址精簡為簡短字元組合，同時也能讓網址內容能在整理、分享時讓人容易點選，或是再做分享，尤其在手機閱讀越來越普及之下，短網址更提供容易觀看、使用的好處。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/shortened-urls/generate` 來建立短網址。

----

## 畫面截圖
![](https://i.imgur.com/pfHQQ1L.gif)
> 將要縮短的網址貼上，點擊「產生」送出

![](https://i.imgur.com/4mWNiln.png)
> 讓原本所帶的 HTTP 參照位址能夠原封不動地帶到目的地網址去
