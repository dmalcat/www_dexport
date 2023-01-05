<?php
// source: /Users/davidmalcat/Sites/www_dexport/app/config/common.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_62eb1f897c extends Nette\DI\Container
{
	protected $types = ['container' => 'Nette\DI\Container'];

	protected $aliases = [
		'application' => 'application.application',
		'cacheStorage' => 'cache.storage',
		'database.default' => 'database.default.connection',
		'httpRequest' => 'http.request',
		'httpResponse' => 'http.response',
		'nette.cacheJournal' => 'cache.journal',
		'nette.database.default' => 'database.default',
		'nette.database.default.context' => 'database.default.context',
		'nette.httpRequestFactory' => 'http.requestFactory',
		'nette.latteFactory' => 'latte.latteFactory',
		'nette.mailer' => 'mail.mailer',
		'nette.presenterFactory' => 'application.presenterFactory',
		'nette.templateFactory' => 'latte.templateFactory',
		'nette.userStorage' => 'security.userStorage',
		'session' => 'session.session',
		'user' => 'security.user',
	];

	protected $wiring = [
		'Nette\DI\Container' => [['container']],
		'Nette\Application\Application' => [['application.application']],
		'Nette\Application\IPresenterFactory' => [['application.presenterFactory']],
		'Nette\Application\LinkGenerator' => [['application.linkGenerator']],
		'Nette\Caching\Storages\Journal' => [['cache.journal']],
		'Nette\Caching\Storage' => [['cache.storage']],
		'Nette\Database\Connection' => [['database.default.connection']],
		'Nette\Database\IStructure' => [['database.default.structure']],
		'Nette\Database\Structure' => [['database.default.structure']],
		'Nette\Database\Conventions' => [['database.default.conventions']],
		'Nette\Database\Conventions\DiscoveredConventions' => [['database.default.conventions']],
		'Nette\Database\Explorer' => [['database.default.context']],
		'Nette\Http\RequestFactory' => [['http.requestFactory']],
		'Nette\Http\IRequest' => [['http.request']],
		'Nette\Http\Request' => [['http.request']],
		'Nette\Http\IResponse' => [['http.response']],
		'Nette\Http\Response' => [['http.response']],
		'Nette\Bridges\ApplicationLatte\LatteFactory' => [['latte.latteFactory']],
		'Nette\Application\UI\TemplateFactory' => [['latte.templateFactory']],
		'Nette\Mail\Mailer' => [['mail.mailer']],
		'Nette\Security\Passwords' => [['security.passwords']],
		'Nette\Security\UserStorage' => [['security.userStorage']],
		'Nette\Security\IUserStorage' => [['security.legacyUserStorage']],
		'Nette\Security\User' => [['security.user']],
		'Nette\Http\Session' => [['session.session']],
		'Tracy\ILogger' => [['tracy.logger']],
		'Tracy\BlueScreen' => [['tracy.blueScreen']],
		'Tracy\Bar' => [['tracy.bar']],
		'Freshio\Presets\PresetsSection' => [['01']],
		'ArrayAccess' => [2 => ['01', 'router', 'application.1', 'application.2', 'application.3', 'application.4']],
		'Freshio\Presets\Presets' => [['01']],
		'Freshio\Utils\AssetVersioning' => [['02']],
		'Freshio\Localization\Translator' => [['translator']],
		'Nette\Localization\Translator' => [['translator']],
		'Freshio\Localization\SimpleTranslator' => [['translator']],
		'Freshio\Localization\Localization' => [['freshio.localization']],
		'Freshio\ILocalizedService' => [['freshio.mailing']],
		'Freshio\Mailing\Mailing' => [['freshio.mailing']],
		'FreshBangApp\Components\CookieAgreement\CookieAgreementControlFactory' => [['03']],
		'Nette\Routing\RouteList' => [['router']],
		'Nette\Routing\Router' => [['router']],
		'Countable' => [2 => ['router']],
		'IteratorAggregate' => [2 => ['router']],
		'Traversable' => [2 => ['router']],
		'Nette\Application\Routers\RouteList' => [['router']],
		'FreshBangApp\Presenters\BasePresenter' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4'],
		],
		'Nette\Application\UI\Presenter' => [2 => ['application.1', 'application.2', 'application.3', 'application.4']],
		'Nette\Application\UI\Control' => [2 => ['application.1', 'application.2', 'application.3', 'application.4']],
		'Nette\Application\UI\Component' => [2 => ['application.1', 'application.2', 'application.3', 'application.4']],
		'Nette\ComponentModel\Container' => [2 => ['application.1', 'application.2', 'application.3', 'application.4']],
		'Nette\ComponentModel\Component' => [2 => ['application.1', 'application.2', 'application.3', 'application.4']],
		'Nette\ComponentModel\IComponent' => [2 => ['application.1', 'application.2', 'application.3', 'application.4']],
		'Nette\ComponentModel\IContainer' => [2 => ['application.1', 'application.2', 'application.3', 'application.4']],
		'Nette\Application\UI\SignalReceiver' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4'],
		],
		'Nette\Application\UI\StatePersistent' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4'],
		],
		'Nette\Application\UI\Renderable' => [2 => ['application.1', 'application.2', 'application.3', 'application.4']],
		'Nette\Application\IPresenter' => [
			2 => ['application.1', 'application.2', 'application.3', 'application.4', 'application.5', 'application.6'],
		],
		'FreshBangApp\Presenters\ErrorPresenter' => [2 => ['application.1']],
		'FreshBangApp\Presenters\StyleguidePresenter' => [2 => ['application.2']],
		'FreshBangApp\Presenters\HomepagePresenter' => [2 => ['application.3']],
		'FreshBangApp\Presenters\Error4xxPresenter' => [2 => ['application.4']],
		'NetteModule\ErrorPresenter' => [2 => ['application.5']],
		'NetteModule\MicroPresenter' => [2 => ['application.6']],
		'Nette\Forms\FormFactory' => [['forms.factory']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
		$this->parameters += [];
	}


	public function createService01(): Freshio\Presets\Presets
	{
		return new Freshio\Presets\Presets([
			'contact' => ['mail' => 'www@freshnet.cz', 'phone' => '+420777111222333'],
			'analytics' => ['googleAnalytics' => ['cz' => 'cz-XXXXXXXX', 'sk' => 'sk-XXXXXXXX']],
		]);
	}


	public function createService02(): Freshio\Utils\AssetVersioning
	{
		return new Freshio\Utils\AssetVersioning('/Users/davidmalcat/Sites/www_dexport/www');
	}


	public function createService03(): FreshBangApp\Components\CookieAgreement\CookieAgreementControlFactory
	{
		return new class ($this) implements FreshBangApp\Components\CookieAgreement\CookieAgreementControlFactory {
			private $container;


			public function __construct(Container_62eb1f897c $container)
			{
				$this->container = $container;
			}


			public function create(): FreshBangApp\Components\CookieAgreement\CookieAgreementControl
			{
				return new FreshBangApp\Components\CookieAgreement\CookieAgreementControl(
					$this->container->getService('http.request'),
					$this->container->getService('http.response'),
					$this->container->getService('freshio.localization')
				);
			}
		};
	}


	public function createServiceApplication__1(): FreshBangApp\Presenters\ErrorPresenter
	{
		$service = new FreshBangApp\Presenters\ErrorPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->presets = $this->getService('01');
		$service->mailing = $this->getService('freshio.mailing');
		$service->logger = $this->getService('tracy.logger');
		$service->localization = $this->getService('freshio.localization');
		$service->assetVersioning = $this->getService('02');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__2(): FreshBangApp\Presenters\StyleguidePresenter
	{
		$service = new FreshBangApp\Presenters\StyleguidePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->presets = $this->getService('01');
		$service->mailing = $this->getService('freshio.mailing');
		$service->localization = $this->getService('freshio.localization');
		$service->assetVersioning = $this->getService('02');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__3(): FreshBangApp\Presenters\HomepagePresenter
	{
		$service = new FreshBangApp\Presenters\HomepagePresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->presets = $this->getService('01');
		$service->mailing = $this->getService('freshio.mailing');
		$service->localization = $this->getService('freshio.localization');
		$service->assetVersioning = $this->getService('02');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__4(): FreshBangApp\Presenters\Error4xxPresenter
	{
		$service = new FreshBangApp\Presenters\Error4xxPresenter;
		$service->injectPrimary(
			$this,
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response'),
			$this->getService('session.session'),
			$this->getService('security.user'),
			$this->getService('latte.templateFactory')
		);
		$service->presets = $this->getService('01');
		$service->mailing = $this->getService('freshio.mailing');
		$service->logger = $this->getService('tracy.logger');
		$service->localization = $this->getService('freshio.localization');
		$service->assetVersioning = $this->getService('02');
		$service->invalidLinkMode = 5;
		return $service;
	}


	public function createServiceApplication__5(): NetteModule\ErrorPresenter
	{
		return new NetteModule\ErrorPresenter($this->getService('tracy.logger'));
	}


	public function createServiceApplication__6(): NetteModule\MicroPresenter
	{
		return new NetteModule\MicroPresenter($this, $this->getService('http.request'), $this->getService('router'));
	}


	public function createServiceApplication__application(): Nette\Application\Application
	{
		$service = new Nette\Application\Application(
			$this->getService('application.presenterFactory'),
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('http.response')
		);
		$service->catchExceptions = null;
		$service->errorPresenter = 'Error';
		Nette\Bridges\ApplicationDI\ApplicationExtension::initializeBlueScreenPanel(
			$this->getService('tracy.blueScreen'),
			$service
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\ApplicationTracy\RoutingPanel(
			$this->getService('router'),
			$this->getService('http.request'),
			$this->getService('application.presenterFactory')
		));
		return $service;
	}


	public function createServiceApplication__linkGenerator(): Nette\Application\LinkGenerator
	{
		return new Nette\Application\LinkGenerator(
			$this->getService('router'),
			$this->getService('http.request')->getUrl()->withoutUserInfo(),
			$this->getService('application.presenterFactory')
		);
	}


	public function createServiceApplication__presenterFactory(): Nette\Application\IPresenterFactory
	{
		$service = new Nette\Application\PresenterFactory(new Nette\Bridges\ApplicationDI\PresenterFactoryCallback(
			$this,
			5,
			'/Users/davidmalcat/Sites/www_dexport/app/../temp/cache/nette.application/touch'
		));
		$service->setMapping(['*' => 'FreshBangApp\*Module\Presenters\*Presenter']);
		return $service;
	}


	public function createServiceCache__journal(): Nette\Caching\Storages\Journal
	{
		return new Nette\Caching\Storages\SQLiteJournal('/Users/davidmalcat/Sites/www_dexport/app/../temp/cache/journal.s3db');
	}


	public function createServiceCache__storage(): Nette\Caching\Storage
	{
		return new Nette\Caching\Storages\FileStorage(
			'/Users/davidmalcat/Sites/www_dexport/app/../temp/cache',
			$this->getService('cache.journal')
		);
	}


	public function createServiceContainer(): Container_62eb1f897c
	{
		return $this;
	}


	public function createServiceDatabase__default__connection(): Nette\Database\Connection
	{
		$service = new Nette\Database\Connection(
			'mysql:host=bonifac.studiofresh.intra.;dbname=freshbangapp',
			'sfn',
			'studiofreshnet',
			['lazy' => true]
		);
		Nette\Database\Helpers::initializeTracy(
			$service,
			true,
			'default',
			true,
			$this->getService('tracy.bar'),
			$this->getService('tracy.blueScreen')
		);
		return $service;
	}


	public function createServiceDatabase__default__context(): Nette\Database\Explorer
	{
		return new Nette\Database\Explorer(
			$this->getService('database.default.connection'),
			$this->getService('database.default.structure'),
			$this->getService('database.default.conventions'),
			$this->getService('cache.storage')
		);
	}


	public function createServiceDatabase__default__conventions(): Nette\Database\Conventions\DiscoveredConventions
	{
		return new Nette\Database\Conventions\DiscoveredConventions($this->getService('database.default.structure'));
	}


	public function createServiceDatabase__default__structure(): Nette\Database\Structure
	{
		return new Nette\Database\Structure($this->getService('database.default.connection'), $this->getService('cache.storage'));
	}


	public function createServiceForms__factory(): Nette\Forms\FormFactory
	{
		return new Nette\Forms\FormFactory($this->getService('http.request'));
	}


	public function createServiceFreshio__localization(): Freshio\Localization\Localization
	{
		$service = new Freshio\Localization\Localization(['cs', 'sk'], ['cz', 'sk']);
		$service->setTranslator($this->getService('translator'));
		return $service;
	}


	public function createServiceFreshio__mailing(): Freshio\Mailing\Mailing
	{
		$service = new Freshio\Mailing\Mailing(
			$this->getService('01'),
			$this->getService('mail.mailer'),
			$this->getService('application.linkGenerator'),
			$this->getService('application.application'),
			$this->getService('tracy.logger'),
			$this->getService('freshio.localization')
		);
		$service->setImageBasePath('/Users/davidmalcat/Sites/www_dexport/app/../www/assets/images');
		$service->setSender('MAIL SENDER <www@freshnet.cz>');
		$service->create(
			'contact',
			'Nový kontakt z webu',
			[['www@freshnet.cz']],
			'/Users/davidmalcat/Sites/www_dexport/app/Presenters/templates/emails/contact.latte'
		);
		return $service;
	}


	public function createServiceHttp__request(): Nette\Http\Request
	{
		return $this->getService('http.requestFactory')->fromGlobals();
	}


	public function createServiceHttp__requestFactory(): Nette\Http\RequestFactory
	{
		$service = new Nette\Http\RequestFactory;
		$service->setProxy([]);
		return $service;
	}


	public function createServiceHttp__response(): Nette\Http\Response
	{
		$service = new Nette\Http\Response;
		$service->cookieSecure = $this->getService('http.request')->isSecured();
		return $service;
	}


	public function createServiceLatte__latteFactory(): Nette\Bridges\ApplicationLatte\LatteFactory
	{
		return new class ($this) implements Nette\Bridges\ApplicationLatte\LatteFactory {
			private $container;


			public function __construct(Container_62eb1f897c $container)
			{
				$this->container = $container;
			}


			public function create(): Latte\Engine
			{
				$service = new Latte\Engine;
				$service->setTempDirectory('/Users/davidmalcat/Sites/www_dexport/app/../temp/cache/latte');
				$service->setAutoRefresh();
				$service->setContentType('html');
				Nette\Utils\Html::$xhtml = false;
				return $service;
			}
		};
	}


	public function createServiceLatte__templateFactory(): Nette\Application\UI\TemplateFactory
	{
		$service = new Nette\Bridges\ApplicationLatte\TemplateFactory(
			$this->getService('latte.latteFactory'),
			$this->getService('http.request'),
			$this->getService('security.user'),
			$this->getService('cache.storage')
		);
		Nette\Bridges\ApplicationDI\LatteExtension::initLattePanel($service, $this->getService('tracy.bar'));
		return $service;
	}


	public function createServiceMail__mailer(): Nette\Mail\Mailer
	{
		return new Nette\Mail\SendmailMailer;
	}


	public function createServiceRouter(): Nette\Application\Routers\RouteList
	{
		return FreshBangApp\Router\RouterFactory::createRouter($this->getService('http.request'));
	}


	public function createServiceSecurity__legacyUserStorage(): Nette\Security\IUserStorage
	{
		return new Nette\Http\UserStorage($this->getService('session.session'));
	}


	public function createServiceSecurity__passwords(): Nette\Security\Passwords
	{
		return new Nette\Security\Passwords;
	}


	public function createServiceSecurity__user(): Nette\Security\User
	{
		$service = new Nette\Security\User(
			$this->getService('security.legacyUserStorage'),
			null,
			null,
			$this->getService('security.userStorage')
		);
		$this->getService('tracy.bar')->addPanel(new Nette\Bridges\SecurityTracy\UserPanel($service));
		return $service;
	}


	public function createServiceSecurity__userStorage(): Nette\Security\UserStorage
	{
		return new Nette\Bridges\SecurityHttp\SessionStorage($this->getService('session.session'));
	}


	public function createServiceSession__session(): Nette\Http\Session
	{
		$service = new Nette\Http\Session($this->getService('http.request'), $this->getService('http.response'));
		$service->setExpiration('2 months');
		$service->setOptions([
			'cookiePath' => $this->getService('httpRequest')->getUrl()->getBasePath(),
			'cookieSamesite' => 'Lax',
		]);
		return $service;
	}


	public function createServiceTracy__bar(): Tracy\Bar
	{
		return Tracy\Debugger::getBar();
	}


	public function createServiceTracy__blueScreen(): Tracy\BlueScreen
	{
		return Tracy\Debugger::getBlueScreen();
	}


	public function createServiceTracy__logger(): Tracy\ILogger
	{
		return Tracy\Debugger::getLogger();
	}


	public function createServiceTranslator(): Freshio\Localization\SimpleTranslator
	{
		$service = new Freshio\Localization\SimpleTranslator;
		$service->addTranslations('/Users/davidmalcat/Sites/www_dexport/app/locales/translations.neon');
		return $service;
	}


	public function initialize()
	{
		// di.
		(function () {
			$this->getService('tracy.bar')->addPanel(new Nette\Bridges\DITracy\ContainerPanel($this));
		})();
		// http.
		(function () {
			$response = $this->getService('http.response');
			$response->setHeader('X-Powered-By', 'Nette Framework 3');
			$response->setHeader('Content-Type', 'text/html; charset=utf-8');
			$response->setHeader('X-Frame-Options', 'SAMEORIGIN');
			Nette\Http\Helpers::initCookie($this->getService('http.request'), $response);
		})();
		// session.
		(function () {
			$this->getService('session.session')->exists() && $this->getService('session.session')->start();
		})();
		// tracy.
		(function () {
			if (!Tracy\Debugger::isEnabled()) { return; }
			Tracy\Debugger::getLogger()->mailer = [new Tracy\Bridges\Nette\MailSender($this->getService('mail.mailer')), 'send'];
			$this->getService('session.session')->start();
			Tracy\Debugger::dispatch();
		})();
	}
}
