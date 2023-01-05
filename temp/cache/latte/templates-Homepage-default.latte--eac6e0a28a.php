<?php

use Latte\Runtime as LR;

/** source: /Users/davidmalcat/Sites/www_dexport/app/Presenters/templates/Homepage/default.latte */
final class Templateeac6e0a28a extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['title' => 'blockTitle', 'fullDesc' => 'blockFullDesc', 'content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('title', get_defined_vars()) /* line 1 */;
		echo "\n";
		$this->renderBlock('fullDesc', get_defined_vars()) /* line 2 */;
		echo '

';
		$this->renderBlock('content', get_defined_vars()) /* line 4 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block title} on line 1 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Úvodní stránka';
	}


	/** {block fullDesc} on line 2 */
	public function blockFullDesc(array $ʟ_args): void
	{
		echo 'The Fresh Bang welcome page';
	}


	/** {block content} on line 4 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '
<section class="cover">
	<div class="cover__visual">
		<div class="cover__visual-inner">
			<picture class="cover__image">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 10 */;
		echo '/assets/images/content/cover/cover_375.webp" media="(max-width: 375px)" type="image/webp">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 11 */;
		echo '/assets/images/content/cover/cover_375.png" media="(max-width: 375px)" type="image/png">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 12 */;
		echo '/assets/images/content/cover/cover_640.webp" media="(max-width: 640px)" type="image/webp">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 13 */;
		echo '/assets/images/content/cover/cover_640.png" media="(max-width: 640px)" type="image/png">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 14 */;
		echo '/assets/images/content/cover/cover_768.webp" media="(max-width: 768px)" type="image/webp">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 15 */;
		echo '/assets/images/content/cover/cover_768.png" media="(max-width: 768px)" type="image/png">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 16 */;
		echo '/assets/images/content/cover/cover_1024.webp" media="(max-width: 1024px)" type="image/webp">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 17 */;
		echo '/assets/images/content/cover/cover_1024.png" media="(max-width: 1024px)" type="image/png">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 18 */;
		echo '/assets/images/content/cover/cover_1440.webp" media="(max-width: 1440px)" type="image/webp">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 19 */;
		echo '/assets/images/content/cover/cover_1440.png" media="(max-width: 1440px)" type="image/png">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 20 */;
		echo '/assets/images/content/cover/cover_1920.png" media="(max-width: 1920px)" type="image/png">
				<source srcset="';
		echo LR\Filters::escapeHtmlAttr($basePath) /* line 21 */;
		echo '/assets/images/content/cover/cover_2560.png" media="(max-width: 2560px)" type="image/png">
				<img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 22 */;
		echo '/assets/images/content/cover/cover_1920.png" alt="">
			</picture>
		</div>
	</div>

	<div class="cover__wrapper wrapper">
		<h1>
			The Fresh Bang welcome page
		</h1>
		<p class="cover__copy">
			Hello world!
		</p>
		<div class="cover__button">
			<a class="button button--black" href="">Cover button</a>
		</div>
	</div>
</section>
';
	}

}
