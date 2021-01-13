<!-- Modal -->
<div class="modal fade" id="checkout_modal" role="dialog">
    <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-shopping-cart text-success fa-lg"></i> Check Out<small class='text-primary'> Billing Information</small></h4>
      </div>
      <div class="modal-body">
        <form action="cart/data.php?q=checkout" method="POST">
            <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="fname" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lname" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" name="contact" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Pincode</label>
                <input type="text" name="pincode" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Complete Address</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="alert alert-info">
                Mode of Payment: <strong>Pay on Delivery</strong>
            </div>
            <div class="alert alert-warning">
                *** Please wait for our call/text or email for confirmation. Thank You! ***
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Submit</button>
          </form>
      </div>
    </div>
  </div>
</div>