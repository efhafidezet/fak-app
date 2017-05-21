

 <script type="text/javascript">
    function PrintContent() {
        var DocumentContainer = document.getElementById('prnt');
        var WindowObject = window.open('', 'PrintWindow', 'width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes');
        WindowObject.document.writeln('<!DOCTYPE html>');
        WindowObject.document.writeln('<html><head><title></title>');
        WindowObject.document.writeln('<link rel="stylesheet" type="text/css" href="css/print.css">');
        WindowObject.document.writeln('</head><body>');
        WindowObject.document.writeln(DocumentContainer.innerHTML);
        WindowObject.document.writeln('</body></html>');
        WindowObject.document.close();
        WindowObject.focus();
        WindowObject.print();
        WindowObject.close();
    }
</script>

<div class="container-fluid" id="prnt" style="width: 500px;background-color: white;color:black;border: 1px dotted black;">
  <div class="row">
  </div>
      <div class="col-md-12"><hr />
        <table style="border-collapse: collapse;width: 100%;">
    <thead>
      <tr>
        <th style="text-align: left;border-bottom: 1px solid #ddd;">Nama Barang</th>
        <th style="text-align: left;border-bottom: 1px solid #ddd;">Harga Satuan</th>
        <th style="text-align: left;border-bottom: 1px solid #ddd;">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($daftar_barang as $barang) {
        ?>
        <tr>
          <td style="text-align: left;border-bottom: 1px solid #ddd;"><?=$barang->nama_barang;?></td>
          <td style="text-align: left;border-bottom: 1px solid #ddd;"><?=$barang->harga_barang;?></td>
          <td style="text-align: left;border-bottom: 1px solid #ddd;"><?=$barang->quantity;?></td>
        </tr>
        <?php
      } ?>
      <tr>
        <td style="text-align: left;"></td>
        <td style="text-align: left;"></td>
      </tr>
      <tr>
        <td style="text-align: left;" colspan="2"><strong>Total</strong></td>
        <td style="text-align: left;"><?=$total;?></td>
      </tr>
      <tr>
        <td style="text-align: left;" colspan="2"><strong>Bayar</strong></td>
        <td style="text-align: left;"><?="Rp. " . " " . number_format($bayar,2,',','.');?></td>
      </tr>
      <tr>
        <td style="text-align: left;" colspan="2"><strong>Kembali</strong></td>
        <td style="text-align: left;"><?=$kembali;?></td>
      </tr>
    </tbody>
  </table>
<hr />
      </div>
  </div>
</div>
<div class="container">
<div class="row">
<?=form_open('transaksi/hapusalltemp',array('class'=>'form-horizontal'));?>
<div class="col-md-6">
  <div class="form-group">
    <label class="col-md-3 control-label" for="kembali"></label>
    <div class="col-md-8">
      <button id="btntambah" name="btnhome" type="submit" class="btn btn-primary" value="home_dan_hapus">Home</button>
    </div>
</div>
</div>
<?=form_close();?>
</div>
</div>
