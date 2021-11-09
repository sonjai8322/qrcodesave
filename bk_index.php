<!DOCTYPE html>
<html lang="en">
<head>
  <title>PromptPay-QR</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://lh3.googleusercontent.com/proxy/TaKxjCd1VgF9dCcjd7cSK5hRRZvgetB76pCUmGtMG8NfNxXFRvVpkBj6uWprRPtlPbgXsBtRMwQTR0CO0js039wqlVh-ttmuBf45Bs-rmGYgMuMgJl7D9vEuvir9spp0IXUC6uNtjgwohgowPZtcfPo4" rel="icon" type="image/x-icon" />
  
</head>
<body>

<div class="container-fluid">
   <div class="row">
    <div class="col-12 text-center">
        <h2>PromptPay-QR</h2>
    </div>
    <div class="col-12 text-center">
        <!-- <img width="256" src="https://lh3.googleusercontent.com/proxy/TaKxjCd1VgF9dCcjd7cSK5hRRZvgetB76pCUmGtMG8NfNxXFRvVpkBj6uWprRPtlPbgXsBtRMwQTR0CO0js039wqlVh-ttmuBf45Bs-rmGYgMuMgJl7D9vEuvir9spp0IXUC6uNtjgwohgowPZtcfPo4"> -->
    </div>
    <div class="col-12 text-center">
        <button type="button" class="btn btn-success" onclick="forceDownload($('.pp').get(0).currentSrc,'promtpay'+Date.now()+'.png')">บันทึกรูปภาพ</button>   
    </div>
  </div>
  <div class="row">
        <div class="col-12 text-center">
        <?Php
        require_once("lib/PromptPayQR.php");

        $PromptPayQR = new PromptPayQR(); // new object
        $PromptPayQR->size = 8; // Set QR code size to 8
        $PromptPayQR->id = '0984458075'; // PromptPay ID
        $PromptPayQR->amount = 99; // Set amount (not necessary)
        echo '<img class="pp" src="' . $PromptPayQR->generate() . '" />';
        ?>
        </div>
   </div>

</div>

</body>
<script>
function forceDownload(url, fileName){
    var xhr = new XMLHttpRequest();
    xhr.open("GET", url, true);
    xhr.responseType = "blob";
    xhr.onload = function(){
        var urlCreator = window.URL || window.webkitURL;
        var imageUrl = urlCreator.createObjectURL(this.response);
        var tag = document.createElement('a');
        tag.href = imageUrl;
        tag.download = fileName;
        document.body.appendChild(tag);
        tag.click();
        document.body.removeChild(tag);
    }
    xhr.send();
}
</script>
</html>
