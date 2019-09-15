<h1>Data Balai</h1>

<table>
    <tr>
        <th>No</th>
        <th>Nama Balai</th>
        <th>Kode Wilayah</th>
    </tr>
    @foreach ($data_balai as $balai)
    <tr>
        <td>{{$balai->id}}</td>
        <td>{{$balai->nmbalai}}</td>
        <td>{{$balai->kdwilayah}}</td>
    </tr>        
    @endforeach
</table>