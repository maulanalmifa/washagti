<html>
<head><title>Cetak-PDF</title>
</head>
<body>
    <h3>Washagti Laundry</h3>
    <p>Jalan Sumbersari No. 5 Malang<p>
    <p>==============================</p>
        @foreach($pesanan as $p)
        <i>untuk konsumen</i>
        <h4>Nota Washagti {{ $p->name }}</h4>
				<table style="border:none">
                    <thead>
                    <tr>
                        <td>Dipesan Pada</td>
                        <td>:</td>
                        <td>{{ $p->created_at }}</td>
                    </tr>
                    <tr>
                        <td>Selesai Pada</td>
                        <td>:</td>
                        <td>{{ $p->updated_at }}</td>
                    </tr>
                    </thead>
                    <tr>
                        <td colspan="3">==============================</td>
                    </tr>
                    <tr>
                        <td>Jenis Layanan</td>
                        <td>:</td>
                        <td>{{ $p->jenis }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Berat</td>
                        <td>:</td>
                        <td>{{ $p->kg }}</td>
                    </tr>
                    <tr>
                        <td>Delivery Order</td>
                        <td>:</td>
                        <td>{{ $p->do }}</td>
                    </tr>
                    <tr>
                        <td>Total Tagihan</td>
                        <td>:</td>
                        <td>{{ $p->total }}</td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                    </tr>
                </table>
                @endforeach
</body>
</html>