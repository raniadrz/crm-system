@props(['roles'])

@if ($roles->isEmpty())
  <div class="pt-3 pb-2">
    <h4 class="text-muted">No roles found.</h4>
  </div>
@else
  <div class="table-responsive">
    <table class="table-hover table align-middle">
      <thead>
        <tr>
          <th>Title</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($roles as $role)
          <tr>
            <td>{{ $role->title }}</td>
            <td>
              <div class="d-flex gap-1">
                @can('view', $role)
                  <x-buttons.anchor :href="route('roles.show', $role)" content="Show" size="small" color="primary" />
                @endcan
                @can('update', $role)
                  <x-buttons.anchor :href="route('roles.edit', $role)" content="Edit" size="small" color="warning" />
                @endcan
                @can('delete', $role)
                  <x-buttons.form :action="route('roles.destroy', $role)" content="Delete" size="small" color="danger" />
                @endcan
              </div>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- Pagination links with query parameters -->
  {{ $roles->appends(request()->query())->links() }}
@endif
