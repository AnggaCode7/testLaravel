<html>
    <link rel=”stylesheet” href=”https://cdn.tailwindcss.com/3.4.1”>
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel=”stylesheet” href=”/style/tailwindcss3.4.1.js”>
    <img src="{{ asset('images/huh_cat.jpg') }}" style="width: 200px; height: 200px;">
    <img src="{{ asset('images/beluga.jpg') }}">

    <h1>Daftar List Item</h1>
    <table>
        <thead>
            <tr>    
                <th>ID</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dataku)
            <tr>    
                <td>{{ $dataku['id'] }}</td>
                <td>{{ $dataku['nama'] }}</td>
                <td>{{ $dataku['harga'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
    
