<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Chart.js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <!-- Membuat elemen canvas untuk grafik -->
    <canvas id="myChart" style="position: relative; height: 50vh; width: 75vw;"></canvas>

    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line', // Jenis grafik
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni'], // Label sumbu X
                datasets: [{
                    label: 'Penjualan',
                    data: [10, 20, 30, 40, 50, 60], // Data untuk grafik
                    borderColor: 'rgba(139, 69, 19, 1)', // Warna garis coklat
                    backgroundColor: 'rgba(139, 69, 19, 0.2)', // Warna area coklat transparan
                    borderWidth: 2
                }]
            },
            options: { // digunakan untuk mengkustom grafik yang dihasilkan
                plugins: {
                    legend: {
                        position: 'top', // Posisi legenda
                    },
                    tooltip: {
                        enabled: true, // Menampilkan tooltip
                    }
                },
                scales: { // pengaturan sumbu X dan Y
                    x: {
                        title: {
                            display: true,
                            text: "Bulan"
                        },
                    },
                    y: {
                        beginAtZero: true, // Mulai dari nol
                        title: {
                            display: true,
                            text: "Jumlah Penjualan",
                        },
                    },
                },
            }
        });
    </script>

</body>

</html>