<?php

namespace ContainerK8Vx2PJ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderef5ba = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer634fb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties07a65 = [
        
    ];

    public function getConnection()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getConnection', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getMetadataFactory', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getExpressionBuilder', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'beginTransaction', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getCache', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getCache();
    }

    public function transactional($func)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'transactional', array('func' => $func), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->transactional($func);
    }

    public function commit()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'commit', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->commit();
    }

    public function rollback()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'rollback', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getClassMetadata', array('className' => $className), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'createQuery', array('dql' => $dql), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'createNamedQuery', array('name' => $name), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'createQueryBuilder', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'flush', array('entity' => $entity), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'clear', array('entityName' => $entityName), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->clear($entityName);
    }

    public function close()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'close', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->close();
    }

    public function persist($entity)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'persist', array('entity' => $entity), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'remove', array('entity' => $entity), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'refresh', array('entity' => $entity), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'detach', array('entity' => $entity), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'merge', array('entity' => $entity), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getRepository', array('entityName' => $entityName), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'contains', array('entity' => $entity), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getEventManager', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getConfiguration', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'isOpen', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getUnitOfWork', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getProxyFactory', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'initializeObject', array('obj' => $obj), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'getFilters', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'isFiltersStateClean', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'hasFilters', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return $this->valueHolderef5ba->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer634fb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderef5ba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderef5ba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderef5ba->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, '__get', ['name' => $name], $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        if (isset(self::$publicProperties07a65[$name])) {
            return $this->valueHolderef5ba->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef5ba;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderef5ba;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef5ba;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderef5ba;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, '__isset', array('name' => $name), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef5ba;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderef5ba;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, '__unset', array('name' => $name), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderef5ba;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderef5ba;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, '__clone', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        $this->valueHolderef5ba = clone $this->valueHolderef5ba;
    }

    public function __sleep()
    {
        $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, '__sleep', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;

        return array('valueHolderef5ba');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer634fb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer634fb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer634fb && ($this->initializer634fb->__invoke($valueHolderef5ba, $this, 'initializeProxy', array(), $this->initializer634fb) || 1) && $this->valueHolderef5ba = $valueHolderef5ba;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderef5ba;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderef5ba;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
