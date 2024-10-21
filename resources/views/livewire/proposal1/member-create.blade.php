<div class="min-w-10"  x-data="{  }">
    <form class="space-y-6 flex items-center space-x-1" wire:submit.prevent="store">
        <div class="space-y-2 pt-6">
            <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
            <input type="text" name="name" id="name" wire:model.lazy="name" class="block w-full px-4 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="space-y-2">
            <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
            <input type="email" name="email" id="email" wire:model.lazy="email" class="block w-full px-4 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('email') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="space-y-2">
            <label for="phone" class="block text-sm font-medium text-gray-700">Telefone</label>
            <input x-mask="(99) 99999-9999" type="tel" name="phone" id="phone" wire:model.lazy="phone" class="block w-full px-4 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            @error('phone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="text-right self-center ">
            <button type="submit" class="inline-flex justify-center w-full mt-6 px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Cadastrar
            </button>
        </div>
    </form>
</div>
