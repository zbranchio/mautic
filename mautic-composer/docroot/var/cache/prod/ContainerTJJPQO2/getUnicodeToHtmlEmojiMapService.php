<?php

namespace ContainerTJJPQO2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnicodeToHtmlEmojiMapService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Helper\EmojiMap\UnicodeToHtmlEmojiMap' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Helper\EmojiMap\UnicodeToHtmlEmojiMap
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Helper\\EmojiMap\\UnicodeToHtmlEmojiMap'] = new \Mautic\CoreBundle\Helper\EmojiMap\UnicodeToHtmlEmojiMap();
    }
}
