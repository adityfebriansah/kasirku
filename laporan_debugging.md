# Laporan Debugging - Aplikasi KasirKu

| Nama Bug | Penyebab | Solusi | Status |
| :--- | :--- | :--- | :--- |
| Typo Nama Class Model | Penulisan nama class `Produks` bertabrakan dengan nama file `Produk.php` | Mengubah nama class menjadi `class Produk extends Model` | Fixed |
| Typo Import Namespace | Penulisan `use App\Model\Produk;` kurang huruf 's' pada namespace `Models` | Mengubah menjadi `use App\Models\Produk;` di file Controller | Fixed |
