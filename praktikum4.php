<!DOCTYPE html>
<html lang="en">
    <head>
        <style>

        table{
            font-family: 'Times New Roman', sans-serif;
            border-collapse : collapse;
             width : 80%;
            : center;
        }

        body{
            background-color : #B1F7FC;
        }

        td,th{
            border: 4px solid #59A5D1;
            text-align : center;
            padding: 6px;
        }

        tr{
            background-color: #DFE280;
        }

        h1{
            color: #5E8A5E;
            text-align : center;
        }

        thead{
            background-color: #4B96D7;
        }
        
        th{
            background-color: #F4D8A3;
        }
        </style>
<body>
    <div class = "header">
        <h1>List Nama Karyawan</h1>
        </div>
        
    <?php
        abstract class Karyawan{
            public $no;
            public $nama;
            public $ttl;
            public $jenisKelamin;
            public $levelKaryawan;
            public $status;
            public $gaji;

            abstract function setGaji();

            function setNo($no){
                $this->no = $no;
            }

            function setNama($nama){
                $this->nama = $nama;
            }

            function setTtl($ttl){
                $this->ttl = $ttl;
            }

            function setJenisKelamin($jenisKelamin){
                $this->jenisKelamin = $jenisKelamin;
            }

            function setLevelKaryawan($levelKaryawan){
                $this->levelKaryawan = $levelKaryawan;
            }

            function setStatus($status){
                $this->status = $status;
            }

            function getNo(){
                return $this->no;
            }

            function getNama(){
                return $this->nama;
            }

            function getTtl(){
                return $this->ttl;
            }

            function getJenisKelamin(){
                return $this->jenisKelamin;
            }

            function getLevelKaryawan(){
                return $this->levelKaryawan;
            }

            function getStatus(){
                return $this->status;
            }

            function getGaji(){
                return $this->gaji;
            }

        } 

        class Fulltime extends Karyawan{
            function __construct($no , $nama, $ttl, $jenisKelamin, $levelKaryawan, $status){
                $this->no = $no;
                $this->nama = $nama;
                $this->ttl = $ttl;
                $this->jenisKelamin = $jenisKelamin;
                $this->levelKaryawan = $levelKaryawan;
                $this->status = $status;
            }

            function setGaji(){
                if($this->levelKaryawan == "Junior"){
                    $this->gaji = 2000000/2;
                }
                else if($this->levelKaryawan == "Amateur"){
                    $this->gaji = 3500000/2;
                }
                else if($this->levelKaryawan == "Senior"){
                    $this->gaji = 5000000/2;
                }else{
                    $this->gaji = 0;
                }
            }
        } 

        class Parttime extends Karyawan{
            function __construct($no , $nama, $ttl, $jenisKelamin, $levelKaryawan, $status){
                $this->no = $no;
                $this->nama = $nama;
                $this->ttl = $ttl;
                $this->jenisKelamin = $jenisKelamin;
                $this->levelKaryawan = $levelKaryawan;
                $this->status = $status;
            }

            function setGaji(){
                if($this->levelKaryawan == "Junior"){
                    $this->gaji = 2000000/2;
                }
                else if($this->levelKaryawan == "Amateur"){
                    $this->gaji = 3500000/2;
                }
                else if($this->levelKaryawan == "Senior"){
                    $this->gaji = 5000000/2;
                }else{
                    $this->gaji = 0;
                }
            }
        } 

        $karyawan1 = new Fulltime("1", "Endy","Jakarta , 09-01-1998", "Pria", "Junior" , "Fulltime");
        $karyawan2 = new Fulltime("2", "Jennie","Bandung , 11-10-1997", "Wanita", "Amateur" , "Fulltime");
        $karyawan3 = new Parttime("3", "Alpiando","Jember , 22-03-1995", "Pria", "Senior" , "Parttime");
        $karyawan4 = new Fulltime("4", "Ferry","Manado , 13-07-1993", "Pria", "Amateur" , "Fulltime");
        $karyawan5 = new Fulltime("5", "Indah","Maluku , 24-01-1994", "Wanita", "Junior" , "Fulltime");
        $karyawan6 = new Parttime("6", "Natasya","Jakarta , 30-10-1996", "wanita", "Junior" , "Parttime");
        $karyawan7 = new Parttime("7", "Maya","Medan , 14-12-1995", "Wanita", "Senior" , "Parttime");
        $karyawan8 = new Parttime("8", "Lukman","Palembang , 20-02-1996", "Pria", "Amateur" , "Parttime");
        $karyawan9 = new Fulltime("9", "Selly","Pekanbaru , 15-09-1998", "Wanita", "Junior" , "Fulltime");
        $karyawan10 = new Fulltime("10", "Rendy","Lampung , 17-05-1994", "Pria", "Senior" , "Fulltime");

        $karyawan1->setGaji();
        $karyawan2->setGaji();
        $karyawan3->setGaji();
        $karyawan4->setGaji();
        $karyawan5->setGaji();
        $karyawan6->setGaji();
        $karyawan7->setGaji();
        $karyawan8->setGaji();
        $karyawan9->setGaji();
        $karyawan10->setGaji();

        $listKaryawan = array($karyawan1, $karyawan2, $karyawan3, $karyawan4, $karyawan5, $karyawan6, $karyawan7, $karyawan8, $karyawan9, $karyawan10);
    ?>
    <br><br>
        <table align = "center">
            <tr>
                <th>NO</th>
                <th>Nama Karyawan</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Level</th>
                <th>Status</th>
                <th>Gaji Karyawan</th>
    </tr>
    <?php foreach ($listKaryawan as $Karyawan){?>
        <tr>
            <td><?php echo $Karyawan->getNo(); ?></td>
            <td><?php echo $Karyawan->getNama(); ?></td>
            <td><?php echo $Karyawan->getTtl(); ?></td>
            <td><?php echo $Karyawan->getJenisKelamin(); ?></td>
            <td><?php echo $Karyawan->getLevelKaryawan(); ?></td>
            <td><?php echo $Karyawan->getStatus(); ?></td>
            <td><?php echo $Karyawan->getGaji(); ?></td>
    </tr>
    <?php }?>
    </body>
</html>






