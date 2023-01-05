<?php

use Latte\Runtime as LR;

/** source: /Users/davidmalcat/Sites/www_dexport/app/Presenters/templates/includes/header.latte */
final class Template4cb48af425 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<header class="header">
	<div class="header__wrapper wrapper">
		<div class="headerLogo">
			<a class="headerLogo__link" href="">
				<img class="headerLogo__image svg" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 5 */;
		echo '/assets/images/brand/logo.svg" alt="">
			</a>
		</div>
		<div class="headerNavigation">
';
		$this->createTemplate('navigation.latte', $this->params, 'include')->renderToContentType('html') /* line 9 */;
		echo '			<div class="hamburger">
				<span class="hamburger__label">Menu</span>
				<div class="hamburger__trigger">
					<span class="hamburger__trigger--bread-top"></span>
					<span class="hamburger__trigger--meat"></span>
					<span class="hamburger__trigger--bread-bottom"></span>
				</div>
			</div>
		</div>
	</div>
</header>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
