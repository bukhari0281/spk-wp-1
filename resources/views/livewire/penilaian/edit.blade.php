{{-- <div class="mt-6 mx-6">
	<x-jet-form-section submit="update">
		<x-slot name="title">
			{{ $alternatif->kode }}
		</x-slot>

		<x-slot name="description">
			Lakukan penilaian untuk {{ $alternatif->name }}.
		</x-slot>

		<x-slot name="form">

			@foreach ($kriterias as $krit)
			<div class="col-span-6 sm:col-span-4">
				<x-jet-label for="kode" value="{{ $krit->kode }} - {{ $krit->name }}" />
				<x-select id="kode" wire:model="nilai.{{ $krit->id }}" type="text" class="mt-1 block w-full">
					<option value="">--- Pilih salah satu ---</option>
					@foreach ($krit->subkriteria as $sub)
							<option value="{{ $sub->bobot }}">{{ $sub->name }}</option>
					@endforeach
				</x-select>
				<x-jet-input-error for="kode" class="mt-2" />
			</div>
			@endforeach

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
    <div class="col-start-3 col-span-1 py-4 mb-2">
        <h1 class="text-2xl font-bold text-white">
            Kode {{ $alternatif->kode }}
          </h1>
          <p class="text-sm text-gray-300">
            Lakukan penilaian untuk {{ $alternatif->name }}.
          </p>
    </div>
    <div class="col-start-4 col-span-3">
        <form wire:submit.prevent="update" class="relative w-full mt-6 space-y-4 bg-slate-600 p-4 rounded-lg">
            @foreach ($kriterias as $krit)
                <div class="col-span-6 sm:col-span-4">
                    <label for="{{ $krit->kode }}" class="block text-white">{{ $krit->kode }} - {{ $krit->name }}</label>
                    <select id="{{ $krit->kode }}" wire:model="nilai.{{ $krit->id }}" class="mt-1 block w-full rounded-lg bg-slate-500 text-gray-100">
                        <option value="">--- Pilih salah satu ---</option>
                        @foreach ($krit->subkriteria as $sub)
                            <option value="{{ $sub->bobot }}">{{ $sub->name }}</option>
                        @endforeach
                    </select>
                    @error("nilai.{$krit->id}")
                        <p class="text-red-500 mt-2">{{ $message }}</p>
                    @enderror
                </div>
            @endforeach

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
