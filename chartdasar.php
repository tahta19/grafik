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
                    borderColor: 'rgba(75, 192, 192, 1)', // Warna garis
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Warna area
                    borderWidth: 2
                }]
            }
        });
    </script>
</body>
</html>