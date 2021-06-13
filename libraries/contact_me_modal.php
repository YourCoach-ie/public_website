<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="." method="post" class="col-md-12" role="form">
        <input type="hidden" name="action" id="action" value="contact_form">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-bold">Write to me</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="contact_name" name="contact_name" class="form-control validate" required>
            <label data-error="wrong" data-success="right" for="contact_name">Your name</label>
          </div>

          <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="email" id="contact_mail" name="contact_mail" class="form-control validate" required>
            <label data-error="wrong" data-success="right" for="contact_mail">Your email</label>
          </div>

          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea type="text" id="contact_text" name="contact_text" class="md-textarea" style="height: 100px" required></textarea>
            <label data-error="wrong" data-success="right" for="contact_text">Your message</label>
          </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
          <input type="hidden" name="token" value="<?php echo $token; ?>">
          <button class="btn btn-elegant">Send<i class="fab fa-telegram-plane ml-1"></i></button>
        </div>
      </form>
    </div>
  </div>
</div>