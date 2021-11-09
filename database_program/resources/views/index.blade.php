<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
                            <h4>&nbsp;MLM&nbsp; </h4>
									<table style="white-space: nowrap; text-align: center;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Nomor Telpon</th>
                                                <th>Upline</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($mlms as $ml)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$ml->Nama}}</td>
                                                <td>{{$ml->Alamat}}</td>
                                                <td>{{$ml->notel}} V</td>
                                                <td>{{$ml->upline}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


    </body>
</html>