# PromptPay-QR-generator

ไลบารี่ใช้สร้าง PromptPay QR สำหรับจ่ายเงินผ่าน QR code รองรับการตั้ง PromptPay ID ทั้งหมายเลขบัตรประจำตัวประชาชน และเบอร์โทรศัพท์

ตัวอย่าง

```php
<?Php
require_once("lib/PromptPayQR.php");

$PromptPayQR = new PromptPayQR(); // new object
$PromptPayQR->size = 8; // Set QR code size to 8
$PromptPayQR->id = '0841079779'; // PromptPay ID
$PromptPayQR->amount = 200.25; // Set amount (not necessary)
echo '<img src="' . $PromptPayQR->generate() . '" />';
```

## ไลบารี่ที่ใช้ร่วม

 - PHP QrCode Liblary : http://phpqrcode.sourceforge.net/

## ลิขสิทธิ์การใช้งาน

ผู้จัดทำอนุญาตให้นำไปใช้งาน และแจกจ่ายได้โดยคงไว้ซึ่งที่มาของเนื้อหา ห้ามมีให้นำไปใช้งานในเชิงพาณีย์โดยตรง เช่น การนำไปจำหน่าย

 - http://www.ioxhop.com/

https://stackoverflow.com/questions/17527713/force-browser-to-download-image-files-on-click/17527821
https://www.youtube.com/watch?v=qtQ9TvQLKjc
https://drv.tw/
https://drv.tw/~sonjai8322@gmail.com/gd/?a=admin#authed=1

https://xjboazfbxvimdguwwsgigw-on.drv.tw/PromptPay-QR-generator-master/

https://bit.ly/3bvCpCH

How to Save Gallery Images on Mobile Devices
https://help.cloudspot.io/en/articles/114610-how-to-save-gallery-images-on-mobile-devices