<?php

include "libchart/libchart/classes/libchart.php";

$chart = new LineChart();

$serie1 = new XYDataSet();
$serie1->addPoint(new Point("06-01", 273));
$serie1->addPoint(new Point("06-02", 421));
$serie1->addPoint(new Point("06-03", 642));
$serie1->addPoint(new Point("06-04", 799));
$serie1->addPoint(new Point("06-05", 1009));
$serie1->addPoint(new Point("06-06", 1106));

$serie2 = new XYDataSet();
$serie2->addPoint(new Point("06-01", 280));
$serie2->addPoint(new Point("06-02", 300));
$serie2->addPoint(new Point("06-03", 212));
$serie2->addPoint(new Point("06-04", 542));
$serie2->addPoint(new Point("06-05", 600));
$serie2->addPoint(new Point("06-06", 850));

$serie3 = new XYDataSet();
$serie3->addPoint(new Point("06-01", 180));
$serie3->addPoint(new Point("06-02", 400));
$serie3->addPoint(new Point("06-03", 512));
$serie3->addPoint(new Point("06-04", 642));
$serie3->addPoint(new Point("06-05", 700));
$serie3->addPoint(new Point("06-06", 900));

$serie4 = new XYDataSet();
$serie4->addPoint(new Point("06-01", 280));
$serie4->addPoint(new Point("06-02", 500));
$serie4->addPoint(new Point("06-03", 612));
$serie4->addPoint(new Point("06-04", 742));
$serie4->addPoint(new Point("06-05", 800));
$serie4->addPoint(new Point("06-06", 1000));

$serie5 = new XYDataSet();
$serie5->addPoint(new Point("06-01", 380));
$serie5->addPoint(new Point("06-02", 600));
$serie5->addPoint(new Point("06-03", 712));
$serie5->addPoint(new Point("06-04", 842));
$serie5->addPoint(new Point("06-05", 900));
$serie5->addPoint(new Point("06-06", 1200));

$dataSet = new XYSeriesDataSet();
$dataSet->addSerie("Product 1", $serie1);
$dataSet->addSerie("Product 2", $serie2);
$dataSet->addSerie("Product 3", $serie3);
$dataSet->addSerie("Product 4", $serie4);
$dataSet->addSerie("Product 5", $serie5);
$chart->setDataSet($dataSet);

$chart->setTitle("Sales for 2006");
$chart->getPlot()->setGraphCaptionRatio(0.62);
$chart->render("libchart/libchart/classes/demo6.png");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Libchart Line Demonstration</title>
	<meta charset="ISO-8859-15">
</head>
<body>
	<img alt="Line chart" src="libchart/demo/generated/demo6.png" style="border: 1px solid gray;"/>
</body>
</html>
