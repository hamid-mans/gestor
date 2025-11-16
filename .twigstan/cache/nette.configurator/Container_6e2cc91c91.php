<?php
// source: /Users/hamid/Documents/Lab/gestor/vendor/twigstan/twigstan/config/application.neon
// source: array

/** @noinspection PhpParamsInspection,PhpMethodMayBeStaticInspection */

declare(strict_types=1);

class Container_6e2cc91c91 extends Nette\DI\Container
{
	protected array $aliases = [];

	protected array $wiring = [
		'Nette\DI\Container' => [['container']],
		'Twig\Environment' => [['01']],
		'Symfony\Component\Filesystem\Filesystem' => [['02']],
		'Symfony\Component\Console\Command\Command' => [['03']],
		'Symfony\Component\Console\Command\SignalableCommandInterface' => [['03']],
		'TwigStan\Application\AnalyzeCommand' => [['03']],
		'TwigStan\Application\PHPStanRunner' => [['04']],
		'PhpParser\PrettyPrinter\Standard' => [['05']],
		'PhpParser\PrettyPrinterAbstract' => [['05']],
		'PhpParser\PrettyPrinter' => [['05']],
		'TwigStan\PHP\PrettyPrinter' => [['05']],
		'TwigStan\PHP\StrictPhpParser' => [['06']],
		'TwigStan\PHPStan\Analysis\AnalysisResultFromJsonReader' => [['07']],
		'TwigStan\Error\ErrorCollapser' => [['08']],
		'TwigStan\Error\ErrorFilter' => [['09']],
		'TwigStan\Error\BaselineErrorFilter' => [['010']],
		'TwigStan\Error\ErrorToSourceFileMapper' => [['011']],
		'TwigStan\Error\ErrorTransformer' => [['012']],
		'Twig\Compiler' => [['013']],
		'TwigStan\Processing\Compilation\ModifiedCompiler' => [['013']],
		'TwigStan\Processing\Compilation\Parser\TwigNodeParser' => [['014']],
		'TwigStan\Processing\Compilation\TwigCompiler' => [['015']],
		'Twig\NodeVisitor\NodeVisitorInterface' => [['016', '017', '018', '019', '020']],
		'TwigStan\Processing\Compilation\TwigVisitor\DisableGetAttributeOptimizationVisitor' => [['016']],
		'TwigStan\Processing\Compilation\TwigVisitor\RemoveProfilingNodeVisitor' => [['017']],
		'TwigStan\Processing\Compilation\TwigVisitor\ReplaceIncludeNodeNodeVisitor' => [['018']],
		'TwigStan\Processing\Compilation\TwigVisitor\MarkNameExpressionAsAlwaysDefinedVisitor' => [['019']],
		'TwigStan\Processing\Compilation\TwigVisitor\ReplaceTypesNodeVisitor' => [['020']],
		'TwigStan\Processing\Flattening\TwigFlattener' => [['021']],
		'TwigStan\Processing\ScopeInjection\TwigScopeInjector' => [['022']],
		'TwigStan\Processing\ScopeInjection\ArrayShapeMerger' => [['023']],
		'TwigStan\Twig\DependencyFinder' => [['024']],
		'TwigStan\Twig\DependencySorter' => [['025']],
		'TwigStan\Twig\Metadata\MetadataAnalyzer' => [['026']],
		'TwigStan\Twig\Metadata\MetadataRegistry' => [['027']],
		'TwigStan\Twig\Node\NodeFinder' => [['028']],
		'Twig\TokenParser\AbstractTokenParser' => [['029', '030', '031', '032']],
		'Twig\TokenParser\TokenParserInterface' => [['029', '030', '031', '032']],
		'TwigStan\Twig\TokenParser\AssertTypeTokenParser' => [['029']],
		'TwigStan\Twig\TokenParser\AssertVariableExistsTokenParser' => [['030']],
		'TwigStan\Twig\TokenParser\PrintAssertTypeTokenParser' => [['031']],
		'TwigStan\Twig\TokenParser\DumpTypeTokenParser' => [['032']],
		'TwigStan\Twig\TwigFactory' => [['033']],
		'TwigStan\Twig\TwigFileCanonicalizer' => [['034']],
		'TwigStan\Processing\TemplateContextFactory' => [['035']],
		'TwigStan\Processing\TemplateContextToArrayShape' => [['036']],
		'PHPStan\PhpDocParser\Lexer\Lexer' => [['037']],
		'PHPStan\PhpDocParser\Parser\ConstExprParser' => [['038']],
		'PHPStan\PhpDocParser\Parser\TypeParser' => [['039']],
		'PHPStan\PhpDocParser\Parser\PhpDocParser' => [['040']],
		'PHPStan\PhpDocParser\ParserConfig' => [['041']],
	];


	public function __construct(array $params = [])
	{
		parent::__construct($params);
	}


	public function createService01(): Twig\Environment
	{
		return $this->getService('033')->create();
	}


	public function createService02(): Symfony\Component\Filesystem\Filesystem
	{
		return new Symfony\Component\Filesystem\Filesystem;
	}


	public function createService03(): TwigStan\Application\AnalyzeCommand
	{
		return new TwigStan\Application\AnalyzeCommand(
			$this->getService('015'),
			$this->getService('021'),
			$this->getService('022'),
			$this->getService('024'),
			$this->getService('025'),
			$this->getService('04'),
			$this->getService('02'),
			new TwigStan\Finder\FilesFinder(
			['php'],
			['/Users/hamid/Documents/Lab/gestor/src'],
			[],
			'/Users/hamid/Documents/Lab/gestor',
		),
			new TwigStan\Finder\FilesFinder(
			['twig'],
			['/Users/hamid/Documents/Lab/gestor/templates'],
			[],
			'/Users/hamid/Documents/Lab/gestor',
		),
			new TwigStan\Finder\GivenFilesFinder('/Users/hamid/Documents/Lab/gestor', ['php'], ['twig']),
			$this->getService('09'),
			$this->getService('010'),
			$this->getService('08'),
			$this->getService('012'),
			$this->getService('011'),
			$this->getService('035'),
			$this->getService('027'),
			'/Users/hamid/Documents/Lab/gestor/twig-loader.php',
			'/Users/hamid/Documents/Lab/gestor/.twigstan',
			'/Users/hamid/Documents/Lab/gestor',
			'/Users/hamid/Documents/Lab/gestor/twigstan.php',
			null,
			false,
			['php'],
			['twig'],
			null,
		);
	}


	public function createService04(): TwigStan\Application\PHPStanRunner
	{
		return new TwigStan\Application\PHPStanRunner(
			$this->getService('02'),
			$this->getService('07'),
			'/Users/hamid/Documents/Lab/gestor/vendor/bin/phpstan',
			'/Users/hamid/Documents/Lab/gestor/phpstan.neon',
			false,
			'/Users/hamid/Documents/Lab/gestor',
			'/Users/hamid/Documents/Lab/gestor/.twigstan',
			[],
		);
	}


	public function createService05(): TwigStan\PHP\PrettyPrinter
	{
		return new TwigStan\PHP\PrettyPrinter;
	}


	public function createService06(): TwigStan\PHP\StrictPhpParser
	{
		return new TwigStan\PHP\StrictPhpParser($this->getService('02'));
	}


	public function createService07(): TwigStan\PHPStan\Analysis\AnalysisResultFromJsonReader
	{
		return new TwigStan\PHPStan\Analysis\AnalysisResultFromJsonReader($this->getService('02'));
	}


	public function createService08(): TwigStan\Error\ErrorCollapser
	{
		return new TwigStan\Error\ErrorCollapser;
	}


	public function createService09(): TwigStan\Error\ErrorFilter
	{
		return new TwigStan\Error\ErrorFilter([]);
	}


	public function createService010(): TwigStan\Error\BaselineErrorFilter
	{
		return new TwigStan\Error\BaselineErrorFilter([], true);
	}


	public function createService011(): TwigStan\Error\ErrorToSourceFileMapper
	{
		return new TwigStan\Error\ErrorToSourceFileMapper;
	}


	public function createService012(): TwigStan\Error\ErrorTransformer
	{
		return new TwigStan\Error\ErrorTransformer;
	}


	public function createService013(): TwigStan\Processing\Compilation\ModifiedCompiler
	{
		return new TwigStan\Processing\Compilation\ModifiedCompiler($this->getService('01'));
	}


	public function createService014(): TwigStan\Processing\Compilation\Parser\TwigNodeParser
	{
		return new TwigStan\Processing\Compilation\Parser\TwigNodeParser($this->getService('01'), $this->getService('034'));
	}


	public function createService015(): TwigStan\Processing\Compilation\TwigCompiler
	{
		return new TwigStan\Processing\Compilation\TwigCompiler(
			$this->getService('014'),
			$this->getService('05'),
			$this->getService('02'),
			$this->getService('013'),
			$this->getService('06'),
			$this->getService('036'),
		);
	}


	public function createService016(
	): TwigStan\Processing\Compilation\TwigVisitor\DisableGetAttributeOptimizationVisitor
	{
		return new TwigStan\Processing\Compilation\TwigVisitor\DisableGetAttributeOptimizationVisitor;
	}


	public function createService017(): TwigStan\Processing\Compilation\TwigVisitor\RemoveProfilingNodeVisitor
	{
		return new TwigStan\Processing\Compilation\TwigVisitor\RemoveProfilingNodeVisitor;
	}


	public function createService018(): TwigStan\Processing\Compilation\TwigVisitor\ReplaceIncludeNodeNodeVisitor
	{
		return new TwigStan\Processing\Compilation\TwigVisitor\ReplaceIncludeNodeNodeVisitor;
	}


	public function createService019(
	): TwigStan\Processing\Compilation\TwigVisitor\MarkNameExpressionAsAlwaysDefinedVisitor
	{
		return new TwigStan\Processing\Compilation\TwigVisitor\MarkNameExpressionAsAlwaysDefinedVisitor;
	}


	public function createService020(): TwigStan\Processing\Compilation\TwigVisitor\ReplaceTypesNodeVisitor
	{
		return new TwigStan\Processing\Compilation\TwigVisitor\ReplaceTypesNodeVisitor;
	}


	public function createService021(): TwigStan\Processing\Flattening\TwigFlattener
	{
		return new TwigStan\Processing\Flattening\TwigFlattener(
			$this->getService('05'),
			$this->getService('02'),
			$this->getService('027'),
			$this->getService('06'),
		);
	}


	public function createService022(): TwigStan\Processing\ScopeInjection\TwigScopeInjector
	{
		return new TwigStan\Processing\ScopeInjection\TwigScopeInjector(
			$this->getService('05'),
			$this->getService('02'),
			$this->getService('06'),
			$this->getService('023'),
			$this->getService('040'),
			$this->getService('037'),
		);
	}


	public function createService023(): TwigStan\Processing\ScopeInjection\ArrayShapeMerger
	{
		return new TwigStan\Processing\ScopeInjection\ArrayShapeMerger;
	}


	public function createService024(): TwigStan\Twig\DependencyFinder
	{
		return new TwigStan\Twig\DependencyFinder($this->getService('027'));
	}


	public function createService025(): TwigStan\Twig\DependencySorter
	{
		return new TwigStan\Twig\DependencySorter($this->getService('027'));
	}


	public function createService026(): TwigStan\Twig\Metadata\MetadataAnalyzer
	{
		return new TwigStan\Twig\Metadata\MetadataAnalyzer(
			$this->getService('01'),
			$this->getService('014'),
			$this->getService('028'),
			$this->getService('034'),
		);
	}


	public function createService027(): TwigStan\Twig\Metadata\MetadataRegistry
	{
		return new TwigStan\Twig\Metadata\MetadataRegistry($this->getService('026'));
	}


	public function createService028(): TwigStan\Twig\Node\NodeFinder
	{
		return new TwigStan\Twig\Node\NodeFinder;
	}


	public function createService029(): TwigStan\Twig\TokenParser\AssertTypeTokenParser
	{
		return new TwigStan\Twig\TokenParser\AssertTypeTokenParser;
	}


	public function createService030(): TwigStan\Twig\TokenParser\AssertVariableExistsTokenParser
	{
		return new TwigStan\Twig\TokenParser\AssertVariableExistsTokenParser;
	}


	public function createService031(): TwigStan\Twig\TokenParser\PrintAssertTypeTokenParser
	{
		return new TwigStan\Twig\TokenParser\PrintAssertTypeTokenParser;
	}


	public function createService032(): TwigStan\Twig\TokenParser\DumpTypeTokenParser
	{
		return new TwigStan\Twig\TokenParser\DumpTypeTokenParser;
	}


	public function createService033(): TwigStan\Twig\TwigFactory
	{
		return new TwigStan\Twig\TwigFactory(
			[
			$this->getService('029'),
			$this->getService('030'),
			$this->getService('031'),
			$this->getService('032'),
		],
			[
			$this->getService('016'),
			$this->getService('017'),
			$this->getService('018'),
			$this->getService('019'),
			$this->getService('020'),
		],
			'/Users/hamid/Documents/Lab/gestor/twig-loader.php',
		);
	}


	public function createService034(): TwigStan\Twig\TwigFileCanonicalizer
	{
		return new TwigStan\Twig\TwigFileCanonicalizer($this->getService('01'));
	}


	public function createService035(): TwigStan\Processing\TemplateContextFactory
	{
		return new TwigStan\Processing\TemplateContextFactory($this->getService('034'));
	}


	public function createService036(): TwigStan\Processing\TemplateContextToArrayShape
	{
		return new TwigStan\Processing\TemplateContextToArrayShape(
			$this->getService('023'),
			$this->getService('040'),
			$this->getService('037'),
		);
	}


	public function createService037(): PHPStan\PhpDocParser\Lexer\Lexer
	{
		return new PHPStan\PhpDocParser\Lexer\Lexer($this->getService('041'));
	}


	public function createService038(): PHPStan\PhpDocParser\Parser\ConstExprParser
	{
		return new PHPStan\PhpDocParser\Parser\ConstExprParser($this->getService('041'));
	}


	public function createService039(): PHPStan\PhpDocParser\Parser\TypeParser
	{
		return new PHPStan\PhpDocParser\Parser\TypeParser($this->getService('041'), $this->getService('038'));
	}


	public function createService040(): PHPStan\PhpDocParser\Parser\PhpDocParser
	{
		return new PHPStan\PhpDocParser\Parser\PhpDocParser(
			$this->getService('041'),
			$this->getService('039'),
			$this->getService('038'),
		);
	}


	public function createService041(): PHPStan\PhpDocParser\ParserConfig
	{
		return new PHPStan\PhpDocParser\ParserConfig(['lines' => true, 'indexes' => true]);
	}


	public function createServiceContainer(): Nette\DI\Container
	{
		return $this;
	}


	public function initialize(): void
	{
	}


	protected function getStaticParameters(): array
	{
		return [
			'phpDocParserConfig' => ['lines' => true, 'indexes' => true],
			'appDir' => '/Users/hamid/Documents/Lab/gestor/vendor/twigstan/twigstan/src/DependencyInjection',
			'wwwDir' => '/Users/hamid/Documents/Lab/gestor/vendor/bin',
			'vendorDir' => '/Users/hamid/Documents/Lab/gestor/vendor',
			'rootDir' => '/Users/hamid/Documents/Lab/gestor/vendor/twigstan/twigstan',
			'debugMode' => true,
			'productionMode' => true,
			'consoleMode' => true,
			'tempDir' => '/Users/hamid/Documents/Lab/gestor/.twigstan',
			'currentWorkingDirectory' => '/Users/hamid/Documents/Lab/gestor',
			'configurationFile' => '/Users/hamid/Documents/Lab/gestor/twigstan.php',
			'tempDirectory' => '/Users/hamid/Documents/Lab/gestor/.twigstan',
			'baselineFile' => null,
			'reportUnmatchedIgnoredErrors' => true,
			'onlyAnalyzeTemplatesWithContext' => false,
			'phpstanBinPath' => '/Users/hamid/Documents/Lab/gestor/vendor/bin/phpstan',
			'phpstanConfigurationFile' => '/Users/hamid/Documents/Lab/gestor/phpstan.neon',
			'phpstanMemoryLimit' => false,
			'twigEnvironmentLoader' => '/Users/hamid/Documents/Lab/gestor/twig-loader.php',
			'twigPaths' => ['/Users/hamid/Documents/Lab/gestor/templates'],
			'twigExcludes' => [],
			'twigExtensions' => ['twig'],
			'phpPaths' => ['/Users/hamid/Documents/Lab/gestor/src'],
			'phpExcludes' => [],
			'phpExtensions' => ['php'],
			'twigContextCollectors' => [],
			'editorUrl' => null,
			'baselineErrors' => [],
			'ignoreErrors' => [],
		];
	}


	protected function getDynamicParameter(string|int $key): mixed
	{
		return match($key) {
			'env' => null,
			'baseUrl' => null,
			default => parent::getDynamicParameter($key),
		};
	}


	public function getParameters(): array
	{
		array_map($this->getParameter(...), ['env', 'baseUrl']);
		return parent::getParameters();
	}
}
