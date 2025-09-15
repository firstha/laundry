<?php  
// Koneksi database  
include '../koneksi.php';  

// Menghubungkan dengan mpdf  
require_once('../assets/dompdf/autoload.inc.php');  
use Dompdf\Dompdf;  
$dompdf = new Dompdf();  

$dari = $_GET['dari'];  
$sampai = $_GET['sampai'];  

$html = '<!DOCTYPE html>';  
$html = '<html>';  
$html .= '<head>';  
$html .= '<title>Cetak Laporan Laundry</title>';  
$html .= '</head>';  
$html .= '<body>';  
$html .= '<center><h2>Laundry Firsthanoventia</h2></center>';  

$dari = $_GET['dari'];
$sampai = $_GET['sampai'];

$html .= '<h4>Data Laporan Laundry dari <b> ' . $dari . ' <b> sampai </b> ' . $sampai . '</b></h4>';  
$html .= '<table border="1" width="100%" style="border-collapse: collapse;">';  
$html .= '<tr>';  
$html .= '<th width="1%">No</th>';  
$html .= '<th>Invoice</th>';  
$html .= '<th>Tanggal</th>';  
$html .= '<th>Nama Pelanggan</th>';  
$html .= '<th>Berat Cucian (Kg)</th>';  
$html .= '<th>Tgl. Selesai</th>';  
$html .= '<th>Harga</th>';  
$html .= '<th>Status</th>';  
$html .= '</tr>';  

$data = mysqli_query($koneksi, "SELECT * FROM pelanggan, transaksi  
WHERE transaksi_pelanggan=pelanggan_id  
AND date(transaksi_tgl) >= '$dari'  
AND date(transaksi_tgl) <= '$sampai'  
ORDER BY transaksi_id DESC");  

$no = 1;  
while($d = mysqli_fetch_array($data)){  
    $html .= '<tr>';  
    $html .= '<td>' . $no++ . '</td>';  
    $html .= '<td>INVOICE-' . $d['transaksi_id'] . '</td>';  
    $html .= '<td>' . $d['transaksi_tgl'] . '</td>';  
    $html .= '<td>' . $d['pelanggan_nama'] . '</td>';  
    $html .= '<td>' . $d['transaksi_berat'] . ' Kg</td>';  
    $html .= '<td>' . $d['transaksi_tgl_selesai'] . ' </td>';  
    $html .= '<td>Rp. ' . number_format($d['transaksi_harga']) . ' ,-</td>';  
    $html .= '<td>';  

    if ($d['transaksi_status'] == "0") {  
        $html .= "PROSES";  
    } elseif ($d['transaksi_status'] == "1") {  
        $html .= "DICUCI";  
    } elseif ($d['transaksi_status'] == "2") {  
        $html .= "SELESAI";  
    }  

    $html .= '</td>';  
    $html .= '</tr>';  
}  

$html .= '</table>';  
$html .= '</body>';  
$html .= '</html>';  

$dompdf->set_paper('a4', 'landscape');  
$dompdf->load_html($html);  
$dompdf->render();  
$dompdf->stream('laporan_dari_' . $dari . '_sampai_' . $sampai . '.pdf');  
?>
