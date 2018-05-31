<div class="bottom-nav">
  <a href="{{url('/members')}}" class="btn-flat waves-effect {{isActiveBottom(url('/members'))}}">
    <i class="material-icons">home</i>
    <span>Home</span>
  </a>
  <a href="{{url('/members')}}" class="btn-flat waves-effect {{isActiveBottom(url('admin/overview'))}}">
    <i class="material-icons">fitness_center</i>
    <span>Workouts</span>
  </a>
  <a href="{{url('/members/profile')}}" class="btn-flat waves-effect {{isActiveBottom(url('members/profile'))}}">
    <i class="material-icons">person_outline</i>
    <span>Profile</span>
  </a>
</div>
