<div>
    @if ($is_editing)
        <livewire:proposal1.member-edit :member="$editing_id" />
    @else
        <livewire:proposal1.member-create />
    @endif

<hr class="my-6">
    <div class="mt-6 w-full">
        <livewire:proposal1.member-list />
    </div>

</div>
