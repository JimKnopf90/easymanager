window.onload = function () {

    var id = 0;
    var anzRow;
    var table = $('#bootstrap-data-table').DataTable();
    var obj;
    var isAdmin = false;

    $('#bootstrap-data-table').on( 'click', 'tr', function () {
        id = table.row( this ).id();
        anzRow = document.getElementById("bootstrap-data-table").getElementsByTagName("tr").length;

        for(var i = 0; i < anzRow; i++) {
            if((i%2) == 0)
            {
                document.getElementById("bootstrap-data-table").getElementsByTagName("tr")[i].style.backgroundColor = "white";
            } else {
                document.getElementById("bootstrap-data-table").getElementsByTagName("tr")[i].style.backgroundColor = "rgba(0,0,0,.05)";
            }
        }

       $('#' + id).css("background-color","lightgray");

    } );

    document.getElementById("btnSaveEditUser").addEventListener('click', function() {

        var username = document.getElementById("usernameEditUser").value;
        var forename = document.getElementById("forenameEditUser").value;
        var lastname = document.getElementById("lastnameEditUser").value ;
        var mail = document.getElementById("mailEditUser").value;
        var password = document.getElementById("passwordEditUser").value;
        var isAdimnRole;

        if(document.getElementById("chbAdminEditUser").checked == true)
            isAdimnRole = 1;
        else
            isAdimnRole = 0;

        window.location.href = "/easymanager/assets/logic/mUserChange.php?username=" + username + "&forename=" + forename + "&lastname=" + lastname + "&password=" + password + "&mail=" + mail + "&isAdmin=" + isAdimnRole + "&usernameid=" + id;
    });


    document.getElementById("btnDeleteUserReally").addEventListener('click', function() {
        window.location.href = "/easymanager/assets/logic/mUserDelete.php?usernameid=" + id;
        }, false);

    document.getElementById("btnEditUser").addEventListener('click', function() {
      var req = new XMLHttpRequest();
      req.open("get", "/easymanager/assets/logic/mUserSelect.php?id=" + id, true);
      req.onreadystatechange = evaluate;
      req.send();

      function evaluate(e) {
          if(e.target.readyState == 4 && e.target.status == 200) {

              obj = JSON.parse(e.target.responseText);
              if(obj[0]["isAdmin"] == 1)
                  isAdmin = true;

              document.getElementById("usernameEditUser").value = obj[0]["username"];
              document.getElementById("forenameEditUser").value = obj[0]["forename"];
              document.getElementById("lastnameEditUser").value = obj[0]["lastname"];
              document.getElementById("mailEditUser").value = obj[0]["mail"];
              document.getElementById("passwordEditUser").value = obj[0]["password"];
              document.getElementById("chbAdminEditUser").checked = isAdmin;

              isAdmin = false;

          }
      }
    }, false);


}

