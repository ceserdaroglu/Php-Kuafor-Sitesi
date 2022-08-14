<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="../bs/bootstrap.min.css"/>
<script type="text/javascript" src="../bs/bootstrap.min.js"></script>
<script type="text/javascript" src="../bs/jquery.min.js"></script>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<style>

	.bosluk{padding: 10px;}

</style>

</head>
<?
	include("baglanti.php");
	if($_GET['islem']=='edit')
	{
		$sorgu_edit=$db->prepare("Update tbl_hakkimizda set Baslik=?, Icerik=? where IcerikId=?");
		$edit=$sorgu_edit->execute(array($_POST['baslik'],$_POST['icerik'],$_GET['id']));
	}
?>

<body>

	<div class="container-fluid">
	<div class="row">
    	<div class="col-md-12 text-center">
    		<h3 class="text-danger bosluk text-center">—✄—SAADET KUAFÖR—✄—</h3>
            <p class="text-center">Yönetim Sayfası</p>
            <a class="btn btn-link" href="index.html">Ana Sayfa</a>
            <a class="btn btn-link" href="fiyat_yonet.php">Fiyatlar</a>
            <a class="btn btn-link" href="resim_yonet.php">Resimler</a>
            <a class="btn btn-link" href="iletisim_yonet.php">İletişim</a>
        </div>
    </div>
</div>
        <div class="row">
        	<div class="col-md-12">
            	<h5>İçerikte yer alan sayfalar:</h5>
                <div class="list-group">
                	<?
						$query=$db->query("Select * from tbl_hakkimizda",PDO::FETCH_ASSOC);
						if($query->rowCount())
						{
							foreach($query as $row)
							{
								print "<a href='?id=$row[IcerikId]'><li class='list-group-item'>".$row['Baslik']."</li></a>";
							}
						}
					?>
                </div>
            </div>
        </div>
        
        <?
			if(isset($_GET['id']))
			{
				$sorgu=$db->prepare("Select * from tbl_hakkimizda where IcerikId=?");
				$sorgu->execute(array($_GET['id']));
				if($data=$sorgu->fetch(PDO::FETCH_ASSOC))
				{
					$bas=$data['Baslik'];
					$ic=$data['Icerik'];	
				}	
			}
		?>
        
        <div class="row bosluk">
        	<div class="col-md-6">
            	<form action="?id=<?=$_GET['id']?>&islem=edit" method="post">
                	<div class="form-group">
                    	Sayfa Başlığı:
                        <input type="text" value="<?=$bas?>" class="form-control" name="baslik" />
                    </div>
                    <div class="form-group">
                    	İçerik:
                        <textarea name="icerik" class="form-control ckeditor"><?=$ic?></textarea>
                    </div>
                    <button type="submit" class="btn btn-info">Gönder</button>
                </form>
            </div>
        </div>
             
    </div>

</body>
</html>

