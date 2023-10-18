<?php
	namespace Hartmann\ContaoMyHelloWorldBundle\ContaoManager;

	use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
	use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
	use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
	use Contao\CoreBundle\ContaoCoreBundle;
	use Hartmann\ContaoMyHelloWorldBundle\ContaoMyHelloWorldBundle;

	class Plugin implements BundlePluginInterface
	{
	    public function getBundles(ParserInterface $parser): array
	    {
	        return [
	            BundleConfig::create(ContaoMyHelloWorldBundle::class)
	                ->setLoadAfter([ContaoCoreBundle::class]),
	        ];
	    }
	}
?>