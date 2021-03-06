<?php
	require_once (realpath(dirname(__FILE__) . '/../../includes/common_func.php'));	
	require_once (realpath(dirname(__FILE__) . "/../../includes/session.php"));
	
	$res = initialize_session();
	$encodeOn = $res['encodeOn'];
	$in_debug = $res['in_debug'];
	$genemoOn = $res['genemoOn'];

	unset($res);
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>GIVe (Genomic Interaction Visualizer)</title>
<script src="components/bower_components/webcomponentsjs/webcomponents-lite.min.js"></script>
<link rel="import" href="components/genemo_components/genemo-card/genemo-card.html">
<link rel="import" href="components/genemo_components/chart-controller/chart-controller.html">
<link rel="import" href="components/bower_components/iron-icon/iron-icon.html">
<link rel="import" href="components/bower_components/iron-ajax/iron-ajax.html">
<link rel="import" href="components/bower_components/iron-icons/editor-icons.html">
<link href="https://fonts.googleapis.com/css?family=Roboto:500,400italic,700italic,700,400" rel="stylesheet" type="text/css">
<link rel="import" href="components/genemo_components/genemo-styles.html">
<style is="custom-style" include="genemo-shared-styles">
body {
	font-family: 'Roboto';
	font-size: 14px;
}
h2 {
	font-family: 'Roboto';
	font-size: 16px;
	line-height: 1.4em;
	margin: 1em 1em 0.5em 1em;
}
p {
	margin: 0.5em 1.5em;
	line-height: 1.4em;
}
</style>
</head>
<body unresolved>
<genemo-card>
  <div class="GenemoHead">
    <iron-icon class="smallInline" icon="editor:insert-photo" alt="chart"></iron-icon>
    GIVe (Genomic Interaction Visualizer)
  </div>
  <chart-card-content class="GenemoBody" id="mainChart"></chart-card-content>
</genemo-card>
<h2><strong>Description</strong></h2>
<p>
Data in GIVe includes interacting topological domains derived for human genome hg18 by Dr Bing Ren's lab and can be downloaded <a href="http://chromosome.sdsc.edu/mouse/hi-c/download.html">here</a>. You may drag / scroll on the coordinates to move / zoom the current view. Threshold provides the number of normalized reads required between domains to call an interaction (higher threshold means less interactions shown). </p>
<p>If you have more questions, please contact Dr Xiaoyi Cao <a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#120;&#57;&#99;&#97;&#111;&#64;&#101;&#110;&#103;&#46;&#117;&#99;&#115;&#100;&#46;&#101;&#100;&#117;'>via email</a>. </p>
<h2><strong>References</strong></h2>
<p>
Jesse R. Dixon,	Siddarth Selvaraj,	Feng Yue,	Audrey Kim,	Yan Li,	Yin Shen,	Ming Hu,	Jun S. Liu, Bing Ren. Topological domains in mammalian genomes identified by analysis of chromatin interactions. <strong>Nature</strong> <em>485</em>, 376-380, 2012, <a href="http://www.nature.com/nature/journal/v485/n7398/full/nature11082.html">link</a></p>
</body>
</html>
