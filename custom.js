//  <!-- Custom JavaScript -->

  // Loads script when document is read.
  $(document).ready(function() {
      displayRecords();
  });

  // Display records function
  function displayRecords() 
  {
      var displayData = "true";
      $.ajax({
          url: 'display.php',
          type: 'post',
          data: {
              displaySend:displayData
          },
          success:function(data, status) {
              $('#displayDataTable').html(data);
          }
      });
  }
  function addUser () 
  {
      var addUserFirstName = $('#userFirstName').val();
      var addUserLastName = $('#userLastName').val();
      var addUserEmail = $('#userEmail').val();
      var addUserPhone = $('#userPhone').val();
      var addUserCity = $('#userCity').val();
      var addUserState = $('#userState').val();
      var addUserCountry = $('#userCountry').val();
      var addUserZipCode = $('#userZipCode').val();

      $.ajax({
          url: 'insert.php',
          type: 'post',
          data: {
              sendUserFirstName: addUserFirstName,
              sendUserLastName: addUserLastName,
              sendUserEmail: addUserEmail,
              sendUserPhone: addUserPhone,
              sendUserCity: addUserCity,
              sendUserState: addUserState,
              sendUserCountry: addUserCountry,
              sendUserZipCode: addUserZipCode
          },
          success:function(data, status) {
              //console.log(status);
              $('#completeModal').modal('hide');
              displayRecords();
          }
      }); 
  }
  // Delete record
  function deleteRecord (deleteById) 
  {
      $.ajax({
          url: 'delete.php',
          type: 'post',
          data: {
              deleteUserDataById: deleteById,
          },
          success:function(data, status)
          {
              //console.log(status);
              displayRecords();
          }
      });
  }

  // Edit record
  function editRecord (editById) 
  {
      $('#hiddenData').val(editById);
      $.post("update.php", {editById:editById}, function(data, status) {
          
          var userId = JSON.parse(data);

          $('#updateUserFirstName').val(userId.first_name);
          $('#updateUserLastName').val(userId.last_name);
          $('#updateUserEmail').val(userId.email);
          $('#updateUserPhone').val(userId.phone);
          $('#updateUserCity').val(userId.city);
          $('#updateUserState').val(userId.state);
          $('#updateUserCountry').val(userId.country);
          $('#updateUserZipCode').val(userId.zip_code);


      });
      $('#editModal').modal("show");
  }

  // Update Record
  function updateRecord(updateById)
  {
      var updateUserFirstName = $('#updateUserFirstName').val();
      var updateUserLastName = $('#updateUserLastName').val();
      var updateUserEmail =  $('#updateUserEmail').val();
      var updateUserPhone = $('#updateUserPhone').val();
      var updateUserCity = $('#updateUserCity').val();
      var updateUserState = $('#updateUserState').val();
      var updateUserCountry = $('#updateUserCountry').val();
      var updateUserZipCode = $('#updateUserZipCode').val();
      var updateHiddenData = $('#hiddenData').val();


      $.ajax({
          url:'update.php',
          type:'post',
          data:{
              updateUserFirstName: updateUserFirstName,
              updateUserLastName: updateUserLastName,
              updateUserEmail: updateUserEmail,
              updateUserPhone: updateUserPhone,
              updateUserCity: updateUserCity,
              updateUserState: updateUserState,
              updateUserCountry: updateUserCountry,
              updateUserZipCode: updateUserZipCode,
              updateHiddenData: updateHiddenData,
          },
          success:function(data, status) {
              $('#editModal').modal('hide');
              displayRecords();
          }
      });

  }