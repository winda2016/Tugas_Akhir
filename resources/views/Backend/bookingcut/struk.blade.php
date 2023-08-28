<!DOCTYPE html>
<html>

<head>
    <title>Struk Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #f7f7f7;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        h4 {
            text-align: center;
            margin-bottom: 10px;
            color: #666;
        }

        p {
            margin: 5px 0;
        }

        ul {
            list-style: none;
            padding: 0;
            margin-left: 20px;
        }

        li {
            margin-bottom: 5px;
        }

        p.total {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="receipt">
        <h2>Struk Pembayaran</h2>
        <h4>TEDUH HAIR STUDIO</h4>
        <p>Nomor Booking: <span>{{$booking_cut->id}}</span></p>
        <p>Nama: <span>{{$booking_cut->user->nama}}</span></p>
        <p>Email: <span>{{$booking_cut->user->email}}</span></p>
        <ul>
        Treatment:
            @foreach ($booking_cut->treatments as $treatment)
            <li><span>{{ $treatment->nama_treatment }}</span></li>
            @endforeach
        </ul>
        <p class="total">Total Harga: <span>{{$booking_cut->total_harga}}</span></p>
    </div>
</body>

</html>
