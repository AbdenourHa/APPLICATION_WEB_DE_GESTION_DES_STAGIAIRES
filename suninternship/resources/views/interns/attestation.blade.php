<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Attestation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #f2f2f2;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 55px;
            width: auto;
            margin-right: 10px; /* Add margin for spacing */
        }

        .export-info {
            font-size: 14px;
            position: absolute;
            top: 26px;
            right: 10px;
        }

        h2 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
            margin-top: 80px;
        }

        p {
            margin-bottom: 10px;
            line-height: 1.6;
        }

        .fill-line {
            width: 40%;
            height: 1px;
            background-color: #999;
            margin-bottom: 10px;
        }


        .left-side{
            position: absolute;
            left: 20px;
            bottom: 300px;
        }

        .right-side{
            position: absolute;
            right: 20px;
            bottom: 300px;
        }
        .right-side p,  .left-side p{
            font-weight:bold;
            text-decoration: underline;
        }

        .attestation-info {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            text-align: center;
            padding: 10px;
            background-color: #f2f2f2;
        }

        .container {
            padding-top: 100px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('images/ssssssonatrach.png'))) }}" alt="Logo">
        </div>
        <div class="export-info">
           Alger, le {{ now()->format('Y-m-d') }}
        </div>
    </div>

    <div class="container">
        <p><span style="font-weight:bold;">Direction Formation & Planification RH</span></p>
        <p><span style="font-weight:bold;">Departement Gestion De La Formation Seige</span></p>

        <h2>Attestation de stage</h2>

        <p>
          Je soussigné(e) : <strong>Le Directeur Formation & Planification RH</strong><br>
          Atteste que :<span style="font-weight:bold;">{{ $intern->lastName }} {{ $intern->firstName }}</span> demeurant au <span style="font-weight:bold;">{{ $intern->address }}</span><br>
          A effectué un stage au sein de notre entreprise <span style="font-weight:bold;">Sonatrach</span><br> 
          du <span style="font-weight:bold;">{{ $intern->startDate }}</span> au <span style="font-weight:bold;">{{ $intern->endDate }}</span>
        </p>

        <p>Cette attestation est délivrée à l'intéressé(e) afin de servir et faire valoir ce que de droit.</p>

        
        <div class="side-container">
            <div class="left-side">
                <p>Responsable RH</p>
            </div>
            <div class="right-side">
                <p>Directeur</p>
            </div>
        </div>
    </div>

    <div class="attestation-info">
        &copy; <strong>Sonatrach</strong>
    </div>
</body>
</html>
