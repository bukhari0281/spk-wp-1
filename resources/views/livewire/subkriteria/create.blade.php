{{-- <div>
	<div class="mt-6 mx-6">
		<x-jet-form-section submit="store">
			<x-slot name="title">
				{{ $kriteria->name }}
			</x-slot>

			<x-slot name="description">
				Tambah data sub kriteria  {{ $kriteria->name }}.
			</x-slot>

			<x-slot name="form">
				<div class="col-span-6 sm:col-span-4">
					<x-jet-label for="name" value="Nama Sub Kriteria" />
					<x-jet-input id="name" wire:model="name" type="text" class="mt-1 block w-full" autofocus />
					<x-jet-input-error for="name" class="mt-2" />
				</div>
				<div class="col-span-6 sm:col-span-4">
					<x-jet-label for="bobot" value="Nilai Bobot" />
					<x-jet-input id="bobot" wire:model="bobot" type="text" class="mt-1 block w-full" autofocus />
					<x-jet-input-error for="bobot" class="mt-2" />
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
	</div>

	<div class="mt-6 mx-6">
		<x-jet-form-section submit="">
			<x-slot name="title">
				Data Sub Kriteria
			</x-slot>

			<x-slot name="description">
				List data sub kriteria beserta bobot.
			</x-slot>

			<x-slot name="form">
				@if (!$kriteria->subkriteria->count())
				<div class="col-span-6 sm:col-span-4">
					Belum ada data sub kriteria.
				</div>
				@else
				<div class="col-span-6">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
									{{ $kriteria->name }}
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Bobot
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-900 text-white text-center text-xs font-semibold text-gray-600 uppercase tracking-wider"></th>
							</tr>
						</thead>
						<tbody>
							@foreach ($kriteria->subkriteria as $sub)
							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ $sub->name }}
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									{{ $sub->bobot }}
								</td>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
									<div class="flex justify-end">
										<x-jet-button class="button" wire:click.prevent="delete({{ $sub->id }})">Hapus</x-jet-button>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				@endif
			</x-slot>
		</x-jet-form-section>
	</div>
</div> --}}


<div class="">
    <div class="grid grid-cols-8 mt-4">
        <div class="col-start-3 col-span-1 py-4 mb-2">
            <h2 class="text-2xl font-semibold text-white">{{ $kriteria->name }}</h2>
            <p class="text-gray-300">Tambah data sub kriteria {{ $kriteria->name }}.</p>
        </div>
        <div class="col-start-4 col-span-3">
            <form wire:submit.prevent="store" class="relative w-full mt-6 space-y-4 bg-slate-600 p-4 rounded-lg">
                <div class="col-span-6 sm:col-span-4">
                    <label for="name" class="block text-white">Nama Sub Kriteria</label>
                    <input id="name" wire:model="name" type="text" class="mt-1 block w-full rounded-lg bg-slate-500 text-gray-100" autofocus />
                    @error('name')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="col-span-6 sm:col-span-4">
                    <label for="bobot" class="block text-white">Nilai Bobot</label>
                    <input id="bobot" wire:model="bobot" type="text" class="mt-1 block w-full rounded-lg bg-slate-500 text-gray-100" />
                    @error('bobot')
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mt-4">
                    <x-jet-action-message class="mr-3" on="saved">
                        Tersimpan.
                    </x-jet-action-message>
                    <button type="submit" class="inline-block w-full px-1 py-2 text-md font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-500 ease">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <div class="grid grid-cols-8 mt-12">
        <div class="col-start-3 col-span-1 py-4 mb-2">
            <h2 class="text-2xl font-semibold text-white">Data Sub Kriteria</h2>
            <p class="text-gray-300">List data sub kriteria beserta bobot.</p>
        </div>
        <div class="col-start-4 col-span-3">
            <form class="relative w-full mt-6bg-slate-600 ">
                @if (!$kriteria->subkriteria->count())
                    <div class="col-span-6 sm:col-span-4">
                        Belum ada data sub kriteria.
                    </div>
                @else
                    <div class="col-span-6">
                        <table class="min-w-full leading-normal ">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 rounded-tl-lg border-gray-700 bg-gray-500 text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
                                        {{ $kriteria->name }}
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-500 text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
                                        Bobot
                                    </th>
                                    <th class="px-5 py-3 border-b-2 rounded-tr-lg border-gray-700 bg-gray-500 text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kriteria->subkriteria as $sub)
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-700 bg-gray-900 text-gray-300 text-sm text-center">
                                            {{ $sub->name }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-700 bg-gray-900 text-gray-300 text-sm text-center">
                                            {{ $sub->bobot }}
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-700 bg-gray-900 text-gray-300 text-sm text-center">
                                            <div class="flex justify-end">
                                                <button class="bg-red-500 text-white px-4 py-2 rounded-sm" wire:click.prevent="delete({{ $sub->id }})">Hapus</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>

