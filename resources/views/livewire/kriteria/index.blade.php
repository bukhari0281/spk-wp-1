<div>
	{{-- tabel data kriteria --}}
	<div class="container mx-auto px-4 sm:px-8">
		<div class="py-8">
			<div class="flex items-center justify-between">
				<h2 class="text-2xl font-semibold leading-tight text-white">Data Kriteria</h2>
				<x-button-link href="{{ route('kriteria.create') }}">Tambah Kriteria</x-button-link>
			</div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-800  text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
									No
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-800  text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
									Kode Kriteria
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-800  text-xs font-semibold text-gray-300 uppercase tracking-wider">
									Nama Kriteria
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-800  text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
									Bobot Kriteria
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-800  text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
									Jenis Kriteria
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-800  text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
									Sub Kriteria
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-800  text-center text-xs font-semibold text-gray-300 uppercase tracking-wider"></th>
							</tr>
						</thead>
						<tbody>
							@forelse ($kriterias as $index => $krit)

							<tr>
								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600 text-gray-300 text-center text-sm">
									{{ $index + 1 }}
								</td>
								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600 text-gray-300 text-center text-sm">
									{{ $krit->kode }}
								</td>
								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600 text-gray-300 text-sm">
									{{ $krit->name }}
								</td>
								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600 text-gray-300 text-center text-sm">
									{{ $krit->bobot }}
								</td>
								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600  text-gray-300 text-center text-sm">
									{{ $krit->type ? 'Benefit' : 'Cost' }}
								</td>
								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600 text-gray-300 text-center text-sm">
									<x-button-link href="{{ route('subkriteria.create', $krit->id) }}"> [{{ $krit->subkriteria->count() }}] Tambah</x-button-link>
								</td>
								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600 text-sm text-gray-300">
									<div class="flex items-center justify-end gap-4">
										<a href="{{ route('kriteria.edit', $krit->id) }}" class="uppercase font-medium text-xs text-gray-400">Ubah</a>
										<x-jet-button wire:click="delete({{ $krit->id }})">Hapus</x-jet-button>
									</div>
								</td>
							</tr>

							@empty

							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" colspan="6">
									Data kriteria masih kosong.
								</td>
							</tr>

							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
