<div>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Nome</th>
                <th class="px-4 py-2">E-mail</th>
                <th class="px-4 py-2">Telefone</th>
                <th class="px-4 py-2">Opções</th>
            </tr>
        </thead>
        <tbody>
            @if ($members->isNotEmpty())
                @foreach ($members as $member)
                    <tr wire:key="{{ $member->id }}">
                        <td class="border px-4 py-2">{{ $member->name }}</td>
                        <td class="border px-4 py-2">{{ $member->email }}</td>
                        <td class="border px-4 py-2">{{ $member->phone }}</td>
                        <td class="border px-4 py-2 flex">
                            <a href="" class="text-blue-500 hover:text-blue-700" wire:click.prevent="edit({{ $member->id }})">@include('feather::edit')</a>
                            <a href="" class="text-red-500 hover:text-red-700" wire:click.prevent="remove({{ $member->id }})">
                            @include('feather::delete')
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="border px-4 py-2 text-center">Sem membros cadastrados</td>
                </tr>
            @endif
        </tbody>
    </table>

    {{ $members->links() }}
</div>
