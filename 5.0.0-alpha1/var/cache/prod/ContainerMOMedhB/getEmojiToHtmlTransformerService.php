<?php

namespace ContainerMOMedhB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmojiToHtmlTransformerService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CoreBundle\Form\DataTransformer\EmojiToHtmlTransformer' shared autowired service.
     *
     * @return \Mautic\CoreBundle\Form\DataTransformer\EmojiToHtmlTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CoreBundle\\Form\\DataTransformer\\EmojiToHtmlTransformer'] = new \Mautic\CoreBundle\Form\DataTransformer\EmojiToHtmlTransformer();
    }
}
