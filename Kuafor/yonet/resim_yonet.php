<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript" src="../bs4/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../bs/bootstrap.min.css"/>
<script type="text/javascript" src="../bs/bootstrap.min.js"></script>
<script type="text/javascript" src="../bs/jquery.min.js"></script>
<style>

	.bosluk{padding: 10px;}

</style>

</head>
<?
	include('baglanti.php');
	
	if($_GET['islem']=='sil')
	{
		$sorgu=$db->prepare("Delete from tbl_resimler where ResimId=?");
		$sil=$sorgu->execute(array($_GET['rid']));
		if($sil)
		{
			$resim_yolu="../db_resimler/".$_GET['rid'].".jpg";
			unlink($resim_yolu);
		}
	}
	
	
	if($_GET['islem']=='ekle')
	{
		$query=$db->prepare("insert into tbl_resimler (Baslik,Tarih) values(?,?)");
		$ekle=$query->execute(array($_POST['acik'],$_POST['tar']));
		if($ekle)
		{
			$son_id=$db->lastInsertId();
			$resim_yolu="../db_resimler/".$son_id.".jpg";
			if(move_uploaded_file($_FILES['res']['tmp_name'],$resim_yolu))
			{
				$islem="Resim Yüklendi";
			}
			else
			{
				$islem="Resim Yükleme Başarısız Oldu";
			}
		}
	}
?>

<body>

<div class="container-fluid">
	<div class="row">
    	<div class="col-md-12 text-center">
    		<h3 class="text-danger bosluk text-center">—✄—SAADET KUAFÖR—✄—</h3>
            <p class="text-center">Yönetim Sayfası</p>
            <a class="btn btn-link" href="index.html">Ana Sayfa</a>
        </div>
    </div>
</div>

        
         <div class="row">
         	<div class="table-responsive"> 
            	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" cellpadding="2">
                	<thead>
                    	<tr>
                        	<th>Resim</th>
                            <th>Açıklamalar</th>
                            <th>Tarih</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?
                        $sorgu=$db->query("select * from tbl_resimler", PDO::FETCH_ASSOC);
						if($sorgu->rowCount())
						{
							foreach($sorgu as $satir)
							{
						?>
                        <tr>
                        	<td>
                            	<img src="../db_resimler/<?=$satir['ResimId']?>.jpg" height="100px" />
                            </td>
                            <td><?=$satir['Baslik']?></td>
                            <td><?=$satir['Tarih']?></td>
                            <td><a href="?islem=sil&rid=<?=$satir['ResimId']?>" class="btn btn-link">Sil</a></td>
                        </tr>
                        <? } //foreach
						}//if
                        ?>
                    </tbody>                    
                </table>
            </div>
         </div>
         <div class="row bosluk">
         	<div class="col-md-6 bg-light">
            	<h5>Resim Ekleme Formu</h5>
                <form action="?islem=ekle" method="post" enctype="multipart/form-data">
                	<div class="form-group">
                    	Açıklama:
                        <input type="text" name="acik" class="form-control" />
                    </div>
                    <div class="form-group">
                    	Tarih:
                        <input type="text" name="tar" class="form-control" />
                    </div>
                    <div class="form-group">
                    	Resim:
                        <input type="file" name="res" />
                    </div>
                    <button type="submit" class="btn btn-dark">Gönder</button>
                </form>
            </div>
         </div>
        
</div>
</body>
</html>