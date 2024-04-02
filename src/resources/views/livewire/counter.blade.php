
<div>
    <h1>Hello {{ $name }}!</h1>
    <button wire:click="changeName()" class="border border-black" style="background-color:{{ $color }}" >change</button>
    <table class="border border-black mx-auto">
        <thead>
            <th>ID</th>
            <th>Email</th>
            <th>Office Unit</th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td class="border border-black"> {{ $user->id }} </td>
                <td class="border border-black">{{ $user->email }}</td>
                <td class="border border-black">
                    {{ $user->office_unit->office_unit_name }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
  