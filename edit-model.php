<!-- 
    Bootstrap Model
 -->

<div class="modal fade" id="edit-todo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="./update-todo.php" method="POST" id="updateForm">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">ToDo App</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">            
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" name="btnUpdate" class="btn btn-success" id="updateBtn" data-bs-dismiss="modal">Update</button>            
            </div>
        </form>        
      </div>
    </div>
</div>