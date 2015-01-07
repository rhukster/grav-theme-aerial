<?php namespace Grav\Theme;

use Grav\Common\Theme;

class Aerial extends Theme
{
  public static function getSubscribedEvents()
  {
    return [
      'onThemeInitialized' => ['onThemeInitialized', 0]
    ];
  }

  public function onThemeInitialized()
  {
    $this->enable([
      'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
    ]);
  }

  public function onTwigSiteVariables()
  {
    $this->grav['twig']->twig_vars['theme_config'] = $this->grav['config']->get('themes.aerial');
    $this->grav['twig']->twig_vars['base_url'] = $this->grav['page']->find($this->grav['config']->get('system.home.alias'))->url(true);
  }
}
