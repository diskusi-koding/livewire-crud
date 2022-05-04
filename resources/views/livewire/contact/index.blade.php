<div>
    {{-- Stop trying to control. --}}
    <table class="table table-hover">
        <thead class="bg-light">
            <tr>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
            <tr>
                <td>{{ $contact->nama_lengkap }}</td>
                <td>{{ $contact->telepon }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{$contact->status}}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>