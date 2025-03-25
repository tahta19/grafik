<body>
    <div class="container mt-5">
        <h1>Membuat Grafik dengan PHP dan MySQL</h1>
        <div class="chart-container" style="position: relative; height: 40vh; width: 80vw;">
            <canvas id="myChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        <?php
        include "koneksi.php";

        $sql = "SELECT jurusan, COUNT(*) AS jml_mahasiswa FROM mahasiswa GROUP BY jurusan";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Query gagal: " . mysqli_error($conn));
        }

        while ($data = mysqli_fetch_assoc($result)) {
            echo "Jurusan: " . $data['jurusan'] . " - Jumlah: " . $data['jml_mahasiswa'] . "<br>";
        }
        ?>

        $jurusan = [];
        $jumlah = [];

        while ($data = mysqli_fetch_array($result)) {
            $jurusan[] = $data['jurusan'];
            $jumlah[] = $data['jml_mahasiswa'];
        }
        ?>

        // Cek apakah PHP sudah membaca data dengan benar
echo "<pre>";
print_r($jurusan);
print_r($jumlah);
echo "</pre>";
?>

        const ctx = document.getElementById("myChart");
        const myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: <?php echo json_encode($jurusan); ?>,
                datasets: [
                    {
                        label: "Jumlah Mahasiswa",
                        data: <?php echo json_encode($jumlah); ?>,
                        backgroundColor: [
                            "rgba(75, 192, 192, 0.2)",
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                            "rgba(255, 206, 86, 0.2)",
                        ],
                        borderColor: [
                            "rgba(75, 192, 192, 1)",
                            "rgba(255, 99, 132, 1)",
                            "rgba(54, 162, 235, 1)",
                            "rgba(255, 206, 86, 1)",
                        ],
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1,
                        },
                    },
                },
            },
        });
    </script>
</body>
