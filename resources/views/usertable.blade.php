<table class="table table-hover">

    <thead>

        <th>Profilbild</th>

      <th>Name</th>

      <th>E-Mail</th>

      <th>Dabei seit:</th>

    </thead>

    <tbody>
@foreach($users as $user)

        <tr>
        <td><img class="table_profilbilder" src="{{ asset('imgs/'.$user->id.'.jpg') }}"></td>

          <td>{{$user->name}} </td>

          <td>{{$user->email}} </td>

          <td>{{$user->created_at}} </td>

        </tr>
@endforeach

    </tbody>

</table>