document.getElementById('btnEditUser').addEventListener('click', function() {

    var req = new XMLHttpRequest();
    req.open("get", "/easymanager/assets/logic/mAmazonDeleteRecords.php", true);
    req.send();



})