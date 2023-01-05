<?php

use Latte\Runtime as LR;

/** source: /Users/davidmalcat/Sites/www_dexport/app/Presenters/templates/Styleguide/default.latte */
final class Template54a1501579 extends Latte\Runtime\Template
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
		
	}


	/** {block fullDesc} on line 2 */
	public function blockFullDesc(array $ʟ_args): void
	{
		echo 'The Fresh Bang style guide page';
	}


	/** {block content} on line 4 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '
<section class="styleguide">
	<div class="styleguide__wrapper wrapper">
		<h1>Freshbang repository</h1>
		<h2>Freshbang repository</h2>
		<h3>Freshbang repository</h3>
		<h4>Freshbang repository</h4>

		<br>

		<p>
			Lorem ipsum <strong>(zkráceně lipsum)</strong> je označení pro <i>standardní pseudolatinský</i> text užívaný v <a href="">grafickém designu</a> a navrhování jako demonstrativní výplňový text při vytváření pracovních ukázek grafických návrhů (např. internetových stránek, rozvržení časopisů či všech druhů reklamních materiálů). Lipsum tak pracovně znázorňuje text v ukázkových maketách (tzv. mock-up) předtím, než bude do hotového návrhu vložen smysluplný obsah.
		</p>

		<ul>
			<li>Freshbang repository</li>
			<li>Freshbang repository</li>
			<li><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Styleguide:")) /* line 22 */;
		echo '">Link to styleguide</a></li>
		</ul>

		<ol>
			<li>Freshbang repository</li>
			<li>Freshbang repository</li>
			<li>Freshbang repository</li>
		</ol>

		<div>
			<p>
				Lorem ipsum <strong>(zkráceně lipsum)</strong> je označení pro <i>standardní pseudolatinský</i> text užívaný v <a href="">grafickém designu</a> a navrhování jako demonstrativní výplňový text při vytváření pracovních ukázek grafických návrhů (např. internetových stránek, rozvržení časopisů či všech druhů reklamních materiálů). Lipsum tak pracovně znázorňuje text v ukázkových maketách (tzv. mock-up) předtím, než bude do hotového návrhu vložen smysluplný obsah.
			</p>
		</div>


		<h2>Forms</h2>
		<form class="form">
			<div class="form__group form__group--3c">
				<div class="form__control">
					<label>Test input</label>
					<input class="form__input" type="text" placeholder="Test input">
				</div>
				<div class="form__control">
					<label>Test input</label>
					<input class="form__input" type="text" placeholder="Test input">
				</div>
				<div class="form__control">
					<label>Test input</label>
					<input class="form__input" type="text" placeholder="Test input">
				</div>
			</div>

			<div class="form__group form__group--2c">
				<div class="form__control">
					<input class="form__input" type="text" placeholder="Test input">
				</div>
				<div class="form__control">
					<input class="form__input" type="file" placeholder="Test input">
				</div>
			</div>

			<div class="form__group form__group--1c">
				<div class="form__control">
					<input class="form__input" type="text" placeholder="Test input">
				</div>
			</div>

			<div class="form__group">
				<div class="form__control">
					<textarea class="form__textarea"></textarea>
				</div>
			</div>

			<div class="form__group">
				<div class="form__control">
					<input class="button" type="submit" value="Send">
				</div>
			</div>

		</form>

		<div class="wrapper">
			<h2>Grid</h2>
			<h3>Row 3 columns</h3>
			<div class="row row--3c">
				<div class="col">
					<p>
						Lorem ipsum <strong>(zkráceně lipsum)</strong> je označení pro <i>standardní pseudolatinský</i> text užívaný v <a href="">grafickém designu</a> a navrhování jako demonstrativní výplňový text při vytváření pracovních ukázek grafických návrhů (např. internetových stránek, rozvržení časopisů či všech druhů reklamních materiálů). Lipsum tak pracovně znázorňuje text v ukázkových maketách (tzv. mock-up) předtím, než bude do hotového návrhu vložen smysluplný obsah.
					</p>
					<a href="" class="button">Button</a>
				</div>
				<div class="col">
					<p>
						Lorem ipsum <strong>(zkráceně lipsum)</strong> je označení pro <i>standardní pseudolatinský</i> text užívaný v <a href="">grafickém designu</a> a navrhování jako demonstrativní výplňový text při vytváření pracovních ukázek grafických návrhů (např. internetových stránek, rozvržení časopisů či všech druhů reklamních materiálů). Lipsum tak pracovně znázorňuje text v ukázkových maketách (tzv. mock-up) předtím, než bude do hotového návrhu vložen smysluplný obsah.
					</p>
				</div>
				<div class="col">
					<p>
						Lorem ipsum <strong>(zkráceně lipsum)</strong> je označení pro <i>standardní pseudolatinský</i> text užívaný v <a href="">grafickém designu</a> a navrhování jako demonstrativní výplňový text při vytváření pracovních ukázek grafických návrhů (např. internetových stránek, rozvržení časopisů či všech druhů reklamních materiálů). Lipsum tak pracovně znázorňuje text v ukázkových maketách (tzv. mock-up) předtím, než bude do hotového návrhu vložen smysluplný obsah.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>';
	}

}
