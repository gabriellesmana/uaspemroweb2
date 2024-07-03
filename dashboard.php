<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data UEFA Groups</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Input Data UEFA Groups</h1>
        <form action="submit.php" method="POST" id="inputForm">
            <div class="mb-3">
                <label for="grup" class="form-label">Grup:</label>
                <select id="grup" name="grup" class="form-select" onchange="updateNegara()">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="negara" class="form-label">Negara:</label>
                <select id="negara" name="negara" class="form-select">
                    <!-- Options akan diisi oleh JavaScript -->
                </select>
            </div>
            <div class="mb-3">
                <label for="menang" class="form-label">Menang:</label>
                <input type="number" id="menang" name="menang" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="kalah" class="form-label">Kalah:</label>
                <input type="number" id="kalah" name="kalah" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="point" class="form-label">Point:</label>
                <input type="number" id="point" name="point" class="form-control" readonly>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
            <a href="grup.php" class="button">Lihat Data Group A</a>
            <a href="edit.php" class="button">Ubah Data Group A</a>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const negaraData = {
            A: ['Germany', 'Scotland', 'Hungary', 'Switzerland'],
            B: ['Spain', 'Croatia', 'Italy', 'Albania'],
            C: ['Slovenia', 'Denmark', 'Serbia', 'England'],
            D: ['Portugal', 'Turkey', 'C']
        };

        function updateNegara() {
            const grup = document.getElementById('grup').value;
            const negaraSelect = document.getElementById('negara');
            
            // Hapus opsi sebelumnya
            negaraSelect.innerHTML = '';

            // Tambah opsi baru berdasarkan grup yang dipilih
            negaraData[grup].forEach(negara => {
                const option = document.createElement('option');
                option.value = negara;
                option.textContent = negara;
                negaraSelect.appendChild(option);
            });
        }

        function calculatePoints() {
    const menang = parseInt(document.getElementById('menang').value) || 0;
    const kalah = parseInt(document.getElementById('kalah').value) || 0;
    const pointInput = document.getElementById('point');
    
    const point = 3 * menang - 3 * kalah; // Perhitungan point sesuai aturan Anda

    pointInput.value = point;
}


        // Panggil fungsi updateNegara saat halaman pertama kali dimuat
        document.addEventListener('DOMContentLoaded', () => {
            updateNegara();

            // Tambahkan event listener untuk input menang dan kalah
            document.getElementById('menang').addEventListener('input', calculatePoints);
            document.getElementById('kalah').addEventListener('input', calculatePoints);
        });
    </script>
</body>
</html>
