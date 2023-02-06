<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>
<head>
<style type = "text/css">
        h1{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            /* font-style: italic; */
            font-size: 50px;
            color: black;
        }
        h2{
            font-size: 25px;
            font-family:  sans-serif; 
        }
        h3{
            font-size: 20px;
            font-family:  sans-serif;
            padding-left: 10px;
        }
        p{
            font-size: 15px;
            font-family:  sans-serif;
            padding-left: 10px;
        }
        jk{
            font-size: 15px;
            font-family:  sans-serif;
            padding-left: 10px;
        }
        nb{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-style: italic;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=text] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=date] {
            padding-bottom: 5px;
            padding-top: 5px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=number] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=email] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=date] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        input[type=submit] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 100px;
            height: 50px;
            background-color: #FFFFF;
            font-family: sans-serif;
        }
        input[type=reset] {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 100px;
            height: 50px;
            background-color: #FFFFF;
            font-family: sans-serif;
        }
        input[type=file] {
            font-size: 15px;
            font-family: sans-serif;
        }
        select {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        textarea {
            padding-bottom: 5px;
            padding-top: 5px;
            width: 500px;
            font-family: sans-serif;
            font-size: 15px;
            padding-left: 10px;
        }
        body {
            background-color: #FFFFF;
        }  
    </style>
</head>
<body>
<hr />
<table border=1>
    
        <h2 align="center">DATA PENDAFTARAN BEASISWA</h2>
         <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td colspan="3" width="1100px" align="center"><h2><b>BEASISWA DUA SARJANA PER DESA 2023</b></h2></td>
            </tr>
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>BIODATA</b></td>
            </tr>
            <tr>
                <td width="200px"><p>Nama Lengkap</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->nama;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Identitas Pribadi (NIK)</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->nik;?></td>  
            </tr>
            <tr>
                <td width="200px"><p>No.KK</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->kk;?></td>  
            </tr>
            <tr>
                <td width="200px"><p>Tempat Lahir</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->tempatLahir;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Tanggal Lahir</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->tanggalLahir;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Alamat</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->alamat;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Kecamatan</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->kecamatan;?></td>
            </tr>
            <tr>
                <td width="200px"><p>Email</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->email;?></td>
            </tr>
            <tr>
                <td width="200px"><p>No. Handphone</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->noHP;?></td>
            </tr>
            <tr>
                <td width="200px"><p>PasFoto (3x4) *pdf </p></td>
                <td>:</td>
                <td><?php echo $duasarjana->foto;?></td>
            </tr>
        </table>
        
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>KELUARG</b></td>
            </tr>
            <tr>
                <td width="200px"><p>No. KK</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->nokk;?></td>
            </tr>
            <tr>
            <td width="200px"><p>Nama Kepala Keluarga</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->kepalakel;?></td>
            </tr>
            <tr>
            <td width="200px"><p>Nama Ibu</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->ibu;?></td>
            </tr>
        </table>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>UNIVERSITAS</b></td>
            </tr>
            <tr>
                <td width="200px"><p>Nama Universitas</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->universitas;?></td>
            </tr>
            <tr>
            <td width="200px"><p>NIM</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->nim;?></td>
            </tr>
            <tr>
            <td width="200px"><p>Tahun Masuk Kuliah</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->tahun;?></td>
            </tr>
            <td width="200px"><p>Jalur Masuk Kuliah</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->jalur;?></td>
            </tr>
            <tr>
            <td width="200px"><p>Fakultas</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->fakultas;?></td>
            </tr>
            <td width="200px"><p>Program Studi</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->prodi;?></td>
            </tr>
            <td width="200px"><p>Semester</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->semester;?></td>
            </tr>
            <td width="200px"><p>IPK</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->ipk;?></td>
            </tr>
            <td width="200px"><p>UKT Sebelumnya</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->ukt;?></td>
            </tr>
        </table>
        <table align="center" width=1100px border="0" cellspacing="0" bgcolor="#F8F8FF">
            <tr>
                <td width="200px" colspan="3" bgcolor="#D6D2C4">&nbsp&nbsp<b>BERKAS</b></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Permohonan Mendapatkan Beasiswa </p></td>
                <td>:</td>
                <td><?php echo $duasarjana->supermohon;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Keterangan Aktif dari PTN</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->suketaktifk;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Kartu Keluarga </p></td>
                <td>:</td>
                <td><?php echo $duasarjana->kk;?></td>
            </tr>
            <tr>
                <td width="200px"><p> PKH / KIP / KPM </p></td>
                <td>:</td>
                <td><?php echo $duasarjana->buktikartu;?></td>
            </tr>
            <tr>
                <td width="200px"><p> KTP </p></td>
                <td>:</td>
                <td><?php echo $duasarjana->ktp;?></td>
            </tr>
            <tr>
                <td width="200px"><p> KTM</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->ktm;?></td>
            </tr>
            <tr>
                <td width="200px"><p> KHS </p></td>
                <td>:</td>
                <td><?php echo $duasarjana->khs;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Pernyataan Tidak Menerima Beasiswa</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->supertidakbeasiswa;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Bukti Pembayaran UKT</p></td>
                <td>:</td>
                <td><?php echo $duasarjana->buktiukt;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Sertifikat Akreditasi Prodi </p></td>
                <td>:</td>
                <td><?php echo $duasarjana->sertifiakreditasi;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Surat Pernyataan Tidak Sedang Bekerja </p></td>
                <td>:</td>
                <td><?php echo $duasarjana->supertdkbekerja;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Bukti diterima di perguruan tinggi </p></td>
                <td>:</td>
                <td><?php echo $duasarjana->buktiditerimapt;?></td>
            </tr>
            <tr>
                <td width="200px"><p> Buku Rekening Bank Jatim </p></td>
                <td>:</td>
                <td><?php echo $duasarjana->rekening;?></td>
            </tr>
        </table>
</table>

</body>
<?= $this->endSection(); ?>
