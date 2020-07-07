<!DOCTYPE html>
<html>
<head>
	<title>sdasd</title>
</head>
<body>
<p>sadsda</p>
<?php
$xmldoc = new DOMDocument('1.0', 'utf-8');
$xmldoc->formatOutput = true;
$root = $xmldoc->createElement("books");
$xmldoc->appendChild($root);
$dem = $_POST['soCauHoi'];

for ($i = 1; $i <= $dem; $i++)
{
	$cauHoi = $xmldoc->createElement("cauHoi");
	$noiDung = $xmldoc->createElement("noiDung");
	$noiDung->appendChild(
		$xmldoc->createTextNode($_POST['noiDung'.$i])
	);
	$dapAnA = $xmldoc->createElement("dapAnA");
	$dapAnA->appendChild(
		$xmldoc->createTextNode($_POST['dapAnA'.$i])
	);
	$dapAnB = $xmldoc->createElement("dapAnB");
	$dapAnB->appendChild(
		$xmldoc->createTextNode($_POST['dapAnB'.$i])
	);
	$dapAnC = $xmldoc->createElement("dapAnC");
	$dapAnC->appendChild(
		$xmldoc->createTextNode($_POST['dapAnC'.$i])
	);
	$dapAnD = $xmldoc->createElement("dapAnD");
	$dapAnD->appendChild(
		$xmldoc->createTextNode($_POST['dapAnD'.$i])
	);
	$dapAnDung = $xmldoc->createElement("dapAnDung");
	$dapAnDung->appendChild(
		$xmldoc->createTextNode($_POST['dapAnDung'.$i])
	);
	$cauHoi->appendChild($noiDung);
	$cauHoi->appendChild($dapAnA);
	$cauHoi->appendChild($dapAnB);
	$cauHoi->appendChild($dapAnC);
	$cauHoi->appendChild($dapAnD);
	$cauHoi->appendChild($dapAnDung);
	$root->appendChild($cauHoi);
}

$xmldoc->save("books.xml");
echo '<script>
        alert("Thêm thành công!"); 
        window.location.replace("view.html");
      </script>'; 
?>

</body>
</html>
