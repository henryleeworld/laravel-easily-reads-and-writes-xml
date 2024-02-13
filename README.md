# Laravel 10 輕鬆讀取和寫入可擴展標記語言（XML）

引入 saloonphp 的 xml-wrangler 套件來擴增輕鬆讀取和寫入可擴展標記語言（XML），可擴展標記語言可讓您以可共用的方式定義和儲存資料，可擴展標記語言支援電腦系統（例如網站、資料庫和第三方應用程式）之間的資訊交換，預先定義的規則可讓您輕鬆地透過任何網路將資料當做可擴展標記語言檔案傳輸，因為收件者可以使用這些規則來準確且有效地讀取資料。

## 使用方式
- 打開 php.ini 檔案，啟用 PHP 擴充模組 intl、sodium 和 XSL，並重啟服務器。
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
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/xml/read` 來讀取早餐菜單可擴展標記語言資料。

----

## 畫面截圖
![](https://i.imgur.com/jLFCJeo.png)
> 可提供規則來定義任何資料