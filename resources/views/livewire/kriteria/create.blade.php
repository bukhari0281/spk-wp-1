{{-- <div class="mt-6 mx-6">
	<x-jet-form-section submit="store">
		<x-slot name="title">
			Tambah Kriteria
		</x-slot>

		<x-slot name="description">
			Tambah data kriteria penilaian beserta bobotnya.
		</x-slot>

		<x-slot name="form">
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="kode" value="Kode Kriteria" />
				<x-jet-input id="kode" wire:model="kode" type="text" class="mt-1 block w-full" autofocus />
				<x-jet-input-error for="kode" class="mt-2" />
			</div>
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="name" value="Nama Kriteria" />
				<x-jet-input id="name" wire:model="nama" type="text" class="mt-1 block w-full" />
				<x-jet-input-error for="name" class="mt-2" />
			</div>
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="bobot" value="Bobot Kriteria" />
				<x-jet-input id="bobot" wire:model="bobot" type="number" step="any" class="mt-1 block w-full" />
				<x-jet-input-error for="bobot" class="mt-2" />
			</div>
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="type" value="Jenis Kriteria" />
				<x-select id="type" wire:model="type" type="text" class="mt-1 block w-full">
					<option value="1" @selected($type == true)>Benefit</option>
					<option value="0" @selected($type == false)>Cost</option>
				</x-select>
				<x-jet-input-error for="type" class="mt-2" />
			</div>

		</x-slot>

		<x-slot name="actions">
			<x-jet-action-message class="mr-3" on="saved">
				Tersimpan.
			</x-jet-action-message>

			<x-jet-button>
				Simpan
			</x-jet-button>
		</x-slot>
	</x-jet-form-section>
</div> --}}

<div class="grid grid-cols-8 mt-4">
    <div class="col-start-3 col-span-1 py-4 mb2">
        <h1 class="text-2xl font-bold text-white">
            Tambah Kriteria
          </h1>
          <p class="text-sm text-gray-300">
            Tambah data kriteria penilaian beserta bobotnya.
          </p>
    </div>
    <div class="col-start-4 col-span-3">
        <form wire:submit.prevent="store" class="relative w-full mt-6 space-y-4 bg-slate-600 p-4 rounded-lg">
            <div class="col-span-6 sm:col-span-4">
                <label for="kode" class="block text-white">Kode Kriteria</label>
                <input id="kode" wire:model="kode" type="text" class="mt-1 block w-full rounded-lg bg-slate-500 text-gray-100" autofocus />
                @error('kode')
                    <p class="text-red-500 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="name" class="block text-white">Nama Kriteria</label>
                <input id="name" wire:model="nama" type="text" class="mt-1 block w-full rounded-lg bg-slate-500 text-gray-100" />
                @error('kode')
                    <p class="text-red-500 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="bobot" class="block text-white">Bobot Kriteria</label>
                <input id="bobot" wire:model="bobot" type="number" step="any" class="mt-1 block w-full rounded-lg bg-slate-500 text-gray-100" />
                @error('bobot')
                    <p class="text-red-500 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="type" class="block text-white">Jenis Kriteria</label>
                <select id="type" wire:model="type" class="mt-1 block w-full rounded-lg bg-slate-500 text-gray-100">
                    <option value="1" @if($type == true) selected @endif>Benefit</option>
                    <option value="0" @if($type == false) selected @endif>Cost</option>
                </select>
                @error('type')
                    <p class="text-red-500 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                @if (session()->has('message'))
                    <p class="text-green-500">{{ session('message') }}</p>
                @endif
            </div>

            <div class="mt-4">
                <button type="submit" class="inline-block w-full px-1 py-2 text-md font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-500 ease">Simpan</button>
            </div>
        </form>
    </div>

</div>
