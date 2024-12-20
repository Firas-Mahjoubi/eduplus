<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class DemandeRessource extends \App\Entity\DemandeRessource implements \Doctrine\ORM\Proxy\InternalProxy
{
     use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'dateDemande' => [parent::class, 'dateDemande', null],
        "\0".parent::class."\0".'event' => [parent::class, 'event', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'quantite' => [parent::class, 'quantite', null],
        "\0".parent::class."\0".'ressource' => [parent::class, 'ressource', null],
        "\0".parent::class."\0".'statutDemande' => [parent::class, 'statutDemande', null],
        'dateDemande' => [parent::class, 'dateDemande', null],
        'event' => [parent::class, 'event', null],
        'id' => [parent::class, 'id', null],
        'quantite' => [parent::class, 'quantite', null],
        'ressource' => [parent::class, 'ressource', null],
        'statutDemande' => [parent::class, 'statutDemande', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
