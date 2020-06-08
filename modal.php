<head>

</head>
<style>
.modal-backdrop {
   background-color: yellow;
}
</style>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title" id="exampleModalLabel">Search here!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="available_cars.php">
        <div class="modal-body col-lg-8">
          <label ><b>Select Pickup location :<b></label>
            <select class="form-control" name="zone">
              <option>Compact</option>
              <option>Supermini</option>
              <option>Sedan</option>
              <option>Minivan</option>
            </select>
          </div>
        <div class="modal-body col-lg-8" >
          <label ><b>Select Pickup Date :<b></label>
          <input type="text"  id = "from" name="pick_date" class="form-control"  >
        </div>
        <div class="modal-body col-lg-8 ">
          <label ><b>Select Return Date :<b></label>
          <input type="text" id = "to" name="return_date" class="form-control" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="submit" class="btn btn-primary" value="SEARCH">
        </div>
      </form>
      </div>
    </div>
  </div>
