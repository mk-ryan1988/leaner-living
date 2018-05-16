<a class="waves-effect waves-light btn modal-trigger" href="alert-modal" style="display: none"></a>

<!-- Modal Structure -->
<div id="alert-modal" class="modal" style="width: 40%;">
  <div class="modal-content">
    <h5>{{session('alert')}}</h5>
  </div>
  <div class="modal-footer">
    <a class="modal-close waves-effect waves-green leaner-green-text btn-flat">Dismiss</a>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    var elem = document.querySelector('.modal');
    var instance = M.Modal.getInstance(elem);
    instance.open();
  });
</script>
