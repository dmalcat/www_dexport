<?php

use Latte\Runtime as LR;

/** source: /Users/davidmalcat/Sites/www_dexport/app/Presenters/templates/includes/navigation.latte */
final class Template3dc1713763 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<nav class="navigation">
	<ul class="navigation__list">
		<li';
		echo ($ʟ_tmp = array_filter(['navigation__item', $presenter->isLinkCurrent('Homepage:default') ? 'navigation__item--active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 3 */;
		echo '>
			<a class="navigation__link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:")) /* line 4 */;
		echo '">Homepage</a>
		</li>
		<li';
		echo ($ʟ_tmp = array_filter(['navigation__item', $presenter->isLinkCurrent('Styleguide:default') ? 'navigation__item--active' : null])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 6 */;
		echo '>
			<a class="navigation__link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Styleguide:")) /* line 7 */;
		echo '">Styleguide</a>
		</li>
		<a class="navigation__link" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("this", ['lang' => 'sk'])) /* line 9 */;
		echo '">SK</a>
	</ul>
</nav>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
