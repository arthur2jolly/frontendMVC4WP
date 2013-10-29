<?php

namespace front4wp\BaseBundle\Twig;

class front4wpExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'nl2p' => new \Twig_Filter_Method( $this, 'twig_nl2p_filter'),
        );
    }

    public function twig_nl2p_filter($value)
    {
        $paragraphs = '';
        foreach (explode("\n", $value) as $line) {
            if(trim($line)) {
                $paragraphs .= '<p>' . $line . '</p>';
            }
        }
        return $paragraphs;
    }

    public function getName()
    {
        return 'front4wp_extension';
    }
}
