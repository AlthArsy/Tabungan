
document.addEventListener('DOMContentLoaded', function () {
    const rekeningSelect = document.getElementById('id_rekening');
    const jenisSelect = document.getElementById('jenis_transaksi');
    const tarikOption = jenisSelect.querySelector('option[value="tarik"]');

    function updateTarikState() {
        const selected = rekeningSelect.options[rekeningSelect.selectedIndex];
        const saldo = parseInt(selected?.dataset.saldo || 0, 10);

        tarikOption.disabled = saldo <= 0;
        if (saldo <= 0 && jenisSelect.value === 'tarik') {
            jenisSelect.value = 'setor';
        }
    }

    rekeningSelect.addEventListener('change', updateTarikState);
    updateTarikState(); // <-- jalanin sekali pas halaman kebuka
});