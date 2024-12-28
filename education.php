<?php
include 'database_connect.php'; // Sambungkan ke database

// Query untuk mengambil data education
$sql = "SELECT * FROM education";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Section</title>
    <style>
        /* Mengatur body agar konten di tengah */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Tinggi penuh layar */
            margin: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            color: #333;
        }

        /* Section Education */
        section#education {
            text-align: center;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            width: 80%; /* Sesuaikan lebar */
            max-width: 800px; /* Maksimal lebar */
        }

        /* Tabel */
        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <section id="education">
        <h2>Education</h2>
        <p>Daftar pendidikan yang telah Anda tempuh.</p>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pendidikan</th>
                    <th>Tahun</th>
                    <th>Nama Sekolah / Kampus</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data dari setiap baris
                    $no = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $row['pendidikan'] . "</td>";
                        echo "<td>" . $row['tahun'] . "</td>";
                        echo "<td>" . $row['nama_sekolah'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</body>
</html>
