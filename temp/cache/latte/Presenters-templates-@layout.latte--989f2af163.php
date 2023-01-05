<?php

use Latte\Runtime as LR;

/** source: /Users/davidmalcat/Sites/www_dexport/app/Presenters/templates/@layout.latte */
final class Template989f2af163 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['fullTitle' => 'blockFullTitle', 'fullDesc' => 'blockFullDesc', 'scripts' => 'blockScripts'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		echo '
<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>';
		if ($this->hasBlock("title")) /* line 9 */ {
			$this->renderBlock($ʟ_nm = 'title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('striphtml', $ʟ_fi, $s));
			}) /* line 9 */;
			echo ' | ';
		}
		echo 'Freshbang</title>
';
		if (isset($robots)) /* line 10 */ {
			echo '	<meta name="robots" content="';
			echo LR\Filters::escapeHtmlAttr($robots) /* line 10 */;
			echo '">
';
		}
		echo '	<meta name="description" content="';
		$this->renderBlock($ʟ_nm = 'fullDesc', get_defined_vars(), 'htmlAttr') /* line 11 */;
		echo '">

	<meta property="og:title" content="';
		if ($this->hasBlock("title")) /* line 14 */ {
			$this->renderBlock($ʟ_nm = 'title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'htmlAttr', $this->filters->filterContent('strip', $ʟ_fi, $this->filters->filterContent('trim', $ʟ_fi, $this->filters->filterContent('striptags', $ʟ_fi, $s))));
			}) /* line 14 */;
			echo ' | ';
		}
		echo 'Freshbang">
	<meta property="og:url" content="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiPresenter->link("//this")) /* line 15 */;
		echo '">
	<meta property="og:type" content="website">
	<meta property="og:image" content="';
		echo LR\Filters::escapeHtmlAttr($baseUrl) /* line 17 */;
		echo '/assets/images/ogimage-.png">
	<meta property="og:image:width" content="600">
	<meta property="og:image:height" content="315">
	<meta property="og:site_name" content="';
		if ($this->hasBlock("title")) /* line 20 */ {
			$this->renderBlock($ʟ_nm = 'title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'htmlAttr', $this->filters->filterContent('strip', $ʟ_fi, $this->filters->filterContent('trim', $ʟ_fi, $this->filters->filterContent('striptags', $ʟ_fi, $s))));
			}) /* line 20 */;
			echo ' | ';
		}
		echo 'Freshbang">
	<meta property="og:description" content="';
		$this->renderBlock($ʟ_nm = 'fullDesc', get_defined_vars(), 'htmlAttr') /* line 21 */;
		echo '">
	<meta property="og:locale" content="cs_CZ">

	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/dist/css/1-vendor.min.css'))) /* line 25 */;
		echo '">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/dist/css/2-document.min.css'))) /* line 26 */;
		echo '">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/dist/css/3-core.min.css'))) /* line 27 */;
		echo '">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/dist/css/4-components.min.css'))) /* line 28 */;
		echo '">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/dist/css/5-ui.min.css'))) /* line 29 */;
		echo '">
	<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/cookie-consent/dist/css/cookies.min.css'))) /* line 30 */;
		echo '">

	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/dist/js/jquery-3.5.1.min.js'))) /* line 33 */;
		echo '"></script>
	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/dist/js/nette.ajax.min.js'))) /* line 34 */;
		echo '"></script>
	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/dist/js/live-form-validation.min.js'))) /* line 35 */;
		echo '"></script>
	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/dist/js/svg.min.js'))) /* line 36 */;
		echo '"></script>
	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/dist/js/hamburger.min.js'))) /* line 37 */;
		echo '"></script>
	<script defer src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/cookie-consent/dist/js/cookies.min.js'))) /* line 38 */;
		echo '"></script>
	<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(($this->filters->asset)($basePath . '/assets/dist/js/main.min.js'))) /* line 39 */;
		echo '"></script>

';
		$this->createTemplate('includes/tracking/googleAnalytics.latte', $this->params, 'include')->renderToContentType('html') /* line 41 */;
		echo '</head>

<body>
';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 45 */ {
			echo '	<div';
			echo ($ʟ_tmp = array_filter(['flash', $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 45 */;
			echo '>
		<p>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 46 */;
			echo '</p>
	</div>
';
			$iterations++;
		}
		echo "\n";
		$this->createTemplate('includes/header.latte', $this->params, 'include')->renderToContentType('html') /* line 49 */;
		echo '
	<main class="content">
';
		$this->renderBlock($ʟ_nm = 'content', [], 'html') /* line 52 */;
		echo '	</main>

';
		$this->createTemplate('includes/footer.latte', $this->params, 'include')->renderToContentType('html') /* line 55 */;
		echo '
	<div id="overlay">
		<div class="navigation navigation--mobile">
';
		$this->createTemplate('includes/navigation.latte', $this->params, 'include')->renderToContentType('html') /* line 59 */;
		echo '		</div>
	</div>

';
		$this->renderBlock('scripts', get_defined_vars()) /* line 63 */;
		echo '
</body>
</html>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '45'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {define fullTitle} on line 1 */
	public function blockFullTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		if ($this->hasBlock("metaTitle")) /* line 1 */ {
			$this->renderBlock($ʟ_nm = 'metaTitle', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('strip', $ʟ_fi, $this->filters->filterContent('trim', $ʟ_fi, $this->filters->filterContent('striptags', $ʟ_fi, $s))));
			}) /* line 1 */;
		}
		else /* line 1 */ {
			echo 'Freshbang repository';
		}
		
	}


	/** {define fullDesc} on line 2 */
	public function blockFullDesc(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		if ($this->hasBlock("metaDescription")) /* line 2 */ {
			$this->renderBlock($ʟ_nm = 'metaDescription', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('strip', $ʟ_fi, $this->filters->filterContent('trim', $ʟ_fi, $this->filters->filterContent('striptags', $ʟ_fi, $s))));
			}) /* line 2 */;
		}
		else /* line 2 */ {
			echo 'The Universe started with The Big Bang. So every SFN project should start with The Fresh Bang.';
		}
		
	}


	/** {block scripts} on line 63 */
	public function blockScripts(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '		<script>
			$(function () {
				$.nette.init();
			});
		</script>
';
	}

}
