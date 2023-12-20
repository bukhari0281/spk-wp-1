<div>

	{{-- tabel data alternatif --}}
	<div class="container mx-auto px-4 sm:px-8">
		<div class="py-8">
			<div class="flex items-center justify-between">
				<h2 class="text-2xl font-semibold leading-tight text-white">Data Penilaian</h2>
				<x-button-link href="{{ route('penilaian.proses') }}">Proses Perangkingan</x-button-link>
			</div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-900  text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
									No
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-900  text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
									Kode
								</th>
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-900  text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
									Nama
								</th>
								@foreach ($kriterias as $krit)
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-900  text-center text-xs font-semibold text-gray-300 uppercase tracking-wider">
									{{ $krit->kode }}
								</th>
								@endforeach
								<th class="px-5 py-3 border-b-2 border-gray-700 bg-gray-900  text-center text-xs font-semibold text-gray-300 uppercase tracking-wider"></th>
							</tr>
						</thead>
						<tbody>
							@forelse ($alternatifs as $index => $alt)

							<tr>
								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600 text-gray-300 text-sm">
									{{ $index + 1 }}
								</td>
								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600 text-gray-300 text-sm">
									{{ $alt->kode }}
								</td>
								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600 text-gray-300 text-sm">
									{{ $alt->name }}
								</td>
								@php
								$nilai = [];
								foreach ($kriterias as $k) {
									$ks = $alt->kriteria->find($k->id);
									$nilai[] = $ks ? $ks->pivot->nilai : 0;
								}
								@endphp

								@foreach ($nilai as $n)
								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600 text-gray-300 text-sm">
									{{ $n }}
								</td>
								@endforeach

								<td class="px-5 py-5 border-b border-gray-700 bg-gray-600 text-gray-300 text-sm">
									<div class="flex items-center justify-end gap-4">
										<a href="{{ route('penilaian.edit', $alt->id) }}" class="uppercase font-medium text-xs text-gray-300 ">Nilai</a>
									</div>
								</td>
							</tr>

							@empty

							<tr>
								<td class="px-5 py-5 border-b border-gray-200 bg-white text-sm" colspan="{{ $kriterias->count() + 4 }}">Belum ada data alternatif.</td>
							</tr>

							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
