<form id="sunsetContactForm" class="" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
  <div class="form-group">
    <input type="text" class="form-control" name="name" id="name" placeholder="You Name" required="" />
  </div>
  <div class="form-group">
    <input type="email" class="form-control" name="email" id="email" placeholder="You Email" required="" />
  </div>
  <div class="form-group">
    <textarea name="message" id="message" class="form-control" placeholder="Your Message" required=""></textarea>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
