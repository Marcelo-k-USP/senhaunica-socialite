  @foreach ($user->permissions->where('guard_name', 'senhaunica') as $p)
    <button data-user-id="{{ $user->id }}" data-route="{{ route('senhaunica-users.show', $user->id) }}"
      class="btn btn-sm btn-primary py-0 senhaunicaUserPermissionBtn" title="Vínculos">
      {{ $p->name }}
    </button>
  @endforeach
