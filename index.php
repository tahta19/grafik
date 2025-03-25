import Chart from 'chart.js/auto';

<html>
<body>
    <!-- membuat elemen canvas untuk menempatkan grafik -->
    <canvas id="myChart" style="position: relative; height: 50vh; width: 75vw;"></canvas>

    <!-- menginstal chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- membuat grafik line dengan data statis menggunakan chart.js -->
    <script>
        const ctx = document.getElementById("myChart").getContext("2d");
        const myChart = new Chart(ctx, {
            type: "line", // Jenis grafik
            data: {
                labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni"], // Label sumbu X
                datasets: [
                    {
                        label: "Penjualan",
                        data: [10, 20, 30, 40, 50, 60], // Data untuk grafik
                        borderColor: "rgba(75, 192, 192, 1)", // Warna garis
                        backgroundColor: "rgba(75, 192, 192, 0.2)", // Warna area
                        borderWidth: 2,
                    },
                ],
            },
            options: { // digunakan untuk mengustomisasi grafik yang dihasilkan
                plugins: {
                    legend: {
                        position: "top", // Posisi legenda
                    },
                    tooltip: {
                        enabled: true, // Menampilkan tooltip
                    },
                },
                scales: { // pengaturan sumbu X dan Y
                    x: {
                        title: {
                            display: true,
                            text: "Bulan",
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
            },
        });
    </script>
    
</body>
</html>
