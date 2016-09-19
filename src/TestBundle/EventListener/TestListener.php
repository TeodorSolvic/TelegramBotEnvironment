<?php

namespace TestBundle\EventListener;

use Symfony\Component\VarDumper\VarDumper;
use TheRoom\TelegramBotBundle\Event\WebHookRequestCreatedEvent;

/**
 * Class TestListener
 */
class TestListener
{
    public function testMethod(WebHookRequestCreatedEvent $event)
    {
        VarDumper::dump($event);
    }
}
