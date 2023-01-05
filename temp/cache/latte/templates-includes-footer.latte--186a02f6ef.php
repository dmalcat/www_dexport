<?php

use Latte\Runtime as LR;

/** source: /Users/davidmalcat/Sites/www_dexport/app/Presenters/templates/includes/footer.latte */
final class Template186a02f6ef extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<footer class="footer">
	<div class="footer__wrapper wrapper">
		<a class="footer__cookie" href="javascript:void(0);" data-cc="c-settings">';
		$ʟ_fi = new LR\FilterInfo('html');
		echo LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent("translate", $ʟ_fi, 'Nastavení cookies')) /* line 3 */;
		echo '</a>
		<p>© ';
		if (date('Y') !== '2021') /* line 4 */ {
			echo '2021&mdash;';
		}
		echo LR\Filters::escapeHtmlText(date('Y')) /* line 4 */;
		echo ' Studio Freshnet</p>
	</div>
</footer>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
