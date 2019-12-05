<html>
<head><title>Cetak-PDF</title>
</head>
<body>
    <center><h3>Washagti Laundry</h3>
    <p>Jalan Sumbersari No. 5 Malang<p>
    <p>==============================</p></center>
        <h6>Report Washagti</h6>
				<table border= "1">
					<tr>
                        <td>Dipesan Pada</td>
                        <td>Selesai Pada</td>
                        <td>Nama Pemesan</td>
                        <td>Telepon</td>
                        <td>Alamat</td>
                        <td>Jenis Layanan</td>
                        <td>Antar Jemput</td>
                        <td>Harga Layanan</td>
                        <td>Harga Antar Jemput</td>
                        <td>Berat (kg)</td>
                        <td>Total Tagihan</td>
                        <td>Status</td>
                    </tr>
                    @foreach($pesanan as $p)
                    <tr>
                        <td>{{$p->created_at}}</td>
                        <td>{{$p->updated_at}}</td>
                        <td>{{$p->name}}</td>
                        <td>{{$p->telpon}}</td>
                        <td>{{$p->alamat}}</td>
                        <td>{{$p->jenis}}</td>
                        <td>{{$p->do}}</td>
                        <td>{{$p->harga_jenis}}</td>
                        <td>{{$p->harga_do}}</td>
                        <td>{{$p->kg}}</td>
                        <td>{{$p->total}}</td>
                        <td>{{$p->status}}</td>
                    </tr>
                    @endforeach
                </table>
                
</body>
</html>