// alert on done
$(document).ready(function(){
    $('.alert-btn-done').click(function(){
      if(confirm('Do you want to done the task?')){
        return true;
      }else{
        return false;
      }        
    });      
  });
  // alert on delete
  $(document).ready(function(){
    $('.alert-btn-delete').click(function(){
      if(confirm('Do you want to delete the item?')){
        return true;
      }else{
        return false;
      }
    }); 
  });
  // alert on ongoing
  $(document).ready(function(){
    $('.alert-btn-ongoing').click(function(){
      if(confirm('Do you want to set back the status?')){
        return true;
      }else{
        return false;
      }
    }); 
  });
  // fetch data 
  $(document).ready(function() {
        $('.edit-btn').click(function(){
          var itemId = $(this).data('id');       
          $.ajax({
            url: 'fetch-data.php',
            type: 'POST',
            data: {itemId: itemId},
            success: function(response){
              $('.modal-body').html(response);
              $('#edit-todo').modal('show');
            }
          });
        });          
      });    
  // update data
  $(document).on('click', '#updateBtn', function() {
          var formData = $("#updateForm").serialize()
          if(confirm('Do you want to update?')){
            return true;
          }else{
            return false;
          }
          $.ajax({
            url:'update-todo.php',
            type:'POST',
            data: formData,
            dataType: 'json',
            success:function(data){
              $('#edit-todo').modal('hide');
            }
          });         
      });