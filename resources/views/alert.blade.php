<div id="modal1" class="modal center-align" style="width: auto!important;">
  <div class="modal-content">
    @if ($type == 'success')
      <i class="material-icons medium circle leaner-green-text">done</i>
    @endif
    <h4>{{ $title}}</h4>
    <p class>{{ $slot }}</p>
  </div>
  <div class="modal-footer" style="text-align: center!important;">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn">Dismiss</a>
  </div>
</div>
