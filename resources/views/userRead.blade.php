
    @foreach ($users as $user)
        <tr class="d-none d-sm-table-row">
        <td> {{ $user->username }} </td>
        <td> {{ $user->file }} </td>
        <td>
        <span class="badge {{ $badgeClass = $user->status === 'Pending' ? 'text-bg-secondary' : ($user->status === 'Done' ? 'text-bg-success' : 'text-bg-primary'); }}" style="width: 72px; color: #fff"> {{ $user->status }} </span>
        </td>
        </tr>
    @endforeach
    @foreach ($users as $user)
         <tr class="d-sm-none">
         <th scope="row">
         <span style="font-weight: 400">{{ $user->username }}<br />{{ $user->file }}</span>
         </th>
         <td>
        <span class="badge {{ $badgeClass = $user->status === 'Pending' ? 'text-bg-secondary' : ($user->status === 'Done' ? 'text-bg-success' : 'text-bg-primary'); }}" style="width: 72px; color: #fff"> {{ $user->status }} </span>
         </td>
         </tr>
    @endforeach