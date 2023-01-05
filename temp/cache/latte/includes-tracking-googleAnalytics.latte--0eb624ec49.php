<?php

use Latte\Runtime as LR;

/** source: /Users/davidmalcat/Sites/www_dexport/app/Presenters/templates/includes/tracking/googleAnalytics.latte */
final class Template0eb624ec49 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		if ($region === 'cz' && $googleAnalyticsCodeCZ) /* line 4 */ {
			echo '	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script type="text/plain" data-cookiecategory="analytics" async src="https://www.googletagmanager.com/gtag/js?id=';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($googleAnalyticsCodeCZ)) /* line 6 */;
			echo '"></script>
	<script type="text/plain" data-cookiecategory="analytics">
		window.dataLayer = window.dataLayer || [];
		function gtag(){ dataLayer.push(arguments); }
		gtag(\'js\', new Date());

		gtag(\'config\', \'';
			echo $googleAnalyticsCodeCZ /* line 12 */;
			echo '\');
	</script>
';
		}
		elseif ($region === 'sk' && $googleAnalyticsCodeSK) /* line 14 */ {
			echo '	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script type="text/plain" data-cookiecategory="analytics" async src="https://www.googletagmanager.com/gtag/js?id=';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($googleAnalyticsCodeSK)) /* line 16 */;
			echo '"></script>
	<script type="text/plain" data-cookiecategory="analytics">
		window.dataLayer = window.dataLayer || [];
		function gtag(){ dataLayer.push(arguments); }
		gtag(\'js\', new Date());

		gtag(\'config\', \'';
			echo $googleAnalyticsCodeSK /* line 22 */;
			echo '\');
	</script>
';
		}
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
